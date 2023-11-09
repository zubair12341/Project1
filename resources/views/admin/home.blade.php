@extends('layout2.masters')

@section('title', 'Wisdom Chest || Admin Home')

@section('content')



<div class="rbt-banner-area rbt-banner-4 bg_image bg_image--13 header-transperent-spacer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content text-start">
                        <div class="inner">
                            <!--<h1 class="welcome"> Welcome to Wisdom Chest! </h1>-->
                            <h1 class="title">Learn faster. Stay motivated. <br> Study smarter. </h1>
                            <p class="description">Ignite Learning | Expand Horizons <br>| Connect Cultures</p>

                            <ul class="rbt-list-style-2">
                                <li><i class="feather-check"></i>14 Days Trial</li>
                                <li><i class="feather-check"></i>No Cridit Card Required</li>
                                <li><i class="feather-check"></i>Free For Teachers</li>
                            </ul>

                            <div class="slider-btn">
                                <a class="rbt-btn radius rbt-marquee-btn marquee-text-y" href="#">
                                    <span data-text="Get Started Today">
                                        Start Your Journey Now!
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->


<!-- Start Service Area  -->
<div class="service-wrapper rbt-section-gap bg_image">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-secondary-opacity">Introducing Our Top Sellers!</span>
                    <h2 class="title">Explore the Hottest Books in Demand</h2>
                    <p class="description has-medium-font-size mt--20">Ignite Your Imagination Today and Explore our
                        Trending Books!
                    </p>
                </div>
            </div>
        </div>





        <div class="row">
            <div class="col-lg-12">
                <div class="row row--15 mt_dec--30 owl-carousel owl-theme">
                    <!-- Start Single Card  -->
                    <!--<div class=" col-lg-4 col-md-6 col-sm-6 col-12 mt--30 ">-->
                    <div class="rbt-flipbox variation-2 item">

                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-1">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-01-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor sit.</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-01-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12  ">-->
                    <div class="rbt-flipbox variation-2 item">
                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-2">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-02-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor sit.</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i>Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i>Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i>Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-02-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12  mt--30 ">-->
                    <div class="rbt-flipbox variation-2 item">
                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-3">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-03-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-03-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12  mt--30">-->
                    <div class="rbt-flipbox variation-2  item">
                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-4">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-04-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-04-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->
                    <!-- Start Single Card  -->
                    <!--<div class=" col-lg-4 col-md-6 col-sm-6 col-12 mt--30 ">-->
                    <div class="rbt-flipbox variation-2 item">

                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-1">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-01-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor sit.</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-01-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12  ">-->
                    <div class="rbt-flipbox variation-2 item">
                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-2">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-02-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor sit.</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i>Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i>Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i>Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-02-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12  mt--30 ">-->
                    <div class="rbt-flipbox variation-2 item">
                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-3">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-03-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-03-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <!--<div class="col-lg-4 col-md-6 col-sm-6 col-12  mt--30">-->
                    <div class="rbt-flipbox variation-2  item">
                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1 card-bg-4">
                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                <div class="front-thumb w-100">
                                    <img src="{{ asset('assets/images/flip/kindergarten-04-front.jpg')}}" alt="card-icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="#">Lorem ipsum dolor</a></h5>
                                    <ul class="rbt-list-style-3">
                                        <li><i class="feather-heart"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-flag"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-eye"></i> Lorem ipsum dolor</li>
                                        <li><i class="feather-edit-2"></i> Lorem ipsum dolor
                                        </li>
                                        <li><i class="feather-battery-charging"></i> Lorem ipsum dolor</li>
                                    </ul>
                                    <a class="rbt-btn-link stretched-link" href="#">Learn More<i
                                            class="feather-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="rbt-flipbox-back rbt-flipbox-face inner">
                                <div class="flip-back-top">
                                    <div class="back-thumb w-100">
                                        <img class="w-100 radius-10" src="{{ asset('assets/images/flip/kindergarten-04-back.jpg')}}"
                                            alt="card-icon">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi!</p>
                                </div>
                                <a class="rbt-btn rbt-switch-btn btn-white btn-sm" href="#">
                                    <span data-text="Learn More">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--</div>-->
                    <!-- End Single Card  -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service Area  -->

