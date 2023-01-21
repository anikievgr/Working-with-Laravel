<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Slider()
    {
      return view('adminPanel/page/pageForm/pageHome/slider');
    }
}
