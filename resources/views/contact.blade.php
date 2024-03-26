@php($title = "Zafeerah Skin Clinic")
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Contact Us</h1>
            <ul>
                <li class="item"><a href="{{ route('home')}}">Home</a></li>
                <li class="item active"><span></span>Contact</li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{ asset('/resources/assets/images/breadscrumb-img.png')}}" alt="Demo Image">
    </div>
</div>

{{-- first address start --}}
<section id="promo-contact" class="promo-contact-section pt-100 ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card mb-30">
                    <div class="icon">
                        <i class="flaticon location-pin"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Our Location</h3>
                        <p class="add"><span class="text loc">Byculla</span> </p>
                        <p >Honda Mansion, Bldg No. 332, Sir J. J. Road, Byculla, Mumbai 400 008

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-30">
                    <div class="icon">
                        <i class="flaticon phone"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Contact Number</h3>
                        <span class="text"><a href="tel:+91 9978878692

                            ">+91 9978878692</a></span>
                    </div>
                    
                    
                    
                </div>
                <div class="card mb-30">
                    <div class="icon">
                        <img src="{{ asset('/resources/assets/images/mail-icon.png') }}" alt="Demo Image" style="width: 30px; "/>
                    </div>
                    <div class="content">
                        <h3 class="title">Reach Us Here</h3>
                        <span class="text"><a href="mailto:drzqhamdani@gmail.com            ">drzqhamdani@gmail.com

                        </a></span>
                    </div>
                    
                    
                    
                </div>
                
                
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-30">
                    <div class="icon">
                        <i class="flaticon alarm-clock"></i>
                    </div>
                    <div class="content add">
                        <h3 class="title">Opening Hours</h3>
                        <p><span class="text">Monday & Friday  </span></p>
                        <p>10am to 6pm</p>
                        <p><span class="text">Tues, Wed, Thus & Sat </span></p>
                        <p>Morning - 10am to 2pm</p>
                        <p>Evening - 5pm to 8pm</p>
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-map pb-100">
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30185.268945631986!2d72.832526!3d18.968601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce3c072f90d5%3A0x83649a33971c83d8!2sDr%20Zainulabedin%20Hamdani(Best%20Dermatologist%2CHair%20%26%20Skin%20Specialist)Hair%20PRP%2CProfhilo%2CAcne%20Scars%2CHIFU%2CMNRF%2C%20GFC%20Hair%2C%20in%20Mumbai!5e0!3m2!1sen!2sin!4v1711438571776!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
{{-- first address end --}}
{{-- <section id="appointment" class="appointment-section ptb-100">
    <div class="container">
        <div class="appointment-form">
            <div class="content">
                <h2 class="title">
                    Make Appointment
                </h2>
                <p class="text">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem.
                </p>
            </div>
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" required data-error="Enter your name" placeholder="Your Name" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" required data-error="Enter your email" placeholder="Email Address" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Enter your number" placeholder="Phone Number" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" class="form-control" id="msg_subject" required data-error="Enter your subject" placeholder="Subject" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="8" required data-error="Please enter your message" placeholder="Your Message..."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check agree-label">
                                <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    Accept <a href="terms-of-service.html">Terms & Conditions</a> And <a
                                        href="privacy-policy.html">Privacy Policy.</a>
                                </label>
                                <div class="help-block with-errors gridCheck-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="primary-btn">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section> --}}
{{-- second address start --}}

<section id="promo-contact" class="promo-contact-section  ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card mb-30">
                    <div class="icon">
                        <i class="flaticon location-pin"></i>
                    </div>
                    <div class="content add">
                        <h3 class="title">Our Location</h3>
                        <p><span class="text loc">Kamothe
                        </span> </p>
                        <p >Sector - 7, Plot No.9, 1st Floor, Main Road, Near Kamothe Police Station, Kamothe, Navi Mumbai - 410 209.



                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-30">
                    <div class="icon">
                        <i class="flaticon phone"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Contact Number</h3>
                        <span class="text"><a href="tel:+91 7498846500

                            ">+91 7498846500

                        </a></span>
                    </div>
                    
                    
                    
                </div>
                <div class="card mb-30">
                    <div class="icon">
                        <img src="{{ asset('/resources/assets/images/mail-icon.png') }}" alt="Demo Image" style="width: 30px; "/>
                    </div>
                    <div class="content">
                        <h3 class="title">Reach Us Here</h3>
                        <span class="text"><a href="mailto:drzqhamdani@gmail.com

                            ">drzqhamdani@gmail.com



                        </a></span>
                    </div>
                    
                    
                    
                </div>
                
                
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-30">
                    <div class="icon">
                        <i class="flaticon alarm-clock"></i>
                    </div>
                    <div class="content add">
                        <h3 class="title">Opening Hours</h3>
                        <p><span class="text">Monday & Friday  </span></p>
                        <p>8:30pm to 10:30pm</p>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-map pb-100">
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482805.59599841596!2d73.091616!3d19.023303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c27f6b8daeb5%3A0x20c4d069fc41a6c5!2sDr%20Zainulabedin%20Hamdani%E2%80%99s%20Skin%20Clinic%2C%20Best%20Skin%20Specialist%20%26%20Hair%20Specialist%2C%20Dermatologist%20in%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1711444649780!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
{{-- second address end --}}
@stop