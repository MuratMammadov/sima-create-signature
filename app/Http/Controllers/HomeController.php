<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function generate(Request $request)
    {
        $operation = OperationController::create($request);
        $contract  = ContractController::generate($operation);
        $signatured = SignatureController::signature($contract);
        $encode  = ContractController::encode($signatured);
        return QRController::generate($encode);
    }
}
