<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
     function AboutPage() {
        return view('about');
    }
}
