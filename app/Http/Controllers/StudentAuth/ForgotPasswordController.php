<?php

namespace App\Http\Controllers\StudentAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Trait
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
//Password Broker Facade
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    protected $broker = 'students';
    use SendsPasswordResetEmails;
    public function showLinkRequestForm()
    {
        return view('student.passwords.email');
    }
    public function broker()
    {
            return Password::broker('students');
    }
}
