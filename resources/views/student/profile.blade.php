@extends('admin_layouts.master')

@section('title', 'Wisdom Chest || Student Profile')

@section('content')


    <!-- End Dashboard Sidebar  -->
    </div>
    <div class="col-lg-9">
        <!-- Start Instructor Profile  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <h4 class="rbt-title-style-3">My Profile</h4>
                </div>
                <!-- Start Profile Row  -->
                {{-- <div class="rbt-profile-row row row--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Registration Date</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">February 25, 2025 6:01 am</div>
                </div>
            </div> --}}
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">First Name</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">{{ Auth::user()->name }}</div>
                    </div>
                </div>
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">Last Name</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">{{ Auth::user()->last_name }}</div>
                    </div>
                </div>
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">Username</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">{{ Auth::user()->name." ".Auth::user()->last_name }}</div>
                    </div>
                </div>
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">Email</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">Phone Number</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">{{ Auth::user()->whatsapp }}</div>
                    </div>
                </div>
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">Skill/Occupation</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">Student</div>
                    </div>
                </div>
                <!-- End Profile Row  -->

                <!-- Start Profile Row  -->
                <div class="rbt-profile-row row row--15 mt--15">
                    <div class="col-lg-4 col-md-4">
                        <div class="rbt-profile-content b2">Biography</div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="rbt-profile-content b2">Coordinating office activities and operations to secure
                            efficiency and compliance to company policies. Supervising administrative staff and dividing
                            responsibilities to ensure performance. Keep stock of office supplies and place orders when
                            necessary.</div>
                    </div>
                </div>
                <!-- End Profile Row  -->
            </div>
        </div>
        <!-- End Instructor Profile  -->

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





@endsection
