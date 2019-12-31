<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $guarded = [];

    /*
     * 关联用户
     */
    public function hasOneUser()
    {
        return $this->hasMany('App\Models\User', 'id', 'user_id');
    }
}
