<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body style="background-image:linear-gradient(#593cda65, #568bee2a)">
    <div id="app">
           <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo mb-1">
                                <a href="index.html"><img src="/img/core-img/logo.png" alt=""></a>
                            </div>
                           
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
         <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav" >

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/mission">Mission</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/history">History</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                                   
                
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center pt-3 pl-5">
                                
                             <div>
                                 <a  href="{{ route('login') }}"><option >{{ __('Login') }}</option></a>
                                        
                                        <option ><a  href="{{ route('register') }}">{{ __('Register') }}</a></option>
                             </div>
                                       
                                   
                                

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

            
        <main class="py-4">
            @yield('content')
        </main>

        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Gweru Polytechnic by Tatenda Marvelous Chimusoro</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
</body>

</html>
