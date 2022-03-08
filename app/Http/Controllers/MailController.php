<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendMail() 
    {
        $details = [
            'title' => 'Mail from Medical Equipment Market',
            'body' => 'We appreciate your patronage and wish to serve you more via www.mem.com.ng '
        ];

        Mail::to("prog.kalio@gmail.com")->send(new TestMail($details));
        return "Email sent successfully";
    }
}
