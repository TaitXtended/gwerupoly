@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Student Profile Update</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                     
                    {!! Form::open(['action'=>['App\Http\Controllers\DepartmentsController@update',$department->id], 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                          < <div class="form-group row">
                              {{Form::label('hod','Head Of Department:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('hod', $department->hod, ['class'=>'form-control','placeholder'=>'Head Of Department','required','autofocus'])}}
                              </div>
                         </div>

                         <div class="form-group row">
                              {{Form::label('vicehod','Vice Head Of Department:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('vicehod',$department->vicehod, ['class'=>'form-control','placeholder'=>'Vice Head Of Department','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('department','Department Name:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                             
                              <div class="col-md-6 ">
                                   {{Form::text('department', $department->department, ['class'=>'form-control','placeholder'=>'Department Name','required'])}}
                              </div>
                         </div>
                      

                         {{Form::hidden('_method','Put')}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{Form::submit('Update',['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
