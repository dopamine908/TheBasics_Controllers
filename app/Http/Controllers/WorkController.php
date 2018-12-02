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


}
