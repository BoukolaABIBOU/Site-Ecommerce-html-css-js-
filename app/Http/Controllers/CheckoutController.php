<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    
    public function checkout() 
    {
        set_time_limit(0);
        return view('E-BOOK/checkout');
    }
}
