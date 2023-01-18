@extends('layouts.frontend.main')

@section('title', 'Home')

@section('content')
    
<div>
        <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6 col-lg-5">
                                <div class="detail-box">
                                    <h1>
                                    Car Repair <br>
                                    And Maintenance
                                    </h1>
                                    <p>
                                        Mobil anda rusak disitulah saya bersenang-senang
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <div class="img-box">
                                    <img src="{{ asset('frontend/images/slider-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">

                        <div class="col-md-6 col-lg-7">
                        <div class="img-box">
                            <img src="{{ asset('frontend/images/slider-img.png') }}" alt="">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                    <div class="detail-box">
                        <h1>
                        Car Repair <br>
                        And Maintenance
                        </h1>
                        <div class="btn-box">
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                    <div class="img-box">
                        <img src="{{ asset('frontend/images/slider-img.png') }}" alt="">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end slider section -->

    <!-- service section -->

    <section class="service_section ">
        <div class="container">
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                <div class="img-box">
                    <img src="{{ asset('frontend/images/s5.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                <div class="img-box">
                    <img src="{{ asset('frontend/images/s6.png') }}" alt="">
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                <img src="{{ asset('frontend/images/about-img.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                <div class="heading_container">
                    <h2>
                    About Us
                    </h2>
                </div>
                <p>
                    Berawal dari suka mobil lama-lama mencoba jadi pawang mobil.
                </p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- why section -->

    <section class="why_section ">
        <div class="container">
            <div class="heading_container heading_center">
            <h2>
                Why Choose Us
            </h2>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box ">
                    <div class="img-box">
                        <img src="{{ asset('frontend/images/w1.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                        Best Workers
                        </h4>
                        <p>
                        Generators on the Internet tend to repeat predefined chunks as necessary
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto ">
                    <div class="box ">
                    <div class="img-box">
                        <img src="{{ asset('frontend/images/w2.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                        Best Materials
                        </h4>
                        <p>
                        Generators on the Internet tend to repeat predefined chunks as necessary
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box ">
                    <div class="img-box">
                        <img src="{{ asset('frontend/images/w3.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                        Best Service
                        </h4>
                        <p>
                        Generators on the Internet tend to repeat predefined chunks as necessary
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end why section -->




</div>

@endsection
