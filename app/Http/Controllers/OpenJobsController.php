<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\JobApply;

class OpenJobsController extends Controller
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
        $openjobs = DB::table('carrier')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.openjobs', ['openjobs' => $openjobs]);
    }

    public function create() {
        return view('admin.addjob');
    }
}
