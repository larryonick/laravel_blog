@extends('layouts.app')
@section('content')
<h1>Create Post</h1>

{!! Form::open(['action'=>'PostsController@store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title')}}  
    {{Form::text('title', '', ['class'=>'form-control'])}}
  
  </div>  

  <div class="form-group">
      {{Form::label('body', 'Body')}}  
      {{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Enter Body Text'])}}
  </div>  
  {{Form::submit('Submit', ['id'=>'article-ckeditor','class'=>'btn btn-primary btn-lg'])}}
{!! Form::close() !!}
@endsection