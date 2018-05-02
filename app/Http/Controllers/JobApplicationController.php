<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;

class JobApplicationController extends Controller
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
        $applies = DB::table('job_applies')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.jobapplication', ['applies' => $applies]);
    }
}
