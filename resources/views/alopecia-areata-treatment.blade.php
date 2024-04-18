@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1> Alopecia Areata</h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item active"><span></span>Alopecia Areata</li>
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
                                <img src="{{ asset('/resources/assets/images/service/alopecia-areata-treatment.png') }}"
                                    alt="alopecia-areata-treatment">
                            </div>
                            <div class="content">
                                <h2 class="title">
                                    Alopecia Areata

                                    <span></span>
                                </h2>
                                <blockquote class="blockquote">
                                    Alopecia areata is a common autoimmune condition affecting millions worldwide, leading
                                    to sudden hair loss in localized or widespread areas.
                                    Zafeerah Skin Clinic is renowned for its Alopecia treatment. We use the most advanced
                                    technologies to help you overcome Alopecia. We also tailor the treatment plans according
                                    to your needs and comfort.

                                    Let us discuss about alopecia areata, including its symptoms, when to seek medical
                                    attention, causes, available treatments, risk factors, complications, prevention
                                    strategies, and frequently asked questions.

                                </blockquote>
                                <h5 class="service-title1 ">Symptoms of Hair Loss
                                </h5>


                                <ul class="service-ul sep">
                                    <li>
                                        The hallmark symptom of alopecia areata is sudden hair loss in small, circular
                                        patches on the scalp, eyelashes, eyebrows, or other body hair.
                                    </li>
                                    <li>
                                        Complete baldness (alopecia totalis) or loss of all body hair (alopecia universalis)
                                        are also extensive symptoms of Alopecia.
                                    </li>

                                </ul>

                                <h5 class="service-title1 sep">When to See a Doctor


                                </h5>

                                <p class="text">It's important to consult a dermatologist if you experience sudden or
                                    unexplained hair loss, especially if it occurs in patches or is accompanied by other
                                    symptoms like itching, redness, or discomfort.

                                </p>
                                <h5 class="service-title1 sep">Causes of Alopecia Areata
                                </h5>
                                <p>Alopecia areata is believed to be caused by an autoimmune response, where the body's
                                    immune system attacks hair follicles, leading to hair loss.
                                    While the exact cause still remains unclear, genetic factors, environmental triggers,
                                    and immune system dysregulation are thought to play a role in its development.
                                </p>

                                <p><strong>Non-Surgical Inventions for Alopecia Areata
                                    </strong></p>
                                <ul class="service-ul sep">
                                    <li>
                                        Corticosteroid creams or solutions applied to the affected areas can help minimize
                                        inflammation and promote hair regrowth.
                                    </li>
                                    <li>
                                        Corticosteroid injections
                                    </li>
                                    <li>
                                        Minoxidil (Rogaine)
                                    </li>

                                </ul>


                                <p><strong>Surgical Inventions for Alopecia Areata
                                    </strong></p>
                                <p>In cases where non-surgical treatments are ineffective, surgical interventions may be
                                    considered:
                                </p>
                                <ul class="service-ul sep">
                                    <li>
                                        <strong>Hair Transplantation:</strong> This technique involves transplanting hair
                                        follicles from donor areas to the bald patches on the scalp.
                                    </li>
                                    <li>
                                        <strong>Scalp Micropigmentation:</strong> A non-invasive procedure where pigments
                                        are tattooed onto the scalp to create the appearance of hair follicles and density.
                                    </li>

                                </ul>



                                <h5 class="service-title1 sep">Risk Factors and Complications



                                </h5>

                                <p class="text">Risk factors for alopecia areata include a family history of the
                                    condition, other autoimmune disorders, and a history of allergies or atopic conditions.
                                    Complications may include psychological distress, self-esteem issues, and emotional
                                    impact due to changes in appearance.

                                </p>

                                <h5 class="service-title1 sep">Prevention Strategies


                                </h5>


                                <ul class="service-ul sep">
                                    <li>
                                        Stress can cause autoimmune conditions, so practising stress-reducing techniques
                                        like meditation, yoga, or counselling can be beneficial.
                                    </li>
                                    <li>
                                        Eating a balanced diet, exercising regularly, and maintaining overall wellness can
                                        support immune system function.
                                    </li>
                                    <li>
                                        Identify and avoid dangerous triggers such as allergens or environmental factors
                                        that may worsen alopecia areata.
                                    </li>


                                </ul>


                                <div class="faq">
                                    <h5>FAQs about Alopecia Areata

                                    </h5>
                                    <div class="panel-group mb-30" id="accordion">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse1"
                                                                aria-expanded="false">
                                                                Is alopecia areata contagious?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse active collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>No, alopecia areata is not contagious and cannot be passed
                                                                from person to person or through contact with affected
                                                                individuals.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse2"
                                                                aria-expanded="false">
                                                                Can alopecia areata be cured completely?

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>While there is currently no complete cure for alopecia
                                                                areata, treatments can help manage the condition and promote
                                                                hair regrowth in many cases.

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse3"
                                                                aria-expanded="false">
                                                                Does alopecia areata only affect the scalp?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>Alopecia areata can affect any hair-bearing area of the body,
                                                                including the scalp, eyebrows, beard, and body hair.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse4"
                                                                aria-expanded="false">
                                                                Can alopecia areata resolve on its own without treatment?

                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse collapse"
                                                        data-bs-parent="#accordion" style="">
                                                        <div class="panel-body">
                                                            <p>In some cases, alopecia areata may resolve spontaneously
                                                                without treatment, especially for mild or localized forms of
                                                                the condition. However, treatment is often recommended to
                                                                promote faster and more consistent hair regrowth.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="service-title1 sep">Conclusion
                                </h5>
                                <p class="text">Alopecia areata is a complicated autoimmune condition that can have
                                    drastic effects on physical appearance and emotional well-being. By understanding its
                                    symptoms, causes, available treatments, and preventive measures, you can manage alopecia
                                    areata. If you or someone you know is experiencing hair loss due to alopecia areata,
                                    seeking professional medical advice is crucial for proper diagnosis and treatment
                                    planning.

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
