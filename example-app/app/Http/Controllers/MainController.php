<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Slide;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function pageHome(){
        $items = Slide::all();
           $img =[];
        
        $gallerea = array();
          $catygories = Category::all();
           $it = $catygories;
             //dd($gallerea);
        if ($catygories->count() == 0) {
            $gallerea = [];
            $it = [];
            //dd($gallerea);
        }else{
       
        foreach ($catygories as $key => $catygories){
            
            foreach($catygories->posts as $key=> $image){
            
                $img[$image['id']] = $image['image'];
            }
           
            $gallerea[$catygories['title']]['id'] = $catygories['id'];
            $gallerea[$catygories['title']]['id'] = $catygories['id'];
            $gallerea[$catygories['title']]['image'] = $img;
            $img = [];
        }

    //dd($gallerea);
    }
        return view('userPage/page/pageHome',compact('items', 'gallerea'));
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
         public function adminIncubirovane()
    {
        return view('adminPanel/page/pageForm/pageHome/incubirovanieFrom');
    } 
           public function adminContact()
    {
        return view('adminPanel/page/pageForm/pageHome/ContactFrom');
    } 
}
