<?php

namespace App\Http\Controllers;

use App\Mail\sendSingupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendSingupEmail($name, $email, $verification_code)
    {
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
        
        Mail::to($email)->send(new sendSingupEmail($data));
    }
}
