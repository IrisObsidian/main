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

//不需要权限就能访问的页面
Route::get('/', function () {return view('homepage');});
Route::get('/Login','AdminLoginController@index');
Route::post('/Login','AdminLoginController@login');
Route::get('/Logout','AdminLoginController@logout');
//需要权限才能访问的页面
//Route::group();