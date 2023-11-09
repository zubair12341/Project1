@extends('main_layout.master')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@section('title', 'Wisdom Chest || Admin Edit Online Course')

@section('content')
<script>
    $(document).ready(function() { 
    @if (session('error'))
        swal({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            button: "OK",
        });
    @endif
    @if (session('success'))
        swal({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            button: "OK",
        });
    @endif
});
</script>
<!-- Mobile Menu Section -->
<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <a href="index.html">
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
                                                <h4 class="title"><a href="11-single-course.html">Single Online
                                                        Course <span class="btn-icon"><i
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
                                                <h4 class="title"><a href="10-online-course.html">Online Course <span
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
                                                <h4 class="title"><a href="02-course-school.html">Online Course <span
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
                                                <h4 class="title"><a href="#">Coming Soon <span class="btn-icon"><i
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
                                                <h4 class="title"><a href="#">Coming Soon 2 <span class="btn-icon"><i
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
                                                <h4 class="title"><a href="#">Coming Soon 3 <span class="btn-icon"><i
                                                                class="feather-arrow-right"></i></span></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Demo  -->
                            </div>

                            <div class="load-demo-btn text-center">
                                <a class="rbt-btn-link color-white" href="#">Scroll to view more <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-down-up" viewBox="0 0 16 16">
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
                                    <h3 class="rbt-short-title">Online Course Layout</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="course-filter-one-toggle.html">Filter One Toggle</a></li>
                                        <li><a href="course-filter-one-open.html">Filter One Open</a></li>
                                        <li><a href="course-filter-two-toggle.html">Filter Two Toggle</a></li>
                                        <li><a href="course-filter-two-open.html">Filter Two Open</a></li>
                                        <li><a href="course-with-tab.html">Online Course With Tab</a></li>
                                        <li><a href="course-with-tab-two.html">Online Course With Tab Two</a></li>
                                        <li><a href="course-card-2.html">Online Course Card Two</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                    <h3 class="rbt-short-title">Online Course Layout</h3>
                                    <ul class="mega-menu-item">
                                        <li><a href="course-card-3.html">Online Course Card Three</a></li>
                                        <li><a href="course-masonry.html">Online Course Masonry</a></li>
                                        <li><a href="course-with-sidebar.html">Online Course With Sidebar</a></li>
                                        <li><a href="course-details.html">Online Course Details</a></li>
                                        <li><a href="course-details-2.html">Online Course Details Two</a></li>
                                        <li><a href="lesson.html">Online Course Lesson <span
                                                    class="rbt-badge-card">New</span></a></li>
                                        <li><a href="create-course.html">Create Online Course <span
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
                                                    <span>Online Course</span>
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
                                        <li><a href="#">Media Under Title <span class="rbt-badge-card">Coming</span></a>
                                        </li>
                                        <li><a href="#">Sticky Sidebar <span class="rbt-badge-card">Coming</span></a>
                                        </li>
                                        <li><a href="#">Auto Masonry <span class="rbt-badge-card">Coming</span></a></li>
                                        <li><a href="#">Meta Overlaid <span class="rbt-badge-card">Coming</span></a>
                                        </li>
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
    <form action="{{ route('admin.update.course') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $course->id }}" name="id">
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
                                            aria-controls="accCollapseOne">Course Info
                                        </button>
                                    </h2>
                                    <div id="accCollapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                        <div class="accordion-body card-body">
                                            <!-- Start Online Course Field Wrapper  -->
                                            
                                            
                                            <div class="rbt-course-field-wrapper rbt-default-form">
                                                <div class="course-field mb--15">
                                                    <label for="field-1">Course Title</label>
                                                    <input id="title" type="text" value="{{ $course->title }}" name="title" class="form-control  @error('title') is-invalid @enderror"
                                                        placeholder="New Online Course">
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                        Title should be 30 charecter.</small>
                                                </div>
                                                <div class="course-field mb--15">
                                                    <label for="field-1">Course Teacher</label>
                                                    <input id="teacher" name="teacher" value="{{$course->teacher}}" class="form-control  @error('teacher') is-invalid @enderror" type="text"
                                                        placeholder="Online Course Teacher">
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                        Teacher should be 15 charecter.</small>
                                                </div>
                                                <div class="course-field mb--15">
                                                    <label for="field-4">Target Age Range</label>
                                                    <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                        <select class="w-100 form-control @error('age_range') is-invalid @enderror" id="age_range" name="age_range">
                                                            <option value="All Ages" {{ $course->age_range == "All Ages" ? 'selected' : '' }}>All Ages</option>
                                                            <option value="10 - 13" {{ $course->age_range == "10 - 13" ? 'selected' : '' }}>10 - 13</option>
                                                            <option value="13 - 15" {{ $course->age_range == "13 - 15" ? 'selected' : '' }}>13 - 15</option>
                                                            <option value="15 - 18" {{ $course->age_range == "15 - 18" ? 'selected' : '' }}>15 - 18</option>
                                                        </select>
                                                    </div>
                                                    <small><i class="feather-info"></i> Course
                                                        difficulty level</small>
                                                </div>

                                                <script
                                                    src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js">
                                                </script>
                                                <div class="course-field mb--15">
                                                    <label for="summary">Course Summary</label>
                                                    <textarea name="summary" class="form-control @error('summary') is-invalid @enderror" id="summary" rows="10">
                                                        {{ $course->summary }}
                                                    </textarea>
                                                    </br><small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                        HTML or plain text allowed, no emoji This field is used for
                                                        search, so please be descriptive!</small>
                                                </div>

                                                <script>
                                                    ClassicEditor
                                                        .create(document.querySelector('#summary'))
                                                        .catch(error => {
                                                            console.error(error);
                                                        });
                                                </script>


                                                <div class="course-field mb--20">
                                                    <h6>Course Cover Image</h6>
                                                    <div class="rbt-create-course-thumbnail upload-area">
                                                        <div class="upload-area">
                                                            <div class="brows-file-wrapper" data-black-overlay="9">
                                                                <!-- actual upload which is hidden -->
                                                                <input name="cover_image" id="cover_image" type="file"
                                                                    class="inputfile" />
                                                                <img id="createfileImage"
                                                                    src="{{ asset('assets/images/others/thumbnail-placeholder.svg') }}"
                                                                    alt="file image">
                                                                <!-- our custom upload button -->
                                                                <label class="d-flex" for="cover_image"
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
                                            <!-- End Online Course Field Wrapper  -->
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card rbt-course-field-wrapper">
                                    <h2 class="accordion-header card-header" id="accSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#accCollapseSix"
                                            aria-expanded="false" aria-controls="accCollapseSix">
                                            Course Pricing
                                        </button>
                                    </h2>
                                    <div id="accCollapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="accSix" data-bs-parent="#tutionaccordionExamplea1">
                                        <div
                                            class="accordion-body card-body rbt-course-field-wrapper rbt-default-form row row-15">

                                            <div class="col-lg-6">

                                            </div>

                                            <div id="quiz-container">

                                                <div class="course-field mb--15">
                                                    <label for="field-1">Course Price</label>
                                                    <input id="price" name="price" value="{{ $course->price }}" class="form-control  @error('price') is-invalid @enderror" type="number"
                                                        placeholder="Online Course Price">
                                                    <small class="d-block mt_dec--5"><i class="feather-info"></i>
                                                        Price should be number.</small>
                                                </div>

                                                <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                    <select class="w-100" data-live-search="true" id="status"
                                                        name="status">
                                                        <option value="active" {{ $course->status == "active" ? 'selected' : '' }}>Active</option>
                                                        <option value="block" {{ $course->status == "block" ? 'selected' : '' }}>Block </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </div>


    <div class="mt--10 row g-5">

        <div class="col-lg-8">
            <button type="submit" id="submitBtn" class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                <span class="icon-reverse-wrapper">
                    <span class="btn-text">Update Course</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                </span>
            </button>
        </div>
    </div>
    </div>
    </form>
    <div class="col-lg-4">
        <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
            <div class="inner">
                <div class="section-title mb--30">
                    <h4 class="title">Online Course Upload Tips</h4>
                </div>
                <div class="rbt-course-upload-tips">
                    <ul class="rbt-list-style-1">
                        <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Aperiam, repudiandae. </li>
                        <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li><i class="feather-check"></i> Lorem ipsum dolor, sit amet consectetur adipisicing.</li>
                        <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Placeat, blanditiis.</li>
                        <li><i class="feather-check"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Fugiat deleniti sequi quasi.</li>
                        <li><i class="feather-check"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint
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

    <script>
        $(document).ready(function () {
            var questionCount = 1;
            var maxQuestions = 10;

            $('#add-question-btn').click(function () {
                if (questionCount >= maxQuestions) {
                    alert("You have reached the maximum limit of questions.");
                    return;
                }
                questionCount++;

                var newQuestion = $('<div class="quiz-question rbt-single-quiz">\
                                <div class="question-header mt-5">\
                                  <h4>Question no: ' + questionCount + ' <input type="text" placeholder="Define Question here"></h4>\
                                  \
                                </div>\
                                <div class="question-options row g-3 mt--10">\
                                  <div class="col-lg-6">\
                                    <p class="rbt-checkbox-wrapper mb--5">\
                                      <input id="rbt-checkbox-' + questionCount + '-1" name="rbt-checkbox-' +
                    questionCount + '-1" type="text" placeholder="Option one">\
                                    </p>\
                                  </div>\
                                  <div class="col-lg-6">\
                                    <p class="rbt-checkbox-wrapper">\
                                      <input id="rbt-checkbox-' + questionCount + '-2" name="rbt-checkbox-' +
                    questionCount + '-2" type="text" placeholder="Option two">\
                                    </p>\
                                  </div>\
                                  <div class="col-lg-6">\
                                    <p class="rbt-checkbox-wrapper">\
                                      <input id="rbt-checkbox-' + questionCount + '-3" name="rbt-checkbox-' +
                    questionCount + '-3" type="text" placeholder="Option three">\
                                    </p>\
                                  </div>\
                                  <div class="col-lg-6">\
                                    <p class="rbt-checkbox-wrapper">\
                                      <input id="rbt-checkbox-' + questionCount + '-4" name="rbt-checkbox-' +
                    questionCount + '-4" type="text" placeholder="Option four">\
                                    </p>\
                                  </div>\
                                  <div class="col-lg-12">\
                                    <p>\
                                      <label for="right-answer-' + questionCount + '">Right Answer:</label>\
                                      <input id="right-answer-' + questionCount + '" name="right-answer-' +
                    questionCount + '" type="text" placeholder="Enter the right answer here">\
                                    </p>\
                                  </div>\
                                </div><button class="remove-question-btn sign" style="border: none;color: rgb(90, 88, 214);padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 10px;cursor: pointer;"><i class="fas fa-minus"></i></button>\
                              </div>');

                $('#quiz-container').append(newQuestion);
            });

            $(document).on('click', '.remove-question-btn', function () {
                if ($(this).closest('.quiz-question').index() !== 0) {
                    $(this).closest('.quiz-question').remove();
                    questionCount--;
                }
            });
        });
    </script>





    @endsection