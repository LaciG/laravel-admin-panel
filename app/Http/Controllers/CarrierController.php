<?php

namespace App\Http\Controllers;

use App\Http\requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Carrier;
use App\Job;
use Mail;
use App\MailFile;

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

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'salary' => 'required',
            'resume'  => 'mimes:jpeg,png,jpg,pdf,docx,doc'
        ]);
        $data = array(
            'job' => $request->job_title,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'salary' => $request->salary,
            'resume' => $request->resume
        );

        Mail::send('mail.jobapply', $data, function($message) use ($data){
            $message->to('djlacig11@gmail.com');
            $message->subject('Állásjelentkezés a ' . $data['job'] . ' pozícióra');
            $message->from($data['email']);
            $message->attach($data['resume']->getRealPath(), array(
                'as' => $data['name'] . '.' . $data['resume']->getClientOriginalExtension(),
                'mime' => $data['resume']->getMimeType())
            );
        });
        //Kell mégegy email a jelentkezőnek a sikeres jelentkezésről

        $apply = new Job;
        $apply->apply_job = $request->input('job_title');
        $apply->apply_name = $request->input('name');
        $apply->apply_email = $request->input('email');
        $apply->apply_mobile = $request->input('mobile');
        $apply->apply_salary = $request->input('salary');

        if(Input::hasFile('resume')) {

            $file = Input::file('resume');
            Input::file('resume')->move(public_path().'/resumes', $data['name'] . '.' . $data['resume']->getClientOriginalExtension());            
            $url = URL::to("/") . '/resumes/' .
            $file->getClientOriginalName();
        }
        $apply->apply_resume = $url;

        $apply->save();

        return redirect('/carrier')->with('response', 'Sikeres jelentkezés');
    }
}
