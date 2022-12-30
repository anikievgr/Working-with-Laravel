<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainConroller extends Controller
{
   public function pageHome(){
        return view('pageHome');
   }
}
