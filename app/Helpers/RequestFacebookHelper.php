<?php

namespace App\Helpers;

class RequestFacebookHelper
{
    public static function checkCookieLogin($username, $ch = false, $userAgent = false, $proxy = false)
    {
        $url = 'https://m.facebook.com/typeahead/search/facebar/query/?context=facebar&grammar_version=bee09f93fa732cfa59a1cb6d9f450d3892424e49&viewer=123&rsp=search&max_results=1&q=a&session_id=0.1448489562749713&fb_dtsg_ag=AQxjK-gScQsYbndVToHu3AFQjBGIU_pboPplTZMgLPeAigD5%3AAQyVJb92CUOGnYlynByUk__l7-VLupVFkaJDlYxESp6fgRy-&jazoest=28517&__dyn=1KQEGhpodUoxu4U4ifDg9ppkdxu6AUmz8C2K2i5UfXwNwTwKwSwMxWUW16wZxm6Uhx6485-cwcW4olwYw9a260gq1gCwSxu0BU3JxO1TBxObwro7ifw5lxyeKdwGgae1AwgE5y6E52229wcq0C9EdE2IzUuw9O1Aw9-2i1qw8W1uwa-10w4cwp8Gdw&__csr=&__req=z&__a=AYmJyj3_mcPxnHYmUiWlLpADFda616Wl9-lyMZxNIL7BeHQIwBJJWfwJtodsAZqYeQavMGWLLmdb6Dlhy35sqaFBALlsBysp53npERymHA4d9Q&__user=123';
        $ch = $ch ? $ch : curl_init();
        $html = self::visit($url, $username, $ch);
        if (RequestHelper::isSuccess($ch) && $html) {
            if (strpos($html, 'error":1357032') !== false) {
                return true;
            }
        }
        return false;
    }

    public static function checkLoginStatus($username, $password = '', &$ch = false, &$html = false, &$cookies = [], $userAgent = false, $proxy = false)
    {
        $url = 'https://m.facebook.com/login.php';
        $ch = $ch ? $ch : curl_init();
        Helper::removeCookieFBFilePath($username);
        curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($username).'&pass='.urlencode($password).'&login=Login');
        curl_setopt($ch, CURLOPT_POST, 1);
        $html = self::visit($url, $username, $ch, $html, $cookies, $userAgent, $proxy);
        if (RequestHelper::isSuccess($ch) && $html) {
            return self::getLoginStatus($html, $cookies);
        }
        return Helper::$LOGIN_WRONG_PASSWD;
    }

    public static function visit($url, $username, &$ch = false, &$html = false, &$cookies = [], $userAgent = false, $proxy = false)
    {
        $cookiePath = Helper::getCookieFBFilePath($username);
        $ch = $ch ? $ch : curl_init();
        $userAgent = $userAgent ? $userAgent : 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
        $headers = array(
            'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'accept-encoding' => 'gzip, deflate, br',
            'accept-language' => 'vi',
            'dnt' => '1',
            'referer' => 'https://m.facebook.com/login.php?next=https%3A%2F%2Fm.facebook.com%2Fhome.php&refsrc=https%3A%2F%2Fm.facebook.com%2Fhome.php&_rdr',
            'sec-ch-ua' => '" Not A;Brand";v="99", "Chromium";v="90", "Google Chrome";v="90"',
            'sec-ch-ua-mobile' => '?1',
            'sec-fetch-dest' => 'document',
            'sec-fetch-mode' => 'navigate',
            'sec-fetch-site' => 'same-origin',
            'sec-fetch-user' => '?1',
            'upgrade-insecure-requests' => '1',
            'user-agent' => $userAgent,
        );
        if ($proxy) {
            $proxy_url = explode(':', $proxy)[0];
            $proxy_port = explode(':', $proxy)[1];
            curl_setopt($ch, CURLOPT_PROXY, $proxy_url);
            curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
            curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_TIMEOUT, 100);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//        if ($cookiePath) {
//            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiePath);
//        } else {
            $username = PhoneHelper::convert($username);
            $cookiePath = "cookies/fb/".urlencode($username).".txt";
            curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiePath);
//        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($ch, CURLOPT_REFERER, "https://m.facebook.com/home.php");
        $debuginfo = '';
        $html = RequestHelper::curlExec($ch,$url,$headers,$cookies,$debuginfo);
        if (RequestHelper::isSuccess($ch) && $html) {
            return $html;
        }
        return false;
    }

    public static function getLoginStatus($html, $cookies = [])
    {
        if ($cookies) {
            if (array_key_exists('c_user', $cookies)) {
                return Helper::$LOGIN_SUCCESS;
            }
        }
        if (strpos($html, 'recover/initiate/?ars=facebook_login_pw_error') !== false) {
            return Helper::$LOGIN_WRONG_PASSWD;
        } else if (strpos($html, 'id="approvals_code" name="approvals_code"') !== false) {
            return Helper::$LOGIN_NEED_2FA;
        } else if (strpos($html, 'id="checkpoint_subtitle"') !== false) {
            return Helper::$LOGIN_CHECKPOINT;
        } else if (strpos($html, 'i class="img profpic"') !== false) {
            return Helper::$LOGIN_SUCCESS;
        }
        return Helper::$LOGIN_WRONG_PASSWD;
    }
}
