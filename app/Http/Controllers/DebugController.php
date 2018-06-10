<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
    
    public function php() {
        return view('Layouts.LandingBase');
    }

}
