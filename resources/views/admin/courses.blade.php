@extends('admin_layouts.master')

@section('title', 'Wisdom Chest || Admin All Online Courses')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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

  <!-- End Dashboard Sidebar  -->
</div>

<div class="col-lg-9">
    <!-- Start Enrole Course  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">

            <div class="section-title">
                <h4 class="rbt-title-style-3">All Online Courses</h4>
            </div>

            <div class="advance-tab-button mb--30">
                <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                    <li role="presentation">
                        <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="true">
                            <span class="title">Active Courses</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="tab-button" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-4" role="tab" aria-controls="profile-4" aria-selected="false">
                            <span class="title">Block Courses</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                    <div class="col-lg-12">
                        <!-- Start Enrole Course  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Online Courses</h4>
                                </div>
                    
                                <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                    <table class="rbt-table table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Course ID</th>
                                                <th>Course Name</th>
                                                <th>Teacher</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                    
                                        <tbody>
                                            @php
                                                $i=1;
                                            @endphp
                                            @foreach ($active as $act)
                                            <tr>
                                                <th>#{{ $i++ }}</th>
                                                <td>{{ $act->title }}</td>
                                                <td>{{ $act->teacher }}</td>
                                                <td>${{ $act->price }}</td>
                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Active</span></td>
                                                <td><div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                                        <li><a class="dropdown-item" href="{{ route('admin.courses.edit', $act->id) }}">Edit</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('delet.course', ['course'=> $act->id]) }}" onclick="return confirmDelete(event)">Delete</a></li>
                                                    </ul>
                                                </div></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    
                            </div>
                        </div>
                        <!-- End Enrole Course  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                    <div class="col-lg-12">
                        <!-- Start Enrole Course  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Online Courses</h4>
                                </div>
                    
                                <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                    <table class="rbt-table table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Course ID</th>
                                                <th>Course Name</th>
                                                <th>Teacher</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                    
                                        <tbody>
                                            @php
                                                $j=1;
                                            @endphp
                                            @foreach ($block as $blk)
                                            <tr>
                                                <th>#{{ $j++ }}</th>
                                                <td>{{ $blk->title }}</td>
                                                <td>{{ $blk->teacher }}</td>
                                                <td>${{ $blk->price }}</td>
                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Block</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                                            <li><a class="dropdown-item" href="{{ route('admin.courses.edit', $blk->id) }}">Edit</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('delet.course', ['course'=> $blk->id]) }}" onclick="return confirmDelete(event)">Delete</a></li>
                                                        </ul>
                                                    </div>    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    
                            </div>
                        </div>
                        <!-- End Enrole Course  -->
                    </div>
                </div>

                
            </div>

        </div>
    </div>
    <!-- End Enrole Course  -->
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
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent the default link behavior
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this course!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                // If the user clicks "OK," proceed with the link action
                window.location.href = event.target.href;
            }
        });
    }
</script>



