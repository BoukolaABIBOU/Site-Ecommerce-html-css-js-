<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    public function forgotpassword() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/forgot-password');
    }
}
