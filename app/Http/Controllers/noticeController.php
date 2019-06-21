<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  store(Request $request)
    {
        $rules =[
            'title' => ['required'],
            'content' => ['required','min:6'],
        ];

        $validator = \Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $notice = \App\User::find(1)->notices()->create($request->all());

        if(! $notice){
            return back()->with('flash_message','글이 저장되지 않았습니다.')->withInput();
        }
        return redirect(route('notice.index'))->with('flash_message','작성하신 글이 저장되었습니다.');
    }
    public  function create()
    {
        return view('notice.create');
    }

    public function index()
    {
        $notice = \App\notice::latest()->paginate(10);

        return view('notice.index',compact('notice'));
    }
    public function show(\App\notice $notices)
    {
        //$article =\App\Article::findOrFail($id);
        return view('notice.show',compact('notices'));
    }

}

