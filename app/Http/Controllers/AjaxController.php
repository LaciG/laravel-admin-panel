<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GDPR;

class AjaxController extends Controller
{
    public function getCalculatorData(Request $request) {

        $data = $request->toArray();

        $response = array(
            'status' => 'success',
            'workers' => $data['workers'],
            'clients' => $data['clients'],
            'industry' => $data['industry'],
            'process' => $data['process'],
            'law' => $data['law'],
            'hr' => $data['hr'],
            'payroll' => $data['payroll'],
            'it' => $data['it'],
            'incident' => $data['incident'],
            'package' => $data['package'],
        );
        return response()->json($response); 
    }
}
