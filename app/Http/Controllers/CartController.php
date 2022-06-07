<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function cart() 
    {
        set_time_limit(0);
        return view('E-BOOK/cart');
    }
}
