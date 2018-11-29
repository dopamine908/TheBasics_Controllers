<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function __construct()
    {
        //這個controller內所有function 都必須經過demo_middleware
        $this->middleware('demo_middleware');

        //只有OnlyFunction要經過auth中介層
        $this->middleware('auth')->only('OnlyFunction');

        //只有ExceptFunction不用經過auth中介層
        $this->middleware('auth')->except('ExceptFunction');

        //手動寫只有這個controller要用的中介層
        $this->middleware(function ($request, $next) {
            //content
            return $next($request);
        });
    }

    public function OnlyFunction() {

    }

    public function ExceptFunction() {

    }

    public function MiddlewareAuth() {

    }
}
