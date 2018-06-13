<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GDPR;

class AjaxController extends Controller
{
    public function getCalculatorData(Request $request) {

        $data = $request->toArray();

        $calculatorData = array(
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

        $gdpr_data = DB::table('gdpr_settings')->where('workers', '=', $calculatorData['workers'])->where('clients', '=', $calculatorData['clients'])->first();
        
        $package_name = $calculatorData['package'];
        $standard_package = $gdpr_data->$package_name* $gdpr_data->daily_price;

        if($package_name == "DPO") {
            $response = array(
                'packdata' => array(
                    'workers' => $calculatorData['workers'],
                    'clients' => $calculatorData['clients'],
                    'industry' => $calculatorData['industry'],
                    'process' => $calculatorData['process'],
                    'law' => $calculatorData['law'],
                    'hr' => $calculatorData['hr'],
                    'payroll' => $calculatorData['payroll'],
                    'it' => $calculatorData['it'],
                    'incident' => $calculatorData['incident'],
                ),
                'nodatasecure' => array(
                    'packname' => $package_name,
                    'standardpackage' => $standard_package,
                    'followprice' => $gdpr_data->follow_price
                )
            );
        } else {
            $response = array(
                'packdata' => array(
                    'workers' => $calculatorData['workers'],
                    'clients' => $calculatorData['clients'],
                    'industry' => $calculatorData['industry'],
                    'process' => $calculatorData['process'],
                    'law' => $calculatorData['law'],
                    'hr' => $calculatorData['hr'],
                    'payroll' => $calculatorData['payroll'],
                    'it' => $calculatorData['it'],
                    'incident' => $calculatorData['incident'],
                ),
                'nodatasecure' => array(
                    'packname' => $package_name,
                    'standardpackage' => $standard_package
                )
            );
        }

        return response()->json($response); 
    }
}
