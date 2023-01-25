<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        $gallerea = [
           'category' => [
                'name',
                'image'
           ]

        ];
        $img =[];
          $catygories = Category::all();
        foreach ($catygories as $catygories){
             $gallerea['category']['name'] = $catygories['title'];
            foreach($catygories->posts as $image){
                echo '</br>';
                $img = $image['image'];
            }
            
            $gallerea['category']['image'] = $img;
            echo '<pre>';
              var_dump($gallerea);
                          echo '</pre>';
        }
      
      
       // dd($catygories);
      
       //dd($catygories['posts']);
      // return view('adminPanel/page/pageForm/pagehome/galerea');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
