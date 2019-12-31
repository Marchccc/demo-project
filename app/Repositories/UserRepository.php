<?php

namespace App\Repositories;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function __construct()
    {
    }

    /**
     * 获取所有用户列表.
     *
     * @return array
     */
    public function findAllUser()
    {
        return User::get()->toArray();
    }
}
