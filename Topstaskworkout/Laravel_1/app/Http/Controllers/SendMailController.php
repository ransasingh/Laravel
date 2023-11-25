<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class SendMailController extends Controller
{
    public function index()
    {
        $content = [
            'subject' => 'This is the mail subject of laravel testing',
            'body' => 'This is the email body of how to send email from laravel 10 with mailtrap.'
        ];

        Mail::to('singhrj414@gmail.com')->send(new Sample($content));

        return "Email has been sent.";
    }
}
