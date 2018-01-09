<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getSend()
    {
        $content='hi~你好';
        $data = ['name' => '陳媽媽', 'content'=> $content, ];
        Mail::send('email.test', $data, function($message){
            $message->subject('Laravel 5 Mail');
            $message->to('3a432001@gmail.com', '陳媽媽');
            $message->from('annie851216@gmail.com', 'admin');
        });
    }
}
