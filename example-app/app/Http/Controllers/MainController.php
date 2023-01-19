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
    
    public function adminSales()
    {
        return view('adminPanel/page/sales');
    }
     public function adminChat()
    {
        return view('adminPanel/page/chat');
    }
    public function adminMail()
    {
        return view('adminPanel/page/mail');
    }
     public function adminSlider()
    {
        return view('adminPanel/page/pageForm/pageHome/pageHomeForm');
    }

        
}
