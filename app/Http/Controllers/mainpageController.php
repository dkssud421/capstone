<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainpageController extends Controller
{
    public function index()
    {
        $notice = \App\notice::latest()->paginate(3);
        $club = \App\club::latest()->paginate(3);
        return view ('mainpage',compact('notice'),compact('club'));
    }
}
