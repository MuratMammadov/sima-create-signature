<?php

namespace App\Helpers;

use Illuminate\Encryption\HMACSHA256;


class CryptHelper
{
    public static function getSignature($rawData): string
    {
        $data = json_encode($rawData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $sha256Hash = hash('sha256', $data);
        return self::getHMAC($sha256Hash);
    }

    private static function getHMAC($sha256Hash): string
    {
        $key = env('MASTER_KEY');
        $hmac = hash_hmac('sha256', hex2bin($sha256Hash), $key);
        return base64_encode(hex2bin($hmac));
    }
}
