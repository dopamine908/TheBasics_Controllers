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

/*
|--------------------------------------------------------------------------
| 可以透過 php artisan make:controller ControllerName --resource 建立一整組route
|--------------------------------------------------------------------------
這組Route裡面含有基礎CRUD功能
若想跟model綁定 可以改下
php artisan make:controller PhotoController --resource --model=ModelName
來源： framework/src/Illuminate/Routing/Router.php
也可以透過下面註解掉的方式一次註冊多個
參考： https://docs.laravel-dojo.com/laravel/5.5/controllers#resource-controllers
*/
Route::resource('RouteResource', 'ResourceController');
Route::resource('UserResource', 'UserController');

//Route::resources([
//    'RouteResource' => 'ResourceController',
//    'UserResource' => 'UserController'
//]);

/*
|--------------------------------------------------------------------------
| 可以控制resource controller哪些function可以使用
|--------------------------------------------------------------------------
類似中介層的only,except用法
*/

Route::resource('只有這幾個route可以', 'OnlyResourceController', [
    'only' => ['index', 'create']
]);

Route::resource('只有這幾個route不行', 'ExceptResourceController', [
    'except' => ['index', 'store', 'update', 'destroy']
]);

/*
|--------------------------------------------------------------------------
| apiResource = resource 扣掉 create 和 edit (排除用來顯示 HTML 模板的 Route)
|--------------------------------------------------------------------------
指令 ： php artisan make:controller apiResourceController --api
也可以使用Route::apiResources （要加Ｓ）一次註冊多個
*/
Route::apiResource('apiResourceRoute', 'apiResourceController');

Route::apiResources([
    'apiResourceRoute_1' => 'apiResourceController1',
    'apiResourceRoute_2' => 'apiResourceController2'
]);
