@extends('admin_layouts.master')

@section('title', 'Wisdom Chest || Student Dashboard')

@section('content')

    <!-- End Dashboard Sidebar  -->
    </div>

    <div class="col-lg-9">
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
            <div class="content">
                <div class="section-title">
                    <h4 class="rbt-title-style-3">Dashboards</h4>
                </div>
                <div class="row g-5">

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                            <div class="inner">
                                <div class="rbt-round-icon bg-primary-opacity">
                                    <i class="feather-book-open"></i>
                                </div>
                                <div class="content">
                                    <h3 class="counter without-icon color-primary"><span class="odometer"
                                            data-count="50">00</span>
                                    </h3>
                                    <span class="rbt-title-style-2 d-block">Total Books</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-pink-opacity">
                            <div class="inner">
                                <div class="rbt-round-icon bg-pink-opacity">
                                    <i class="feather-users"></i>
                                </div>
                                <div class="content">
                                    <h3 class="counter without-icon color-pink"><span class="odometer"
                                            data-count="160">00</span>
                                    </h3>
                                    <span class="rbt-title-style-2 d-block">Total Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-warning-opacity">
                            <div class="inner">
                                <div class="rbt-round-icon bg-warning-opacity">
                                    <i class="feather-dollar-sign"></i>
                                </div>
                                <div class="content">
                                    <h3 class="counter color-warning"><span class="odometer" data-count="25000">00</span>
                                    </h3>
                                    <span class="rbt-title-style-2 d-block">Total Earnings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                </div>
            </div>
        </div>
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">All Books</h4>
                        </div>
                    </div>
                </div>
                <div class="row gy-5">
                    <div class="col-lg-12">
                        <div class="rbt-dashboard-table table-responsive">
                            <table class="rbt-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><a href="#">Lorem.</a></th>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><a href="#">Lorem.</a></th>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><a href="#">Lorem.</a></th>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><a href="#">Lorem, ipsum.</a></th>
                                        <td>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="off fas fa-star"></i>
                                                <i class="off fas fa-star"></i>
                                                <i class="off fas fa-star"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="load-more-btn text-center">
                            <a class="rbt-btn-link" href="#">Browse All Books<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->




@endsection
