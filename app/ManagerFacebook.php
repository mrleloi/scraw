<?php

namespace App;

use App\Helpers\APITinSoftHelper;
use App\Helpers\Helper;
use App\Helpers\RequestFacebookHelper;
use App\Helpers\RequestHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagerFacebook extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function __construct(array $attributes = [])
    {
        if ($attributes) {
            $this->username = $attributes['username'];
            $this->pass = $attributes['pass'];
        } else {
            $this->username = '0337379871';
            $this->pass = '123456@loi';
        }
    }

    public function login() {
        $username = $this->username;
        $password = $this->pass;
        if (!RequestFacebookHelper::checkCookieLogin($username)) {
            $ch = curl_init();
            $cookies = [];
            $html = false;
            $proxy = '14.177.124.177:4001';
            $userAgent = false;
            $statusLogin = RequestFacebookHelper::checkLoginStatus($username, $password, $ch, $html, $cookies, $userAgent, $proxy);
            switch ($statusLogin)
            {
                case Helper::$LOGIN_SUCCESS:
                    return true;
                default:
                    return false;
            }
        }
        return true;
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
