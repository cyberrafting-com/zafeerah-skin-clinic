@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Platelet Rich Plasma Therapy (PRP)
            </h1>
            <ul>
                <li class="item"><a href="{{ route('home') }}">Home</a></li>
                <li class="item active"><span></span>Platelet Rich Plasma Therapy (PRP)
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{ asset('/resources/assets/images/breadscrumb-img.png') }}" alt="computerized-hair-analysis-IMG">
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
                            <img src="{{ asset('/resources/assets/images/service/platelet-rich-plasma-therapy-prp.png') }}" alt="platelet-rich-plasma-therapy-prp">
                        </div>
                        <div class="content">
                            <h2 class="title">Platelet Rich Plasma Therapy (PRP)



                                <span></span>
                            </h2>
                            <blockquote class="blockquote">
                                In recent years, Platelet Rich Plasma Therapy (PRP) has emerged as a promising medical treatment that utilizes the body's own healing mechanisms to address various health issues. From sports injuries to skincare, PRP has found applications in diverse fields, garnering attention for its potential benefits.
                                Zafeerah Skin Clinic provides one of the best PRP treatments. We have experienced and trained technicians in PRP to help you restore your hair health.



                            </blockquote>
                            <h5 class="service-title1 ">What is PRP?

                            </h5>
                            <p>
                              PRP stands for Platelet Rich Plasma. Blood consists of red blood cells(RBCs), white blood cells (WBCs), plasma, and platelets. Platelets play an integral role in clotting and wound healing. PRP is created by drawing a small quantity of blood from the patient, concentrating the platelets, and then injecting this concentrated plasma back into the body at the site of treatment.

                            </p>
                            <h5 class="service-title1 ">Role of PRP</h5>
                            <p>PRP therapy is primarily used to stimulate and accelerate the body's natural healing processes. It can be used in various medical fields, including orthopaedics, dermatology, dentistry, and more. Some common uses of PRP include:</p>


                            <ul class="service-ul sep">
                                <li>
                                   <strong> Orthopedics:</strong> Treating joint injuries, tendonitis, and osteoarthritis.
                                </li>
                                <li>
                                  <strong> Dermatology:</strong> Improving skin texture, reducing wrinkles, and promoting hair growth.
                                </li>
                                <li> <strong>Dentistry:</strong> Enhancing healing after dental procedures like implants or extractions.</li>
                                <li> <strong>Sports Medicine:</strong> Helping athletes recover from injuries such as tendon tears or sprains.</li>

                            </ul>

                            <h5 class="service-title1 sep">How Does PRP Work?


                            </h5>

                            <p class="text">The process of PRP therapy involves several steps:

                            </p>
                            <ul class="service-ul sep">
                              
                                <li>
                               <strong>    Blood Collection:</strong> A small amount of blood (usually 30-60 millilitres) is drawn from the patient's arm
                                </li>
                                <li> <strong>Centrifugation:</strong> The drawn blood sample is placed in a centrifuge machine that spins rapidly, separating the different components of blood based on their densities</li>
                                <li> <strong>Plasma Concentration:</strong> The centrifuge separates the platelets from other blood cells, creating a concentrated plasma rich in platelets.</li>
                                <li> <strong>Injection:</strong> The concentrated PRP is then injected into the targeted scalp area, where it releases growth factors and stimulates tissue regeneration and repair.</li>


                            </ul>
                            <h5 class="service-title1 sep">Advantages of PRP Therapy
                            </h5>
                            <p>PRP therapy offers several advantages:</p>
                            <ul class="service-ul sep">
                                <li>
                                  Natural Healing
                                </li>
                                <li>
                                   Non-Invasive
                                </li>
                                <li>
                                  PRP can be used to treat various conditions across different medical specialties.
                                </li>
                                <li>Promising Results</li>

                            </ul>
                            <div class="faq">
                                <h5>FAQs about PRP

                                </h5>
                                <div class="panel-group mb-30" id="accordion">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse1" aria-expanded="false">
                                                            Is PRP safe? 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse active collapse" data-bs-parent="#accordion" style="">
                                                    <div class="panel-body">
                                                        <p>PRP is generally considered safe since it uses the patient's own blood, minimizing the risk of adverse reactions.

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse2" aria-expanded="false">
                                                           Does PRP hurt? 

                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" data-bs-parent="#accordion" style="">
                                                    <div class="panel-body">
                                                        <p>Patients may experience slight discomfort at the injection site, but it is usually well-tolerated.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse3" aria-expanded="false">
                                                            How long does it take to see results? 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" data-bs-parent="#accordion" style="">
                                                    <div class="panel-body">
                                                        <p>Results vary depending on the condition being treated, but some patients notice improvement within a few weeks to months after PRP therapy.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="panel">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapse4" aria-expanded="false">
                                                            How long do mesotherapy results last?

                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse4" class="panel-collapse collapse" data-bs-parent="#accordion">
                                                    <div class="panel-body">
                                                        <p>The longevity of mesotherapy results varies depending on factors such as the patient's age, lifestyle, skincare regimen, and ongoing maintenance treatments.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div> -->
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
                            <p class="text">Platelet Rich Plasma Therapy (PRP) is a promising medical technique that harnesses the body's natural healing abilities to treat various conditions. Its non-invasive nature, safety profile, and versatility make it an amazing option for patients seeking effective and holistic treatments. As research in this field continues to expand, PRP holds the potential to revolutionize healthcare practices and improve patient outcomes across different medical disciplines.

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