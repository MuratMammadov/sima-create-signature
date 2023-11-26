<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public static function generate($operation)
    {
        return [
            'SignableContainer' => [
                'ProtoInfo' => ['Name' => 'web2app', 'Version' => '1.3'],
                'OperationInfo' => [
                    'OperationId' => $operation->uuid,
                    'Type' => ($operation->type == 1) ? 'Auth' : 'Sign',
                    'NbfUTC' => $operation->NbfUTC,
                    'ExpUTC' => $operation->ExpUTC,
                    'Assignee' => json_decode($operation->assigners, true),
                ],
                'ClientInfo' => [
                    'ClientId' => intval(env('CLIENT_ID')),
                    'IconURI' => env('ICON_URL'),
                    'Callback' => env('CALLBACK_URL'),
                    'ClientName' => env('CLIENT_NAME'),
                    'RedirectURI' => env('REDIRECT_URI'),
                    'HostName' => env('HOSTNAME'),
                ],
            ],
            'Header' => ['AlgName' => 'HMACSHA256'],
        ];
    }

    public static function encode($contract)
    {
        $json = json_encode($contract, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return base64_encode($json);
    }
}
