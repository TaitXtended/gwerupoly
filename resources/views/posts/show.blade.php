@extends('layouts.app')
@section('content')



     <div class="container mr-5 mt-5">
          
            <a href="/posts" class="btn btn-success">  <i class="icon icon-home"></i> Return</a>
          <h1>{{$post->title}}</h1>
          <p>{{$post->body}}</p>
          <hr>
          
          <small>Written on: {{$post->created_at}}</small>
          <hr>
          @if (!Auth::guest())
               @if (Auth::user()->id==$post->user_id)
                     <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

                         {{Form::hidden('_method','DELETE')}}
                         {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                   
                    {!! Form::close()!!}
               @endif
             
          @endif
          
    
     </div>


@endsection

