<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function pageHome(){
        return view('pageHome');
    }
    public function contacti(){
        return "контакты";
    }
    public function incubirovanie(){
        return "инкубирование";
    }
    public function adminPanel(){
         return "админ панел";
    }
}
