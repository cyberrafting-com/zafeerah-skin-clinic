<header class="header-area">

    <div class="main-navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('home')}}">
                            <img src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-logo.png') }}" alt="logo">
                            {{-- <img src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-logo.png') }}" alt="logo"> --}}
                        </a>
                    </div>
                    <div class="side-option-responsive">
                        {{-- <a href="#" class="side-option-button">

                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                        </a> --}}
                        {{-- <div class="side-option-inner">
                            <div class="item">
                                <div class="language">
                                    <a href="#language" class="language-button">Language<i
                                            class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('/resources/assets/images/flag-uk.png') }}"
                                                    alt="flag">
                                                English
                                            </a>
                                        </li>
                                        <li class="menu-item"><a href="#" class="menu-link">
                                                <img src="{{ asset('/resources/assets/images/flag-germany.png') }}"
                                                    alt="flag">
                                                Deutsch</a>
                                        </li>
                                        <li class="menu-item"><a href="#" class="menu-link">
                                                <img src="{{ asset('/resources/assets/images/flag-portugal.png') }}"
                                                    alt="flag">
                                                󠁥Português
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('/resources/assets/images/flag-jordan.png') }}"
                                                    alt="flag">
                                                العربية
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">
                                                <img src="{{ asset('/resources/assets/images/flag-china.png') }}"
                                                    alt="flag">
                                                中文
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cart">
                                    <a href="cart.html" class="cart-btn">
                                        <i class="flaticon shopping-bag"></i>
                                        <span class="badge">0</span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#searchBoxResponsive" class="btn-search" data-effect="mfp-zoom-in">
                                    <i class="bx bx-search"></i>
                                </a>
                                <div id="searchBoxResponsive" class="search-box mfp-with-anim mfp-hide">
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">
                                        <button type="submit" class="btn-search">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home')}}">
                        <img src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-logo.png') }}" alt="Logo">
                        <img src="{{ asset('/resources/assets/images/zafeerah-skin-clinic-logo.png') }}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link active toggle">Home<i
                                        class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">Home Demo - 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Demo - 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Demo - 3</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('home')}}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about')}}" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Services<i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link">Our Expert</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Appointment</a>
                                    </li> --}}

                                    {{-- hair treatment start--}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link toggle">Hair<i
                                                class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Computerized Hair Analysis</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Alopecia Areata</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Mesotherapy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Platelet Rich Plasma Therapy (prp)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Laser Hair Grow(prp)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Scalp Micro Pigmentation (prp)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Hair Transplantation (prp)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Growth Factor Concentrate (prp)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- hair treatment end--}}

                                    {{-- eye treatment start--}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link toggle">Eye<i
                                                class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Dark Circle Reduction</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Laser Eye Wrinkle Reduction</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Eye Bag Correction</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Blepharoplasty (Eyelid Surgery)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Crows Feet</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- eye treatment end--}}

                                     {{-- body treatment start--}}
                                     <li class="nav-item">
                                        <a href="#" class="nav-link toggle">Body<i
                                                class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Body Shaping & Sculpting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Liposuction</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Body Contouring</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Fat Transfer & Grafting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Stretch Mark Removal</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- body treatment end--}}
                                    {{-- cosmetic dematology treatment start--}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link toggle">Cosmetic Dermatology<i
                                                class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Laser Hair Removal Clinic</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Skin Brightening</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Laser Tattoo Removal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Moles And Skin Tag Removal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Botox</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- cosmetic dematology treatment end--}}

                                     {{-- skin treatment start--}}
                                     <li class="nav-item">
                                        <a href="#" class="nav-link toggle">Skin<i
                                                class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Super Specialty Dermatology</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Vitiligo Clinic</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Acne Scars & Pigmentation Clinic</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Warts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- skin dematology treatment end--}}
                                    {{-- anti-ageing treatment start--}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link toggle">Anti-Ageing<i
                                                class="bx bx-chevron-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">3D Face Lift</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Skin Tightening Medifacial</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">HIFU</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Ultherapy</a>
                                            </li>
                                        </ul>
                                    </li>
                                    {{-- anti-ageing dematology treatment end--}}


                                   
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Gallery<i
                                        class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('images-gallery')}}" class="nav-link">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('video-gallery')}}" class="nav-link">Video</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Faq's</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('patient-info')}}" class="nav-link">Patient Info</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Career</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ route('contact')}}" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="side-option">
                        <div class="item">
                            <div class="language">
                                <a href="#language" class="language-button">Language<i
                                        class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <img src="{{ asset('/resources/assets/images/flag-uk.png') }}"
                                                alt="flag">
                                            English
                                        </a>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="{{ asset('/resources/assets/images/flag-germany.png') }}"
                                                alt="flag">
                                            Deutsch</a>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="{{ asset('/resources/assets/images/flag-portugal.png') }}"
                                                alt="flag">
                                            󠁥Português
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <img src="{{ asset('/resources/assets/images/flag-jordan.png') }}"
                                                alt="flag">
                                            العربية
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <img src="{{ asset('/resources/assets/images/flag-china.png') }}"
                                                alt="flag">
                                            中文
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cart">
                                <a href="cart.html" class="cart-btn">
                                    <i class="flaticon shopping-bag"></i>
                                    <span class="badge">0</span>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="#searchBox" class="btn-search" data-effect="mfp-zoom-in">
                                <i class="bx bx-search"></i>
                            </a>
                            <div id="searchBox" class="search-box mfp-with-anim mfp-hide">
                                <form class="search-form">
                                    <input class="search-input" name="search" placeholder="Search" type="text">
                                    <button type="submit" class="btn-search">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                </nav>
            </div>
        </div>
    </div>

</header>
