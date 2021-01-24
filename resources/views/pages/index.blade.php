@extends('layouts.app')
  
@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <a href="login" class="btn btn-primary btn-log">login</a>
    <a href="register" class="btn btn-success btn-log">Register</a>
</div>
    
@endsection