<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;

class APITinSoftHelper
{
    public static $URL_CHECK_API_KEY = 'http://proxy.tinsoftsv.com/api/getKeyInfo.php?key={$api_key}';
    public static $URL_GET_CURRENT_PROXY = 'http://proxy.tinsoftsv.com/api/getProxy.php?key={$api_key}';
    public static $URL_CHANGE_PROXY = 'http://proxy.tinsoftsv.com/api/changeProxy.php?key={$api_key}&location={$location_id}';
    public static $URL_LOCATION_LIST = 'http://proxy.tinsoftsv.com/api/getLocations.php';

    public static $CACHE_MSG_ERR = 'tinsoft_msg_err_api_key_{$api_key}';
    public static $CACHE_TIME_LEFT_TO_EXPIRED = 'tinsoft_time_left_to_expired_api_key_{$api_key}';
    public static $CACHE_TIME_LEFT_TO_CHANGE = 'tinsoft_time_left_to_change_api_key_{$api_key}';
    public static $CACHE_TIME_LEFT_TO_TIMEOUT = 'tinsoft_time_left_to_timeout_api_key_{$api_key}';
    public static $CACHE_LOCATION_LIST = 'location_list_tinsoft';

    public static $MSG_ERR_DEFAULT = 'Cannot connect to tinsoft proxy via this api_key.';

    public static function getAPIKeyError($api_key)
    {
        $cache_tinsoft_msg_err = self::bindAPIKey(self::$CACHE_MSG_ERR, $api_key);
        $err = 'No error found.';
        if (Cache::has($cache_tinsoft_msg_err)) {
            $err = Cache::get($cache_tinsoft_msg_err);
        }
        return $err;
    }

    public static function checkAPIKey($api_key) {
        $cache_tinsoft_msg_err = self::bindAPIKey(self::$CACHE_MSG_ERR, $api_key);
        // check if proxy still available
        $cache_tinsoft_time_left_to_expired = self::bindAPIKey(self::$CACHE_TIME_LEFT_TO_EXPIRED, $api_key);
        if (Cache::has($cache_tinsoft_time_left_to_expired)) {
            return true;
        }
        // check key's state
        $url = self::bindAPIKey(self::$URL_CHECK_API_KEY, $api_key);
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
                Cache::put($cache_tinsoft_time_left_to_expired, $date_expired, $second_expired);
                return true;
            } else if(array_key_exists('success', $proxy) && $proxy->success == false) {
                Cache::put($cache_tinsoft_msg_err, $proxy->description, 60);
                return false;
            }
        }
        $msg_err_default = self::$MSG_ERR_DEFAULT;
        Cache::put($cache_tinsoft_msg_err, $msg_err_default, 60);
        return false;
    }

    public static function getNewProxy($api_key, $location_id) {
        $cache_tinsoft_msg_err = self::bindAPIKey(self::$CACHE_MSG_ERR, $api_key);
        // check if proxy still need some seconds to be able to change
        $cache_tinsoft_time_left_to_change = self::bindAPIKey(self::$CACHE_TIME_LEFT_TO_CHANGE, $api_key);
        if (Cache::has($cache_tinsoft_time_left_to_change)) {
            $time_exp = Cache::get($cache_tinsoft_time_left_to_change);
            $seconds_still = now()->diffInSeconds($time_exp);
            Cache::put($cache_tinsoft_msg_err, 'Still '.$seconds_still.'s before you able to change', $seconds_still);
            return false;
        }
        // check if proxy still available
        $cache_tinsoft_time_left_to_timeout = self::bindAPIKey(self::$CACHE_TIME_LEFT_TO_TIMEOUT, $api_key);
        if (!Cache::has($cache_tinsoft_time_left_to_timeout)) {
            Cache::put($cache_tinsoft_msg_err, 'Timeout', 60);
            return false;
        }
        // ready to get new proxy
        $url = self::bindAPIKey(self::$URL_CHANGE_PROXY, $api_key, ['location' => $location_id]);
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
                Cache::put($cache_tinsoft_time_left_to_change, now()->addSeconds($second_next_change), $second_next_change);
                Cache::put($cache_tinsoft_time_left_to_timeout, now()->addSeconds($second_time_out), $second_time_out);
                return $proxy->proxy;
            } else if(array_key_exists('success', $proxy) && $proxy->success == false) {
                Cache::put($cache_tinsoft_msg_err, $proxy->description, 60);
                return false;
            }
        }
        $msg_err_default = self::$MSG_ERR_DEFAULT;
        Cache::put($cache_tinsoft_msg_err, $msg_err_default, 60);
        return false;
    }

    public static function getCurrentProxy($api_key, $location_id) {
        $cache_tinsoft_msg_err = self::bindAPIKey(self::$CACHE_MSG_ERR, $api_key);
        $cache_tinsoft_time_left_to_change = self::bindAPIKey(self::$CACHE_TIME_LEFT_TO_CHANGE, $api_key);
        $cache_tinsoft_time_left_to_timeout = self::bindAPIKey(self::$CACHE_TIME_LEFT_TO_TIMEOUT, $api_key);
        $url = self::bindAPIKey(self::$URL_GET_CURRENT_PROXY, $api_key);
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
                Cache::put($cache_tinsoft_time_left_to_change, now()->addSeconds($second_next_change), $second_next_change);
                Cache::put($cache_tinsoft_time_left_to_timeout, now()->addSeconds($second_time_out), $second_time_out);
                return $proxy->proxy;
            } else if(array_key_exists('success', $proxy) && $proxy->success == false) {
                Cache::put($cache_tinsoft_msg_err, $proxy->description, 60);
                return false;
            }
        }
        $msg_err_default = self::$MSG_ERR_DEFAULT;
        Cache::put($cache_tinsoft_msg_err, $msg_err_default, 60);
        return false;
    }

    public static function mappingLocation($ip_location_name) {
        $ip_location_name = strtolower(Helper::convertVIToEN(trim($ip_location_name)));
        $arr_location_tinsoft = self::getArrLocation();
        $default_location_id = 0;
        $location_id = $default_location_id;
        foreach ($arr_location_tinsoft as $id => $name) {
            if (Helper::encodeLocation($ip_location_name) === Helper::encodeLocation($name)) {
                $location_id = $id;
                break;
            }
        }
        return [
            'location_id' => $location_id,
            'location_name' => $arr_location_tinsoft->$location_id
        ];
    }

    public static function getArrLocation() {
        $exp_seconds = 60*60;
        $cache_location_list_tinsoft = Cache::remember(self::$CACHE_LOCATION_LIST, $exp_seconds, function() {
            $list_location = self::getLocationList();
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

    public static function getLocationList() {
        $url = self::$URL_LOCATION_LIST;
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

    public static function bindAPIKey($text, $apiKey, $array = [])
    {
        return Helper::bindParams($text, array_merge([
            'api_key' => $apiKey
        ], $array));
    }
}
