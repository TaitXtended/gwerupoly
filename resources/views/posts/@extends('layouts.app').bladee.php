@extends('layouts.app')
@section('content')
<h1 class="center">CREATE POST</h1>
{!! Form::open()!!}
     <div class="form-group">
          {{Form::label('title','Title')}}
          {{Form::text('title','',['classes'=>'col-md-4 col-form-label text-md-right', 'placeholder'=>'Title..'])}}
       
     </div>
{!! Form::close()!!}

@endsection

