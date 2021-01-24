@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

   {!! Form::open(['action' => ['PostController@update', $posts->id], 'method' => 'POST']) !!}
       <div class="form-group">
           {{ Form::label('title', 'Title') }}
           {{ Form::text('title', $posts->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
       </div>
       <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', $posts->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' =>'btn btn-success'])}}
    {!! Form::close() !!}
@endsection 




