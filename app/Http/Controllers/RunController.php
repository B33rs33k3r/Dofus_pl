<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunController extends Controller
{
    public function Index()
    {
        return view('welcome'); 
    }
}
