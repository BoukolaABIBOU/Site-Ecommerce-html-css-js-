<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexiController extends Controller
{
    public function indexi() 
    {
        set_time_limit(0);
        return view('E-BOOK/indexi');
    }
}

