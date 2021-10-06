<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name') }} </title>
    {{-- <link rel="icon" type="image/x-icon" href="/img/favicon.ico"/> --}}
    <link href="{{asset('css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('css/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme-checkbox-radio.css')}}">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/contacts.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
      <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


</head>
<body >
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
        <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center mr-5">
                 <li class="nav-item theme-logo">
                    <a href="/home" > <h3>{{ config('app.name') }} </h3></a>
                   
                </li>
            </ul>

         

            <ul class="navbar-item flex-row ml-md-auto">


                <li class="nav-item ">
                    
                    <li class="menu">
                        <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            {{ Auth::user()->name }}
                            
                            
                        </a>
                        <ul class="collapse submenu list-unstyled" id="auth" data-parent="#accordionExample">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> </a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->
    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Admin</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            
        </header>
    </div>
    <!--  END NAVBAR  -->
 <div class="main-container" id="container">
<!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="/home"  aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            
                        </a>
                        
                    </li>

                     <li class="menu">
                        <a href="#students" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Students</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="students" data-parent="#accordionExample">
                            <li>
                                <a href="/students"> Manage Students </a>
                            </li>
                            <li>
                                <a href="/students/create"> Register Student </a>
                            </li>
                        </ul>
                    </li>
                     <li class="menu">
                        <a href="#lecturers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Lecturers</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="lecturers" data-parent="#accordionExample">
                            <li>
                                <a href="/lecturers"> Manage Lectures </a>
                            </li>
                            <li>
                                <a href="/lecturers/create"> Register Lecturer </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#departments" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>Departments</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="departments" data-parent="#accordionExample">
                            <li>
                                <a href="/departments">Manage Departments </a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>
                     
                    <li class="menu">
                        <a href="#levels" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span>Levels</span>
                            </div>
    
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="levels" data-parent="#accordionExample">
                            <li>
                                <a href="/departments">Manage Departments </a>
                            </li>
                            <li>
                                <a href="/departments/create"> Add Departments </a>
                            </li>
                            
                            
                        </ul>
                    </li>

                     <li class="menu">
                        <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Courses</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="courses" data-parent="#accordionExample">
                            <li>
                                <a href="/courses">Manage Courses </a>
                            </li>
                           
                            
                            
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#notice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Notice Board</span>
                            </div>

                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="notice" data-parent="#accordionExample">
                            <li>
                                <a href="/notices">Manage Notices </a>
                            </li>
                            <li>
                                <a href="/notices/create"> Add Notice </a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    

                    
                </ul>
                 <div class="shadow-bottom"></div>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        
    <!--  BEGIN MAIN CONTAINER  -->
   
        <div id="content" class="main-content">
        <main class="container">
            @yield('content')
        
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Gweru Polytechnic by Tatenda Marvelous Chimusoro</a>
</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">maveloustchimusoro@gmail.com</p>
                </div>
            </div>
            </main>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/functionality.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('js/highlight.pack.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('js/scrollspyNav.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
        
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{asset('js/custom-counter.js')}}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('js/apexcharts.min.js')}}"></script>
    <script src="{{asset('js/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
</body>

</html>