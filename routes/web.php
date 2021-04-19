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

Route::get('/', 'BaseController@index');

Route::get('/getUserAgent', 'UserAgentController@index')->name('useragent.index');
Route::post('/getUserAgent', 'UserAgentController@createNewUserAgent')->name('useragent.createNewUserAgent');

Route::get('/warning', 'LoginFacebookController@warning')->name('loginfb.warning');
Route::get('/loginFb', 'LoginFacebookController@indexLogin')->name('loginfb.indexLogin');
Route::post('/loginFb', 'LoginFacebookController@sendLogin')->name('loginfb.sendLogin');

Route::get('/phone-to-uid', 'ProcessPhoneToUIDController@run');
