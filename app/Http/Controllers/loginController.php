<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class loginController extends Controller
{
   /* use AuthenticatesUsers;*/
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function  index()
    {
        return view ('login');
    }
}