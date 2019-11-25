@extends('layouts.app')
@section('content')
  
  <h6 class="display-4">Posts</h6>
    @if(count($posts) > 0)
      @foreach ( $posts as $post )
        <div class="well mb-4">
        <h6 class="text-success"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h6>
          <small> Written On: {{$post['created_at']}}</small>
        </div>
      @endforeach
     {{$posts->links()}}
    @else
    <div class="jumbotron">
        <h6 class="display-4 text-danger text-center">No Posts Found</h6>

    </div>
     
    @endif  
@endsection