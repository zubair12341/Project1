    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    {{-- Sweet Alert2 --}}
    
    
    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl-theme-default-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/owl-carousel-min.css') }}">
    <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard.min.css"
        rel="stylesheet" type="text/css">
    <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard_theme_dots.min.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    </head>

    <!-- start-preloader -->
    <!--<div id="preloader"-->
    <!--    style="background: #fff;height: 100%;left: 0;opacity: 1;position: fixed;display: flex;align-items: center;justify-content: center; top: 0;width: 100%;z-index: 999999999;overflow-x: hidden !important;">-->
    <!--    <div class="preloader">-->
    <!--        <img src="{{ asset('assets/images/preloader/preloader.gif') }}" class="w-60" alt="Pre-loader">-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End-preloader -->
    <script>
        // Preloader-start

        $(window).on("load", function() {
            $("#preloader")
                .delay(600)
                .fadeOut("slow", function() {
                    $(this).remove();
                });
        });
        // Preloader-End
    </script>

    <body class="rbt-header-sticky">

        <!-- Start Header Area -->
        <header class="rbt-header rbt-header-10">
            <div class="rbt-sticky-placeholder"></div>
            <!-- Start Header Top  -->
            <div
                class="rbt-header-top rbt-header-top-1 header-space-betwween bg-not-transparent bg-color-darker top-expended-activation">
                <div class="container-fluid">
                    <div class="top-expended-wrapper">
                        <div class="top-expended-inner rbt-header-sec align-items-center ">
                            <div class="rbt-header-sec-col rbt-header-left d-none d-xl-block">
                                <div class="rbt-header-content">
                                    <!-- Start Header Information List  -->
                                    <div class="header-info">
                                        <ul class="rbt-information-list">
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i>100k <span
                                                        class="d-none d-xxl-block">Followers</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i>500k <span
                                                        class="d-none d-xxl-block">Followers</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="feather-phone"></i>+44-1234-567834</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Header Information List  -->
                                </div>
                            </div>
                            <div class="rbt-header-sec-col rbt-header-center">
                                <div class="rbt-header-content justify-content-start justify-content-xl-center">
                                    <div class="header-info">
                                        <div class="rbt-header-top-news">
                                            <div class="inner">
                                                <div class="content">
                                                    <span
                                                        class="rbt-badge variation-02 bg-color-primary color-white radius-round">Hot</span>
                                                    <span class="news-text"><img
                                                            src="{{ asset('assets/images/icons/hand-emojji.svg') }}"
                                                            alt="Hand Emojji Images"> Intro price. Get Wisdom Chest for
                                                        Big Sale
                                                        -95% off.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                                <div class="rbt-header-content justify-content-start justify-content-lg-end">
                                    <div class="header-info d-none d-xl-block">
                                        <ul class="social-share-transparent">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="rbt-separator d-none d-xl-block"></div>
                                    <div class="header-info">
                                        <ul class="rbt-dropdown-menu switcher-language">
                                            <li class="has-child-menu">
                                                <a href="#">
                                                    <img class="left-image"
                                                        @if (session()->get('locale') == 'es') src="{{ asset('assets/images/icons/Spanish.jpg') }}"
                                                    @elseif(session()->get('locale') == 'ja')
                                                    src="{{ asset('assets/images/icons/Japanese.jpg') }}"
                                                    @elseif(session()->get('locale') == 'ko')
                                                    src="{{ asset('assets/images/icons/Korean.jpg') }}"
                                                    @elseif(session()->get('locale') == 'ru')
                                                    src="{{ asset('assets/images/icons/Russian.jpg') }}"
                                                    @elseif(session()->get('locale') == 'de')
                                                    src="{{ asset('assets/images/icons/German.jpg') }}"
                                                    @elseif(session()->get('locale') == 'pt')
                                                    src="{{ asset('assets/images/icons/Portuguese.jpg') }}"
                                                    @elseif(session()->get('locale') == 'vi')
                                                    src="{{ asset('assets/images/icons/Vietnamese.jpg') }}"
                                                    @elseif(session()->get('locale') == 'zh-CN')
                                                    src="{{ asset('assets/images/icons/Chinese-simplified.jpg') }}"
                                                    @elseif(session()->get('locale') == 'zh-TW')
                                                    src="{{ asset('assets/images/icons/Chinese-traditional.jpg') }}"
                                                    
                                                    @else
                                                        {{-- src="{{ asset('assets/images/icons/' . session()->get('locale') . '.png') }}"  --}}
                                                        src="{{ asset('assets/images/icons/en-us.png') }}" @endif
                                                        alt="Language Images">
                                                    <span class="menu-item">
                                                        @if (session()->get('locale') == 'en-us')
                                                            English (UK)
                                                        @elseif(session()->get('locale') == 'es')
                                                            Spanish
                                                        @elseif(session()->get('locale') == 'ja')
                                                            Japanese
                                                        @elseif(session()->get('locale') == 'ko')
                                                            Korean
                                                        @elseif(session()->get('locale') == 'ru')
                                                            Russian
                                                        @elseif(session()->get('locale') == 'de')
                                                            German
                                                        @elseif(session()->get('locale') == 'pt')
                                                            Portuguese
                                                        @elseif(session()->get('locale') == 'vi')
                                                            Vietnamese
                                                        @elseif(session()->get('locale') == 'zh-CN')
                                                            Chinese Simplified
                                                        @elseif(session()->get('locale') == 'zh-TW')
                                                            Chinese Traditional
                                                        @else
                                                            {{ session()->get('locale') }}
                                                        @endif
                                                    </span>
                                                    <i class="right-icon feather-chevron-down"></i>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'en-us']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/en-us.png') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">English UK</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'fr']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/fr.png') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">French</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'es']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Spanish.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Spanish</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'ja']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Japanese.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Japanese</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'ko']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Korean.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Korean</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'ru']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Russian.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Russian</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'de']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/German.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">German</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'pt']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Portuguese.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Portuguese</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'vi']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Vietnamese.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Vietnamese</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'zh-CN']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Chinese-simplified.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Chinese Simplified</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('changeLang', ['lang' => 'zh-TW']) }}">
                                                            <img class="left-image"
                                                                src="{{ asset('assets/images/icons/Chinese-traditional.jpg') }}"
                                                                alt="Language Images">
                                                            <span class="menu-item">Chinese Traditional</span>
                                                        </a>
                                                    </li>
                                                    <!-- Repeat for other language options -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="header-info">
                                        <ul class="rbt-dropdown-menu currency-menu">
                                            <li class="has-child-menu">
                                                <a href="#">
                                                    <span class="menu-item">GBP</span>
                                                    <i class="right-icon feather-chevron-down"></i>
                                                </a>
                                                <ul class="sub-menu hover-reverse">
                                                    <li>
                                                        <a href="#">
                                                            <span class="menu-item">GBP</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="menu-item">USD</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="menu-item">EUR</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="top-bar-expended d-block d-lg-none">
                                <button class="topbar-expend-button rbt-round-btn"><i
                                        class="feather-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top  -->
            <div class="rbt-header-wrapper header-space-betwween header-sticky">
                <div class="container-fluid">
                    <div class="mainbar-row rbt-navigation-center align-items-center">
                        <div class="header-left rbt-header-content">
                            <div class="header-info">
                                <div class="logo">

                                    @auth
                                        @if (Auth::user()->role == 'admin')
                                            <a href="{{ route('admin.home') }}">
                                            @elseif(Auth::user()->role == 'student')
                                                <a href="{{ route('student.home') }}">
                                        @endif
                                    @endauth
                                    @guest
                                        <a href="{{ route('/') }}">
                                        @endguest
                                        <img src="{{ asset('assets/images/logo/logo.png') }}"
                                            alt="Education Logo Images">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="rbt-main-navigation d-none d-xl-block">
                            <nav class="mainmenu-nav">
                                <ul class="mainmenu">
                                    <li class="nav-link">
                                        @auth
                                            @if (Auth::user()->role == 'admin')
                                                <a
                                                    href="{{ route('admin.home') }}">{{ GoogleTranslate::trans('Home', app()->getLocale()) }}</a>
                                            @elseif(Auth::user()->role == 'student')
                                                <a
                                                    href="{{ route('student.home') }}">{{ GoogleTranslate::trans('Home', app()->getLocale()) }}</a>
                                            @endif
                                        @endauth
                                        @guest
                                            <a
                                                href="{{ route('/') }}">{{ GoogleTranslate::trans('Home', app()->getLocale()) }}</a>
                                        @endguest
                                    </li>

                                    <li class="nav-link with-megamenu has-menu-child-item position-static">
                                        <a href="{{ route('books') }}">{{ GoogleTranslate::trans('Books', app()->getLocale()) }}
                                            <i class="feather-chevron-down"></i></a>
                                        <!-- Start Mega Menu  -->
                                        {{-- <div class="rbt-megamenu grid-item-3">
                                            <div class="wrapper">
                                                <div class="row row--15">
                                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                        <h3 class="rbt-short-title">
                                                            {{ GoogleTranslate::trans('Books Genre', app()->getLocale()) }}
                                                        </h3>
                                                        <ul class="mega-menu-item">
                                                                
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'legal fiction']) }}">legal fiction </a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'historical fiction']) }}">historical fiction </a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'war novel']) }}">war novel</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'science fiction']) }}">science fiction </a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'fantasy fiction']) }}">fantasy fiction </a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'mystery']) }}">mystery </a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'magical realism']) }}">magical realism </a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'Greek mythology']) }}">Greek mythology</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'Dystopian']) }}">Dystopian</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                        <ul class="mega-menu-item mt-5">
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'thriller']) }}">thriller</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'Southern Gothic']) }}">Southern Gothic</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'Bildungsroman']) }}">Bildungsroman</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'Epistolary novel']) }}">Epistolary novel</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'realistic fiction']) }}">realistic fiction</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'Urban fantasy']) }}">Urban fantasy</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'superhero fiction']) }}">superhero fiction</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'contemporary fantasy']) }}">contemporary fantasy</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'humor']) }}">humor</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                        <ul class="mega-menu-item mt-5">
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'drama']) }}">drama</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'alternative history']) }}">alternative history</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'fairy tale']) }}">fairy tale</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'biography']) }}">biography</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'adventure fiction']) }}">adventure fiction</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'satire']) }}">satire</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'fable']) }}">fable</a></li>
                                                            <li><a href="{{ route('chose.genre', ['genre'=> 'historical drama']) }}">historical drama</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="rbt-megamenu grid-item-3">
                                            <div class="wrapper">
                                                <div class="row row--15">
                                                    @php
                                                        $genres = App\Models\Genre::all();
                                                    @endphp
                                        
                                                    @foreach ($genres as $genre)
                                                        @if ($loop->first || $loop->index % 3 === 0)
                                                            <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                                                <ul class="mega-menu-item">
                                                        @endif
                                                        <li><a href="{{ route('chose.genre', ['genre' => $genre->genre]) }}">{{ $genre->genre }}</a></li>
                                                        @if ($loop->last || $loop->index % 3 === 2)
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- End Mega Menu  -->
                                    </li>
                                    <li class="nav-link">
                                        <a href="{{ route('onlinecourse') }}">{{ GoogleTranslate::trans('Online Courses', app()->getLocale()) }}

                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="{{ route('about') }}">{{ GoogleTranslate::trans('About Us', app()->getLocale()) }}
                                        </a>
                                    </li>

                                    <li class="nav-link">
                                        <a href="{{ route('contactus') }}">{{ GoogleTranslate::trans('Contact Us', app()->getLocale()) }}
                                            </i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="header-right">

                            <!-- Navbar Icons -->
                            <ul class="quick-access">
                                @guest
                                    <div class="buttons" style="margin-left: 25px;">
                                        <a href="" class="loginbutton" data-toggle="modal" data-target="#loginModal">Login</a>

                                        {{-- <button type="button" class="btn btn-sign-login" data-toggle="modal"
                                            data-target="#loginModal">Login</button> --}}

                                        <a href="{{ url('register') }}"><button type="button"
                                                class="btn btn-sign-login ml-1">Sign Up</button></a>

                                    </div>
                                    |
                                @endguest
                                <li class="access-icon">
                                    <a class="search-trigger-active rbt-round-btn" href="#">
                                        <i class="feather-search"></i>
                                    </a>
                                </li>

                                <li class="access-icon rbt-mini-cart">
                                    <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
                                        <i class="feather-shopping-cart"></i>
                                        <span class="rbt-cart-count">4</span>
                                    </a>
                                </li>
                                @auth
                                    <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                        <a href="#"><i class="feather-user"></i>
                                            @if (Auth::user()->role == 'admin')
                                                Admin
                                            @elseif(Auth::user()->role == 'student')
                                                {{ Auth::user()->name }}
                                            @endif

                                        </a>
                                        <div class="rbt-user-menu-list-wrapper">
                                            <div class="inner">
                                                <div class="rbt-admin-profile">
                                                    <div class="admin-thumbnail">
                                                        <img src="{{ asset('assets/images/team/avatar.jpg') }}"
                                                            alt="User Images">
                                                    </div>
                                                    <div class="admin-info">
                                                        <span class="name">
                                                            @if (Auth::user()->role == 'admin')
                                                                Admin
                                                                <a class="rbt-btn-link color-primary"
                                                            href="{{ route('admin.profile') }}">View
                                                            Profile</a>
                                                            @elseif(Auth::user()->role == 'student')
                                                                {{ Auth::user()->name }}
                                                                <a class="rbt-btn-link color-primary"
                                                            href="{{ route('student.profile') }}">View
                                                            Profile</a>
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <ul class="user-list-wrapper">
                                                    <li>
                                                        @if (Auth::user()->role == 'admin')
                                                            <a href="{{ route('admin.dashboard') }}">
                                                                <i class="feather-home"></i>
                                                                <span>My Dashboard</span>
                                                            </a>
                                                        @elseif(Auth::user()->role == 'student')
                                                            <a href="{{ route('student.dashboard') }}">
                                                                <i class="feather-home"></i>
                                                                <span>My Dashboard</span>
                                                            </a>
                                                        @endif

                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="feather-settings"></i>
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ url('logout') }}" method="POST"
                                                            id="logoutForm">
                                                            @csrf
                                                            <a href="#"
                                                                onclick="document.getElementById('logoutForm').submit(); return false;">
                                                                <i class="feather-log-out"></i>
                                                                <span>Logout</span>
                                                            </a>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                @endauth
                                
                            </ul>

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar d-block d-xl-none">
                                <div class="hamberger">
                                    <button class="hamberger-button rbt-round-btn">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->

                        </div>
                    </div>
                </div>
                <!-- Start Search Dropdown  -->
                <div class="rbt-search-dropdown">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="#">
                                    <input type="text" id="search-input" placeholder="What are you looking for?">
                                    <div class="submit-btn">
                                        <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                
                        <div class="rbt-separator-mid">
                            <hr class="rbt-separator m-0">
                        </div>
                
                        <div class="row g-4 pt--30 pb--60">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h5 class="rbt-title-style-2">Our Top Trending Books</h5>
                                </div>
                            </div>
                            <div class="search-results" style="display: flex!important;">
                                <!-- Results will be displayed here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Search Dropdown  -->
            </div>
            <script>
                const bookSelectRoute = @auth
                    "{{ route('student.book.select', ['book' => ':title', 'id' => ':id']) }}"
                @else
                    "{{ route('book.select', ['book' => ':title', 'id' => ':id']) }}"
                @endauth;
            
                document.getElementById('search-input').addEventListener('input', function() {
                    const query = this.value;
                    if (query.length >= 3) {
                        searchBooks(query);
                    }
                });
            
                function searchBooks(query) {
                    fetch(`/search-books?query=${query}`)
                        .then(response => response.json())
                        .then(data => {
                            displaySearchResults(data);
                        });
                }
            
                function displaySearchResults(results) {
                    const searchResults = document.querySelector('.search-results');
                    searchResults.innerHTML = '';
            
                    if (results.length === 0) {
                        searchResults.innerHTML = 'No results found.';
                        return;
                    }
            
                    results.forEach(book => {
                        const resultItem = document.createElement('div');
                        resultItem.className = 'col-lg-3 col-md-4 col-sm-6 col-12';
            
                        // Build the HTML structure for each search result
                        const bookLink = bookSelectRoute
                            .replace(':title', book.title)
                            .replace(':id', book.id);
            
                        resultItem.innerHTML = `
                            <div class="rbt-card variation-01 rbt-hover" style="margin: 0 10px">
                                <div class="rbt-card-img">
                                    <a href="${bookLink}"> 
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title">
                                        <a href="${bookLink}">${book.title}</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (${book.reviews_count} Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        `;
            
                        searchResults.appendChild(resultItem);
                    });
                }
            </script>
            
            
            <!-- Start Side Vav -->
            <div class="rbt-offcanvas-side-menu rbt-category-sidemenu">
                <div class="inner-wrapper">
                    <div class="inner-top">
                        <div class="inner-title">
                            <h4 class="title">Course Category</h4>
                        </div>
                        <div class="rbt-btn-close">
                            <button class="rbt-close-offcanvas rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </div>
                    <nav class="side-nav w-100">
                        <ul class="rbt-vertical-nav-list-wrapper vertical-nav-menu">
                            <li class="vertical-nav-item">
                                <a href="#">Course School</a>
                                <div class="vartical-nav-content-menu-wrapper">
                                    <div class="vartical-nav-content-menu">
                                        <h3 class="rbt-short-title">Course Title</h3>
                                        <ul class="rbt-vertical-nav-list-wrapper">
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Art</a></li>
                                            <li><a href="#">Figma</a></li>
                                            <li><a href="#">Adobe</a></li>
                                        </ul>
                                    </div>
                                    <div class="vartical-nav-content-menu">
                                        <h3 class="rbt-short-title">Course Title</h3>
                                        <ul class="rbt-vertical-nav-list-wrapper">
                                            <li><a href="#">Photo</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Math</a></li>
                                            <li><a href="#">Read</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="vertical-nav-item">
                                <a href="#">Online School</a>
                                <div class="vartical-nav-content-menu-wrapper">
                                    <div class="vartical-nav-content-menu">
                                        <h3 class="rbt-short-title">Course Title</h3>
                                        <ul class="rbt-vertical-nav-list-wrapper">
                                            <li><a href="#">Photo</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Math</a></li>
                                            <li><a href="#">Read</a></li>
                                        </ul>
                                    </div>
                                    <div class="vartical-nav-content-menu">
                                        <h3 class="rbt-short-title">Course Title</h3>
                                        <ul class="rbt-vertical-nav-list-wrapper">
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Art</a></li>
                                            <li><a href="#">Figma</a></li>
                                            <li><a href="#">Adobe</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="vertical-nav-item">
                                <a href="#">kindergarten</a>
                                <div class="vartical-nav-content-menu-wrapper">
                                    <div class="vartical-nav-content-menu">
                                        <h3 class="rbt-short-title">Course Title</h3>
                                        <ul class="rbt-vertical-nav-list-wrapper">
                                            <li><a href="#">Photo</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Math</a></li>
                                            <li><a href="#">Read</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="vertical-nav-item">
                                <a href="#">Classic LMS</a>
                                <div class="vartical-nav-content-menu-wrapper">
                                    <div class="vartical-nav-content-menu">
                                        <h3 class="rbt-short-title">Course Title</h3>
                                        <ul class="rbt-vertical-nav-list-wrapper">
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Art</a></li>
                                            <li><a href="#">Figma</a></li>
                                            <li><a href="#">Adobe</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="read-more-btn">
                            <div class="rbt-btn-wrapper mt--20">
                                <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                                    href="#">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </nav>
                    <div class="rbt-offcanvas-footer">

                    </div>
                </div>
            </div>
            <!-- End Side Vav -->
            <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
        </header>
        <!-- Mobile Menu Section -->
        <div class="popup-mobile-menu">
            <div class="inner-wrapper">
                <div class="inner-top">
                    <div class="content">
                        <div class="logo">
                            @auth
                                @if (Auth::user()->role == 'admin')
                                    <a href="{{ route('admin.home') }}">
                                    @elseif(Auth::user()->role == 'student')
                                        <a href="{{ route('student.home') }}">
                                @endif
                            @endauth
                            @guest

                                <a href="{{ route('/') }}">
                                @endguest
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Education Logo Images">
                            </a>
                        </div>
                        <div class="rbt-btn-close">
                            <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </div>
                    <p class="description">Wisdom Chest is a education website template. You can customize all.</p>
                    <ul class="navbar-top-left rbt-information-list justify-content-start">
                        <li>
                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                        </li>
                        <li>
                            <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                        </li>
                    </ul>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="with-megamenu has-menu-child-item position-static">
                            <a href="#">Home <i class="feather-chevron-down"></i></a>
                            <!-- Start Mega Menu  -->
                            <div class="rbt-megamenu menu-skin-dark">
                                <div class="wrapper">
                                    <div
                                        class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="01-main-demo.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h1.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="01-main-demo.html">Home Demo <span
                                                                    class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="12-marketplace.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h12.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="12-marketplace.html">Marketplace
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->
                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="04-kindergarten.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h4.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="04-kindergarten.html">kindergarten
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->
                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="13-university-classic.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h13.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a
                                                                href="13-university-classic.html">University
                                                                Classic <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="14-home-elegant.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h14.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="14-home-elegant.html">Home Elegant
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="09-gym-coaching.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h9.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="09-gym-coaching.html">Gym Coaching
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="03-online-school.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h3.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="03-online-school.html">Online
                                                                School
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="06-university-status.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h6.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a
                                                                href="06-university-status.html">University
                                                                Status <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="15-home-technology.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h15.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="15-home-technology.html">Home
                                                                Technology <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="07-instructor-portfolio.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h7.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a
                                                                href="07-instructor-portfolio.html">Instructor
                                                                Portfolio
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="08-language-academy.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h8.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="08-language-academy.html">Language
                                                                Academy <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="11-single-course.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h11.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="11-single-course.html">Single
                                                                Course
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="10-online-course.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h10.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="10-online-course.html">Online
                                                                Course
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="05-classic-lms.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h5.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="05-classic-lms.html">Classic Lms
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="02-course-school.html"><img
                                                                src="{{ asset('assets/images/splash/demo/h2.jpg') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="02-course-school.html">Course
                                                                School
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item coming-soon">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img
                                                                src="{{ asset('assets/images/splash/demo/coming-soon-1.png') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="#">Coming Soon <span
                                                                    class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item coming-soon">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img
                                                                src="{{ asset('assets/images/splash/demo/coming-soon-2.png') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="#">Coming Soon 2 <span
                                                                    class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->

                                        <!-- Start Single Demo  -->
                                        <div
                                            class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item coming-soon">
                                            <div class="demo-single">
                                                <div class="inner">
                                                    <div class="thumbnail">
                                                        <a href="#"><img
                                                                src="{{ asset('assets/images/splash/demo/coming-soon-3.png') }}"
                                                                alt="Demo Images"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="title"><a href="#">Coming Soon 3 <span
                                                                    class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span></a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Demo  -->
                                    </div>

                                    <div class="load-demo-btn text-center">
                                        <a class="rbt-btn-link color-white" href="#">Scroll to view more <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu  -->
                        </li>

                        <li class="with-megamenu has-menu-child-item">
                            <a href="#">Courses <i class="feather-chevron-down"></i></a>
                            <!-- Start Mega Menu  -->
                            <div class="rbt-megamenu grid-item-2">
                                <div class="wrapper">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mega-top-banner">
                                                <div class="content">
                                                    <h4 class="title">Developer hub</h4>
                                                    <p class="description">Start building fast, with code samples, key
                                                        resources and more.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row--15">
                                        <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                            <h3 class="rbt-short-title">Course Layout</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="course-filter-one-toggle.html">Filter One Toggle</a></li>
                                                <li><a href="course-filter-one-open.html">Filter One Open</a></li>
                                                <li><a href="course-filter-two-toggle.html">Filter Two Toggle</a></li>
                                                <li><a href="course-filter-two-open.html">Filter Two Open</a></li>
                                                <li><a href="course-with-tab.html">Course With Tab</a></li>
                                                <li><a href="course-with-tab-two.html">Course With Tab Two</a></li>
                                                <li><a href="course-card-2.html">Course Card Two</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                            <h3 class="rbt-short-title">Course Layout</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="course-card-3.html">Course Card Three</a></li>
                                                <li><a href="course-masonry.html">Course Masonry</a></li>
                                                <li><a href="course-with-sidebar.html">Course With Sidebar</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="course-details-2.html">Course Details Two</a></li>
                                                <li><a href="lesson.html">Course Lesson <span
                                                            class="rbt-badge-card">New</span></a></li>
                                                <li><a href="create-book.html">Create Book <span
                                                            class="rbt-badge-card">New</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="nav-quick-access">
                                                <li><a href="#"><i class="feather-folder-minus"></i> Quick Start
                                                        Guide</a></li>
                                                <li><a href="#"><i class="feather-folder-minus"></i> For Open
                                                        Source</a></li>
                                                <li><a href="#"><i class="feather-folder-minus"></i> API
                                                        Status</a>
                                                </li>
                                                <li><a href="#"><i class="feather-folder-minus"></i> Support</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu  -->
                        </li>

                        <li class="has-dropdown has-menu-child-item">
                            <a href="#">Dashboard
                                <i class="feather-chevron-down"></i>
                            </a>
                            <ul class="submenu">
                                <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="instructor-dashboard.html">Dashboard</a></li>
                                        <li><a href="instructor-profile.html">Profile</a></li>
                                        <li><a href="instructor-enrolled-courses.html">Enrolled Books</a></li>
                                        <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                        <li><a href="instructor-reviews.html">Reviews</a></li>
                                        <li><a href="instructor-my-quiz-attempts.html">My Quiz Attempts</a></li>
                                        <li><a href="instructor-order-history.html">Order History</a></li>
                                        <li><a href="instructor-course.html">My Course</a></li>
                                        <li><a href="instructor-announcements.html">Announcements</a></li>
                                        <li><a href="instructor-quiz-attempts.html">Quiz Attempts</a></li>
                                        <li><a href="instructor-assignments.html">Assignments</a></li>
                                        <li><a href="instructor-settings.html">Settings</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                    <ul class="submenu">
                                        <li><a href="student-dashboard.html">Dashboard</a></li>
                                        <li><a href="student-profile.html">Profile</a></li>
                                        <li><a href="student-enrolled-courses.html">Enrolled Courses</a></li>
                                        <li><a href="student-wishlist.html">Wishlist</a></li>
                                        <li><a href="student-reviews.html">Reviews</a></li>
                                        <li><a href="student-my-quiz-attempts.html">My Quiz Attempts</a></li>
                                        <li><a href="student-order-history.html">Order History</a></li>
                                        <li><a href="student-settings.html">Settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="with-megamenu has-menu-child-item position-static">
                            <a href="#">Pages <i class="feather-chevron-down"></i></a>
                            <!-- Start Mega Menu  -->
                            <div class="rbt-megamenu grid-item-4">
                                <div class="wrapper">
                                    <div class="row row--15">
                                        <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                            <h3 class="rbt-short-title">Get Started</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="about-us-01.html">About Us</a></li>
                                                <li><a href="about-us-02.html">About Us 02</a></li>
                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                <li><a href="event-list.html">Event List</a></li>
                                                <li><a href="event-sidebar.html">Event Sidebar</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="academy-gallery.html">Academy Gallery</a></li>
                                                <li><a href="admission-guide.html">Admission Guide</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                            <h3 class="rbt-short-title">Get Started</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="profile.html">Profile</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="become-a-teacher.html">Become a Teacher</a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="faqs.html">FAQS</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                            <h3 class="rbt-short-title">Shop Pages</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="shop.html">Shop <span class="rbt-badge-card">Sale
                                                            Anything</span></a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">My Acount</a></li>
                                                <li><a href="login.html">Login & Register</a></li>
                                                <li><a href="subscription.html">Subscription</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                            <div class="mega-category-item">
                                                <!-- Start Single Category  -->
                                                <div class="nav-category-item">
                                                    <div class="thumbnail">
                                                        <div class="image"><img
                                                                src="{{ asset('assets/images/course/category-2.png') }}"
                                                                alt="Course images"></div>
                                                        <a href="course-filter-one-toggle.html">
                                                            <span>Online Education</span>
                                                            <i class="feather-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End Single Category  -->

                                                <!-- Start Single Category  -->
                                                <div class="nav-category-item">
                                                    <div class="thumbnail">
                                                        <div class="image"><img
                                                                src="{{ asset('assets/images/course/category-1.png') }}"
                                                                alt="Course images"></div>
                                                        <a href="course-filter-one-toggle.html">
                                                            <span>Language Club</span>
                                                            <i class="feather-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End Single Category  -->

                                                <!-- Start Single Category  -->
                                                <div class="nav-category-item">
                                                    <div class="thumbnail">
                                                        <div class="image"><img
                                                                src="{{ asset('assets/images/course/category-4.png') }}"
                                                                alt="Course images"></div>
                                                        <a href="course-filter-one-toggle.html">
                                                            <span>University Status</span>
                                                            <i class="feather-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End Single Category  -->

                                                <!-- Start Single Category  -->
                                                <div class="nav-category-item">
                                                    <div class="thumbnail">
                                                        <a href="course-filter-one-toggle.html">
                                                            <span>Course School</span>
                                                            <i class="feather-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End Single Category  -->

                                                <!-- Start Single Category  -->
                                                <div class="nav-category-item">
                                                    <div class="thumbnail">
                                                        <div class="image"><img
                                                                src="{{ asset('assets/images/course/category-9.png') }}"
                                                                alt="Course images"></div>
                                                        <a href="course-filter-one-toggle.html">
                                                            <span>Academy</span>
                                                            <i class="feather-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End Single Category  -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu  -->
                        </li>

                        <li class="with-megamenu has-menu-child-item position-static">
                            <a href="#">Elements <i class="feather-chevron-down"></i></a>
                            <!-- Start Mega Menu  -->
                            <div class="rbt-megamenu grid-item-3">
                                <div class="wrapper">
                                    <div class="row row--15 single-dropdown-menu-presentation">
                                        <div class="col-lg-4 col-xxl-4 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li><a href="style-guide.html">Style Guide <span
                                                            class="rbt-badge-card">Hot</span></a></li>
                                                <li><a href="accordion.html">Accordion</a></li>
                                                <li><a href="advancetab.html">Advance Tab</a></li>
                                                <li><a href="brand.html">Brand</a></li>
                                                <li><a href="button.html">Button</a></li>
                                                <li><a href="badge.html">Badge</a></li>
                                                <li><a href="card.html">Card</a></li>
                                                <li><a href="call-to-action.html">Call To Action</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-4 col-xxl-4 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li><a href="counterup.html">Counter</a></li>
                                                <li><a href="category.html">Categories</a></li>
                                                <li><a href="header.html">Header Style</a></li>
                                                <li><a href="newsletter.html">Newsletter</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="social.html">Social</a></li>
                                                <li><a href="list-style.html">List Style</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-4 col-xxl-4 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="progressbar.html">Progressbar</a></li>
                                                <li><a href="testimonial.html">Testimonial</a></li>
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="split.html">Split Area</a></li>
                                                <li><a href="search.html">Search Style</a></li>
                                                <li><a href="instagram.html">Instagram Style</a></li>
                                                <li><a href="#">& More Coming</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="btn-wrapper">
                                                <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none"
                                                    href="#">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-text">Visit Wisdom Chest Template</span>
                                                        <span class="btn-icon"><i
                                                                class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="feather-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu  -->
                        </li>

                        <li class="with-megamenu has-menu-child-item position-static">
                            <a href="#">Blog <i class="feather-chevron-down"></i></a>
                            <!-- Start Mega Menu  -->
                            <div class="rbt-megamenu grid-item-3">
                                <div class="wrapper">
                                    <div class="row row--15">
                                        <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                            <h3 class="rbt-short-title">Blog Styles</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog-grid-minimal.html">Blog Grid Minimal</a></li>
                                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="post-format-standard.html">Post Format Standard</a></li>
                                                <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                            <h3 class="rbt-short-title">Get Started</h3>
                                            <ul class="mega-menu-item">
                                                <li><a href="post-format-quote.html">Post Format Quote</a></li>
                                                <li><a href="post-format-audio.html">Post Format Audio</a></li>
                                                <li><a href="post-format-video.html">Post Format Video</a></li>
                                                <li><a href="#">Media Under Title <span
                                                            class="rbt-badge-card">Coming</span></a></li>
                                                <li><a href="#">Sticky Sidebar <span
                                                            class="rbt-badge-card">Coming</span></a></li>
                                                <li><a href="#">Auto Masonry <span
                                                            class="rbt-badge-card">Coming</span></a></li>
                                                <li><a href="#">Meta Overlaid <span
                                                            class="rbt-badge-card">Coming</span></a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                            <div class="rbt-ads-wrapper">
                                                <a class="d-block" href="#"><img
                                                        src="{{ asset('assets/images/service/mobile-cat.jpg') }}"
                                                        alt="Education Images"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu  -->
                        </li>
                    </ul>
                </nav>

                <div class="mobile-menu-bottom">
                    <div class="rbt-btn-wrapper mb--20">
                        <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                            href="#">
                            <span>Enroll Now</span>
                        </a>
                    </div>

                    <div class="social-share-wrapper">
                        <span class="rbt-short-title d-block">Find With Us</span>
                        <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                            <li><a href="https://www.facebook.com/">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li><a href="https://www.twitter.com/">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li><a href="https://www.linkdin.com/">
                                    <i class="feather-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Start Side Vav -->
        <div class="rbt-cart-side-menu">
            <div class="inner-wrapper">
                <div class="inner-top">
                    <div class="content">
                        <div class="title">
                            <h4 class="title mb--0">Your shopping cart</h4>
                        </div>
                        <div class="rbt-btn-close" id="btn_sideNavClose">
                            <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </div>
                </div>
                <nav class="side-nav w-100">
                    <ul class="rbt-minicart-wrapper">
                        <li class="minicart-item">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('assets/images/product/1.jpg') }}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                                <span class="quantity">1 * <span class="price">$22</span></span>
                            </div>
                            <div class="close-btn">
                                <button class="rbt-round-btn"><i class="feather-x"></i></button>
                            </div>
                        </li>

                        <li class="minicart-item">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('assets/images/product/7.jpg') }}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                                <span class="quantity">1 * <span class="price">$30</span></span>
                            </div>
                            <div class="close-btn">
                                <button class="rbt-round-btn"><i class="feather-x"></i></button>
                            </div>
                        </li>

                        <li class="minicart-item">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('assets/images/product/3.jpg') }}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                                <span class="quantity">1 * <span class="price">$50</span></span>
                            </div>
                            <div class="close-btn">
                                <button class="rbt-round-btn"><i class="feather-x"></i></button>
                            </div>
                        </li>

                        <li class="minicart-item">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('assets/images/product/4.jpg') }}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                                <span class="quantity">1 * <span class="price">$50</span></span>
                            </div>
                            <div class="close-btn">
                                <button class="rbt-round-btn"><i class="feather-x"></i></button>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="rbt-minicart-footer">
                    <hr class="mb--0">
                    <div class="rbt-cart-subttotal">
                        <p class="subtotal"><strong>Subtotal:</strong></p>
                        <p class="price">$121</p>
                    </div>
                    <hr class="mb--0">
                    <div class="rbt-minicart-bottom mt--20">
                        <div class="view-cart-btn">
                            <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                                <span class="btn-text">View Cart</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                        <div class="checkout-btn mt--20">
                            <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                                <span class="btn-text">Checkout</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Side Vav -->
        <script type="text/javascript">
            var url = "{{ route('changeLang') }}";
            $(".changeLang").change(function() {
                window.location.href = url + "?lang=" + $(this).val();
            });
        </script>
