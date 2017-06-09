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

Route::get('/',function(){
    return view('welcome');
});

// 認證路由...
Route::get('auth/login',array('as'=>'login','uses'=>'Auth\AuthController@getLogin'));
Route::post('auth/login',array('as'=>'login','uses'=>'Auth\AuthController@postLogin'));
Route::get('auth/logout',array('as'=>'logout','uses'=>'Auth\AuthController@getLogout'));

// 註冊路由...
Route::get('auth/register',array('as'=>'register','uses'=>'Auth\AuthController@getRegister'));
Route::post('auth/register',array('as'=>'register','uses'=>'Auth\AuthController@postRegister'));

 
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home',array('as'=>'home','uses'=>'AdminController@home'));
    Route::get('/ui',array('as'=>'ui','uses'=>'AdminController@ui'));
    Route::get('/chart',array('as'=>'chart','uses'=>'AdminController@chart'));
    Route::get('/tab',array('as'=>'tab','uses'=>'AdminController@tab'));
    Route::get('/table',array('as'=>'table','uses'=>'AdminController@table'));
    Route::get('/form',array('as'=>'form','uses'=>'AdminController@form'));
    Route::get('/emptys',array('as'=>'emptys','uses'=>'AdminController@emptys'));
    // Route::get('/login',array('as'=>'login','uses'=>'AdminController@login'));
});


// 密碼重置連結的路由...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密碼重置的路由...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');