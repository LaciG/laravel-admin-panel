<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Blog;
use App\Job;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $bloglist = DB::table('blog')->orderBy('created_at', 'desc')->paginate(5);
        $joblist = DB::table('carrier')->orderBy('created_at', 'desc')->paginate(5);

        return view('home', ['bloglist' => $bloglist, 'joblist' => $joblist]);
    }
}
