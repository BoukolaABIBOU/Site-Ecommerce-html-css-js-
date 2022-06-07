<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceproductController extends Controller
{
    public function product() 
    {
        set_time_limit(0);
        return view('Administrateur/ecommerce-product');
    }
}

