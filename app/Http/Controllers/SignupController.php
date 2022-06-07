<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/sign-up');
    }
}
