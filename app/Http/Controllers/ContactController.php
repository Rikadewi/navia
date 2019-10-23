<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required',
            'message'   => 'required'
        ]);

        $data = array(
            'email'     => $request->email,
            'name'      => $request->name,
            'message'   => $request->message,
            'user'      => true
        );

        Mail::to($request->email)->send(new SendMail($data));
        $data['user'] = false;
        Mail::to(env('MAIL_ADMIN'))->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
