<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scholarship3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('scholarship3.index',compact('scholarship3'));
    }

    public  function create()
    {
        return view('scholarship3.create');
    }
}
