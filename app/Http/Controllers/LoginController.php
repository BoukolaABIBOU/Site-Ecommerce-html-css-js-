<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/login');
    }
}
