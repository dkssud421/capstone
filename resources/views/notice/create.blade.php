@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>공지사항 작성</h1>
        <hr/>
            <form method="POST" action="{{route('notice.store')}}">
               {!! csrf_field() !!}

            <div class="from-group {{$errors->has('title') ? 'has-error' : ''}}">
                <label for="title">제목</label>
                <input type="text" name="title" id="title" value="{{old('title') }}" class="form-control"/>
                {!!  $errors->first('title', '<span class="from-error">:message</span>') !!}
            </div>

            <div class="from-group {{$errors->has('content') ? 'has-error' : ''}}">
                <label for="content">본문</label>
                <textarea name="content" id="content" rows="10" class="from-control">{{ old('content') }}</textarea>
                {!!  $errors->first('content', '<span class="from-error">:message</span>') !!}
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    저장하기
                </button>
            </div>
        </form>
    </div>
@stop