<!-- Start Call To Action  -->
<div class="rbt-callto-action-area mt_dec--half">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="rbt-callto-action callto-action-default bg-color-white rbt-radius shadow-1">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-5">
                            <div class="inner">
                                <div class="rbt-category mb--20">
                                    <a href="#">Introducing New Collection!</a>
                                </div>
                                <h4 class="title mb--15">Online Books from Wisdom Chest </h4>
                                <p class="mb--15">Discover a World of Online Books from Wisdom Chest. Experience Reading
                                    Like Never Before.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-7">
                            <div class="video-popup-wrapper mt_lg--10 mt_md--20 mt_sm--20">
                                <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/video-01.jpg')}}"
                                    alt="Video Images">
                                <a class="rbt-btn rounded-player-2 sm-size popup-video position-to-top with-animation"
                                    href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                    <span class="play-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rbt-callto-action callto-action-default bg-color-white rbt-radius shadow-1">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="inner">
                                <div class="rbt-category mb--20">
                                    <a href="#">Become a Top Teacher!</a>
                                </div>
                                <h4 class="title mb--10">Access Free Online Books from Wisdom Chest</h4>
                                <p class="mb--15">Become a Top Teacher and Access Free Online Books from Wisdom Chest.
                                    Join Now to Expand Your Students' Learning Experience.
                                </p>
                                <div class="read-more-btn">
                                    <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm" href="#">
                                        <span data-text="Join Now">Join Now!</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Call To Action  -->



<!--this will be shown after user login-->
<!-- Start Course Area -->
<!--    <div class="rbt-course-area bg-color-light rbt-section-gap default-callto-action-overlap">-->
<!--        <div class="container">-->
<!--            <div class="row mb--60">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="section-title text-center">-->
<!--                        <span class="subtitle bg-secondary-opacity">Wisdom Chest  Book</span>-->
<!--                        <h2 class="title">Recommended Books.</h2>-->
<!--                        <p class="description has-medium-font-size mt--20">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur eius ab cum temporibus rerum!-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!-- Start Card Area -->
<!--            <div class="row g-5 owl-carousel owl-theme">-->

<!-- Start Single Course  -->
<!--<div class="col-lg-4 col-md-6 col-12">-->
<!--                    <div class="rbt-card variation-03 rbt-hover item">-->
<!--                        <div class="rbt-card-img">-->
<!--                            <a class="thumbnail-link" href="book-details.php">-->
<!--                                <img src="assets/images/course/kindergarten-course-01.jpg" alt="Card image">-->
<!--                                <span class="rbt-btn btn-white icon-hover">-->
<!--                                    <span class="btn-text">Join Now</span>-->
<!--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="rbt-card-body">-->
<!--                            <h5 class="rbt-card-title"><a href="book-details.php">Lorem ipsum dolor sit amet consectetur adipisicing.</a>-->
<!--                            </h5>-->
<!--                            <div class="rbt-card-bottom">-->
<!--                                <a class="transparent-button" href="book-details.php"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--</div>-->
<!-- End Single Course  -->

<!-- Start Single Course  -->
<!--<div class="col-lg-4 col-md-6 col-12">-->
<!--                    <div class="rbt-card variation-03 rbt-hover item">-->
<!--                        <div class="rbt-card-img">-->
<!--                            <a class="thumbnail-link" href="book-details.php">-->
<!--                                <img src="assets/images/course/kindergarten-course-03.jpg" alt="Card image">-->
<!--                                <span class="rbt-btn btn-white icon-hover">-->
<!--                                    <span class="btn-text">Join Now</span>-->
<!--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="rbt-card-body">-->
<!--                            <h5 class="rbt-card-title"><a href="book-details.php">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>-->
<!--                            </h5>-->
<!--                            <div class="rbt-card-bottom">-->
<!--                                <a class="transparent-button" href="book-details.php"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--</div>-->
<!-- End Single Course  -->

