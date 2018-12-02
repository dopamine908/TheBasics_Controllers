<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRepository;

class WorkController extends Controller
{
    protected $User;

    /**
     * coustruct注入的寫法
     *
     * WorkController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->User = $userRepository;
    }

    /**
     * /seeRequest?a=1&b=2
     *
     * @param Request $request
     */
    public function seeRequest(Request $request) {
        dump($request->all());
    }

    /**
     * /seeRequest/另外一個變數?a=1&b=2
     *
     * @param Request $request
     * @param $var
     */
    public function seeRequestAndVar(Request $request, $var) {
        dump($request->all());
        dump($var);
    }
}
