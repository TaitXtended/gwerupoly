
@extends('layouts.admin')

@section('content')
            <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="widget-content searchable-container list">
                            
                               
                               

                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true"> --}}
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                   
                                                    <div class="add-contact-box">
                                                        <div class="add-contact-content">

                                                            {!! Form::open(['action'=>['App\Http\Controllers\LevelsController@update',$level->id], 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                                                                    
                                                                     <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="contact-name">
                                                                            <i class="flaticon-user-11"></i>
                                                                             {{Form::text('level', $level->level, ['class'=>'form-control','placeholder'=>'Level ','required','autofocus'])}}
                                                                         <span class="validation-text"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="contact-email">
                                                                            <i class="flaticon-mail-26"></i>
                                                                            {{Form::select('course', $courses,null, ['class'=>'form-control','style'=>'padding:5px;','required'])}}
                                                                          <span class="validation-text"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="contact-location">
                                                                            <i class="flaticon-location-1"></i>
                                                                             {{Form::text('qualifications', $level->qualifications, ['class'=>'form-control','placeholder'=>'Minimum Qualifications','required'])}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="contact-location">
                                                                            <i class="flaticon-location-1"></i>
                                                                             {{Form::text('modules', $level->modules, ['class'=>'form-control','placeholder'=>'Course Modules','required'])}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                   
                                                                    {{Form::hidden('_method','Put')}}
                                                                <div class="modal-footer mt-2">
                                                                    {{Form::submit('Update',['class'=>'btn btn-primary'])}}

                                                    
                                                                </div>
    
                                                                {!! Form::close()!!}
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                                


                                
                            
                    </div>
                </div>
            </div>

@endsection
