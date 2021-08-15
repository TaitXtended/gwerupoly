@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Create Post') }}</div>

                <div class="card-body">
                     
                    {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                         <div class="form-group row">
                              {{Form::label('title','Title:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6">
                                   {{Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title..','autofocus'])}}
                              </div>
                         </div>

                         <div class="form-group row">
                              {{Form::label('body','Body:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6 ">
                                   {{Form::textarea('body', '', ['class'=>'form-control','placeholder'=>'Your blog..'])}}
                              </div>
                         </div>
                          <div class="form-group row">
                             <div class="col-md-4"></div>
                                  <div class="col-md-6 ">
                                   {{Form::file('avatar',['class'=>'form-control'])}}
                                </div> 
                             
                         </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {{Form::submit('Post',['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
