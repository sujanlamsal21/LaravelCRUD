@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$posts->title}}</h1>
<small>Written on {{$posts->created_at}}</small> 
<div>
    
    {{$posts->body}}
</div>
<hr>
<a href="{{route('home')}}">home</a>
<a href="{{$posts->id}}/edit" class="btn btn-success" class="pull-left">Edit</a> 
 {!!Form::open(['action' => ['PostController@destroy', $posts->id], 'method' => 'POST', 'style'=>'float:right'])!!}
         {{Form::hidden('_method', 'DELETE')}}
         {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
 {!!Form::close() !!}
@endsection

