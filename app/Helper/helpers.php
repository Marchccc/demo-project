<?php

if (!function_exists('Resize')) {
    function Resize($data)
    {
        return response([
            'code' => '200',
            'message' => 'success',
            'data' => $data,
        ]);
    }
}