<!-- Start Single Course  -->
<!--<div class="col-lg-4 col-md-6 col-12">-->
<!--                    <div class="rbt-card variation-03 rbt-hover item">-->
<!--                        <div class="rbt-card-img">-->
<!--                            <a class="thumbnail-link" href="book-details.php">-->
<!--                                <img src="assets/images/course/kindergarten-course-02.jpg" alt="Card image">-->
<!--                                <span class="rbt-btn btn-white icon-hover">-->
<!--                                    <span class="btn-text">Join Now</span>-->
<!--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="rbt-card-body">-->
<!--                            <h5 class="rbt-card-title"><a href="book-details.php">Lorem ipsum dolor sit amet consectetur adipisicing.</a>-->
<!--                            </h5>-->
<!--                            <div class="rbt-card-bottom">-->
<!--                                <a class="transparent-button" href="book-details.php"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--</div>-->
<!-- End Single Course  -->
<!-- Start Single Course  -->
<!--<div class="col-lg-4 col-md-6 col-12">-->
<!--                    <div class="rbt-card variation-03 rbt-hover item">-->
<!--                        <div class="rbt-card-img">-->
<!--                            <a class="thumbnail-link" href="book-details.php">-->
<!--                                <img src="assets/images/course/kindergarten-course-01.jpg" alt="Card image">-->
<!--                                <span class="rbt-btn btn-white icon-hover">-->
<!--                                    <span class="btn-text">Join Now</span>-->
<!--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="rbt-card-body">-->
<!--                            <h5 class="rbt-card-title"><a href="book-details.php">Lorem ipsum dolor sit amet consectetur adipisicing.</a>-->
<!--                            </h5>-->
<!--                            <div class="rbt-card-bottom">-->
<!--                                <a class="transparent-button" href="book-details.php"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--</div>-->
<!-- End Single Course  -->

<!-- Start Single Course  -->
<!--<div class="col-lg-4 col-md-6 col-12">-->
<!--                    <div class="rbt-card variation-03 rbt-hover item">-->
<!--                        <div class="rbt-card-img">-->
<!--                            <a class="thumbnail-link" href="book-details.php">-->
<!--                                <img src="assets/images/course/kindergarten-course-03.jpg" alt="Card image">-->
<!--                                <span class="rbt-btn btn-white icon-hover">-->
<!--                                    <span class="btn-text">Join Now</span>-->
<!--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="rbt-card-body">-->
<!--                            <h5 class="rbt-card-title"><a href="book-details.php">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>-->
<!--                            </h5>-->
<!--                            <div class="rbt-card-bottom">-->
<!--                                <a class="transparent-button" href="book-details.php"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--</div>-->
<!-- End Single Course  -->

<!-- Start Single Course  -->
<!--<div class="col-lg-4 col-md-6 col-12">-->
<!--                    <div class="rbt-card variation-03 rbt-hover item">-->
<!--                        <div class="rbt-card-img">-->
<!--                            <a class="thumbnail-link" href="book-details.php">-->
<!--                                <img src="assets/images/course/kindergarten-course-02.jpg" alt="Card image">-->
<!--                                <span class="rbt-btn btn-white icon-hover">-->
<!--                                    <span class="btn-text">Join Now</span>-->
<!--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>-->
<!--                                </span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="rbt-card-body">-->
<!--                            <h5 class="rbt-card-title"><a href="book-details.php">Lorem ipsum dolor sit amet consectetur adipisicing.</a>-->
<!--                            </h5>-->
<!--                            <div class="rbt-card-bottom">-->
<!--                                <a class="transparent-button" href="book-details.php"><i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--</div>-->
<!-- End Single Course  -->

<!--            </div>-->
<!-- End Card Area -->

<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="load-more-btn mt--60 text-center">-->
<!--                        <a class="rbt-btn rbt-marquee-btn" href="#">-->
<!--                            <span data-text="Load More About Books">-->
<!--                                Learn More About Books-->
<!--                            </span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
<!-- End Course Area -->
<!--    above recomendation will be shown after login-->





<div class="rbt-counterup-area bg-color-white rbt-section-gap mt-5">
    <div class="conter-style-2 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="row row--30">
                        <!-- Start Single Counter  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-counterup rbt-hover-03">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/counter-01.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="500">00</span>
                                        </h3>
                                        <span class="subtitle">Lorem ipsum dolor sit amet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60">
                            <div class="rbt-counterup rbt-hover-03">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/counter-02.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="800">00</span>
                                        </h3>
                                        <span class="subtitle">books & Video</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--40">
                            <div class="rbt-counterup rbt-hover-03 transform-sm-none"
                                data-parallax='{"x": 0, "y": -60}'>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/counter-03.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                                        </h3>
                                        <span class="subtitle">Lorem ipsum dolor sit amet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_mobile--40">
                            <div class="rbt-counterup rbt-hover-03 transform-sm-none" data-parallax='{"x": 0, "y": 60}'>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/counter-04.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                        </h3>
                                        <span class="subtitle">Lorem ipsum dolor sit amet.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-pink-opacity">Why Choose Us</span>
                            <h2 class="title">Empowering a Community of <br /> Lifelong Learners</h2>
                            <p class="description has-medium-font-size mt--20 mb--0">At Wisdom Chest, we are dedicated
                                to fostering a community of individuals committed to lifelong learning.
                                Join us and become part of a vibrant network of knowledge enthusiasts, where growth and
                                discovery are at the core of our mission. Start your journey towards personal growth and
                                intellectual fulfillment.</p>
                        </div>

                        <div class="rbt-feature-wrapper mt--30">

                            <div class="rbt-feature feature-style-1 align-items-center">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Discover our Dynamic and Adaptable Class Options</h6>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1 align-items-center">
                                <div class="icon bg-secondary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Embark on an Exciting Educational Journey, No Matter Where
                                        You Are.</h6>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1 align-items-center">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-aperture"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Access Unlimited Learning Materials and Experience Strong
                                        Guidance</h6>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
    Will be shown after login
    <div class="rbt-pricing-area bg-color-light rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">COURSE PRICING</span>
                        <h2 class="title">Wisdom Chest  Books Plan</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gx-0 "> -->
