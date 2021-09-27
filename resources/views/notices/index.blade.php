@extends('layouts.admin')
@section('content')
<h1 class="center">Notice Board</h1>
@if (count($notices)>0)

     <div >
          <ul class="list-  list- -flush">
               
@foreach ($notices as $notice)
<li class="list-group -item">
            
          <h2><a href="/notices/{{$notice->id}}">{{$notice->notice}}</a></h2>
          <small>Written on: {{$notice->created_at}}</small>
     </li>
    
@endforeach
       
          </ul>
          </div>
@else
    <p>you have 0 notices</p>
@endif

@endsection

