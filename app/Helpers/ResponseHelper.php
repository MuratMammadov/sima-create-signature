<?php

namespace App\Helpers;

use Illuminate\Encryption\HMACSHA256;


class ResponseHelper
{
    public static function json($message = '', $code = '200', $status = 'true')
    {
        return response()->json([
            'success' => $status,
            'message' => $message,
            'code' => $code
        ], $code);
    }
}
