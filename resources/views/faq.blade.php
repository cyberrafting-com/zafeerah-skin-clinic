@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Frequently Asked Questions </h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item active"><span></span>Frequently Asked Questions</li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/resources/assets/images/breadscrumb-img.png') }}" alt="breadscrumb-img">
        </div>

    </div>

    <section class="faq-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion-wrapper">
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check1" checked>
                            <label class="accordion-label" for="check1">Is BOTOX Cosmetic treatments safe?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>Botox Cosmetic has an excellent safety profile. </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/faq-botox.png') }}" alt="faq-botox" class="faq-img">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check2">
                            <label class="accordion-label" for="check2">Will my face still have expression after BOTOX treatment?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>BOTOX Cosmetic is intended to enhance the way you look, not change it. When administered by our team, you can still smile frown, and be expressive. The treatment only relaxes the muscle beneath the lines at the point of injection, so the other elements of your facial expression remain active. It also has no effect on the sensory nerves, so you will have normal feeling in the treated areas.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/faq-botox-1.png') }}" alt="faq-botox" class="faq-img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check3">
                            <label class="accordion-label" for="check3">How many laser treatments are needed for face</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>Laser treatment setting may vary from person to person. Depending on the area being treated & how much healing time a skin may require, it can take anywhere from 5-10 treatments. </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/faq-laser1.png') }}" alt="faq-laser1" class="faq-img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        {{--  --}}
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check4">
                            <label class="accordion-label" for="check4">Does laser on face hurt ?</label>
                           
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>Treatment may hurt or it may not
                                            Patients and doctors commonly compare the sensation felt during laser treatments to a rubber band snapping against the skin. </p>
                                            <p>However, what laser resurfacing feels like depends on the laser, the depth and area of treatment, and an individual's tolerance for pain. </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/faq-laser2.png') }}" alt="faq-laser2" class="faq-img">
                                    </div>
    
                                </div>
                                    
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check5">
                            <label class="accordion-label" for="check5">Can you exercise after laser hair removal treatment?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>This could lead to infection or ingrown hairs, so we recommend waiting at least 24 hours after a laser hair removal treatment.Before attempting any activity that may increase your body temperature and upset the hair follicles.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/faq-laser3.png') }}" alt="faq-laser3" class="faq-img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check6">
                            <label class="accordion-label" for="check6">How long after laser hair removal can I go in the sun ?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>Avoiding sun can help Avoid sun exposure and tanning two weeks before and two weeks after a laser hair removal treatment — period. </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/faq-laser4.png') }}" alt="faq-laser4" class="faq-img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check7">
                            <label class="accordion-label" for="check7">How long does it take to recover from a chemical peel?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>Treated areas take about one to seven days to heal after a light chemical peel. New skin might temporarily be lighter or darker than normal.After a medium chemical peel, treated skin will be red, tight and swollen. You'll feel stinging.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/chemical-peel.png') }}" alt="chemical-peel" class="faq-img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check8">
                            <label class="accordion-label" for="check8">Does chemical peel remove acne or pores?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>chemical peels are effective at reducing the appearance of acne scars. A chemical peel cannot change the size of your pores, it can, however, make them less noticeable </p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/chemical-peel1.png') }}" alt="chemical-peel1" class="faq-img">
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="accordion">
                            <input type="radio" name="radio-a" id="check9">
                            <label class="accordion-label" for="check9">How long do fillers last?</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <p> There different kinds of fillers being used in cosmetic procedures. Some last between six months and one year, while few has been clinically proven to last up to two years.</p>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="{{ asset('/resources/assets/images/fillers.png') }}" alt="fillers" class="faq-img">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    </section>






@stop
