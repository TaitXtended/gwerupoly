@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Create Post') }}</div>

                <div class="card-body">
                   {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method'=>'POST'])!!}
                         <div class="form-group">
                              {{Form::label('title','Title')}}
                              {{Form::text('body', '', ['class'=>''])}}
                              
                         </div>
                         {{Form::submit('Post')}}
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
