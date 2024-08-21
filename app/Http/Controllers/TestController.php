<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class TestController extends Controller
{
    public function index()
    {
        $subject = 'Test subject';
        $body = 'Test message';

        Mail::to('user@gmail.com')->send(new TestMail($subject, $body));
    }
}
