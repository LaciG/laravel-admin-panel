<?php

namespace App\Http\Controllers;

use App\Http\requests;
use Illuminate\Http\Request;
use App\Index;
use Mail;

class IndexController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'subject' => 'min:3',
            'message' => 'required'
        ]);
        $data = array (
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'user_message' => $request->message
        );

        Mail::send('mail.contact', $data, function($contact) use ($data) {
            $contact->to('djlacig11@gmail.com');
            $contact->subject($data['subject']);
            $contact->from($data['email']);
        });
        return redirect()->back()->with('response','Köszönjük, az üzenetét megkaptuk!');
    }
}
