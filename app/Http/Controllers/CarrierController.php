<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Carrier;

class CarrierController extends Controller
{
    public function index() {
        $joblist = DB::table('carrier')->orderBy('created_at', 'desc')->paginate(5);
        return view('carrier', ['joblist' => $joblist]);
    }

    public function show($id) {
        $joblink = Carrier::where('id', '=', $id)->get();

        return view('carrierview', ['joblink' => $joblink]);
    }

    /* public function store(Request $request) {
        $this->validate($request, [
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
        ]);

        return redirect('/carrier)->with('response', 'Sikeres jelentkezés');
    } */
}
