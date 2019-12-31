<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;

class UserVerifie
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 设置参数错误信息
        $attributes = [
            'token.required' => '未传递用户凭证参数',
            'id.required' => '未传递用户凭证参数',
            // ...
        ];

        // 设置数据验证规则
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'id' => 'required|integer|in:1,2,3,4',
        ], $attributes);

        // 获取参数验证信息
        if ($validator->fails()) {
            $message = $validator->errors()->first();

            return Resize([], 500, $message);
        }

        return $next($request);
    }
}
