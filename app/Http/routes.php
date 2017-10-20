<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('public',function (){
    return view('public.index');
});

//后台登录
// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix'=>'admin','namespace'=>'Auth'],function (){
    Route::get('login','AuthController@getLogin');
    Route::post('login','AuthController@postLogin');
});



Route::group(
    [
        'prefix' => 'api'
    ],
    function (){
        Route::get('get_fan_code_list','Api\FanController@get_fan_code_list');
    }
);

Route::resource('photo','PhotoController');

