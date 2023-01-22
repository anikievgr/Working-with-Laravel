<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class WorkWithBDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Slide::all();
        return view('form', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'crest';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = $request->file('image')->store('uploads', 'public');
        //return view('form', ['path' => $path]);
        //$items = $request->input('title');
        $items = [
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'image' => $path,
        ];

        Slide::create($items);
        return redirect()->back(); 
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
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $itemUpdate =   $request->all();
        $items = Slide::query()->find($id);
        //dd($itemUpdate );
        if (array_key_exists('image', $itemUpdate)) {
            Storage::disk('public')->delete($items['image']);
            $path = $request->file('image')->store('uploads', 'public');
            $itemUpdate['image'] = $path;
            //dd($itemUpdate);

            $items -> update(  $itemUpdate);
           // dd($itemUpdate,'y');  
        } else {
              $items -> update(  $itemUpdate);
            //dd($itemUpdate,'n');
        }
                
            return Redirect::route('adminSlider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                return 'destroy';

    }
}
