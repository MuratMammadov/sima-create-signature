<?php

namespace App\Http\Controllers;

use App\Models\SimaOperation;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRController extends Controller
{
    public static function generate($encodedContract)
    {
        return QRCode::size(500)->generate(env('GETDATA_URL') . $encodedContract);
    }
}
