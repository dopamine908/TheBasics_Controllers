<?php

namespace App;

use App\User;

class UserRepository
{
    protected $User;

    /**
     * coustruct注入的寫法
     *
     * WorkController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(User $user)
    {
        $this->User = $user;
    }
}
