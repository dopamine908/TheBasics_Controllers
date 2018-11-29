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

/*
|--------------------------------------------------------------------------
| 當物件被當做函數來呼叫時,可以只打controller的名稱就好
|--------------------------------------------------------------------------
*/

Route::get('當物件被當做函數來呼叫時/{value}', 'InvokeController');