<!-- Start Single Pricing  -->
<!-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="pricing-table style-3">
                        <div class="icon-image text-center">
                            <img src="assets/images/icons/pricing-icon-01.png" alt="Pricing Image Icons">
                        </div>
                        <div class="pricing-header">
                            <h3 class="title">6 weeks to 12 months</h3>
                            <span class="rbt-badge mb--15">Free for a Month</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$1475</span>
                                    <span class="duration">/yearly</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$12.00</span>
                                    <span class="duration">/monthly</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li>5 Full Days</li>
                                <li>7:00 am to 6:00 pm</li>
                                <li class="off">High Resolution Videos</li>
                                <li class="off">24/7 Dedicated Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="rbt-btn btn-border radius-round hover-icon-reverse w-100" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Join Course Plan</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
<!-- End Single Pricing  -->

<!-- Start Single Pricing  -->
<!-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="pricing-table style-3 active">
                        <div class="icon-image text-center">
                            <img src="assets/images/icons/pricing-icon-02.png" alt="Pricing Image Icons">
                        </div>
                        <div class="pricing-header">
                            <h3 class="title">12 months to 24 months</h3>
                            <span class="rbt-badge mb--15">Free for a Month</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$30.99</span>
                                    <span class="duration">/yearly</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$20.00</span>
                                    <span class="duration">/monthly</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li>8 Full Days</li>
                                <li>7:00 am to 6:00 pm</li>
                                <li class="off">High Resolution Videos</li>
                                <li class="off">24/7 Dedicated Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="rbt-btn btn-gradient radius-round hover-icon-reverse w-100" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Join Course Plan</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
<!-- End Single Pricing  -->

<!-- Start Single Pricing  -->
<!-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="pricing-table style-3">
                        <div class="icon-image text-center">
                            <img src="assets/images/icons/pricing-icon-03.png" alt="Pricing Image Icons">
                        </div>
                        <div class="pricing-header">
                            <h3 class="title">Pre Primary Community</h3>
                            <span class="rbt-badge mb--15">Free for a Month</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$1245.99</span>
                                    <span class="duration">/yearly</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$30.00</span>
                                    <span class="duration">/monthly</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <ul class="list-item">
                                <li>Pre Primary Community</li>
                                <li>Kindergarten Community</li>
                                <li>High Resolution Videos</li>
                                <li>24/7 Dedicated Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a class="rbt-btn btn-border radius-round hover-icon-reverse w-100" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Join Course Plan</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> -->
<!-- End Single Pricing  -->
<!-- 
            </div>
        </div>
    </div> -->

<!-- Above section will be shown after login  -->


