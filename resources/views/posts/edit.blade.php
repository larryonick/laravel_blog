@extends('layouts.app')
@section('content')
<h1>Edit Post</h1>

{!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'POST']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title')}}  
    {{Form::text('title', $post->title, ['class'=>'form-control'])}}
  
  </div>  

  <div class="form-group">
      {{Form::label('body', 'Body')}}  
      {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>''])}}
  </div>  
  {{Form::hidden('_method', 'PUT')}}
  {{Form::submit('Submit', ['id'=>'article-ckeditor','class'=>'btn btn-primary btn-lg'])}}
{!! Form::close() !!}
@endsection