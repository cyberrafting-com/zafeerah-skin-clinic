@php($title = '')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')

    {{-- <div id="home" class="home-banner-area">
        <div class="container-fluid p-0">
            <div class="banner-slider owl-carousel">
                <div class="slider-item item-one">
                    <div class="container">
                        <div class="banner-content">
                            <h1 class="title">
                                Massage Treatment
                                <span></span>

                            </h1>
                            <p class="text">
                                It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.
                            </p>
                            <div class="btn-group">
                                <a href="#" class="primary-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item item-two">
                    <div class="container">
                        <div class="banner-content">
                            <h1 class="title">
                                Facial Treatment
                                <span></span>
                            </h1>
                            <p class="text">
                                It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.
                            </p>
                            <div class="btn-group">
                                <a href="#" class="primary-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item item-three">
                    <div class="container">
                        <div class="banner-content">
                            <h1 class="title">
                                Cellulite Removal
                                <span></span>
                            </h1>
                            <p class="text">
                                It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout.
                            </p>
                            <div class="btn-group">
                                <a href="#" class="primary-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div> --}}
    <section class="slider style_four nav_position_one">

        <div class="container-fluid">

            <video id="carouselExampleControls" width="100%" autoplay="" muted="" loop=""
                class="background-clip desk-video">
                <source
                    src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-video.mp4') }}"
                    type="video/mp4">
            </video>

            <video id="carouselExampleControls" width="100%" autoplay="" muted="" loop=""
                class="background-clip mobile-video">
                <source
                    src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-mobile.mp4') }}"
                    type="video/mp4">
            </video>

            <div class="content-overview">
                <h1>Welcome To <br>
                    Zafeerah Skin Clinic</h1>
                <p>Illuminate Your Beauty</p>
                <a href="#">Call Now</a>
            </div>
        </div>
    </section>



    {{-- <section id="about" class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image mb-30">
                        <img src="{{ asset('/resources/assets/images/about/about1.jpg') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content mb-30">
                        <h2 class="title">
                            Story Behind Beauty
                            <span></span>
                        </h2>
                        <p class="text">
                            It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English.
                        </p>
                        <ul class="content-list">
                            <li>
                                <h6>Quality Products Ensure</h6>
                            </li>
                            <li>
                                <h6>Updated Technologies</h6>
                            </li>
                            <li>
                                <h6>Quick Customer Services</h6>
                            </li>
                            <li>
                                <h6>Quality Services Ensure</h6>
                            </li>
                            <li>
                                <h6>Spa Specializing</h6>
                            </li>
                            <li>
                                <h6>Professional Team</h6>
                            </li>
                        </ul>
                        <a href="about.html" class="primary-btn">Discover</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img src="{{ asset('/resources/assets/images/shape1.png') }}" alt="Shape Image">
            <img src="{{ asset('/resources/assets/images/line1.png') }}" alt="Shape Image">
        </div>
    </section> --}}





@stop
