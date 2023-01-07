<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function pageHome(){
        return view('pageHome');
    }
    public function contacti(){
        return view('contact');
    }
    public function incubirovanie(){
        return view('incubirovanie');
    }
    public function adminPanel(){
        return view('login');
    }
}
