<?php

namespace App;

use App\Helpers\APITinSoftHelper;
use App\Helpers\Helper;
use App\Helpers\RequestFacebookHelper;
use App\Helpers\RequestHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class UserFacebook extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function __construct(array $attributes = [])
    {
        $this->username = $attributes['username'];
        $this->pass = $attributes['pass'];
    }

    public function getLoginStatus(&$ch, &$cookies) {
        $username = $this->username;
        $password = $this->pass;
        $apiKey = 'TLhP4iNzWawFGIv2EjgncPy9SjBfaCqVYCBRNv';
        $proxy = false;
        if (APITinSoftHelper::checkAPIKey($apiKey)) {
            $locationTinSoft = APITinSoftHelper::mappingLocation(Session::get(Helper::$IP_DATA_REGION));
            $locationIDTinSoft = $locationTinSoft['location_id'];
            $proxy = APITinSoftHelper::getCurrentProxy($apiKey, $locationIDTinSoft);
        } else {
            $msgErr = APITinSoftHelper::getAPIKeyError($apiKey);
        }
        if ($proxy || true) {
            $ch = $ch ? $ch : curl_init();
            $cookies = $cookies ? $cookies : [];
            $html = false;
            $statusLogin = RequestFacebookHelper::checkLoginStatus($username, $password, $ch, $html, $cookies);
            return $statusLogin;
        }
        return Helper::$LOGIN_WRONG_PASSWD;
    }

    public function visit($url)
    {
        $ch = $this->ch ? $this->ch : curl_init();
        $html = RequestFacebookHelper::visit($url, $this->username, $ch);
        if (RequestHelper::isSuccess($ch) && $html) {
            return $html;
        }
        return $html;
    }
}
