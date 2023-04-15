<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationDetailController extends Controller
{
    public function destinationDetail () {
        return view ('pages.destination-detail');
    }
}
