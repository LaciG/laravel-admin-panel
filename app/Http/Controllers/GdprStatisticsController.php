<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GdprStatisticsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $workersLessThan30Count = DB::table('gdpr_statistic')->where('workers', 'Kevesebb mint 30')->count();
        $workersBetweenCount = DB::table('gdpr_statistic')->where('workers', '31-249')->count();
        $workersMoreThan249Count = DB::table('gdpr_statistic')->where('workers', 'Több, mint 249')->count();
        


        $data = array(
            'workersLessThan30Count' => $workersLessThan30Count,
            'workersBetweenCount' => $workersBetweenCount,
            'workersMoreThan249Count' => $workersMoreThan249Count,
            
        );

        return view('admin.gdprstatistics', ['data' => $data]);
    }
}
