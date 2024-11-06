<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('home');
    }
    public function showServices(){
        return view('services');
    }
    public function showContact(){
        return view('contact');
    }
    public function showAbout(){
        return view('about');
    }
}
