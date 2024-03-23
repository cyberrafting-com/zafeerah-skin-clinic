@php($title = "Alana Institute")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


<!-- page-title -->
<!-- <section class="page-title sep-page">
x
    <div class="auto-container">

    </div>
</section> -->
<!-- page-title end -->
<section class="page-title service-details">
    <div class="bg-layer serv-breadscrum-sec"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Get in Touch</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>

                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>


<!-- contact-info-section -->
<section class="contact-info-section">
    <div class="auto-container">
        <!-- <div class="upper-box">
            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title"></span>
                            <h2>Get in Touch</h2>
                        </div>
                        <div class="text">
                            <p>To get in touch with us.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <div class="lower-box">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-pin"></i></div>
                        <h3>Location</h3>
                        <p> <span class="isti-txt">Alaana
                                Institute
                                of Cosmetology
                                & Trichology.</span><br> Vishwa CHS Ltd, RB Mehta Marg, <br>6oft Road Opp
                            Dolphin<br>
                            Franky/Noble Chemist, Ghatkopar -<br> East, Mumbai-400077.
                        </p>
                        <!-- <h6><a href="contact.html">Check Location<i class="flaticon-right-arrow"></i></a></h6> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-phone-call-1"></i></div>
                        <h3>Get Call Back </h3>
                        <h3><a href="tel:+91 9870070066">+91 9870070066</a></h3>
                        <h3><a href="tel:+91 9870070099">+91 9870070099</a></h3>
                        <!-- <p>Mon to Sat: 9.00am to 5.00pm <br />Sun: 9.00am to 12.00pm</p> -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-message"></i></div>
                        <h3><a href="mailto:alaanadrsweta@gmail.com">alaanadrsweta@gmail.com</a></h3>
                        <p>To better connect with our team send your mail.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->
<section class="cont-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- location-style-two -->
                <div class="content-box">
                    <div class="sec-title loc-contact">
                        <span class="sub-title ">Locations</span>
                    </div>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.5809803192774!2d72.9090591!3d19.0821521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6294971ca63%3A0x55be2e71b171b22b!2sAlaana%E2%80%99s%20Cosmetology%20and%20Trichology%20institute!5e0!3m2!1sen!2sin!4v1701773961456!5m2!1sen!2sin"
                        width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>



            </div>
            <!-- <div class="col-md-6">

                <section class="contact-section ">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-12 col-lg-12 col-md-12  inner-column">
                                <div class="inner-box">
                                    <div class="sec-title">
                                        <span class="sub-title">Make an Enquiry</span>


                                    </div>
                                    <div class="form-inner">
                                        @if(session('success'))
                                        <p style="color: green; font-size:18px;">{{ session('success') }}</p>
                                        @endif
                                        @if(session('error'))
                                        <p style="color: red; font-size:18px;">{{ session('error') }}</p>
                                        @endif
                                        <form method="post" action="{{ route('saveContact') }}" id="contact-form">
                                            @csrf
                                            <input type="text" name="{{session('cr_honey')}}" style="display:none" />

                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Name</label>
                                                    <i class="fa-solid fa-circle-user"></i>
                                                    <input type="text" name="fname" placeholder="User Name" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Email</label>
                                                    <i class="fa-solid fa-envelope"></i>
                                                    <input type="email" name="mail" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Phone Number</label>
                                                    <i class="fa-solid fa-phone-flip"></i>
                                                    <input type="text" name="phone" required="" placeholder="Phone">
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                    <label>Message</label>
                                                    <i class="fa-sharp fa-solid fa-text-width"></i>
                                                    <textarea name="msg"></textarea>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                    <button type="submit" class="theme-btn" name="submit-form" value="submit">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div> -->
        </div>
    </div>
</section>

@stop