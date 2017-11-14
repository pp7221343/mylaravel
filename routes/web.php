<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login','indexController@getlogin');
Route::get('postlogin','indexController@postlogin');



Route::get('/adminv','Admin\loginController@getlogin');
Route::post('/verify_admin_login','Admin\loginController@postlogin');
//后台首页
Route::get('home','Admin\HomeController@home');

