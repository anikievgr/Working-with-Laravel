<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class GalleryController extends Controller
{
    public function gallery(){
        
      $img =[];
        $i = 0;
        $gallerea = array();
          $catygories = Category::all();
        $items = $catygories;
        foreach ($catygories as $key => $catygories){
            $i = 0;
            foreach($catygories->posts as $image){
                $img[$i] = $image['image'];
                 $i++;
            }
            $gallerea[$catygories['title']]['id'] = $catygories['id'];
            $gallerea[$catygories['title']]['id'] = $catygories['id'];
            $gallerea[$catygories['title']]['image'] = $img;

        }
    //     foreach ($gallerea as $key => $value) {
    //         echo $value['id'];
    //         echo '<pre>';
    //         foreach ($value['image'] as  $imge) {
    //             echo $imge;
    //             echo '</br>';
    //         }
    //         //var_dump($value['image']);
    //         echo '</pre>';
            
    //     }
    // dd($gallerea);
      return view('adminPanel/page/pageForm/pagehome/galerea', compact('items', 'gallerea'));
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
        
              return redirect('/admin/pageHome/openAdminGalerea'); 

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
