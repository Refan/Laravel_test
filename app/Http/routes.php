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

Route::get('/',array('as'=>'index','uses'=>'AdminController@index'));
Route::get('/index',array('as'=>'index','uses'=>'AdminController@index'));
Route::get('/ui',array('as'=>'ui','uses'=>'AdminController@ui'));
Route::get('/chart',array('as'=>'chart','uses'=>'AdminController@chart'));
Route::get('/tab',array('as'=>'tab','uses'=>'AdminController@tab'));
Route::get('/table',array('as'=>'table','uses'=>'AdminController@table'));
Route::get('/form',array('as'=>'form','uses'=>'AdminController@form'));