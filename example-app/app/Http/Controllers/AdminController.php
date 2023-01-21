<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Slider()
    {
    
    $items = Slide::all();
    $fierstItems = $items[0];
    //dd($fierstItems['id']);
    $items = $items->slice(1);
    $id = '';

      return view('adminPanel/page/pageForm/pageHome/slider',compact('items','fierstItems','id'));
    }
    public function update($id)
    {
    $items = Slide::query()->find($id);
    $fierstItems = [];
   // dd($items);
      return view('adminPanel/page/pageForm/pageHome/slider',compact('items','fierstItems', 'id'));
  
    
    }
}
