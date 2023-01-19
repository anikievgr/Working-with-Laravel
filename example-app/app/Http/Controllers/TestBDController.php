<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class TestBDController extends Controller
{
    public function index()
    {
        $irems = Slide::all(['id']);
        dd($irems);
    }
}
