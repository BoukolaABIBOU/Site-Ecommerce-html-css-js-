<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailcomposeController extends Controller
{
    public function emailcompose() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/email-compose');
    }
}
