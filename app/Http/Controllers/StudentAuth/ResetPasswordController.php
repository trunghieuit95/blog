<?php

namespace App\Http\Controllers\StudentAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\ResetsPasswords;

//Auth Facade
use Illuminate\Support\Facades\Auth;

//Password Broker Facade
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    protected $redirectTo = '/home';
    use ResetsPasswords;
    public function showResetForm(Request $request, $token = null)
    {
        return view('student.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function broker()
    {
        return Password::broker('students');
    }

    //returns authentication guard of seller
    protected function guard()
    {
        return Auth::guard('students');
    }
}
