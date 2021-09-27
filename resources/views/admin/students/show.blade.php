@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Student Profile</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="widget ">
                 <div class="ml-5">
                      <img src="/storage/studentprofile/{{$student->profilephoto}}"style="height:100px;width:100px;border-radius:50%;" class="mt-5 ml-5">
                <div class="card-body">
                    <h1>{{$student->fname.' '.$student->surname}}</h1>
                    <p>Email: {{$student->email}}</p>
                    <p>Reg Num: {{$student->regnum}}</p>
                    <p>Course: {{$student->coursename}}</p>
                    <p>Level: {{$student->level}}</p>
                    <p>Mode: {{$student->studymode}}</p>
          <small>Enrolled on: {{$student->created_at}}</small>
          <hr>
          @if (!Auth::guest())
               {{-- @if (Auth::user()->id==$student->user_id) --}}
                     <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    {{-- {!! Form::open(['action'=>['App\Http\Controllers\studentsController@destroy',$student->id], 'method'=>'POST', 'class'=>'pull-right'])!!}

                         {{Form::hidden('_method','DELETE')}}
                         {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                   
                    {!! Form::close()!!} --}}
               {{-- @endif --}}
             
          @endif
                    
                      
                 </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
