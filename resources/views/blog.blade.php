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
                        {{-- <div class="widget widget-search mb-30">
                            <form class="search-form">
                                <input type="search" class="form-control" placeholder="Find Products">
                                <button type="submit" class="btn-text-only">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div> --}}
                        {{-- <div class="widget widget-category mb-30">
                            <h3 class="title">Blog Category</h3>
                            <ul class="nav-list">
                                <li class="active">
                                    <a href="#">Spa &amp; Health</a>
                                    <span class="qty">10</span>
                                </li>
                                <li>
                                    <a href="#">Hair Cut</a>
                                    <span class="qty">08</span>
                                </li>
                                <li>
                                    <a href="#">Nail</a>
                                    <span class="qty">21</span>
                                </li>
                                <li>
                                    <a href="#">Massage</a>
                                    <span class="qty">12</span>
                                </li>
                                <li>
                                    <a href="#">Body Care</a>
                                    <span class="qty">13</span>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="widget widget-post mb-30">
                            <h3 class="title">Recent Post</h3>
                            <article class="article-item">
                                {{-- <div class="image">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-sm-1.jpg')}}"
                                            alt="Demo Image"></a>
                                </div> --}}
                                <div class="content">
                                    <h3>
                                        <a href="#">Dermal Fillers – 6 Things you Should Know</a>
                                    </h3>
                                    {{-- <div class="author">
                                        By Courtney McKenzie
                                    </div> --}}
                                </div>
                            </article>
                            <article class="article-item">
                                {{-- <div class="image">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-sm-2.jpg')}}"
                                            alt="Demo Image"></a>
                                </div> --}}
                                <div class="content">
                                    <h3>
                                        <a href="#">Different Types of Skin Blemishes and its Treatments – Get Blemish Free Skin</a>
                                    </h3>
                                    {{-- <div class="author">
                                        By Alexandra Morton
                                    </div> --}}
                                </div>
                            </article>
                            <article class="article-item">
                                {{-- <div class="image">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-sm-3.jpg')}}"
                                            alt="Demo Image"></a>
                                </div> --}}
                                <div class="content">
                                    <h3>
                                        <a href="#">Fungal Skin Infection: Treatment & Prevention</a>
                                    </h3>
                                    {{-- <div class="author">
                                        By Lydia Birch
                                    </div> --}}
                                </div>
                            </article>
                            <article class="article-item">
                                {{-- <div class="image">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-sm-4.jpg')}}"
                                            alt="Demo Image"></a>
                                </div> --}}
                                <div class="content">
                                    <h3>
                                        <a href="#">Vitiligo Treatment at Zafeerah Skin Clinic</a>
                                    </h3>
                                    {{-- <div class="author">
                                        By Jasmine Page
                                    </div> --}}
                                </div>
                            </article>
                        </div>
                        <div class="widget widget-post mb-30">
                            <h3 class="title">Popular Post</h3>
                            <article class="article-item">
                                {{-- <div class="image">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-sm-1.jpg')}}"
                                            alt="Demo Image"></a>
                                </div> --}}
                                <div class="content">
                                    <h3>
                                        <a href="#">Treatment</a>
                                    </h3>
                                    {{-- <div class="author">
                                        By Courtney McKenzie
                                    </div> --}}
                                </div>
                            </article>
                            <article class="article-item">
                                {{-- <div class="image">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-sm-2.jpg')}}"
                                            alt="Demo Image"></a>
                                </div> --}}
                                <div class="content">
                                    <h3>
                                        <a href="#">Uncategorized</a>
                                    </h3>
                                    {{-- <div class="author">
                                        By Alexandra Morton
                                    </div> --}}
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
                                        <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-lg-4.jpg')}}"
                                                alt="Demo Image"></a>
                                    </div>
                                    <div class="content">
                                        <span class="time">August 24, 2020</span>
                                        <h3 class="title">
                                            <a href="#">Dermal Fillers – 6 Things you Should Know
                                                &ZeroWidthSpace;</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">Dermal fillers and botox are not the same. The first and most important misunderstanding to clear about Dermal filler is – “Dermal filler are not the same as Botox”. Where Botox freezes muscles to diminish wrinkles, fillers smoothen skin by filling wrinkles. Dermal fillers are small gel injections, that fill the wrinkles and add volume to soft tissue. derma fillers can be injected in different parts of the face like around eye, mouth, jawline, and cheeks.</p>
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
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-lg-5.jpg')}}"
                                                alt="Demo Image"></a>
                                        <span></span>
                                    </div>
                                    <div class="content">
                                        <span class="time">June 15, 2020 </span>
                                        <h3 class="title">
                                            <a href="#">Fungal Skin Infection: Treatment & Prevention</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">When talking about fungus, foremost, many may link fungus to mushrooms
                                            growing on a moist tree trunk, or an old bread with mold on it. There are millions of fungi
                                            species among which mushrooms & mold are the most well-known ones. Despite millions of
                                            species, approx only 300 can cause infection in human beings.</p>
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
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-lg-6.jpg')}}"
                                                alt="Demo Image"></a>
                                    </div>
                                    <div class="content">
                                        <span class="time">July 28, 2020</span>
                                        <h3 class="title">
                                            <a href="#">Different Types of Skin Blemishes and its Treatments – Get Blemish Free
                                                Skin</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">It is no secret that everyone dreams of having perfect smooth skin, and many
                                            even work hard enough to achieve one. The ongoing international “glass skin” trend and the
                                            seemingly unnatural, perfect faces of models looking like dolls, add to the desire of having
                                            clear skin.</p>
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
                            <div class="col-md-6 col-sm-12">
                                <div class="card mb-30">
                                    <div class="image">
                                        <a href="#"><img src="{{ asset('/resources/assets/images/blog/blog-lg-6.jpg')}}"
                                                alt="Demo Image"></a>
                                    </div>
                                    <div class="content">
                                        <span class="time">April 16, 2020</span>
                                        <h3 class="title">
                                            <a href="#">Vitiligo Treatment at Zafeerah Skin Clinic</a>
                                            <span></span>
                                        </h3>
                                        <p class="text">Is VITILIGO leaving a patch on your Life?Treat it effectively with medication. Here is a perfect vitiligo transformation story of our young patient. Call: 9978878692 / 7498846500 to Consult Online. #Vitiligo #VitiligoTreatment #Transformation #vitiligocured #OnlineConsultation #ConsultOnline #DermatologyOnline #TeleMedicine #TeleConsulting #StayHomeStaySafe #ZafeerahSkinClinic #SkinClinic #SkinSpecialist #SkinCare #Kamothe #Byculla #MumbaiCentral #Kharghar #NaviMumbai #Mumbai</p>
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
                        {{-- <div class="pagination">
                            <a href="#" class="page-numbers"><i class="bx bxs-chevron-left"></i></a>
                            <a href="#" class="page-numbers current" aria-current="page">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers"><i class="bx bxs-chevron-right"></i></a>
                        </div> --}}
                    </section>

                </div>
            </div>
        </div>
    </div>



@stop
