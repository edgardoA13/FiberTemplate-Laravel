<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function show(){
        return view('auth.front-page');
    }
}
