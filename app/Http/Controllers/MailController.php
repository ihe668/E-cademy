<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function Sendmail(Request $request)
     {
        $email = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('samuelihechukwu03@gmail.com')->send(new MyTestMail($email));
        return back()->with(['success'=> 'message sent successfully']);
    }
}
