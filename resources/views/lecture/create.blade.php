@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>강의추천 작성</h1>
        <hr/>
            <form method="POST" action="{{route('lecture.store')}}">
               {!! csrf_field() !!}

            <div class="from-group {{$errors->has('title') ? 'has-error' : ''}}">
                <label for="title">제목</label>
                <input type="text" name="title" id="title" value="{{old('title') }}" class="form-control"/>
                {!!  $errors->first('title', '<span class="from-error">:message</span>') !!}
            </div>

                <div class="from-group {{$errors->has('professor') ? 'has-error' : ''}}">
                    <label for="professor">교수님 성함</label>
                    <input type="text" name="professor" id="professor" value="{{old('professor') }}" class="form-control"/>
                    {!!  $errors->first('professor', '<span class="from-error">:message</span>') !!}
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
