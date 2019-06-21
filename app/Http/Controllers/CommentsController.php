<?php

namespace App\Http\Controllers;
use App\lecture;
use App\Comment;
use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(CommentsRequest $request, lecture $lecture)
    {
        $comment = $lecture->comments()->create(array_merge(
            $request->all(),
            ['user_id' => $request->user()->id]
        ));

        return redirect(route('lecture.show', $lecture->id). '#comment_'.$comment->id);
    }
}
