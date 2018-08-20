<?php

namespace Tests\Feature\Base;

use App\User;
use Tests\TestCase;

abstract class UserTest extends TestCase
{
    protected function login()
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'Yuko Tanaka';
        $user->email = 'yuukou.triplejump0219@gmail.com';

        $this->be($user);
    }
}