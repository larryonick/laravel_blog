@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-danger">Go Back</a>
<h6 class="display-4">{{$post->title}}</h6>
<div>{{$post->body}}</div>
<hr>
<small>Written On: {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg">Edit</a>

{!!Form::open([
  'action'=>['PostsController@destroy', $post->id],'method' =>'POST',
  'class'  =>'float-right'])!!}
  {{Form::hidden('_method', 'DELETE')}}
  {{Form::submit('DELETE', ['class'=>'btn btn-danger '])}}
  {!!Form::close()!!}
@endsection