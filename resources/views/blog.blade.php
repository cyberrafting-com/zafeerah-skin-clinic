@php($title = 'Zafeerah Skin Clinic')
@section('meta_desc') @endsection

@extends('layouts.default')
@section('content')


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Blog</h1>
                <ul>
                    <li class="item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="item active"><span></span>Blog</li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{ asset('/resources/assets/images/breadscrumb-img.png') }}" alt="Demo Image">
        </div>
    </div>
    <div class="blog-single-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <aside class="aside-widget-area">

                        <div class="widget widget-post mb-30">
                            <h3 class="title">Recent Post</h3>
                            <article class="article-item">

                                <div class="content">
                                    <h3>
                                        <a href="{{ route('derma-filler')}}">Dermal
                                            Fillers – 6 Things you Should Know</a>
                                    </h3>

                                </div>
                            </article>
                            <article class="article-item">

                                <div class="content">
                                    <h3>
                                        <a href="{{ route('different-type-of-skin-blemishes')}}">Different Types of Skin Blemishes and its Treatments – Get Blemish
                                            Free Skin</a>
                                    </h3>

                                </div>
                            </article>
                            <article class="article-item">

                                <div class="content">
                                    <h3>
                                        <a href="{{ route('fungle-skin-infection')}}">Fungal Skin Infection: Treatment & Prevention</a>
                                    </h3>

                                </div>
                            </article>
                            <article class="article-item">

                                <div class="content">
                                    <h3>
                                        <a href="{{ route('vitiligo-treatment') }}">Vitiligo Treatment at Zafeerah Skin Clinic</a>
                                    </h3>

                                </div>
                            </article>
                        </div>
                        <div class="widget widget-post mb-30">
                            <h3 class="title">Popular Post</h3>
                            <article class="article-item">

                                <div class="content">
                                    <h3>
                                        <a href="{{ route('derma-filler')}}">Treatment</a>
                                    </h3>

                                </div>
                            </article>
                            <article class="article-item">

                                <div class="content">
                                    <h3>
                                        <a href="{{ route('derma-filler')}}">Uncategorized</a>
                                    </h3>

                                </div>
                            </article>


                        </div>

                    </aside>
                </div>
                <div class="col-lg-9 col-md-12">
                    <section id="blog" class="blog-section">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="{{ route('derma-filler')}}"><img
                                                src="{{ asset('/resources/assets/images/blog/dermal-fillers-blog.png') }}"
                                                alt="dermal-fillers-blog"></a>
                                    </div>
                                    <div class="content">
                                        <span class="time">August 24, 2020</span>
                                        <h3 class="title">
                                            <a href="{{ route('derma-filler')}}">Dermal
                                                Fillers – 6 Things you Should Know
                                                &ZeroWidthSpace;</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">Dermal fillers and botox are not the same. The first and most
                                            important misunderstanding to clear about Dermal filler is – “Dermal filler are
                                            not the same as Botox”. Where Botox freezes muscles to diminish wrinkles,
                                            fillers smoothen skin by filling wrinkles. Dermal fillers are small gel
                                            injections, that fill the wrinkles and add volume to soft tissue. derma fillers
                                            can be injected in different parts of the face like around eye, mouth, jawline,
                                            and cheeks.</p>
                                        <hr>
                                        <ul class="info-list">
                                            <li>Dr Zainul Hamdani</li>
                                            {{-- <li>24 Comment</li> --}}

                                            <div class="cta-btn">
                                                <a href="{{ route('derma-filler')}}" class="btn-text read-more-btn">Read More<i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="{{ route('fungle-skin-infection')}}"><img
                                                src="{{ asset('/resources/assets/images/blog/fungal-skin infection-blog.png') }}"
                                                alt="fungal-skin infection-blog"></a>
                                        <span></span>
                                    </div>
                                    <div class="content">
                                        <span class="time">June 15, 2020 </span>
                                        <h3 class="title">
                                            <a href="{{ route('fungle-skin-infection')}}">Fungal Skin
                                                Infection: Treatment & Prevention</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">When talking about fungus, foremost, many may link fungus to
                                            mushrooms
                                            growing on a moist tree trunk, or an old bread with mold on it. There are
                                            millions of fungi
                                            species among which mushrooms & mold are the most well-known ones. Despite
                                            millions of
                                            species, approx only 300 can cause infection in human beings.</p>
                                        <hr>
                                        <ul class="info-list">
                                            <li>Dr Zainul Hamdani</li>
                                            {{-- <li>24 Comment</li> --}}

                                            <div class="cta-btn">
                                                <a href="{{ route('fungle-skin-infection')}}"
                                                    class="btn-text read-more-btn">Read More<i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="{{ route('different-type-of-skin-blemishes')}}"><img
                                                src="{{ asset('/resources/assets/images/blog/different-types-of-skin-blemishes-blog.png') }}"
                                                alt="different-types-of skin-blemishes-blog"></a>
                                    </div>
                                    <div class="content">
                                        <span class="time">July 28, 2020</span>
                                        <h3 class="title">
                                            <a href="{{ route('different-type-of-skin-blemishes')}}">Different Types of Skin Blemishes and its Treatments – Get
                                                Blemish Free
                                                Skin</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">It is no secret that everyone dreams of having perfect smooth
                                            skin, and many
                                            even work hard enough to achieve one. The ongoing international “glass skin”
                                            trend and the
                                            seemingly unnatural, perfect faces of models looking like dolls, add to the
                                            desire of having
                                            clear skin.</p>
                                        <hr>
                                        <ul class="info-list">
                                            <li>Dr Zainul Hamdani</li>
                                            {{-- <li>24 Comment</li> --}}

                                            <div class="cta-btn">
                                                <a href="{{ route('different-type-of-skin-blemishes')}}" class="btn-text read-more-btn">Read More<i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="{{ route('vitiligo-treatment') }}"><img
                                                src="{{ asset('/resources/assets/images/blog/vitiligo-treatment-blog.png') }}"
                                                alt="vitiligo-treatment-blog"></a>
                                    </div>
                                    <div class="content">
                                        <span class="time">April 16, 2020</span>
                                        <h3 class="title">
                                            <a href="{{ route('vitiligo-treatment') }}">Vitiligo Treatment at Zafeerah Skin Clinic</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">Is VITILIGO leaving a patch on your Life?Treat it effectively with medication. Here is a perfect vitiligo transformation story of our young patient. Call: 9978878692 / 7498846500 to Consult Online. #Vitiligo #VitiligoTreatment #Transformation #vitiligocured #OnlineConsultation #ConsultOnline #DermatologyOnline #TeleMedicine #TeleConsulting #StayHomeStaySafe #ZafeerahSkinClinic #SkinClinic #SkinSpecialist #SkinCare #Kamothe #Byculla #MumbaiCentral #Kharghar #NaviMumbai #Mumbai

                                        </p>
                                        <hr>
                                        <ul class="info-list">
                                            <li>Dr Zainul Hamdani</li>
                                            {{-- <li>24 Comment</li> --}}

                                            <div class="cta-btn">
                                                <a href="{{ route('vitiligo-treatment') }}" class="btn-text read-more-btn">Read More<i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>
            </div>
        </div>
    </div>



@stop


