<?php

if (!function_exists('Resize')) {
    function Resize($data = [], $code = 200, $message = 'success')
    {
        return response([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
