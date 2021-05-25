<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BaseController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function share() {
        return view('sites.210521.den-vau-210521');
    }
}