<div class="rbt-team-area bg_image--31">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-secondary-opacity">Instructor</span>
                    <h2 class="title">Get to Know Our Esteemed Team of Teachers.</h2>
                    <p class="description has-medium-font-size mt--20">At Wisdom Chest, we take pride in our exceptional
                        faculty who are dedicated to your learning and growth. Our instructors are passionate,
                        experienced, and committed to providing you with an engaging and enriching educational
                        experience. Discover the difference our remarkable teachers can make in your educational
                        journey.
                    </p>
                </div>
            </div>
        </div>
        <div class="row row--15 mt_dec--30">
            <!-- Start Single Team  -->
            <div class="col-lg-4 col-md-6 col-12 mt--30">
                <div class="rbt-team team-style-default style-three rbt-hover">
                    <div class="inner">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-07.jpg')}}" alt="Corporate Template"></div>
                        <div class="content">
                            <h2 class="title">Alejandro</h2>
                            <h6 class="subtitle theme-gradient">Author</h6>
                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Team  -->

            <!-- Start Single Team  -->
            <div class="col-lg-4 col-md-6 col-12 mt--30">
                <div class="rbt-team team-style-default style-three rbt-hover">
                    <div class="inner">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-08.jpg')}}" alt="Corporate Template"></div>
                        <div class="content">
                            <h2 class="title">John Due</h2>
                            <h6 class="subtitle theme-gradient">Depertment Head</h6>
                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Team  -->

            <!-- Start Single Team  -->
            <div class="col-lg-4 col-md-6 col-12 mt--30">
                <div class="rbt-team team-style-default style-three rbt-hover">
                    <div class="inner">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-09.jpg')}}" alt="Corporate Template"></div>
                        <div class="content">
                            <h2 class="title">Joo Bieden</h2>
                            <h6 class="subtitle theme-gradient">Lorem</h6>
                            <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Team  -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="load-more-btn mt--60 text-center">
                    <a class="rbt-btn rbt-marquee-btn" href="#">
                        <span data-text="View All Teacher">
                            View All Teacher
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="rbt-testimonial-area bg-color-light rbt-section-gap overflow-hidden">
    <div class="wrapper mb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Education for All: Embraced by People Worldwide.</span>
                        <h2 class="title">Discover the Impact of Wisdom Chest's Education. <br /> Don't Just Take Our Word for It - Hear from Parents!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center row--30">
            <div class="col-lg-6">
                <!-- Start Tab Content  -->
                <div class="rbt-testimonial-content tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="testimonial-tab1" role="tabpanel"
                        aria-labelledby="testimonial-tab1-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>As a parent, I am impressed with the comprehensive resources and strong support system
                                offered by Wisdom Chest. The online courses have greatly enhanced my child's language
                                proficiency and critical thinking abilities. The instructors are knowledgeable,
                                approachable, and always ready to assist. I appreciate the convenience of the flexible
                                class schedule, allowing my child to learn at their own pace. I highly recommend Wisdom
                                Chest to parents seeking a top-notch educational experience.
                            </p>
                        </div>
                        <div class="author-info">
                            <h6><span>David M </span> - P.,Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab2" role="tabpanel"
                        aria-labelledby="testimonial-tab2-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>Choosing Wisdom Chest for my child's educational needs was one of the best decisions I've
                                made as a parent. The engaging learning materials, dedicated instructors, and flexible
                                classes have truly made a positive impact on my child's academic journey. I have
                                witnessed significant growth in their English skills and overall enthusiasm for
                                learning. Thank you, Wisdom Chest, for providing such a valuable educational platform.
                            </p>
                        </div>
                        <div class="author-info">
                            <h6><span>Emily</span> - Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab3" role="tabpanel"
                        aria-labelledby="testimonial-tab3-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>Enrolling my child in Wisdom Chest has been a game-changer for their English language
                                development. The study notes, teaching videos, and interactive learning materials have
                                made the learning process engaging and enjoyable. The progress my child has made in
                                their reading comprehension and vocabulary expansion is remarkable. I'm grateful to the
                                dedicated teachers at Wisdom Chest for their expertise and commitment to my child's
                                academic growth.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Michael R. </span> - Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab4" role="tabpanel"
                        aria-labelledby="testimonial-tab4-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>Wisdom Chest has exceeded my expectations in terms of the quality of education it
                                provides. The curriculum is well-structured, and the online platform is user-friendly.
                                The dedicated instructors genuinely care about the students' progress and go the extra
                                mile to ensure their success. My child has developed a love for reading and has become
                                more confident in their English skills. I'm grateful to Wisdom Chest for nurturing a
                                positive learning environment and helping my child reach their full potential.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Sarah L. </span> - Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab5" role="tabpanel"
                        aria-labelledby="testimonial-tab5-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>Wisdom Chest has made learning a truly interactive and immersive experience for my child.
                                The online English literacy courses have not only improved their language skills but
                                also sparked their curiosity and love for literature. The combination of well-designed
                                curriculum and personalized attention from instructors has nurtured their overall
                                academic growth. I couldn't be happier with the results and highly recommend Wisdom
                                Chest to other parents seeking an exceptional educational platform.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Jessica S. </span> - Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab6" role="tabpanel"
                        aria-labelledby="testimonial-tab6-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>As a parent, I appreciate the emphasis Wisdom Chest places on instilling a strong reading
                                habit in children. The vast collection of books, along with the study notes and teaching
                                videos, have been invaluable in cultivating my child's love for reading. I've noticed a
                                significant improvement in their language proficiency and critical thinking abilities.
                                Wisdom Chest has truly created a nurturing environment for young learners, and I'm
                                grateful to be a part of this educational community.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Mark T. </span> - Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab7" role="tabpanel"
                        aria-labelledby="testimonial-tab7-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>I cannot thank Wisdom Chest enough for the positive impact it has had on my child's
                                English language skills. The online courses have been instrumental in building their
                                confidence and fluency. The instructors' expertise and personalized feedback have
                                accelerated their learning journey. The abundance of resources and strong support system
                                have made the entire learning experience seamless and enjoyable. Wisdom Chest has become
                                an integral part of my child's educational growth.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Laura B. </span> - Parent</h6>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="testimonial-tab8" role="tabpanel"
                        aria-labelledby="testimonial-tab8-tab">
                        <div class="inner">
                            <div class="rating mb--30">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <p>Wisdom Chest has made learning English a fun and interactive experience for my child. The
                                online platform is easy to navigate, and the teaching videos have been incredibly
                                helpful in clarifying difficult concepts. The strong support system, including prompt
                                responses from instructors and the availability of study materials, has made my child
                                feel supported and motivated. I'm impressed with the dedication and commitment of Wisdom
                                Chest to providing a top-notch educational experience.</p>
                        </div>
                        <div class="author-info">
                            <h6><span>Daniel K. </span> - Parent</h6>
                        </div>
                    </div>
                </div>
                <!-- End Tab Content  -->
            </div>
            <div class="col-lg-6 mt_md--30 mt_sm--30">
                <!-- Start Tab Nav  -->
                <ul class="testimonial-thumb-wrapper nav nav-tabs" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="testimonial-tab1-tab" data-bs-toggle="tab"
                            data-bs-target="#testimonial-tab1" role="tab" aria-controls="testimonial-tab1"
                            aria-selected="true">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="testimonial-tab2-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab2" role="tab"
                            aria-controls="testimonial-tab2" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="testimonial-tab3-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab3" role="tab"
                            aria-controls="testimonial-tab3" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-3.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a id="testimonial-tab4-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab4" role="tab"
                            aria-controls="testimonial-tab4" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-4.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="testimonial-tab5-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab5" role="tab"
                            aria-controls="testimonial-tab5" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-5.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="testimonial-tab6-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab6" role="tab"
                            aria-controls="testimonial-tab6" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-6.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="testimonial-tab7-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab7" role="tab"
                            aria-controls="testimonial-tab7" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-7.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a id="testimonial-tab8-tab" data-bs-toggle="tab" data-bs-target="#testimonial-tab8" role="tab"
                            aria-controls="testimonial-tab8" aria-selected="false">
                            <div class="testimonial-thumbnai">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-8.jpg')}}" alt="Testimonial Images">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Tab Content  -->
            </div>
        </div>
    </div>
