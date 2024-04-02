@php($title = "Zafeerah Skin Clinic")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>About us </h1>
            <ul>
                <li class="item"><a href="{{ route('home')}}">Home</a></li>
                <li class="item active"><span></span>About Us</li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{ asset('/resources/assets/images/breadscrumb-img.png')}}" alt="Demo Image">
    </div>
</div>
<div class="about-single-area">

    <section id="about" class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image mb-30">
                        <img src="{{ asset('/resources/assets/images/service/service4.png') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content mb-30">
                        <h2 class="title">
                            Zafeerah Skin Clinic
                            <span></span>
                        </h2>
                        <blockquote class="blockquote">
                            Zafeerah Skin Clinic is the most ultimate option to get most reliable and reasonable skin & hair
                            treatment in Mumbai. We understand that everyone is different, and so is the body & skin type,
                            thus we aim to put all our experience & efforts in conveying the best achievable treatment
                            approach. We believe in giving fast & effective skin & hair treatment using the latest
                            technology.
                        </blockquote>
                        <blockquote class="blockquote">
                            Our 360 approach to providing solutions to skin & hair problems ensures that our
                            skin & hair treatments are safe and efficient.
                        </blockquote>
                        
                        <blockquote class="blockquote">
                        <ul class="content-list">
                            <li>
                                <h6 class="abtt-text1">Personalized care solutions.
                                </h6>
                            </li>
                            <li>
                                <h6 class="abtt-text1">Latest tech results.
                                </h6>
                            </li>
                            <li>
                                <h6 class="abtt-text1">Skilled experts advice.
                                </h6>
                            </li>
                            <li>
                                <h6 class="abtt-text1">Whole-body approach benefits.
                                </h6>
                            </li>
                            <li>
                                <h6 class="abtt-text1">Wide services remedies.
                                </h6>
                            </li>
                            <li>
                                <h6 class="abtt-text1">Client satisfaction priority.
                                </h6>
                            </li>
                        </ul>
                    </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img src="assets/images/line1.png" alt="Shape Image">
        </div>
    </section>
    <section id="about" class="about-section ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mobile-viewimg">
                    <div class="image mb-30">
                        <img src="{{ asset('/resources/assets/images/dr-zainul-hamdani.jpeg') }}" alt="Demo Image" />
                    </div>
                </div>
                
                <div class="col-lg-6" style="background:#f9fafb;border: 1px solid #ebe9e8;">
                    <div class="content mb-30">
                        <h2 class="title first">
                            Dr. Zainul Hamdani                          
                          
                        </h2>
                        <h2 class="title second">
                            Consultant Dermatologist                            
                            <span></span>
                        </h2>
                        <blockquote class="blockquote  abt-page">
                            Dr. Zainul Hamdani is a consultant Dermatologist, Cosmetologist, Trichologist practicing in Mumbai & Navi Mumbai. He has an experience of more than 10 years in the treatment of numerous hair & skin problems.


                        </blockquote>
                        <blockquote class="blockquote  abt-page">
                            He is a meticulous doctor and keeps a thorough follow-up of all the patients who consult him. He is also a keen learner and is up to date with all the new nuances in the field of dermatology & cosmetology.


                        </blockquote>
                        
                        
                    </div>
                </div>
                <div class="col-lg-6 desktop-viewimg">
                    <div class="image mb-30">
                        <img src="{{ asset('/resources/assets/images/dr-zainul-hamdani.jpeg') }}" alt="Demo Image" />
                    </div>
                </div>
            </div>
        </div>
       
    </section>

    <section id="about" class="about-section ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image mb-30">
                        <img src="{{ asset('/resources/assets/images/female-doctor-icon.png') }}" alt="Demo Image" />
                    </div>
                </div>
                <div class="col-lg-6" style="background:#f9fafb;border: 1px solid #ebe9e8;">
                    <div class="content mb-30">
                        <h2 class="title first ml">
                            Dr. Afsin Z Hamdani
                           
                        </h2>
                        <h2 class="title second ml">
                            Consultant Dermatologist                            
                            <span></span>
                        </h2>
                        <blockquote class="blockquote">
                            Dr. Afsin Z Hamdani is a consultant Cosmetologist practicing in Mumbai with an experience of more than 5 years.


                        </blockquote>
                        <blockquote class="blockquote">
                            She strives to provide her patients with exceptional cosmetological care by ensuring a thorough diagnosis and proper treatment regimens for their skin & hair conditions. She works with an amazing staff of experienced and talented professionals to deliver the support and assistance you need, when you need it.


                        </blockquote>
                        
                       
                    </div>
                </div>
            </div>
        </div>
       
    </section>


    
</div>


@stop
