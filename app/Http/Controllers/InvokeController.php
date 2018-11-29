<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokeController extends Controller
{
    /**
     * 當物件被當做函數來呼叫時
     *
     * @param $value
     */
    public function __invoke($value)
    {
        // TODO: Implement __invoke() method.

        dump('當物件被當做函數來呼叫時');
        dump('value='.$value);
    }
}
