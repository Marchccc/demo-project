<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct()
    {
    }

    /**
     * 获取所有产品
     *
     * @return array
     */
    public function findAllProduct()
    {
        return Product::with('hasOneUser')->get()->toArray();
    }
}
