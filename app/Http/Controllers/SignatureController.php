<?php

namespace App\Http\Controllers;

use App\Enum\OperationTypeEnum;
use App\Helpers\CryptHelper;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SignatureController extends Controller
{
    public static function signature($contract)
    {
        $signature = CryptHelper::getSignature($contract['SignableContainer']);
        $contract['Header']['Signature'] = $signature;
        return $contract;
    }
}
