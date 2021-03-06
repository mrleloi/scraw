<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', 'BaseController@index');
Route::get('/', 'BaseController@index')->name('home');

Route::get('/getUserAgent', 'UserAgentController@index')->name('useragent.index');
Route::post('/getUserAgent', 'UserAgentController@createNewUserAgent')->name('useragent.createNewUserAgent');

Route::get('/login', 'LoginFacebookController@index')->name('loginfb.index');
Route::post('/login', 'LoginFacebookController@actionLogin')->name('loginfb.actionLogin');

Route::get('/share', 'BaseController@share');
Route::get('/visit', 'LoginFacebookController@visit');
Route::get('/post', 'LoginFacebookController@loading')->name('fb.load');

Route::get('/phone-to-uid', 'ProcessPhoneToUIDController@run');
