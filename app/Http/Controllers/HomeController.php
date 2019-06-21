<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $notice = \App\notice::latest()->paginate(3);
        $club = \App\club::latest()->paginate(3);
        return view('home',compact('notice'),compact('club'));
    }
}
