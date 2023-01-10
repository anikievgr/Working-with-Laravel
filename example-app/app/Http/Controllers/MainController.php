<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function pageHome(){
        return view('userPage/pageHome');
 
    }
    public function contacti(){
        return view('userPage/contact');
    }
    public function incubirovanie(){
        return view('userPage/incubirovanie');
    }
    public function adminPanel(){
        return view('adminpanel/app');
    }
    
}
