<?php

namespace App\Helpers;

require_once('../lib/simple_html_dom.php');

class RequestHelper
{
    public static $DEFAULT_REDIRECT_URL = 'http://localhost';

    public static function getClientIP()
    {
        $ipaddress = '171.235.151.228';
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
        return $ipaddress;
    }

    public static function curlExec($ch, $url, &$returnHeaders = array(), &$returnCookies = array(), &$verboseDebugInfo = "")
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
        $html             = self::realExec($ch, $url);
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

    public static function realExec($ch, $url)
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

    public static function isSuccess($ch) {
        if ($ch) {
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            return $http_status === 200;
        }
        return false;
    }

    public static function redirect($domain = null) {
        if (!$domain) {
            $domain = self::$DEFAULT_REDIRECT_URL;
        }
        header("Location: ". $domain);
        return false;
    }
}
