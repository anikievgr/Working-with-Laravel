<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
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
        $id = $request['id'];
        $userAdd = Mail::find($id);
        $numAlpha = 4; $numDigit = 2; $numNonAlpha = 2;
        $listAlpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $listDigits = '0123456789';
        $listNonAlpha = ',;:!?.$/*-+&@_+;./*&?$-!,';
        $password  = str_shuffle(
            substr(str_shuffle($listAlpha), 0, $numAlpha) .
            substr(str_shuffle($listDigits), 0, $numDigit) .
            substr(str_shuffle($listNonAlpha), 0, $numNonAlpha)
        );
        $userAdd['password'] =  Hash::make($password );

        dd($userAdd);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $userAdd = Mail::find($id);
        $numAlpha = 4; $numDigit = 2; $numNonAlpha = 2;
        $listAlpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $listDigits = '0123456789';
        $listNonAlpha = ',;:!?.$/*-+&@_+;./*&?$-!,';
        $password  = str_shuffle(
            substr(str_shuffle($listAlpha), 0, $numAlpha) .
            substr(str_shuffle($listDigits), 0, $numDigit) .
            substr(str_shuffle($listNonAlpha), 0, $numNonAlpha)
        );
        $userAdd['password'] =  Hash::make($password );

  dd($userAdd,       $password);

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
