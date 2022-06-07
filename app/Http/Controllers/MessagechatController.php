<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagechatController extends Controller
{
    public function messagechat() 
    {
        set_time_limit(0);
        return view('Administrateur/pages/message-chat');
    }
}
