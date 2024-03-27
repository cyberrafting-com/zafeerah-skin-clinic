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
                        <a href="#" class="primary-btn abt-btn">Know More</a>
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
                            <img src="{{ asset('/resources/assets/images/service/service3.jpg') }}" alt="">
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
                            <img src="{{ asset('/resources/assets/images/service/service4.jpg') }}" alt="">
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
                            <img src="{{ asset('/resources/assets/images/service/service1.jpg') }}" alt="">
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
                            <img src="{{ asset('/resources/assets/images/service/service2.jpg') }}" alt="">
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

    {{-- why choose us start --}}
    <section id="service" class="service-section-four pt-70 ">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us<span></span></h2>
            </div>
            {{-- <div class="section-title style-two">
                <h2 class="title">Why Choose Us
                    <span></span>
                </h2>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that.
                </p>
            </div> --}}
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card mb-30">
                        <div class="icon">
                            <img src="{{ asset('/resources/assets/images/safe-procedur.png') }}" alt="">

                        </div>
                        <div class="content">
                            <h3 class="title txt-chose">
                               Safe Procedures 
                            </h3>
                            <p class="text">
                                Quality equipment for safe, effective treatments.
                                All equipment approved for 100% efficiency.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card mb-30">
                        <div class="icon">
                            <img src="{{ asset('/resources/assets/images/wide-range-treatment.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title txt-chose">
                                Wide-range Treatment

                                
                            </h3>
                            <p class="text">
                                Certified team in cosmetology, dermatology, and trichology.
                                Diverse treatments at affordable prices.



                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card mb-30">
                        <div class="icon">
                            <img src="{{ asset('/resources/assets/images/experienced-doctor.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title txt-chose">
                               Experienced Doctor

                               
                            </h3>
                            <p class="text">
                                Years of practice in cosmetology.
                                Expertise for safe, effective results.


                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card mb-30">
                        <div class="icon">
                            <img src="{{ asset('/resources/assets/images/assured-solution.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title txt-chose">
                               Assured Solution

                                
                            </h3>
                            <p class="text">
                                Helping patients achieve dream skin health.
                                Tailored, advanced solutions for all skin issues.


                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- why choose us end --}}


    {{-- treatment section start --}}
    <section id="gallery" class="gallery-section pt-50 ">
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
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                   
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Computerized Hair Analysis</a></h3>
                                    {{-- <p>Computerized hair analysis is a sophisticated method used to assess the health and condition of hair and scalp.</p>
                                    <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    {{-- <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div> --}}
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Alopecia Areata</a></h3>
                                    {{-- <p>Alopecia areata is a common autoimmune condition affecting millions worldwide, leading to sudden hair loss in localized or widespread areas. 
                                    </p> --}}
                                    {{-- <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                   
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Mesotherapy</a></h3>
                                    {{-- <p>Mesotherapy has gained popularity as a minimally invasive cosmetic procedure aimed at rejuvenating the skin, promoting hair growth, and addressing various aesthetic concerns. 
                                    </p> --}}
                                    {{-- <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                   
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Platelet Rich Plasma Therapy (prp)</a></h3>
                                    {{-- <p>Platelet Rich Plasma Therapy (PRP) has emerged as a promising medical treatment that utilizes the body's own healing mechanisms to address various health issues. </p> --}}
                                    {{-- <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    {{-- <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div> --}}
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Laser Hair Grow(prp)</a></h3>
                                    {{-- <p>Laser hair growth therapy, also known as low-level laser therapy (LLLT) or photobiomodulation therapy, is a non-invasive procedure aimed at stimulating hair follicles, promoting hair regrowth, and improving overall hair health.</p> --}}
                                    {{-- <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    {{-- <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div> --}}
                                </div>
                                <div class="content">
                                    <h3 class="title"><a href="#">Hair Transplantation (prp)</a></h3>
                                    {{-- <p>Hair transplantation is a surgical technique that involves transplanting hair follicles from one part of the body, usually the sides or back of the scalp (donor area), to areas experiencing hair loss or thinning (recipient area).</p> --}}
                                    {{-- <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="hair-tab">
                    <div class="row">
                        <div class="col-md-4">
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
                                    {{-- <p>Dark circle reduction refers to a range of cosmetic treatments and procedures aimed at reducing the appearance of dark circles under the eyes. </p>
                                    <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                    {{-- <p>Laser Eye Wrinkle Reduction is a cosmetic technique that utilizes advanced laser technology to target and reduce wrinkles, fine lines, and various other symptoms of ageing around the eyes.</p>
                                    <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-30">
                                <div class="image">
                                    <img src="{{ asset('/resources/assets/images/skin-condition-diseases-treatment-services.jpg') }}"
                                        alt="Demo Image">
                                    <div class="hover-content">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    {{-- <h3 class="title"><a href="#">Eye Bag Correction</a></h3>
                                    <p>Eye bag correction, also known as eyelid surgery, is a cosmetic treatment performed to reduce the appearance of under-eye bags, puffiness, and drooping eyelids.</p>
                                    <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                    {{-- <p>Blepharoplasty is a surgical procedure performed to enrich the appearance of the eyelids by removing all the unwanted skin, muscle, and fat. It can be performed on the upper eyelids, lower eyelids, or both, based on the patient's specific needs and goals. </p>
                                    <a href="#"> <span class="price">Know More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                    {{-- <p>Eye bag correction, also known as eyelid surgery, is a cosmetic treatment performed to reduce the appearance of under-eye bags, puffiness, and drooping eyelids. These aesthetic concerns often result from factors such as ageing, genetics, lifestyle habits, and environmental factors.</p>
                                    <a href="#"> <span class="price">Know More</span></a> --}}
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
                                    <p>Body shaping and sculpting refer to a range of techniques and procedures designed to enhance and contour the body's appearance. </p>
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
                                    <p>Liposuction, often referred to as lipo or lipoplasty, is a cosmetic surgical procedure designed to eliminate unwanted fat from specific areas of the body. These areas commonly include the abdomen, thighs, buttocks, hips, arms, neck, and chin. </p>
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
                                    <p>Body contouring encompasses a variety of surgical and non-surgical procedures to reshape and enhance the body's contours. </p>
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
                                    <p>Fat transfer and grafting is a cosmetic procedure that involves transferring fat from one area of the body to another to enhance volume and contours or rejuvenate specific features.</p>
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
                                    <p>Stretch marks are a type of scarring that occurs when the skin is stretched suddenly due to factors such as pregnancy, rapid weight gain or loss, puberty, or certain medical conditions. </p>
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
                                    <p>Laser hair removal is a technique that uses concentrated beams of light or laser to target and damage hair follicles, preventing future hair growth.</p>
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
                                    <p>Skin brightening is a cosmetic technique designed to lighten and even out skin tone, reduce hyperpigmentation, and enhance overall radiance. </p>
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
                                    <p>Laser tattoo removal involves using specialized lasers that target the pigments in the tattoo ink, breaking them down into smaller particles that are then eliminated by the body's immune system.</p>
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
                                    <p>Moles are groups of pigmented cells that are seen as small, dark spots on the skin. They may vary in size, shape, and color, ranging from tan to brown to black. Moles are typically harmless but should be monitored for changes in size, shape, or color, as these could indicate skin cancer.
                                    </p>
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
                                    <p>Botox is a neurotoxic compound produced by the bacterium Clostridium botulinum. While this may sound alarming, Botox is used in minuscule amounts for medical and cosmetic purposes.</p>
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

    {{-- blog start --}}
    <section id="blog" class="blog-section pt-70">
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="title">Blog<span></span> </h2>
                {{-- <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.
                </p> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 p-0">
                <div class="blog-slider owl-carousel">
                    <div class="slider-item">
                        <div class="card">
                            <span class="time">August 24, 2020</span>
                            <h3 class="title">
                                <a href="#">Dermal Fillers – 6 Things you Should Know</a>
                            </h3>
                            <p class="text">Dermal fillers and botox are not the same. The first and most important misunderstanding to clear about Dermal filler is – “Dermal filler are not the same as Botox”. Where Botox freezes muscles to diminish wrinkles, fillers smoothen skin by filling wrinkles.  </p>
                            <hr>
                            <ul class="info-list">
                                <li>Dr Zainul Hamdani</li>
                                {{-- <li>24 Comment</li> --}}
                          
                            <div class="cta-btn">
                                <a href="#" class="btn-text read-more-btn">Read More<i
                                        class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                        </ul>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="card">
                            <span class="time">July 28, 2020</span>
                            <h3 class="title">
                                <a href="#">Different Types of Skin Blemishes and its Treatments – Get Blemish Free Skin</a>
                            </h3>
                            <p class="text">It is no secret that everyone dreams of having perfect smooth skin, and many even work hard enough to achieve one. The ongoing international “glass skin” trend and the seemingly unnatural, perfect faces of models looking like dolls, add to the desire of having clear skin.</p>
                            <hr>
                            <ul class="info-list">
                                <li>Dr Zainul Hamdani</li>
                                {{-- <li>24 Comment</li> --}}
                          
                            <div class="cta-btn">
                                <a href="#" class="btn-text read-more-btn">Read More<i
                                        class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                        </ul>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="card">
                            <span class="time">June 15, 2020</span>
                            <h3 class="title">
                                <a href="#">Fungal Skin Infection: Treatment & Prevention</a>
                            </h3>
                            <p class="text">When talking about fungus, foremost, many may link fungus to mushrooms growing on a moist tree trunk, or an old bread with mold on it. There are millions of fungi species among which mushrooms & mold are the most well-known ones. Despite millions of species, approx only 300 can cause infection in human beings.</p>
                            <hr>
                            <ul class="info-list">
                                <li>Dr Zainul Hamdani</li>
                                {{-- <li>24 Comment</li> --}}
                          
                            <div class="cta-btn">
                                <a href="#" class="btn-text read-more-btn">Read More<i
                                        class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-0">
                <div class="video-content">
                    <div class="video-image">
                        <img src="assets/images/video.jpg" alt="video" />
                    </div>
                    <a href="{{ asset('/resources/assets/images/zafeerah-skin-clinic-video.mp4') }}" type="video/mp4" class="youtube-popup video-btn">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
 {{-- blog end --}}
    {{-- testimonial start --}}
    <section id="testimonial" class="testimonial-section pb-100">
        <div class="container">
            <div class="container-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/testimonial-img.jpg') }}" alt="">
                            {{-- <img src="assets/images/line3.png" alt="Shape Image" class="shape"> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="content">
                            {{-- <div class="quote">
                                <i class="bx bxs-quote-alt-right"></i>
                                <img src="assets/images/shape2.png" alt="Shape Image">
                                <span class="top"></span>
                                <span class="left"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                            </div> --}}
                            <h2 class="title">What Our Clients Say<span></span> </h2>
                        </div>
                        <div class="testimonial-slider owl-carousel">
                            <div class="slider-item">
                                <div class="card">
                                    <p class="text">
                                        <q>Best Dermatologist. I was missed diagnosis with tb treatment So doctor has done me cryo therapy and I have got the result in one sitting . 😊Happy with the treatment best doctor for me.</q>
                                    </p>
                                    <h5 class="client-name">Mezaz Alam</h5>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="card">
                                    <p class="text">
                                        <q>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour, or
                                            randomised words which don't look even slightly believable</q>
                                    </p>
                                    <h5 class="client-name">Morgan Dyer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    {{-- testimonial ends --}}

   






@stop
