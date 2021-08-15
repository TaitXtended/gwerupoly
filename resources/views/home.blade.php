@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
            <div class="bradcumbContent">
                <h2>Admin Notice Board </h2>
            </div>
        
        </div>
     
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                   
@if (count($notices)>0)

     <div class="card">
          <ul class="list-group list-group-flush">
               
@foreach ($notices as $notice)
<li class="list-group-item">
            
          <p>{{$notice->notice}}</p>
          <small>Written on: {{$notice->created_at}}</small>
     </li>
     @if (!Auth::guest())
               {{-- @if (Auth::user()->id==$post->user_id) --}}
                     <a href="/notices/{{$notice->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action'=>['App\Http\Controllers\NoticesContoller@destroy',$notice->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

                         {{Form::hidden('_method','DELETE')}}
                         {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                   
                    {!! Form::close()!!}
               {{-- @endif --}}
             
          @endif
@endforeach
       
          </ul>
          </div>
@else
    
@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
