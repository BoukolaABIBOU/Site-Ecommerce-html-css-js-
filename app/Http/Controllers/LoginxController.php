<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginxController extends Controller
{
    public function loginx() 
    {
        set_time_limit(0);
        return view ('E-BOOK/loginx');
    }
}
