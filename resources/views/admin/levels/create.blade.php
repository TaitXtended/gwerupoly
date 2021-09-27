@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="breadcumb-area bg-img mb-5" style="background-image: url(/storage/img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Create Level</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                     
                    {!! Form::open(['action'=>'App\Http\Controllers\LevelsController@store', 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                          <div class="form-group row">
                              {{Form::label('course','Course :',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::select('course', $courses,null, ['class'=>'form-control','placeholder'=>' ','required','autofocus'])}}
                              </div>
                         </div>

                         <div class="form-group row">
                              {{Form::label('level','Level:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::text('level', '', ['class'=>'form-control','placeholder'=>'Level','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('qualifications','Qualifications:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                             
                              <div class="col-md-6 ">
                                   {{Form::textarea('qualifications', '', ['class'=>'form-control','placeholder'=>'Qualifications','required'])}}
                              </div>
                         </div>
                         <div class="form-group row">
                              {{Form::label('modules','Modules:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                             
                              <div class="col-md-6 ">
                                   {{Form::textarea('modules', '', ['class'=>'form-control','placeholder'=>'Modules','required'])}}
                              </div>
                         </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{Form::submit('Create',['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
