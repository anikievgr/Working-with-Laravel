<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function Slider()
    {
    
    $items = Slide::all();
    //dd($items );
    if($items->count()  == 0){
      $fierstItems = ['null'];
      $items = ['null'];
      $id = 'null';
      //dd($id,$items, $fierstItems);
    }else{
      $fierstItems = $items[0];
      //dd($fierstItems['id']);
      $items = $items->slice(1);
      $id = '';
    }
      return view('adminPanel/page/pageForm/pageHome/slider',compact('items','fierstItems','id'));
    }
    public function update($id)
    {
    $items = Slide::query()->find($id);
    $fierstItems = [];
   // dd($items);
      return view('adminPanel/page/pageForm/pageHome/slider',compact('items','fierstItems', 'id'));
  
    
    }
      public function delete($id)
    {
    $items = Slide::query()->find($id);
    Storage::disk('public')->delete($items['image']);
    $items->delete();
    
    
        return redirect()->back(); 
     
  
    
    }
}