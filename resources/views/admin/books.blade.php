@extends('admin_layouts.master')

@section('title', 'Wisdom Chest || Admin All Books')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


@section('content')
<script>
    $(document).ready(function () {
        @if(session('error'))
        swal({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            button: "OK",
        });
        @endif
        @if(session('success'))
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
                <h4 class="rbt-title-style-3">All Books</h4>
            </div>

            <div class="advance-tab-button mb--30">
                <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                    <li role="presentation">
                        <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab"
                            data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="true">
                            <span class="title">Active Books</span>
                        </a>
                    </li>
                    {{-- <li role="presentation">
                        <a href="#" class="tab-button" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-4" role="tab" aria-controls="profile-4" aria-selected="false">
                            <span class="title">InActive Books</span>
                        </a>
                    </li> --}}
                </ul>
            </div>
            <style>
                .dropdown-menu {
                    overflow-y: scroll !important;
                    height: 230px !important;
                    overflow-x: hidden !important;
                    width: 100%;
                }

                /* Dropdown */

                .dropdown {
                    display: inline-block;
                    position: relative;
                }

                .dd-button {
                    display: inline-block;
                    border: 1px solid gray;
                    border-radius: 4px;
                    padding: 10px 30px 10px 20px;
                    background-color: #ffffff;
                    cursor: pointer;
                    white-space: nowrap;
                }

                .dd-button:after {
                    content: '';
                    position: absolute;
                    top: 50%;
                    right: 15px;
                    transform: translateY(-50%);
                    width: 0;
                    height: 0;
                    border-left: 5px solid transparent;
                    border-right: 5px solid transparent;
                    border-top: 5px solid black;
                }

                .dd-button:hover {
                    background-color: #eeeeee;
                }


                .dd-input {
                    display: none;
                }

                .dd-menu {
                    position: absolute;
                    left: 0 !important;
                    visibility: visible;
                    bottom: 100%;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    padding: 0;
                    margin: 2px 0 0 0;
                    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
                    background-color: #ffffff;
                    list-style-type: none;
                }

                .dd-input+.dd-menu {
                    display: none;
                }

                .dd-input:checked+.dd-menu {
                    display: block;
                }

                .dd-menu li {
                    padding: 10px 20px;
                    cursor: pointer;
                    white-space: nowrap;
                }

                .dd-menu li:hover {
                    background-color: #f6f6f6;
                }

                .dd-menu li a {
                    display: block;
                    margin: -10px -20px;
                    padding: 10px 20px;
                }

                .dd-menu li.divider {
                    padding: 0;
                    border-bottom: 1px solid #cccccc;
                }
            </style>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                    <div class="row g-5">
                        {{-- section for choosing genre --}}
                        <br>
                        <form action="{{ route('filter.books') }}" method="post">
                            @csrf
                            <label for="">Choose Genre</label>
                            <div class="row">
                                <div class="col-5 rbt-modern-select bg-transparent height-45 mb--10 mt--10"
                                    style="display: flex">
                                    <select name="genre" id="genre" class="form-control">
                                        <option value="All" selected>All</option>
                                        @foreach ($genre as $gen)
                                            
                                        <option value="{{ $gen->genre }}">{{ $gen->genre }}</option>
                                        @endforeach
                                    </select>
                                    &nbsp;<button type="submit" class="btn btn-primary btn-lg">Search</button>
                                </div>
                            </div>
                        </form>
                        {{-- end section --}}
                        <!-- Start Single Course  -->
                        @foreach ($books as $book)
                        <div class="col-lg-4 col-md-6 col-12 book-card" data-genre="{{ $book->genre }}">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        @if ($book->details)
                                        <img src="{{ asset('/public/storage/'.$book->details->cover_image) }}"
                                            alt="Card image">
                                        @endif
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
                                    </div>
                                    <h4 class="rbt-card-title"><a href="#">{{ $book->title }}</a></h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>Author: {{ $book->author }}</li>
                                    </ul>
                                    <label class="dropdown rbt-card-bottom">
                                        <div class="dd-button rbt-btn btn-sm bg-primary-opacity w-100 text-center">
                                            Actions
                                        </div>
                                        <input type="checkbox" class="dd-input" id="test">
                                        <ul class="dd-menu">
                                            <li><a href="{{ route('edit.book.index', ['id' => $book->id]) }}">Edit
                                                    Book</a></li>
                                            <li><a href="{{ route('delet.book', ['book'=> $book->id]) }}"
                                                    onclick="return confirmation(event)">Delete Book</a></li>
                                        </ul>
                                    </label>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        <script>
                            function confirmation(event) {
                                event.preventDefault(); // Prevent the default link behavior
                                swal({
                                    title: "Are you sure?",
                                    text: "Once deleted, you will not be able to recover this book!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                }).then((willDelete) => {
                                    if (willDelete) { 
                                        window.location.href = event.target.href;
                                        // If the user clicks "OK," proceed with the link action
                                        // window.location.href = event.target.href;
                                    }
                                });
                            }
                        </script>
                        <!-- End Single Course  -->
                    </div>
                </div>

                <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                    <div class="row g-5">

                        <!-- Start Single Course  -->
                        {{-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/course/course-online-04.jpg')}}" alt="Card
                        image">
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
                                <span class="rating-count"> (3 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor sit amet</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>20 Lessons</li>
                            <!-- <li><i class="feather-users"></i>30 Students</li> -->
                        </ul>

                        <div class="rbt-card-bottom">
                            <!-- <div class="rbt-price">
                                            <span class="current-price">$40</span>
                                            <span class="off-price">$86</span>
                                        </div> -->
                            <a class="rbt-btn-link" href="#">Learn
                                More<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End Single Course  -->

            <!-- Start Single Course  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="#">
                            <img src="{{ asset('assets/images/course/course-online-06.jpg')}}" alt="Card image">
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
                                <span class="rating-count"> (3 Reviews)</span>
                            </div>
                            <div class="rbt-bookmark-btn">
                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="#">Lorem ipsum dolor sit amet</a>
                        </h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-book"></i>50 Lessons</li>
                            <!-- <li><i class="feather-users"></i>10 Students</li> -->
                        </ul>

                        <div class="rbt-card-bottom">
                            <!-- <div class="rbt-price">
                                            <span class="current-price">$40</span>
                                            <span class="off-price">$86</span>
                                        </div> -->
                            <a class="rbt-btn-link" href="#">Learn
                                More<i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Course  -->

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