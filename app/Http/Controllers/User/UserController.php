<?php

namespace App\Http\Controllers\User;

use App\Events\PayEvent;
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

    /**
     * 获取用户列表.
     *
     * @param Request $request [$request description]
     *
     * @return [type] [return description]
     */
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

    /**
     * 支付回调.
     *
     * @param Request $request
     *
     * @return json
     */
    public function payCallback(Request $request)
    {
        // ..业务逻辑

        // event
        $order = [];
        event(new PayEvent($order));

        return Resize();
        /*
        {
            "code": "200",
            "message": "success",
            "data": []
        }
        */
    }
}
