<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){

        $items = Category::pluck('title','id');

       //dd($items);
      return view('adminPanel/page/pageForm/pagehome/galerea', compact('items'));
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
 //       dd($request->all());
            if (!empty($request['new-categori'])){
                $title = [
                    'title' =>   $request['new-categori']
                ];
                //dd('n');
                $newCategori  = $request['new-categori'];
                //dd($id);
                $data = Category::create($title);

                $id = $data['id'];
                //$id= Category::where('title', $newCategori)->pluck('id');
            //    $id = $id[0];

            }else{
                $id = $request['select'];

            }
            //dd($id);
            $path = $request->file('image')->store('uploads', 'public');
            $post = [
                'image' =>   $path,
                'categoty_id' => $id
            ];
            Post::create($post);

            dd( $post );





        return view('adminPanel/page/pageForm/pagehome/galerea');

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
