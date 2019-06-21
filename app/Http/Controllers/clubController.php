<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clubController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  store(Request $request,\App\User $user)
    {
        $rules =[
            'title' => ['required'],
            'content1' => ['required','min:10'],
            'content2' => ['required','min:10'],
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $club = auth()->user()->clubs()->create(array_merge($request->all(),['user_id' => $request->user()->id]));

        if(! $club){
            return back()->with('flash_message','글이 저장되지 않았습니다.')->withInput();
        }
        return redirect(route('club.index'))->with('flash_message','작성하신 글이 저장되었습니다.');
    }
    public  function create(\App\User $user)
    {
        return view('club.create',compact('user'));
    }

    public function index()
    {
        $club = \App\club::latest()->paginate(10);

        return view('club.index',compact('club'));
    }
    public function show(\App\club $clubs )
    {
        //$article =\App\Article::findOrFail($id);
        return view('club.show',compact('clubs'));
    }

}
