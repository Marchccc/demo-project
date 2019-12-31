<?php

namespace App\Http\Controllers\Porduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    protected $product; // 产品业务逻辑仓库

    public function __construct(
        ProductRepositoryInterface $ProductRepository
    ) {
        parent::__construct();
        $this->product = $ProductRepository;
    }

    /**
     * 获取产品列表.
     *
     * @param Request $request
     *
     * @return json
     */
    public function list(Request $request)
    {
        // 获取产品列表
        $result = $productList = $this->product->findAllProduct();

        return Resize($result);
        /*
        {
            "code": "200",
            "message": "success",
            "data": [
                {
                    "id": 1,
                    "title": "asdf",
                    "user_id": 1,
                    "has_one_user": [
                        {
                            "id": 1,
                            "name": "user1"
                        }
                    ]
                }
            ]
        }
        */
    }
}
