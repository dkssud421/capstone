<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lectureController extends Controller
{
    public function  store(Request $request)
    {
        $rules =[
            'title' => ['required'],
            'content' => ['required'],
            'professor' => ['required'],
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $lecture = auth()->user()->lectures()->create($request->all());

        if(! $lecture){
            return back()->with('flash_message','글이 저장되지 않았습니다.')->withInput();
        }
        return redirect(route('lecture.index'))->with('flash_message','작성하신 글이 저장되었습니다.');
    }
    public  function create()
    {
        return view('lecture.create');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lecture =\App\lecture::latest()->paginate(10);

        return view ('lecture.index',compact('lecture')) ;
    }

    public  function show(\App\lecture $lecture)
    {
        $comments=$lecture->comments()->with('replies')->whereNull('parent_id')->latest()->get();

        return view('lecture.show',compact('lecture','comments'));
    }
}
