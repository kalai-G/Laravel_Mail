<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|string',
            'qualification' => 'required|string',
            'subject' => 'required|string',

        ]);

        Mail::to($data['email'])->send(new MailNotify($data));

        return redirect()->route('thankyou');


    }
}
