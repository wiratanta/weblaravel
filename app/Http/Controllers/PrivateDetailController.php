<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateDetailController extends Controller
{
    public function privateDetail (){
        return view ('pages.private-detail');
    }
}
