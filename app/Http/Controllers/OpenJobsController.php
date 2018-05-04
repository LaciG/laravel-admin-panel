<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Carrier;

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

    public function store(Request $request) {
        $this->validate($request, [
            'job_active' => 'required',
            'job_title' => 'required',
            'job_language' => 'required',
            'job_description' => 'required',
            'job_place' => 'required',
            'job_type' => 'required',
            'job_time' => 'required',
            'job_level' => 'required',
            'job_goodtoknow' => 'required',
            'job_meta_description' => 'required',
            'job_meta_keywords' => 'required',
        ]);

        $addjob = new Carrier;
        $addjob->job_active = $request->input('job_active');
        $addjob->job_title = $request->input('job_title');
        $addjob->job_language = $request->input('job_language');
        $addjob->job_description = $request->input('job_description');
        $addjob->job_place = $request->input('job_place');
        $addjob->job_type = $request->input('job_type');
        $addjob->job_time = $request->input('job_time');
        $addjob->job_level = $request->input('job_level');
        $addjob->job_goodtoknow = $request->input('job_goodtoknow');
        $addjob->job_meta_description = $request->input('job_meta_description');
        $addjob->job_meta_keywords = $request->input('job_meta_keywords');

        $addjob->save();

        return redirect('/addjob')->with('response', 'Állás meghirdetve');
    }

    public function view($id) {
        $jobdata = Carrier::find($id);

        return view('admin.editjob', ['jobdata' => $jobdata]);
    }

    public function edit(Request $request, $id) {
        $this->validate($request, [
            'job_active' => 'required',
            'job_title' => 'required',
            'job_language' => 'required',
            'job_description' => 'required',
            'job_place' => 'required',
            'job_type' => 'required',
            'job_time' => 'required',
            'job_level' => 'required',
            'job_goodtoknow' => 'required',
            'job_meta_description' => 'required',
            'job_meta_keywords' => 'required',
        ]);

        $addjob = new Carrier;
        $addjob->job_active = $request->input('job_active');
        $addjob->job_title = $request->input('job_title');
        $addjob->job_language = $request->input('job_language');
        $addjob->job_description = $request->input('job_description');
        $addjob->job_place = $request->input('job_place');
        $addjob->job_type = $request->input('job_type');
        $addjob->job_time = $request->input('job_time');
        $addjob->job_level = $request->input('job_level');
        $addjob->job_goodtoknow = $request->input('job_goodtoknow');
        $addjob->job_meta_description = $request->input('job_meta_description');
        $addjob->job_meta_keywords = $request->input('job_meta_keywords');

        $data = array(
            'job_active' => $addjob->job_active,
            'job_title' => $addjob->job_title,
            'job_language' => $addjob->job_language,
            'job_description' => $addjob->job_description,
            'job_place' => $addjob->job_place,
            'job_type' => $addjob->job_type,
            'job_time' => $addjob->job_time,
            'job_level' => $addjob->job_level,
            'job_goodtoknow' => $addjob->job_goodtoknow,
            'job_meta_description' => $addjob->job_meta_description,
            'job_meta_keywords' => $addjob->job_meta_keywords,
        );
        Carrier::where('id', $id)->update($data);
        $addjob->update();

        return redirect('/openjobs')->with('response', 'Állás Frissítve');
    }

    public function destroy($id) {
        Carrier::where('id', $id)->delete();
        return redirect('/openjobs')->with('response', 'Állás Törölve');
    }
}
