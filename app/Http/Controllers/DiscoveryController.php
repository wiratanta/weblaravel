<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscoveryController extends Controller
{
    public function discovery (){
        return view('pages.discovery');
    }
}
