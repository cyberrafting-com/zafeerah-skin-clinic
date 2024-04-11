@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Career </h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item active"><span></span>Career</li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/resources/assets/images/breadscrumb-img.png') }}" alt="breadscrumb-img">
        </div>

    </div>
    <section class="career-sec">
        <div class="row">
            <div class="col-md-12">
                <h1>Job Opportunities & Vacancies
                </h1>
                <p>We are always looking for the best professionals at Zafeerah Skin Clinic. Get in touch with us if you
                    have what it takes to succeed.

                </p>

                <p>Listed below are our current career opportunities and job openings. Please send us your updated resume at
                    <span><a href="mailto:drzqhamdani@gmail.com">drzqhamdani@gmail.com</a> </span>

                </p>
            </div>
        </div>
        <div class="container mb-20 mt-20">
            {{-- <input id="slider" class="customSlider" type="checkbox">
            <label for="slider"></label> --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper">
                        <div class="top-icons">
                            <i class="fas fa-long-arrow-alt-left"></i>
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="far fa-heart"></i>
                        </div>

                        <div class="profile">
                            <img src="{{ asset('/resources/assets/images/career-img1.png') }}" alt="career-img1"
                                class="thumbnail">
                            <div class="check"><i class="fas fa-check"></i></div>
                            <h3 class="name">Job Opening: Skin/Hair Technician</h3>

                            <p class="title">Job Description
                            </p>
                            <ul>
                                <li>
                                    Perform all necessary skin/hair preparations.

                                </li>
                                <li>
                                    Provide assistance to the doctors in all skin/hair treatments and procedures, such as
                                    chemical peels, laser hair removal, microdermabrasion, photo facials, and
                                    radiofrequency.
                                </li>
                                <li>
                                    Inspect forms before treatments begin to ensure they were filled out correctly.
                                </li>
                                <li>
                                    Verify that all the machines are set properly according to the patients' files.
                                </li>
                                <li>
                                    Post-treatment, update the medical records.
                                </li>
                                <li>
                                    Be able to perform minor treatments, such as facials, but after training be able to
                                    perform advanced procedures, such as laser hair removal and laser facial rejuvenation.
                                </li>
                                <li>
                                    Be able to handle administrative tasks such as maintaining patient records, scheduling
                                    appointments, etc.
                                </li>
                            </ul>
                            <p class="title">Skills/Qualifications

                            </p>
                            <ul>
                                <li>
                                    Must have at least 3 years' experience working as a skin or hair technician

                                </li>
                                <li>
                                     Must have very good communication skills in English
                                </li>
                                <li>
                                    Preferred: Previous experience in a doctors clinic
                                </li>
                               
                            </ul>
                           
                            <a href="mailto:drzqhamdani@gmail.com"><button type="button" class="btn">Hire Me</button></a>
                        </div>

                        
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper">
                        <div class="top-icons">
                            <i class="fas fa-long-arrow-alt-left"></i>
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="far fa-heart"></i>
                        </div>

                        <div class="profile">
                            <img src="{{ asset('/resources/assets/images/career-img2.png') }}"
                                class="thumbnail">
                            <div class="check"><i class="fas fa-check"></i></div>
                            <h3 class="name">Vacancy: Receptionist
                            </h3>

                            <p class="title">Patient Servicing

                            </p>
                            <ul>
                                <li>
                                    Handle clinic calls efficiently

                                </li>
                                <li>
                                    Maintain patient appointments, reschedule appointments, and call patients to remind them.
                                </li>
                                <li>
                                     Handle treatment inquiries by phone, email, or in person.
                                </li>
                                <li>
                                    Follow up on pending dues with patients efficiently.
                                </li>
                                <li>
                                     Patients should be welcomed and all treatments and procedures should be explained confidently.
                                </li>
                               
                            </ul>
                            <p class="title">Administrative Support
                            </p>
                            <ul>
                                <li>
                                   Keep and maintain all patient records in the computer system.
                                </li>
                                <li>
                                     Maintain and manage payments, invoices, cash collections, etc., effectively.
                                </li>
                                <li>
                                    Keep a record of all incoming mail and couriers, as well as all payments due
                                </li>
                                <li>
                                     Ensure that the clinic runs smoothly. Managing contractors and servicing executives efficiently to get maintenance work done.
                                </li>
                               
                            </ul>
                            <p class="title">Education and Experience

                            </p>
                            <ul>
                                <li>
                                  2+ years of receptionist experience preferred
                                </li>
                                <li>
                                     Must be able to communicate well
                                </li>
                                <li>
                                    Must be friendly and confident
                                </li>
                                <li>
                                     Prefer previous experience working in a medical clinic
                                </li>
                                <li>
                                    Must be comfortable using a computer or laptop
                               </li>
                               <li>
                                Familiar with MS Exce
                           </li>
                               
                            </ul>




                            <a href="mailto:drzqhamdani@gmail.com"><button type="button" class="btn">Hire Me</button></a>
                        </div>

                     
                        
                    </div>
                </div>
            </div>



        </div>
    </section>




@stop
