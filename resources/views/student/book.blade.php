@extends('main_layout.master')

@section('title', 'Wisdom Chest || Student Book')

@section('content')

<a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
        <div class="breadcrumb-inner">
            <img src="{{ asset('assets/images/bg/bg-image-10.jpg')}}" alt="Education Images">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content text-start">
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('student.home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Books Details</li>
                        </ul>
                        <h2 class="title">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum quaerat quam molestias officia!</p>

                        <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">

                            <div class="feature-sin best-seller-badge">
                                <span class="rbt-badge-2">
                                    <span class="image"><img src="{{ asset('assets/images/icons/card-icon-1.png')}}"
                                            alt="Best Seller Icon"></span> Top Rated
                                </span>
                            </div>

                            <div class="feature-sin rating">
                                <a href="#">4.8</a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>

                            <div class="feature-sin total-rating">
                                <a class="rbt-badge-4" href="#">215,475 rating</a>
                            </div>

                            <div class="feature-sin total-student">
                                <span>616,029 readers</span>
                            </div>

                        </div>

                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                By <a href="profile.html">Angela</a> In <a href="#">Books</a>
                            </div>
                        </div>

                        <ul class="rbt-meta">
                            <li><i class="feather-calendar"></i>Last updated 12/2024</li>
                            <li><i class="feather-globe"></i>English</li>
                            <li><i class="feather-award"></i>Certified Book</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-course-details-area ptb--60">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-12">
                    <div class="course-details-content">
                        <div class="rbt-course-feature-box rbt-shadow-box thuumbnail">
                            <img class="w-100" src="{{ asset('assets/images/course/book-01.jpg')}}" alt="Card image">
                        </div>

                        <div class="rbt-inner-onepage-navigation sticky-top mt--30">
                            <nav class="mainmenu-nav onepagenav">
                                <ul class="mainmenu">
                                    <li class="current">
                                        <a href="#overview">Overview</a>
                                    </li>
                                    <li>
                                        <a href="#coursecontent">Book Content</a>
                                    </li>
                                    <li>
                                        <a href="#details">Details</a>
                                    </li>
                                    <li>
                                        <a href="#intructor">Author</a>
                                    </li>
                                    <li>
                                        <a href="#review">Review</a>
                                    </li>
                                    <li>
                                        <a href="#vocabulary">Vocabulary</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more" id="overview">
                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">What you'll learn</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, aliquam
                                    voluptas laudantium incidunt architecto nam excepturi provident rem laborum
                                    repellendus placeat neque aut doloremque ut ullam, veritatis nesciunt iusto
                                    officia alias, non est vitae. Eius repudiandae optio quam alias aperiam nemo
                                    nam tempora, dignissimos dicta excepturi ea quo ipsum omnis maiores
                                    perferendis commodi voluptatum facere vel vero. Praesentium quisquam iure
                                    veritatis, perferendis adipisci sequi blanditiis quidem porro eligendi
                                    fugiat facilis inventore amet delectus expedita deserunt ut molestiae modi
                                    laudantium, quia tenetur animi natus ea. Molestiae molestias ducimus
                                    pariatur et consectetur. Error vero, eum soluta delectus necessitatibus
                                    eligendi numquam hic at?</p>

                                <div class="row g-5 mb--30">
                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-1">
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                        </ul>
                                    </div>
                                    <!-- End Feture Box  -->

                                    <!-- Start Feture Box  -->
                                    <div class="col-lg-6">
                                        <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                            <li><i class="feather-check"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                                        </ul>
                                    </div>
                                    <!-- End Feture Box  -->
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, aliquam
                                    voluptas laudantium incidunt architecto nam excepturi provident rem laborum
                                    repellendus placeat neque aut doloremque ut ullam, veritatis nesciunt iusto
                                    officia alias, non est vitae. Eius repudiandae optio quam alias aperiam nemo
                                    nam tempora, dignissimos dicta excepturi ea quo ipsum omnis maiores
                                    perferendis commodi voluptatum facere vel vero. Praesentium quisquam iure
                                    veritatis, perferendis adipisci sequi blanditiis quidem porro eligendi
                                    fugiat facilis inventore amet delectus expedita deserunt ut molestiae modi
                                    laudantium, quia tenetur animi natus ea. Molestiae molestias ducimus
                                    pariatur et consectetur. Error vero, eum soluta delectus necessitatibus
                                    eligendi numquam hic at?</p>
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                        <!-- End Course Feature Box  -->

                        <!-- Start Course Content  -->
                        <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30" id="coursecontent">
                            <div class="rbt-course-feature-inner">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Book Content</h4>
                                </div>
                                <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                    <div class="accordion" id="accordionExampleb2">

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
                                                    Intro to Books <span class="rbt-badge-5 ml--10">1hr 30min</span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        <li>
                                                            <a href="{{ route('student.mybook.lesson') }}">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Book Intro</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="min-lable">30 min</span>
                                                                    <span class="rbt-badge variation-03 bg-primary-opacity"><i class="feather-eye"></i> Preview</span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Watch Before Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="min-lable">0.5 min</span>
                                                                    <span class="rbt-badge variation-03 bg-primary-opacity"><i class="feather-eye"></i> Preview</span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                    Book Fundamentals <span class="rbt-badge-5 ml--10">2hr 30min</span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Book Intro</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Why You Should Not Go To
                                                                        Education.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>


                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Ten Factors That Affect Education's
                                                                        Longevity.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo3">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                                    You can develop skill and setup <span class="rbt-badge-5 ml--10">1hr 50min</span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Book Intro</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Why You Should Not Go To
                                                                        Education.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>


                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Ten Factors That Affect Education's
                                                                        Longevity.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo4">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                                    15 Things To Know About Education? <span class="rbt-badge-5 ml--10">2hr 60min</span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Books Intro</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Why You Should Not Go To
                                                                        Education.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>


                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Ten Factors That Affect Education's
                                                                        Longevity.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo5">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                                    Books Description <span class="rbt-badge-5 ml--10">2hr 20min</span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Book Intro</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Why You Should Not Go To
                                                                        Education.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>


                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Ten Factors That Affect Education's
                                                                        Longevity.</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>

                                                        <li><a href="#">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">Read Before You Start</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-lock"></i></span>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Course Content  -->

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30" id="details">
                            <div class="row g-5">
                                <!-- Start Feture Box  -->
                                <div class="col-lg-6">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3 mb--20">Requirements</h4>
                                    </div>
                                    <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    </ul>
                                </div>
                                <!-- End Feture Box  -->

                                <!-- Start Feture Box  -->
                                <div class="col-lg-6">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3 mb--20">Description</h4>
                                    </div>
                                    <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    </ul>
                                </div>
                                <!-- End Feture Box  -->
                            </div>
                        </div>
                        <!-- End Course Feature Box  -->

                        <!-- Start Intructor Area  -->
                        <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="intructor">
                            <div class="about-author border-0 pb--0 pt--0">
                                <div class="section-title mb--30">
                                    <h4 class="rbt-title-style-3">Author</h4>
                                </div>
                                <div class="media align-items-center">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-7.jpg')}}" alt="Author Images">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="author.html">Jessica</a>
                                            </h5>
                                            <span class="b3 subtitle">Advanced Educator</span>
                                            <ul class="rbt-meta mb--20 mt--10">
                                                <li><i class="fa fa-star color-warning"></i>75,237 Reviews <span class="rbt-badge-5 ml--5">4.4 Rating</span></li>
                                                <li><i class="feather-users"></i>912,970 Readers</li>
                                                <li><a href="#"><i class="feather-book"></i>16 Books</a></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                                            <ul class="social-icon social-default icon-naked justify-content-start">
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
                        </div>
                        <!-- End Intructor Area  -->



                        <!-- Start Vocabulary Area  -->
                        <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="vocabulary">
                            <div class="about-author border-0 pb--0 pt--0">
                                <div class="section-title mb--30">
                                    <h4 class="rbt-title-style-3">Download Vocabulary PDF</h4>
                                </div>

                                
                                <div class="media align-items-center">
                                <div class="rbt-inner-onepage-navigation  ">
                            <nav class="mainmenu-nav onepagenav">
                                <ul class="mainmenu">
                                    <!-- on this buttons vocabulary pdfs will be download  -->
                                    <li class="">
                                        <a href="">English</a>
                                    </li>
                                    <li>
                                        <a href="">Chinese</a>
                                    </li>
                                    <li>
                                        <a href="">Japanese</a>
                                    </li>
                                    <li>
                                        <a href="">Spanish</a>
                                    </li>
                                    <li>
                                        <a href="">Korean</a>
                                    </li>
                                    <li>
                                        <a href="">Russian</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Vocabulary Area  -->




                        <!-- Start Edu Review List  -->
                        <div class="rbt-review-wrapper rbt-shadow-box review-wrapper mt--30" id="review">
                            <div class="course-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Review</h4>
                                </div>
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-3">
                                        <div class="rating-box">
                                            <div class="rating-number">5.0</div>
                                            <div class="rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </div>
                                            <span class="sub-title">Books Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="review-wrapper">
                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">63%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">29%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">6%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">1%</span>
                                            </div>

                                            <div class="single-progress-bar">
                                                <div class="rating-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="value-text">1%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Edu Review List  -->

                        <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 has-show-more">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Featured review</h4>
                            </div>
                            <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/testimonial/testimonial-3.jpg')}}" alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">
                                                    John
                                                    </a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">At 29 years old, my favorite compliment is being
                                                    told that I look like my mom. Seeing myself in her image, like this
                                                    daughter up top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/testimonial/testimonial-4.jpg')}}" alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Elizabeth</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being
                                                    told that I look like my mom. Seeing myself in her image, like this
                                                    daughter up top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg')}}" alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Timothy</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being
                                                    told that I look like my mom. Seeing myself in her image, like this
                                                    daughter up top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/testimonial/testimonial-6.jpg')}}" alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Mohammad Ali</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being
                                                    told that I look like my mom. Seeing myself in her image, like this
                                                    daughter up top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/testimonial/testimonial-8.jpg')}}" alt="Author Images">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">Sakib Al Hasan</a>
                                                </h5>
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p class="description">My favorite compliment is being
                                                    told that I look like my mom. Seeing myself in her image, like this
                                                    daughter up top.</p>
                                                <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-up"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="feather-thumbs-down"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                    </div>
                    <div class="related-course mt--60">
                        <div class="row g-5 align-items-end mb--40">
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="section-title">
                                    <span class="subtitle bg-pink-opacity">Top book</span>
                                    <h4 class="title">More Books By <strong class="color-primary">Angela</strong></h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="read-more-btn text-start text-md-end">
                                    <a class="rbt-btn rbt-switch-btn btn-border btn-sm" href="#">
                                        <span data-text="View All Course">View All Books</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-5">
                            <!-- Start Single Card  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/course/course-online-01.jpg')}}" alt="Card image">
                                            <div class="rbt-badge-3 bg-white">
                                                <span>-40%</span>
                                                <span>Off</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <div class="rbt-card-top">
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="rating-count"> (15 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>

                                        <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
                                        </h4>

                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                        </ul>

                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, id!</p>
                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                By <a href="profile.html">Angela</a> In <a href="#">lorem</a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">

                                            <a class="rbt-btn-link" href="#">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->

                            <!-- Start Single Card  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/course/course-online-02.jpg')}}" alt="Card image">
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <div class="rbt-card-top">
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="rating-count"> (15 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                        </ul>

                                        <p class="rbt-card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, voluptatem.</p>
                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                By <a href="profile.html">Angela</a> In <a href="#">lorem</a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">

                                                                            <a class="rbt-btn-link" href="#">Learn
                                    More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Card  -->
                        </div>
                    </div>
                </div>

                <!-- will be shown after a year
                <div class="col-lg-4">
                    <div class="course-sidebar sticky-top rbt-shadow-box course-sidebar-top rbt-gradient-border">
                        <div class="inner"> -->

                            <!-- Start Viedo Wrapper  -->
                            <!-- <a class="video-popup-with-text video-popup-wrapper text-center popup-video sidebar-video-hidden mb--15" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                <div class="video-content">
                                    <img class="w-100 rbt-radius" src="assets/images/others/video-01.jpg" alt="Video Images">
                                    <div class="position-to-top">
                                        <span class="rbt-btn rounded-player-2 with-animation">
                                            <span class="play-icon"></span>
                                        </span>
                                    </div>
                                    <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview this Books</span>
                                </div>
                            </a> -->
                            <!-- End Viedo Wrapper  -->

                            <!-- <div class="content-item-content">
                                <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between"> -->
                                    <!-- <div class="rbt-price">
                                        <span class="current-price">$60.99</span>
                                        <span class="off-price">$84.99</span>
                                    </div>
                                    <div class="discount-time">
                                        <span class="rbt-badge color-danger bg-color-danger-opacity"><i
                                                class="feather-clock"></i> 3 days left!</span>
                                    </div> -->
                                <!-- </div>

                                <div class="add-to-card-button mt--15">
                                <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="#">
                                        <span class="btn-text">Get Subscription</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </a>
                                </div> -->

<!-- 
                                <span class="subtitle"><i class="feather-rotate-ccw"></i> 30-Day Money-Back
                                    Guarantee</span> -->


                                <!-- <div class="rbt-widget-details has-show-more">
                                    <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                        <li><span>Start Date</span><span class="rbt-feature-value rbt-badge-5">5 Hrs 20 Min</span>
                                        </li>
                                        <li><span>Enrolled</span><span class="rbt-feature-value rbt-badge-5">100</span></li>
                                        <li><span>Lectures</span><span class="rbt-feature-value rbt-badge-5">50</span></li>
                                        <li><span>Skill Level</span><span class="rbt-feature-value rbt-badge-5">Basic</span></li>
                                        <li><span>Language</span><span class="rbt-feature-value rbt-badge-5">English</span></li>
                                        <li><span>Quizzes</span><span class="rbt-feature-value rbt-badge-5">10</span></li>
                                        <li><span>Certificate</span><span class="rbt-feature-value rbt-badge-5">Yes</span></li>
                                        <li><span>Pass Percentage</span><span class="rbt-feature-value rbt-badge-5">95%</span></li>
                                    </ul>
                                    <div class="rbt-show-more-btn">Show More</div>
                                </div> -->

                                <!-- <div class="social-share-wrapper mt--30 text-center">
                                    <div class="rbt-post-share d-flex align-items-center justify-content-center">
                                        <ul class="social-icon social-default transparent-with-border justify-content-center">
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
                                    <hr class="mt--20">
                                    <div class="contact-with-us text-center">
                                        <p>For details about the Books</p>
                                        <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i class="feather-phone mr--5"></i> Call Us: <a href="#"><strong>+444 555 666 777</strong></a></p>
                                    </div> -->
                                <!-- </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <div class="rbt-related-course-area bg-color-white pt--60 rbt-section-gapBottom">
        <div class="container">
            <div class="section-title mb--30">
                <span class="subtitle bg-primary-opacity">More Similar Books</span>
                <h4 class="title">Related Books</h4>
            </div>
            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="#">
                                <img src="{{ asset('assets/images/course/course-online-03.jpg')}}" alt="Card image">
                                <div class="rbt-badge-3 bg-white">
                                    <span>-10%</span>
                                    <span>Off</span>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (5 Reviews)</span>
                                </div>
                                <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing.</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i>8 Lessons</li>
                            </ul>
                            <p class="rbt-card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, natus.</p>

                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/client/avatar-03.png')}}" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    By <a href="profile.html">Slaughter</a> In <a href="#">lorem</a>
                                </div>
                            </div>
                            <div class="rbt-card-bottom">
                                <a class="rbt-btn-link" href="#">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="#">
                                <img src="{{ asset('assets/images/course/course-online-04.jpg')}}" alt="Card image">
                                <div class="rbt-badge-3 bg-white">
                                    <span>-40%</span>
                                    <span>Off</span>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (15 Reviews)</span>
                                </div>
                                <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div>
                            </div>

                            <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing.</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i>20 Lessons</li>
                            </ul>
                            <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iste.</p>
                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/client/avater-01.png')}}" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    By <a href="profile.html">Patrick</a> In <a href="#">lorem</a>
                                </div>
                            </div>

                            <div class="rbt-card-bottom">
                                <a class="rbt-btn-link" href="#">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="#">
                                <img src="{{ asset('assets/images/course/course-online-05.jpg')}}" alt="Card image">
                                <div class="rbt-badge-3 bg-white">
                                    <span>-20%</span>
                                    <span>Off</span>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (15 Reviews)</span>
                                </div>
                                <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-book"></i>12 Lessons</li>
                            </ul>
                            <p class="rbt-card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, reiciendis.</p>
                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-avater">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                    </a>
                                </div>
                                <div class="rbt-author-info">
                                    By <a href="profile.html">Angela</a> In <a href="#">lorem</a>
                                </div>
                            </div>
                            <div class="rbt-card-bottom">
                                <a class="rbt-btn-link" href="#">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>





@endsection