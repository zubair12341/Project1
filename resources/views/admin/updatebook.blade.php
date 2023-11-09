@extends('main_layout.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title', 'Wisdom Chest || Admin Update Book')

@section('content')
    <style>
        #container {
            margin-top: 20px;
        }

        input[type="text"] {
            margin-right: 10px;
        }

        .remove-field {
            cursor: pointer;
        }

        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background */
            backdrop-filter: blur(5px);
            /* Apply a blur effect */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .validation-text {
            color: red;
            display: none;
        }

        .loader {
            border: 6px solid transparent;
            border-top: 6px solid #007bff;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            animation: spin 1s ease-out infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-text {
            color: #fff;
            position: absolute;
            margin-top: 220px;
        }
    </style>

    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Education Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Wisdom Chest is a education website.</p>
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
                                <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
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
                                                                class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="12-marketplace.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h12.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="12-marketplace.html">Marketplace <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->
                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="04-kindergarten.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h4.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="04-kindergarten.html">kindergarten <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->
                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="13-university-classic.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h13.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="13-university-classic.html">University
                                                            Classic <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="14-home-elegant.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h14.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="14-home-elegant.html">Home Elegant <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="09-gym-coaching.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h9.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="09-gym-coaching.html">Gym Coaching <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="03-online-school.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h3.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="03-online-school.html">Online School <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="06-university-status.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h6.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="06-university-status.html">University
                                                            Status <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="15-home-technology.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h15.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="15-home-technology.html">Home Technology
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="07-instructor-portfolio.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h7.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="07-instructor-portfolio.html">Instructor
                                                            Portfolio <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="08-language-academy.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h8.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="08-language-academy.html">Language Academy
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="11-single-course.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h11.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="11-single-course.html">Single Book <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="10-online-course.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h10.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="10-online-course.html">Online Book <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="05-classic-lms.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h5.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="05-classic-lms.html">Classic Lms <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="02-course-school.html"><img
                                                            src="{{ asset('assets/images/splash/demo/h2.jpg') }}"
                                                            alt="Demo Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h4 class="title"><a href="02-course-school.html">Book School <span
                                                                class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span></a></h4>
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
                                                                    class="feather-arrow-right"></i></span></a></h4>
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
                                                                    class="feather-arrow-right"></i></span></a></h4>
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
                                                                    class="feather-arrow-right"></i></span></a></h4>
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
                                        <h3 class="rbt-short-title">Book Layout</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="course-filter-one-toggle.html">Filter One Toggle</a></li>
                                            <li><a href="course-filter-one-open.html">Filter One Open</a></li>
                                            <li><a href="course-filter-two-toggle.html">Filter Two Toggle</a></li>
                                            <li><a href="course-filter-two-open.html">Filter Two Open</a></li>
                                            <li><a href="course-with-tab.html">Book With Tab</a></li>
                                            <li><a href="course-with-tab-two.html">Book With Tab Two</a></li>
                                            <li><a href="course-card-2.html">Book Card Two</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Book Layout</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="course-card-3.html">Book Card Three</a></li>
                                            <li><a href="course-masonry.html">Book Masonry</a></li>
                                            <li><a href="course-with-sidebar.html">Book With Sidebar</a></li>
                                            <li><a href="course-details.html">Book Details</a></li>
                                            <li><a href="course-details-2.html">Book Details Two</a></li>
                                            <li><a href="lesson.html">Book Lesson <span
                                                        class="rbt-badge-card">New</span></a></li>
                                            <li><a href="create-course.html">Create Book <span
                                                        class="rbt-badge-card">New</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="nav-quick-access">
                                            <li><a href="#"><i class="feather-folder-minus"></i> Quick Start
                                                    Guide</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> For Open Source</a>
                                            </li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> API Status</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> Support</a></li>
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
                                    <li><a href="instructor-enrolled-courses.html">Enrolled Courses</a></li>
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
                                                            alt="Book images"></div>
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
                                                            alt="Book images"></div>
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
                                                            alt="Book images"></div>
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
                                                        <span>Book School</span>
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
                                                            alt="Book images"></div>
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
                                                    <span class="btn-text">Visit Histudy Template</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
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
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <main class="rbt-main-wrapper">
        <form id="bookForm" action="{{ route('update.book') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="rbt-create-course-area bg-color-white rbt-section-gap">
                <div class="container">
                    <div class="row g-5">

                        <div class="col-lg-8">
                            <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                                <div class="accordion" id="tutionaccordionExamplea1">
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accCollapseOne" aria-expanded="true"
                                                aria-controls="accCollapseOne">Book Info
                                            </button>
                                        </h2>
                                        <div id="accCollapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                            <div class="accordion-body card-body">
                                                <!-- Start Book Field Wrapper  -->
                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Book Title</label>
                                                        <input name="title"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            id="field-1" type="text" placeholder="New Book">
                                                        <small class="validation-text">Title is required.</small>
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                            Title should be 30 charecter.</small>
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Book Author</label>
                                                        <input class="form-control @error('author') is-invalid @enderror"
                                                            name="author" id="field-1" type="text"
                                                            placeholder="Book Author">
                                                            <small class="validation-text">Book Author is required.</small>
                                                        <small class="d-block mt_dec--5 "><i class="feather-info"></i>
                                                            Author should be 15 charecter.</small>
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <label for="field-1">Book protagonist</label>
                                                        <input
                                                            class="form-control @error('book_protagonist') is-invalid @enderror"
                                                            name="book_protagonist" id="field-1" type="text"
                                                            placeholder="Book protagonist">
                                                        @error('book_protagonist')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                            protagonist should be 30 charecter.</small>
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <label for="field-2">Book Version</label>
                                                        <input
                                                            class="form-control @error('book_version') is-invalid @enderror"
                                                            name="book_version" id="field-2" type="text"
                                                            placeholder="Book Version">
                                                        @error('book_version')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="course-field mb--20">
                                                        <h6>Choose Genre</h6>
                                                        <div
                                                            class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                            <select
                                                                class="form-control @error('book_genre') is-invalid @enderror"
                                                                name="book_genre[]" class="w-100" data-live-search="true"
                                                                title="Search Book Category. ex. Design, Development, Business"
                                                                multiple data-size="7" data-actions-box="true"
                                                                data-selected-text-format="count > 2">
                                                                <option selected value="legal fiction">legal fiction </option>
                                                                <option value="historical fiction">historical fiction </option>
                                                                <option value="war novel">war novel</option>
                                                                <option value="science fiction">science fiction </option>
                                                                <option value="fantasy fiction">fantasy fiction </option>
                                                                <option value="mystery">mystery </option>
                                                                <option value="magical realism">magical realism </option>
                                                                <option value="Greek mythology">Greek mythology</option>
                                                                <option value="adventure fiction">adventure fiction</option>
                                                                <option value="satire">satire</option>
                                                                <option value="drama">drama</option>
                                                                <option value="alternative history">alternative history</option>
                                                                <option value="fairy tale">fairy tale</option>
                                                                <option value="biography">biography</option>
                                                                <option value="thriller">thriller</option>
                                                                <option value="Southern Gothic">Southern Gothic</option>
                                                                <option value="Bildungsroman">Bildungsroman</option>
                                                                <option value="Epistolary novel">Epistolary novel</option>
                                                                <option value="realistic fiction">realistic fiction</option>
                                                                <option value="Urban fantasy">Urban fantasy</option>
                                                                <option value="superhero fiction">superhero fiction</option>
                                                                <option value="contemporary fantasy">contemporary fantasy</option>
                                                                <option value="fable">fable</option>
                                                                <option value="historical drama">historical drama</option>
                                                                <option value="humor">humor</option>
                                                                <option value="Dystopian">Dystopian</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="course-field mb--20">
                                                        <label for="field-4">Target Reader Age Range</label>
                                                        <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                            <select
                                                                class="form-control @error('book_reader_age_range') is-invalid @enderror"
                                                                name="book_reader_age_range" class="w-100"
                                                                id="field-4">
                                                                <option value="All Ages">All Ages</option>
                                                                <option value="10 - 13">10 - 13</option>
                                                                <option value="13 - 15">13 - 15</option>
                                                                <option value="15 - 18">15 - 18</option>
                                                            </select>
                                                        </div>
                                                        <small><i class="feather-info"></i> Course
                                                            difficulty level</small>
                                                    </div>
                                                    <div class="course-field mb--15">
                                                        <div class="course-field mb--15">
                                                            <label for="startDate">Publisher Date</label>
                                                            <input
                                                                class="form-control @error('book_publisher_date') is-invalid @enderror"
                                                                name="book_publisher_date" type="date" id="startDate"
                                                                name="startDate">
                                                            @error('book_publisher_date')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
                                                    <div class="course-field mb--15">
                                                        <label for="aboutCourse">Book Summary</label>
                                                        <textarea @error('aboutCourse') is-invalid @enderror name="aboutCourse" name="content" id="aboutCourse"
                                                            rows="10">
                                                            
                                                   
                                                </textarea>
                                                        @error('aboutCourse')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <br><small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                            HTML or plain text allowed, no emoji This field is used for
                                                            search, so please be descriptive!</small>
                                                    </div>

                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#aboutCourse'))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>

                                                    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
                                                    <div class="course-field mb--15">
                                                        <label for="aboutNotes">Free Notes</label>
                                                        <textarea @error('aboutNotes') is-invalid @enderror name="aboutNotes" name="content" id="aboutNotes" rows="10">
                                                            
                                                </textarea>
                                                        @error('aboutNotes')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <br><small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                            HTML or plain text allowed, no emoji This field is used for
                                                            search, so please be descriptive!</small>
                                                    </div>

                                                    <script>
                                                        ClassicEditor
                                                            .create(document.querySelector('#aboutNotes'))
                                                            .catch(error => {
                                                                console.error(error);
                                                            });
                                                    </script>

                                                    <div class="course-field mb--15">
                                                        <label for="field-3">Book Total Pages</label>
                                                        <div class="pro-quantity">
                                                            <div class="pro-qty m-0"><input
                                                                    @error('book_total_pages') is-invalid @enderror
                                                                    name="book_total_pages" id="field-3" type="text"
                                                                    value="100">
                                                                @error('book_total_pages')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <small><i class="feather-info"></i> Number
                                                            of pages in this
                                                            course. Set 0 for no limits.</small>
                                                    </div>

                                                    <div class="course-field mb--20">
                                                        <h6>Book Cover Image</h6>
                                                        <div class="rbt-create-course-thumbnail upload-area">
                                                            <div class="upload-area">
                                                                <div class="brows-file-wrapper" data-black-overlay="9">
                                                                    <!-- actual upload which is hidden -->
                                                                    <input
                                                                        class="form-control @error('book_cover_image') is-invalid @enderror"
                                                                        name="book_cover_image" id="book_cover_image"
                                                                        type="file" class="inputfile" />
                                                                    @error('book_cover_image')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <img id="createfileImage"
                                                                        src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}"
                                                                        alt="file image">
                                                                    <!-- our custom upload button -->
                                                                    <label class="d-flex" for="createinputfile"
                                                                        title="No File Choosen">
                                                                        <i class="feather-upload"></i>
                                                                        <span class="text-center">Choose a File</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <small><i class="feather-info"></i> <b>Size:</b> 700x430 pixels,
                                                            <b>File
                                                                Support:</b> JPG, JPEG, PNG, GIF, WEBP</small>
                                                    </div>


                                                </div>
                                                <!-- End Book Field Wrapper  -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accCollapseTwo"
                                                aria-expanded="false" aria-controls="accCollapseTwo">
                                                Book Videos
                                            </button>
                                        </h2>
                                        <div id="accCollapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="accTwo" data-bs-parent="#tutionaccordionExamplea1">
                                            <div
                                                class="accordion-body card-body rbt-course-field-wrapper rbt-default-form">

                                                <div class="course-field mb--15">
                                                    <label for="videoUrl">Add Intoduction Video</label>
                                                    <div class="rbt-create-course-thumbnail upload-area">
                                                        <div class="upload-area">
                                                            <div class="brows-file-wrapper" data-black-overlay="9">
                                                                <!-- actual upload which is hidden -->
                                                                <input
                                                                    class="form-control @error('book_intro_video') is-invalid @enderror"
                                                                    name="book_intro_video" id="book_intro_video"
                                                                    type="file" class="inputfile" />
                                                                @error('book_intro_video')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                <img id="createfileImage"
                                                                    src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}"
                                                                    alt="file image">
                                                                <!-- our custom upload button -->
                                                                <label class="d-flex" for="createinputfile"
                                                                    title="No File Choosen">
                                                                    <i class="feather-upload"></i>
                                                                    <span class="text-center">Choose a Video</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div>
                                                        <label for="videoUrl">Add Book Videos</label>
                                                    </div>
                                                    <div id="container">

                                                        <div class="field">
                                                            <input type="text" class="form-control" name="video_title"
                                                                placeholder="Enter video title ">
                                                            <input type="file" style="padding: 8px 17px;" class="form-control" name="video"
                                                                accept="image/*,video/*">
                                                            <p class="file-info">File size is max 100</p>
                                                        </div>
                                                    </div>
                                                    <label for="">Add More</label>
                                                    {{-- <button class="btn btn-primary" id="add-field">+</button> --}}
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <button type="button" class="sign"
                                                                style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
                                                                id="add-field"><i class="fas fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accCollapseThree"
                                                aria-expanded="false" aria-controls="accCollapseThree">
                                                Book Description (PDF & Documents)
                                            </button>
                                        </h2>
                                        <div id="accCollapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="accThree" data-bs-parent="#tutionaccordionExamplea1">
                                            <div class="accordion-body card-body">
                                                


                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    <div class="course-field mb--15">
                                                        <label for="videoUrl">Upload PDF</label>
                                                        <div id="container2">

                                                            <div class="field">
                                                                <input type="text" class="form-control" name="document_name"
                                                                    placeholder="Enter video title ">
                                                                <input type="file" style="padding: 8px 17px;" class="form-control" name="document_file"
                                                                    accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                                                    text/plain, application/pdf, image/*">
                                                                <p class="file-info"></p>
                                                            </div>
                                                        </div>
                                                        <label for="">Add More</label>
                                                        {{-- <button class="btn btn-primary" id="add-field">+</button> --}}
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <button type="button" class="sign"
                                                                    style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
                                                                    id="add-document-field"><i class="fas fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <small><i class="feather-info"></i>File
                                                            Support:</b> Document only</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="accFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accCollapseFour"
                                                aria-expanded="false" aria-controls="accCollapseFour">
                                                Vocabulary ( PDF)
                                            </button>
                                        </h2>
                                        <div id="accCollapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="accFour" data-bs-parent="#tutionaccordionExamplea1">
                                            <div class="accordion-body card-body">
                                                <div class="rbt-course-field-wrapper rbt-default-form">
                                                    <div class="course-field mb--15">
                                                        <label for="videoUrl">Upload Multiple PDF</label>
                                                            
                                                            <div id="container3">

                                                                <div class="field">
                                                                    <input type="text" class="form-control" name="vocab_name"
                                                                        placeholder="Enter video title ">
                                                                    <input type="file" style="padding: 8px 17px;" class="form-control" name="vocab_file"
                                                                        accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                                                        text/plain, application/pdf, image/*">
                                                                    <p class="file-info"></p>
                                                                </div>
                                                            </div>
                                                            <label for="">Add More</label>
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <button type="button" class="sign"
                                                                        style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
                                                                        id="add-vocab-field"><i class="fas fa-plus"></i></button>
                                                                </div>
                                                            </div>

                                                        <small><i class="feather-info"></i>File
                                                            Support:</b> Document only</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item card rbt-course-field-wrapper">
                                        <h2 class="accordion-header card-header" id="accSix">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accCollapseSix"
                                                aria-expanded="false" aria-controls="accCollapseSix">
                                                Create Quiz
                                            </button>
                                        </h2>
                                        <div id="accCollapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="accSix" data-bs-parent="#tutionaccordionExamplea1">
                                            <div
                                                class="accordion-body card-body rbt-course-field-wrapper rbt-default-form row row-15">

                                                <div class="col-lg-6">
                                                    <div class="course-field mb--15">
                                                        <label for="startDate">Quiz Name</label>
                                                        <input
                                                            class="form-control @error('quiz_name') is-invalid @enderror"
                                                            name="quiz_name" type="text" id="startDate"
                                                            name="startDate">
                                                        @error('quiz_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div id="quiz-container">
                                                    <div class="quiz-question rbt-single-quiz">
                                                        <div class="question-header">
                                                            <h4>Question no: 1 <input
                                                                    class="form-control @error('quiz_q') is-invalid @enderror"
                                                                    name="quiz_q" type="text"
                                                                    placeholder="Define Question here"></h4>
                                                            @error('quiz_q')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="question-options row g-3 mt--10">
                                                            <div class="col-lg-6">
                                                                <p class="rbt-checkbox-wrapper mb--5">
                                                                    <input
                                                                        class="form-control @error('quiz_op1') is-invalid @enderror"
                                                                        name="quiz_op1" id="rbt-checkbox-1"
                                                                        name="rbt-checkbox-1" type="text"
                                                                        placeholder="Option one">
                                                                </p>
                                                                @error('quiz_op1')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p class="rbt-checkbox-wrapper">
                                                                    <input
                                                                        class="form-control @error('quiz_op2') is-invalid @enderror"
                                                                        name="quiz_op2" id="rbt-checkbox-2"
                                                                        name="rbt-checkbox-2" type="text"
                                                                        placeholder="Option two">
                                                                </p>
                                                                @error('quiz_op2')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p class="rbt-checkbox-wrapper">
                                                                    <input
                                                                        class="form-control @error('quiz_op3') is-invalid @enderror"
                                                                        name="quiz_op3" id="rbt-checkbox-3"
                                                                        name="rbt-checkbox-3" type="text"
                                                                        placeholder="Option three">
                                                                </p>
                                                                @error('quiz_op3')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p class="rbt-checkbox-wrapper">
                                                                    <input
                                                                        class="form-control @error('quiz_op4') is-invalid @enderror"
                                                                        name="quiz_op4" id="rbt-checkbox-4"
                                                                        name="rbt-checkbox-4" type="text"
                                                                        placeholder="Option four">
                                                                </p>
                                                                @error('quiz_op4')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p class="rbt-checkbox-wrapper">
                                                                    <input
                                                                        class="form-control @error('coorect_answer') is-invalid @enderror"
                                                                        id="rbt-checkbox-answer" name="coorect_answer"
                                                                        type="text" placeholder="Correct Answer">
                                                                </p>
                                                                @error('coorect_answer')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <button id="add-question-btn">Add Question</button> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <button type="button" class="sign"
                                                            style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"
                                                            id="add-question-btn"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mt--10 row g-5">
                                <div class="col-lg-4">
                                    <a class="rbt-btn hover-icon-reverse bg-primary-opacity w-100 text-center"
                                        href="">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Preview</span>
                                            <span class="btn-icon"><i class="feather-eye"></i></span>
                                            <span class="btn-icon"><i class="feather-eye"></i></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <button type="submit" id="submitBtn"
                                        class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Create Book</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
        </form>

        {{-- Book upload tips --}}
        <div class="col-lg-4">
            <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                <div class="inner">
                    <div class="section-title mb--30">
                        <h4 class="title">Book Upload Tips</h4>
                    </div>
                    <div class="rbt-course-upload-tips">
                        <ul class="rbt-list-style-1">
                            <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aperiam, repudiandae. </li>
                            <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </li>
                            <li><i class="feather-check"></i> Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                            <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Placeat, blanditiis.</li>
                            <li><i class="feather-check"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Fugiat deleniti sequi quasi.</li>
                            <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sint
                                commodi voluptatibus, voluptatem corrupti dolore asperiores.</li>
                            <li><i class="feather-check"></i> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Quod, aliquid repudiandae!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>


        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>

        {{-- quiz script --}}
        <script>
            $(document).ready(function() {
                var questionCount = 1;
                var maxQuestions = 10;

                $('#add-question-btn').click(function() {
                    if (questionCount >= maxQuestions) {
                        alert("You have reached the maximum limit of questions.");
                        return;
                    }
                    questionCount++;

                    var newQuestion = $('<div class="quiz-question rbt-single-quiz">\
                                                <div class="question-header mt-5">\
                                                    <h4>Question no: ' + questionCount + ' <input name="quiz_qq[]" type="text" placeholder="Define Question here"></h4>\
                                                    \
                                                </div>\
                                                <div class="question-options row g-3 mt--10">\
                                                    <div class="col-lg-6">\
                                                    <p class="rbt-checkbox-wrapper mb--5">\
                                                        <input name="quiz_opp1[]" id="rbt-checkbox-' +
                        questionCount +
                        '-1" name="rbt-checkbox-' +
                        questionCount + '-1" type="text" placeholder="Option one">\
                                                    </p>\
                                                    </div>\
                                                    <div class="col-lg-6">\
                                                    <p class="rbt-checkbox-wrapper">\
                                                        <input name="quiz_opp2[]" id="rbt-checkbox-' +
                        questionCount +
                        '-2" name="rbt-checkbox-' +
                        questionCount + '-2" type="text" placeholder="Option two">\
                                                    </p>\
                                                    </div>\
                                                    <div class="col-lg-6">\
                                                    <p class="rbt-checkbox-wrapper">\
                                                        <input name="quiz_opp3[]" id="rbt-checkbox-' +
                        questionCount +
                        '-3" name="rbt-checkbox-' +
                        questionCount + '-3" type="text" placeholder="Option three">\
                                                    </p>\
                                                    </div>\
                                                    <div class="col-lg-6">\
                                                    <p class="rbt-checkbox-wrapper">\
                                                        <input name="quiz_opp4[]" id="rbt-checkbox-' +
                        questionCount +
                        '-4" name="rbt-checkbox-' +
                        questionCount + '-4" type="text" placeholder="Option four">\
                                                    </p>\
                                                    </div>\
                                                    <div class="col-lg-12">\
                                                    <p>\
                                                        <label for="right-answer-' + questionCount +
                        '">Right Answer:</label>\
                                                    <input name="coorect_answerq[]" id="right-answer-' +
                        questionCount +
                        '" name="right-answer-' +
                        questionCount + '" type="text" placeholder="Enter the right answer here">\
                                    </p>\
                                    </div>\
                                </div><button class="remove-question-btn sign" style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"><i class="fas fa-minus"></i></button>\
                                </div>');

                    $('#quiz-container').append(newQuestion);
                });

                $(document).on('click', '.remove-question-btn', function() {
                    if ($(this).closest('.quiz-question').index() !== 0) {
                        $(this).closest('.quiz-question').remove();
                        questionCount--;
                    }
                });
            });
        </script>
    <script src="{{ asset('assets/js/book.js') }}"></script>
    @endsection
