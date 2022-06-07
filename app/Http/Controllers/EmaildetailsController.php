<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmaildetailsController extends Controller
{
    public function emaildetails() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/email-details');
    }
}
