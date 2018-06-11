<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GDPR;

class GdprSettingsController extends Controller
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
        $gdprData = DB::table('gdpr_settings')->get();

        return view('admin.gdprsettings', ['gdprData' => $gdprData]);
    }

    public function edit(Request $request, $id) {
        $this->validate($request, [
            'Light' => 'required',
            'Standard' => 'required',
            'Enterprise' => 'required',
            'Follow' => 'required',
            'DPO' => 'required',
            'daily_price' => 'required',
            'follow_price' => 'required',
        ]);

        $gdpr = new GDPR;
        $gdpr->Light = $request->input('Light');
        $gdpr->Standard = $request->input('Standard');
        $gdpr->Enterprise = $request->input('Enterprise');
        $gdpr->Follow = $request->input('Follow');
        $gdpr->DPO = $request->input('DPO');
        $gdpr->daily_price = $request->input('daily_price');
        $gdpr->follow_price = $request->input('follow_price');

        $data = array (
            'Light' => $gdpr->Light,
            'Standard' => $gdpr->Standard,
            'Enterprise' => $gdpr->Enterprise,
            'Follow' => $gdpr->Follow,
            'DPO' => $gdpr->DPO,
            'daily_price' => $gdpr->daily_price,
            'follow_price' => $gdpr->follow_price,
        );
        GDPR::where('id', $id)->update($data);
        $gdpr->update();

        return redirect('/gdprsettings')->with('response', 'Frissítve');
    }
}
