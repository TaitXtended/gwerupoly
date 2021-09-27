
@extends('layouts.admin')

@section('content')
            <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="widget-content searchable-container list">
                             <h1>Departments</h1>
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                                    <form class="form-inline my-2 my-lg-0">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                            <input type="text" class="form-control product-search" id="input-search" placeholder="Search Department...">
                                        </div>
                                    </form>
                                </div>
                               
                                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                                    <div class="d-flex justify-content-sm-end justify-content-center">
                                        <h6 id="btn-add-contact">Add</h6>
                                       
                                        <div class="switch align-self-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                                    <div class="add-contact-box">
                                                        <div class="add-contact-content">

                                                            {!! Form::open(['action'=>'App\Http\Controllers\DepartmentsController@store', 'method'=>'POST','enctype'=>'multipart/form-data'])!!}

                                                                    
                                                                     <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="contact-name">
                                                                            <i class="flaticon-user-11"></i>
                                                                             {{Form::text('hod', '', ['class'=>'form-control','placeholder'=>'Head Of Department','required','autofocus'])}}
                                                                         <span class="validation-text"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="contact-email">
                                                                            <i class="flaticon-mail-26"></i>
                                                                            {{Form::text('vicehod', '', ['class'=>'form-control','placeholder'=>'Vice H.O.D','required'])}}
                                                                          <span class="validation-text"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="contact-location">
                                                                            <i class="flaticon-location-1"></i>
                                                                             {{Form::text('department', '', ['class'=>'form-control','placeholder'=>'Department Name','required'])}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                   
                                                                   
                                                                <div class="modal-footer mt-2">
                                                                    {{Form::submit('Register',['class'=>'btn btn-primary'])}}

                                                    
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

                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                  <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                  <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4>Department </h4>
                                        </div>
                                        <div class="user-email">
                                            <h4>Head of Department</h4>
                                        </div>
                                        <div class="user-location">
                                            <h4 style="margin-left: 0;">Vice</h4>
                                        </div>
                                        
                                        <div class="action-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>
                                </div>

                                @if (count($departments)>0)
                    
                        @foreach ($departments as $department)
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                  <input type="checkbox" class="new-control-input contact-chkbox">
                                                  <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            {{-- <img src="assets/img/profile-29.jpg" alt="avatar"> --}}
                                            <div class="user-meta-info ml-5">
                                                <p class="user-name" data-name="{{$department->department}}">{{$department->department}}</p>
                                                {{-- <p class="user-work" data-occupation="Web Developer">Web Developer</p> --}}
                                            </div>
                                        </div>
                                        
                                        <div class="user-email">
                                            <p class="info-title">H.O.D: </p>
                                            <p class="usr-email-addr" data-location="{{$department->hod}}">{{$department->hod}}</p>
                                        </div>
                                        <div class="user-location">
                                            <p class="info-title">Vice H.O.D: </p>
                                            <p class="usr-location" data-phone="{{$department->vicehod}}">{{$department->vicehod}}</p>
                                        </div>
                                        <div class="actionbtn">
                                            <a href="/departments/{{$department->id}}/edit" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 "><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                            <a href="/departments/{{$department->id}}/delete" onClick="return confirm('Are you sure you want to delete?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus  "><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg></a>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                   </table>
                @else
                <p>You have no departments yet..... click the add button to create a department</p>
                   
                @endif

                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>





























@endsection
