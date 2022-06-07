<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function seller() 
    {
        set_time_limit(0);
        return view('E-BOOK/seller');
    }
}
