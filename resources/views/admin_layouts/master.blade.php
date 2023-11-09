<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Wisdom Chest')</title>
</head>

<body>
    @include('inc.header')
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo height-10"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">

                                <div class="tutor-content">
                                    @auth
                                        @if (Auth::user()->role == 'admin')
                                        <h5 class="title" style="color:black">Admin</h5>
                                            @elseif(Auth::user()->role == 'student')
                                            <h5 class="title" style="color:black">Hi Welcome {{ Auth::user()->name }}!</h5>
                                        @endif
                                    @endauth
                                    
                                    <div class="rbt-review">
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                @auth
                                        @if (Auth::user()->role == 'admin')
                                        <div class="tutor-btn">
                                            <a class="rbt-btn btn-md hover-icon-reverse" href="{{ route('admin.createbook') }}">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Create a New Book</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                            @elseif(Auth::user()->role == 'student')

                                        @endif
                                    @endauth
                                
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            @include('admin_inlclude.sidenav')
                            
                                <!-- Your page content goes here -->
                                @yield('content')
                            </div>

                            @include('admin_inlclude.footer')
</body>

</html>
