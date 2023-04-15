<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateCheckoutController extends Controller
{
    public function privateCheckout (){
        return view('pages.private-checkout');
    }
}
