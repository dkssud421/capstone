@extends('layouts.app')

@section('content')
    <div class="page=header">
        <h4>포럼<small>/{{$lecture->title}}</small></h4>
    </div>
    <article>
        @include('articles.partial.article', compact('article'))
        <p>{{$lecture->content}}</p>
    </article>
    <div class="col-md-9">
        <div class="container__comment">
            @include('comments.index')
        </div>
    </div>
@stop