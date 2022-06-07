<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop() 
    {
        set_time_limit(0);
        return view('E-BOOK/shop');
    }
}
