<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function inbox() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/inbox');
    }
}
