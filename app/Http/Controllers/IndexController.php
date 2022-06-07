<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {
        set_time_limit(0);
        return view('Administrateur/index');
    }
}
