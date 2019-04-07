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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', 'SentController@index');
Route::get('/base', 'BaseController@index');

// ユーザーが入力するURL
Route::get('/user', 'UserController@index');

// 送信を受け取るようのURL
Route::post('/sent', 'SentController@index');

// セッションで保存した内容を出力するコントローラー
Route::get('/re-enter', 'Re-EnterController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
