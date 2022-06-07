<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    
    public function contactus() 
    {
        set_time_limit(0);
        return view('E-BOOK/contact-us');
    }
}
