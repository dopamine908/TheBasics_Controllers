<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //把resource route 動詞作更改
        //'create' => '新增', 'edit' => '修改',
        //可以用 php artisan route:list 觀察差別
        Route::resourceVerbs([
            'create' => '新增',
            'edit' => '修改',
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
