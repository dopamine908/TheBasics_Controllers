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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| 當物件被當做函數來呼叫時,可以只打controller的名稱就好
|--------------------------------------------------------------------------
*/

Route::get('當物件被當做函數來呼叫時/{value}', 'InvokeController');


/*
|--------------------------------------------------------------------------
| Controller 手動指定通過哪些或不通過哪些中介層
|--------------------------------------------------------------------------
Route 1 在 MiddlewareController 被指定要通過auth中介層
Route 2 在 MiddlewareController 被赦免不用通過auth中介層
Route 3 被手動指定必需要通過auth中介層
*/
Route::get('只有我要經過auth中介層', 'MiddlewareController@OnlyFunction'); //Route 1
Route::get('只有我不用經過auth中介層', 'MiddlewareController@ExceptFunction'); //Route 2
Route::get('我被指定要經過auth中介層', 'MiddlewareController@MiddlewareAuth')->middleware('auth'); //Route 3

