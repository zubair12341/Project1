<div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
    <div class="inner">
        <div class="content-item-content">

            @auth
            @if (Auth::user()->role == 'admin')

            <div class="rbt-default-sidebar-wrapper">
                <div class="section-title mb--20">
                    <h6 class="rbt-title-style-2">Welcome, Admin</h6>
                </div>
                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('admin.dashboard') }}"><i
                                    class="feather-home"></i><span>Dashboard</span></a></li>
                        <li><a href="{{ route('admin.profile') }}"><i class="feather-user"></i><span>My
                                    Profile</span></a></li>
                        <li><a href="{{ route('admin.genre') }}"><i class="feather-book"></i><span>Genre</span></a></li>
                        <li><a href="{{ route('admin.books') }}"><i class="feather-book-open"></i><span>All
                                    Books</span></a></li>
                        <li><a href="{{ route('admin.createbook') }}"><i class="feather-monitor"></i><span>Create a New
                                    Book</span></a></li>
                        <li><a href="{{ route('admin.createcourse') }}"><i class="feather-book"></i><span>Create Online
                            Course</span></a></li>
                        <li><a href="{{ route('admin.allcourses') }}"><i class="feather-book-open"></i><span>All
                            Online Courses</span></a></li>
                        <li><a href="{{ route('admin.orderhistory') }}"><i class="feather-shopping-bag"></i><span>Orders
                                    History</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Offers & Subscription</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="#"><i class="feather-monitor"></i><span>Offers</span></a></li>
                        <li><a href="{{ route('admin.announcement') }}"><i
                                    class="feather-volume-2"></i><span>Announcements</span></a></li>
                        <li><a href="{{ route('admin.subscription') }}"><i
                                    class="feather-message-square"></i><span>Subscriptions</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">User</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('admin.settings') }}"><i
                                    class="feather-settings"></i><span>Settings</span></a></li>
                        <li>
                            <form action="{{ url('logout') }}" method="POST" id="logoutForm">
                                @csrf
                                <a href="logout"
                                    onclick="document.getElementById('logoutForm').submit(); return false;">
                                    <i class="feather-log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>

            @elseif(Auth::user()->role == 'student')
            <div class="rbt-default-sidebar-wrapper">
                <div class="section-title mb--20">
                    <h6 class="rbt-title-style-2">Welcome, {{ Auth::user()->name }}</h6>
                </div>
                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('student.dashboard') }}"><i
                                    class="feather-home"></i><span>Dashboard</span></a></li>
                        <li><a href="{{ route('student.profile') }}"><i class="feather-user"></i><span>My
                                    Profile</span></a></li>
                        <li><a href="{{ route('student.books') }}"><i class="feather-book-open"></i><span>My
                                    Books</span></a></li>
                        <li><a href="{{ route('student.orderhistory') }}"><i class="feather-shopping-bag"></i><span>Orders
                                    History</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">Offers & Subscription</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="#"><i class="feather-monitor"></i><span>New Offers <b style="color:red">*</b></span></a></li>
                        <li><a href="{{ route('student.announcement') }}"><i
                                    class="feather-volume-2"></i><span>Announcements</span></a></li>
                        <li><a href="{{ route('student.subscription') }}"><i
                                    class="feather-message-square"></i><span>Subscriptions</span></a></li>
                        <li><a href="{{ route('student.referal') }}"><i
                            class="feather-send"></i><span>Share Referral</span></a></li>
                    </ul>
                </nav>

                <div class="section-title mt--40 mb--20">
                    <h6 class="rbt-title-style-2">User</h6>
                </div>

                <nav class="mainmenu-nav">
                    <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                        <li><a href="{{ route('student.settings') }}"><i
                                    class="feather-settings"></i><span>Settings</span></a></li>
                        <li>
                            <form action="{{ url('logout') }}" method="POST" id="logoutForm">
                                @csrf
                                <a href="logout"
                                    onclick="document.getElementById('logoutForm').submit(); return false;">
                                    <i class="feather-log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>

            @endif
        @endauth


        </div>
    </div>
</div>
