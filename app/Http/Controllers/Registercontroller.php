<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function registerController (){
        return view('pages.auth.register');
    }
}
