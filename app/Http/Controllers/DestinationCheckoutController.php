<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationCheckoutController extends Controller
{
    public function destinationCheckout () {
        return view ('pages.destination-checkout');
    }

}
