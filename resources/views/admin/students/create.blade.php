@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Student Registration</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="widget">
                
                <div class="card-body">
                     
                    {!! Form::open(['action'=>'App\Http\Controllers\StudentsController@store', 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                          <div class="form-group row">
                              {{Form::label('fname','Student Name:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('fname', '', ['class'=>'form-control','placeholder'=>'Student Name','required','autofocus'])}}
                              </div>
                         </div>

                         <div class="form-group row">
                              {{Form::label('surname','Student Surname:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('surname', '', ['class'=>'form-control','placeholder'=>'Student Surname','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('email','Student Email:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::email('email', '', ['class'=>'form-control','placeholder'=>'Student Email','required'])}}
                              </div>
                         </div>
                          <div class="form-group row">
                              {{Form::label('regnum','Student Reg No:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('regnum', '', ['class'=>'form-control','placeholder'=>'Student Reg No','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('cname','Course Name:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('cname', '', ['class'=>'form-control','placeholder'=>'Course Name','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('level','Level:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('level', '', ['class'=>'form-control','placeholder'=>'Level','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('smode','Study Mode:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('smode', '', ['class'=>'form-control','placeholder'=>'Study Mode','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('pass','Password:',['class'=>'col-md-4 col-form-label text-md-right','required'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('pass', '', ['class'=>'form-control','placeholder'=>'Password','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                               {{Form::label('pic','Profile Photo:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                             
                              <div class="col-md-6 ">
                                   {{Form::file('pic',  ['class'=>'form-control'])}}
                              </div>
                         </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{Form::submit('Register',['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
