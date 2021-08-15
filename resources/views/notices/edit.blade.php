@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Update Notice') }}</div>

                <div class="card-body">
                     
                    {!! Form::open(['action'=>['App\Http\Controllers\NoticesContoller@update',$notice->id], 'method'=>'POST'])!!}

                         

                         <div class="form-group row">
                              {{Form::label('body','Body:',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                   
                              <div class="col-md-6">
                                   {{Form::textarea('notice', $notice->notice, ['class'=>'form-control'])}}
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
