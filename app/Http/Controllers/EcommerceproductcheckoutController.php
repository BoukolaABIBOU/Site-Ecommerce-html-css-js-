<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceproductcheckoutController extends Controller
{
    public function checkout() 
    {
        set_time_limit(0);
        return view('Administrateur/ecommerce-product-checkout');
    }
}
