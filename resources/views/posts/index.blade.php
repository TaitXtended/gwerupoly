@extends('layouts.app')
@section('content')
<h1 class="center">POSTS</h1>
@if (count($posts)>0)

     <div class="card">
          <ul class="list-group list-group-flush">
               
@foreach ($posts as $post)
<li class="list-group-item">
            
          <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
          <small>Written on: {{$post->created_at}}</small>
     </li>
    
@endforeach
       
          </ul>
          </div>
@else
    
@endif

@endsection

