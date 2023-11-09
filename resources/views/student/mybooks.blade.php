@extends('admin_layouts.master')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@section('title', 'Wisdom Chest || Student My Books')

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
                <h4 class="rbt-title-style-3">My Books</h4>
            </div>

            <div class="advance-tab-button mb--30">
                <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                    <li role="presentation">
                        <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="true">
                            <span class="title">My Books</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="tab-button" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-4" role="tab" aria-controls="profile-4" aria-selected="false">
                            <span class="title">Recommendation Books</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                    <div class="row g-5">
                        <!-- Start Single Course  -->
                        @foreach ($mybooks as $item)
                            
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    @if ($item->details)
                                    <a href="{{ route('student.show.content', ['book' => $item->title, 'id' => $item->id ]) }}">
                                        <img src="{{ asset("storage/app/".$item->details->cover_image) }}"
                                            alt="Card image">
                                    </a>
                                    @endif
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
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('student.show.content', ['book' => $item->title, 'id' => $item->id ]) }}">{{ $item->title }}</a>
                                    </h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-user"></i>{{ "Author ".$item->author }}</li>
                                    </ul>

                                    <div class="rbt-card-bottom">
                                        <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center" href="{{ route('student.show.content', ['book' => $item->title, 'id' => $item->id ]) }}">View Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                    <div class="row g-5">

                        
                        
                        


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