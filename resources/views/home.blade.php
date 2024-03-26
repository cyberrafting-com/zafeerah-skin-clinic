@php($title = 'Zafeerah Skin Clinic')
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
                <source src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-video.mp4') }}" type="video/mp4">
            </video>

            <video id="carouselExampleControls" width="100%" autoplay="" muted="" loop=""
                class="background-clip mobile-video">
                <source src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-mobile.mp4') }}" type="video/mp4">
            </video>

            <div class="content-overview">
                <h1>Welcome To <br>
                    Zafeerah Skin Clinic</h1>
                <p>Illuminate Your Beauty</p>
                <a href="#">Call Now</a>
            </div>
        </div>
    </section>



    <section id="about" class="about-section pt-100 pb-70">
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
                            Zafeerah Skin Clinic
                            <span></span>
                        </h2>
                        <p class="text">
                            Zafeerah Skin Clinic is the most ultimate option to get most reliable and reasonable skin & hair
                            treatment in Mumbai. We understand that everyone is different, and so is the body & skin type,
                            thus we aim to put all our experience & efforts in conveying the best achievable treatment
                            approach. We believe in giving fast & effective skin & hair treatment using the latest
                            technology.

                        </p>
                        <p class="text">Our 360 approach to providing solutions to skin & hair problems ensures that our
                            skin & hair treatments are safe and efficient.

                        </p>
                        <ul class="content-list">
                            <li>
                                <h6>Personalized care solutions.
                                </h6>
                            </li>
                            <li>
                                <h6>Latest tech results.
                                </h6>
                            </li>
                            <li>
                                <h6>Skilled experts advice.
                                </h6>
                            </li>
                            <li>
                                <h6>Whole-body approach benefits.
                                </h6>
                            </li>
                            <li>
                                <h6>Wide services remedies.
                                </h6>
                            </li>
                            <li>
                                <h6>Client satisfaction priority.
                                </h6>
                            </li>
                        </ul>
                        <a href="#" class="primary-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img src="{{ asset('/resources/assets/images/shape1.png') }}" alt="Shape Image">
            <img src="{{ asset('/resources/assets/images/line1.png') }}" alt="Shape Image">
        </div>
    </section>

     {{-- separet section service start --}}
     <section id="service" class="service-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col p-0">
                    <div class="card">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/service/service3.jpg') }}" alt="Demo Image">
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">Hair </a></h3>
                            {{-- <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy.
                            </p> --}}
                            <div class="hover-content">
                                <a href="#" class="primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="card">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/service/service4.jpg') }}" alt="Demo Image">
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">Skin</a></h3>
                            {{-- <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy.
                            </p> --}}
                            <div class="hover-content">
                                <a href="#" class="primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-0">
                    <div class="card">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/service/service1.jpg') }}" alt="Demo Image">
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">Body</a></h3>
                            {{-- <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy.
                            </p> --}}
                            <div class="hover-content">
                                <a href="#" class="primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col p-0">
                    <div class="card">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/service/service2.jpg') }}" alt="Demo Image">
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">Cosmetic Dermatology</a></h3>
                            {{-- <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy.
                            </p> --}}
                            <div class="hover-content">
                                <a href="#" class="primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                {{-- <div class="col p-0">
                    <div class="card">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/service/service5.jpg') }}" alt="Demo Image">
                        </div>
                        <div class="content">
                            <h3 class="title"><a href="#">Anti-Ageing</a></h3>
                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy.
                            </p>
                            <div class="hover-content">
                                <a href="#" class="primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- separet section service end --}}

    {{-- treatment section start --}}
    <section id="gallery" class="gallery-section pt-100">
        <div class="container">
            <div class="section-title">
                <h2>Services & Treatments<span></span></h2>
            </div>
            <div class="nav-tabs-navigation">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="spa-tab" data-bs-toggle="tab" href="#tab1" role="tab"
                            aria-controls="tab1" aria-selected="true">Hair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hair-tab" data-bs-toggle="tab" href="#tab2" role="tab"
                            aria-controls="tab2" aria-selected="false">Eye</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="makeup-tab" data-bs-toggle="tab" href="#tab3" role="tab"
                            aria-controls="tab3" aria-selected="false">Body</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cosmetic-tab" data-bs-toggle="tab" href="#tab4" role="tab"
                            aria-controls="tab4" aria-selected="false">Cosmetic Dermatology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="anti-ageing-tab" data-bs-toggle="tab" href="#tab6" role="tab"
                            aria-controls="tab6" aria-selected="false">Skin</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="spa-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Computerized Hair Analysis</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Alopecia Areata</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Mesotherapy</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Platelet Rich Plasma Therapy (prp)</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Laser Hair Grow(prp)</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Hair Transplantation (prp)</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="hair-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Dark Circle Reduction</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Laser Eye Wrinkle Reduction</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Eye Bag Correction</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Blepharoplasty (Eyelid Surgery)</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Crows Feet</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Facial Treatment</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="makeup-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Body Shaping & Sculpting</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Liposuction</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Body Contouring</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Fat Transfer & Grafting</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Stretch Mark Removal</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Facial Treatment</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="cosmetic-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Laser Hair Removal Clinic</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Skin Brightening</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Laser Tattoo Removal</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Moles And Skin Tag Removal</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Botox</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Facial Treatment</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="skin-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Super Specialty Dermatology</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Vitiligo Clinic</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Acne Scars & Pigmentation Clinic</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Warts</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Botox</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Facial Treatment</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="anti-ageing-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">3D Face Lift</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Skin Tightening Medifacial</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">HIFU</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Ultherapy</a></h3>
                                   <p></p>
                                    <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Botox</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg')}}" alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Facial Treatment</a></h3>
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </p>
                                     <a href="#"> <span class="price">Know More</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- treatment section end --}}
   





@stop
