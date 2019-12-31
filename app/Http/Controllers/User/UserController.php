<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    protected $user; // 用户业务逻辑仓库

    public function __construct(
        UserRepositoryInterface $UserRepository
    ) {
        parent::__construct();
        $this->user = $UserRepository;
    }

    public function list(Request $request)
    {
        // 获取用户列表
        $result = $this->user->findAllUser();

        return Resize($result);
        /*
        {
            "code": "200",
            "message": "success",
            "data": [
                {
                    "id": 1,
                    "name": "user1"
                }
            ]
        }
        */
    }
}