</div>




<!-- blogs will be use in future  -->
<!-- Start Blog Style -->
<!-- <div class="rbt-rbt-blog-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Wisdom Chest  Post</span>
                        <h2 class="title">From Our Post.</h2>
                        <p class="description has-medium-font-size mt--20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ad!
                        </p>
                    </div>
                </div>
            </div> -->
<!-- Start Card Area -->
<!-- <div class="row g-5 mt--30"> -->

<!-- Start Single Card  -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="book-details.php">
                                <img src="assets/images/blog/kindergarten-01.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="book-details.php">Is Kindergarten The Most Trending Thing Now?</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="book-details.php">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- End Single Card  -->

<!-- Start Single Card  -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="book-details.php">
                                <img src="assets/images/blog/kindergarten-02.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="book-details.php">Learn How More Money With Kindergarten.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="book-details.php">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- End Single Card  -->

<!-- Start Single Card  -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="book-details.php">
                                <img src="assets/images/blog/kindergarten-03.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="book-details.php">Understand The Background Of Kindergarten Now.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="book-details.php">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- End Single Card  -->

<!-- </div> -->
<!-- End Card Area -->

<!-- <div class="row">
                <div class="col-lg-12">
                    <div class="load-more-btn mt--60 text-center">
                        <a class="rbt-btn rbt-marquee-btn" href="#">
                            <span data-text="View All Post">
                                View All Post
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
<!-- End Blog Style -->









@endsection