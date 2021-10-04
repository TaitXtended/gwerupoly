@extends('layouts.app')
@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area mt-0">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image:linear-gradient(#593cda65, #568bee2a), url(/img/bg.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center" style="text-align: center;">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Flexible Diploma <i class="icon icon-bucket"></i> Programmes</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Welcome to  <br>Gweru Polytechnic</h2>
                                <a href="/about" class="btn academy-btn " style="background: linear-gradient(#593cda, #568bee);" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: linear-gradient(#593cda65, #568bee2a),url(/img/stud.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content " style="text-align: center;">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Excellent Courses Offered</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Leaders of  <br>Tetiary Education </h2>
                                <a href="/about" class="btn academy-btn" style="background: linear-gradient(#593cda, #568bee);" data-animation="fadeInUp" data-delay="700ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
@endsection