<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function pageHome(){
        return view('userPage/page/pageHome');
 
    }
    public function contacti(){
        return view('userPage/page/contact');
    }
    public function incubirovanie(){
        return view('userPage/page/incubirovanie');
    }
    //администраторская панель
    public function loginToTheAdminPanel()
    {
        return view('adminPanel/page/loginTo');
    }
    public function adminPanel()
    {
        return view('adminPanel/page/adminPanel');
    }
}
