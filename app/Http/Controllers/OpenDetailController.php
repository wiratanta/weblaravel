<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenDetailController extends Controller
{
    public function openDetail (){
        return view('pages.open-detail');
    }
}
