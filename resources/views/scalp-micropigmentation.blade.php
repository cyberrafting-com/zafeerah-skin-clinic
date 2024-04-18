@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Scalp Micro Pigmentation (SMP)
                </h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item active"><span></span>Scalp Micro Pigmentation (SMP)


                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/resources/assets/images/breadscrumb-img.png') }}" alt="breadscrumb-img">
        </div>
    </div>

    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                    @include('includes.hair-treatment')
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="service-details-desc mb-30">
                        <div class="card">
                            <div class="image">
                                <img src="{{ asset('/resources/assets/images/service/scalp-micropigmentation.png') }}"
                                    alt="scalp-micropigmentation">
                            </div>
                            <div class="content">
                                <h2 class="title">Scalp Micro Pigmentation (SMP)
                                    <span></span>
                                </h2>
                                <blockquote class="blockquote">
                                    Hair loss can be a hard and challenging experience for many individuals, impacting
                                    self-confidence and self-image. Fortunately, advancements in cosmetic procedures have
                                    led to innovative solutions such as Scalp Micro Pigmentation (SMP).
                                    Zafeerah Skin Clinic uses the most advanced tools and trained technicians for SMP. We
                                    specialize in creating hairlines that look natural and compliment your facial shape,
                                    style, and look natural.

                                </blockquote>
                                <h5 class="service-title1 ">What is SMP?

                                </h5>
                                <p>
                                    Scalp Micro Pigmentation (SMP) is a non-surgical cosmetic procedure designed to imitate
                                    the appearance of hair follicles on the scalp. It involves the use of specialized
                                    pigments and techniques to recreate the illusion of a fuller head of hair, making it an
                                    ideal option for individuals experiencing hair thinning or baldness.

                                </p>
                                <h5 class="service-title1 ">Role of SMP</h5>
                                <p>SMP plays a vital role in hair restoration and enhancement by addressing common concerns
                                    such as:</p>


                                <ul class="service-ul sep">
                                    <li>
                                        <strong> Baldness:</strong> SMP can create a natural-looking hairline and add
                                        density to areas of baldness, giving the appearance of a full head of hair.
                                    </li>
                                    <li>
                                        <strong>Hair Thinning:</strong> For individuals with thinning hair, SMP can
                                        camouflage the scalp, reducing the visibility of the scalp through the hair
                                    </li>
                                    <li><strong>Scalp Scars:</strong> SMP can also conceal scars from previous hair
                                        transplant surgeries or injuries, providing a more seamless and uniform scalp
                                        appearance.</li>


                                </ul>

                                <h5 class="service-title1 sep">How Does SMP Work? </h5>

                                <p class="text">The SMP procedure involves several key steps:
                                </p>
                                <ul class="service-ul sep">

                                    <li>
                                        <strong>Consultation:</strong> The process of SMP begins with a consultation with a
                                        trained SMP specialist. During this consultation, the specialist assesses the
                                        patient's scalp condition, discusses expectations, and develops a customized
                                        treatment plan.
                                    </li>
                                    <li> <strong>Pigment Selection:</strong> The specialist selects pigment colors that
                                        closely match the patient's natural hair color and skin tone to ensure a realistic
                                        outcome.</li>
                                    <li> <strong>Application:</strong>Using a specialized micro-needle or tattoo device, the
                                        pigment is deposited into the upper layer of the scalp, creating tiny dots or
                                        strokes that mimic the appearance of hair follicles.</li>
                                    <li> <strong>Layering</strong> Multiple sessions may be required to achieve the desired
                                        density and coverage. The specialist strategically layers the pigment to create a
                                        natural-looking hairline and overall appearance.</li>
                                    <li> <strong>Follow-up Care:</strong> After the procedure, patients are advised on
                                        post-care instructions, including avoiding sun exposure and following a gentle
                                        skincare routine to promote healing and longevity of the SMP results.</li>



                                </ul>
                                <h5 class="service-title1 sep">Advantages of SMP
                                </h5>
                                <p>SMP offers several advantages as a hair restoration solution:</p>

                                <ul class="service-ul sep">
                                    <li>
                                        Non-Invasive
                                    </li>
                                    <li>
                                        Safe and Effective
                                    </li>
                                    <li>
                                        Suitable for Various Types of Hair Loss
                                    </li>
                                    <li>Customizable Treatment Plans</li>

                                </ul>
                                <div class="faq">
                                    <h5>FAQs about SMP

                                    </h5>
                                    <div class="panel-group mb-30" id="accordion">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse1"
                                                                aria-expanded="false">
                                                                Is SMP permanent?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse active collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>While SMP is considered semi-permanent, the results can last
                                                                several years with proper care.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse2"
                                                                aria-expanded="false">
                                                                Does SMP hurt?

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>The procedure is performed with minimal discomfort similar to
                                                                getting a tattoo or micro-needling treatment.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse3"
                                                                aria-expanded="false">
                                                                Can SMP be reversed?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>SMP can be adjusted or modified if desired, but complete
                                                                reversal may require additional procedures.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse4"
                                                                aria-expanded="false">
                                                                Is SMP suitable for everyone?

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse collapse"
                                                        data-bs-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p>SMP is suitable for both men and women experiencing hair
                                                                loss, thinning, or scalp scars. However, individual
                                                                suitability may vary based on factors assessed during the
                                                                consultation.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse5" aria-expanded="false">
                                                                Is mesotherapy suitable for everyone?

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse5" class="panel-collapse collapse" data-bs-parent="#accordion">
                                                        <div class="panel-body">
                                                            <p>Mesotherapy is generally safe and suitable for many individuals seeking skin rejuvenation, hair restoration, or cellulite reduction.
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="service-title1 sep">Conclusion
                                </h5>
                                <p class="text">Scalp Micro Pigmentation (SMP) is a groundbreaking technique that offers a
                                    safe, effective, and versatile solution for hair restoration and enhancement. With its
                                    ability to create natural-looking results, low maintenance requirements, and
                                    customizable options, SMP has become a preferred choice for individuals seeking to
                                    regain confidence and achieve a fuller head of hair.



                                </p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
                    @include('includes.hair-treatment')
                </div>
            </div>
        </div>
    </div>



@stop
