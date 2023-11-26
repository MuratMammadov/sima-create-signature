<?php

namespace App\Http\Controllers;

use App\Models\SimaOperation;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public static function create(Request $request)
    {
        $currentTimestamp = time();
        $assigners = $request->asignee;
        $assignersList = explode(',', $assigners);
        $operation = new SimaOperation;
        $operation->type = ($request->option == 'auth') ? 1 : 2;
        $operation->NbfUTC = $currentTimestamp;
        $operation->ExpUTC = strtotime('+5 minutes', $currentTimestamp);
        $operation->assigners = json_encode($assignersList); // Assuming assigners is provided in the request
        $operation->save();
        return $operation;
    }
}
