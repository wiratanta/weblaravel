<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function destination (){
        return view('pages.destination');
    }
}
