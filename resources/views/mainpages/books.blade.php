@extends('main_layout.master')
@section('title', 'Wisdom Chest || Books')
@section('content')


<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
    <div class="rbt-banner-content">
        <!-- Start Banner Content Top  -->
        <div class="rbt-banner-content-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Breadcrumb Area  -->
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">All Books</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">All Books</h1>
                            <a href="#" class="rbt-badge-2">
                                <div class="image">🎉</div> 50 Books
                            </a>
                        </div>

                        <p class="description">All Books Collection - Embark on a Journey of Imagination and Learning.
                            Whether you're a curious beginner or an avid reader, our books will transport you to new
                            realms of imagination and enlightenment. Start your literary journey today and embrace the
                            magic of reading. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
        <!-- Start Course Top  -->
        <div class="rbt-course-top-wrapper mt--40">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-5 col-md-12">
                        <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                            <div class="rbt-short-item switch-layout-container">
                                <ul class="course-switch-layout">
                                    <li class="course-switch-item"><button class="rbt-grid-view active"
                                            title="Grid Layout"><i class="feather-grid"></i> <span
                                                class="text">Grid</span></button></li>
                                    <li class="course-switch-item"><button class="rbt-list-view" title="List Layout"><i
                                                class="feather-list"></i> <span class="text">List</span></button></li>
                                </ul>
                            </div>
                            <div class="rbt-short-item">
                                <span class="course-index">Showing 1-9 of 19 results</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div
                            class="rbt-sorting-list d-flex flex-wrap align-items-end justify-content-start justify-content-lg-end">
                            <div class="rbt-short-item">
                                <form action="#" class="rbt-search-style me-0">
                                    <input type="text" placeholder="Search Your Book..">
                                    <button type="submit" class="rbt-search-btn rbt-round-btn">
                                        <i class="feather-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="rbt-short-item">
                                <div class="filter-select">
                                    <span class="select-label d-block">Short By</span>
                                    <div class="filter-select rbt-modern-select search-by-category">
                                        <select data-size="7">
                                            <option>Default</option>
                                            <option>Latest</option>
                                            <option>Popularity</option>
                                            <option>Trending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt--60">
                        <ul class="rbt-portfolio-filter filter-tab-button justify-content-start nav nav-tabs"
                            id="rbt-myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                    type="button" role="tab" aria-controls="all" aria-selected="true"><span
                                        class="filter-text">All
                                        Books</span> <span class="course-number">{{ $allbooks_count }}</span></button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button"
                                    role="tab" aria-controls="featured" aria-selected="false"><span
                                        class="filter-text">Featured</span> <span
                                        class="course-number">02</span></button>
                            </li> --}}
                            {{-- <li class="nav-item" role="presentation">
                                <button id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button"
                                    role="tab" aria-controls="popular" aria-selected="false"><span
                                        class="filter-text">Popular</span> <span
                                        class="course-number">05</span></button>
                            </li> --}}
                            {{-- <li class="nav-item" role="presentation">
                                <button id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button"
                                    role="tab" aria-controls="trending" aria-selected="false"><span
                                        class="filter-text">Trending</span> <span
                                        class="course-number">03</span></button>
                            </li> --}}
                            <li class="nav-item" role="presentation">
                                <button id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button"
                                    role="tab" aria-controls="latest" aria-selected="false"><span
                                        class="filter-text">Latest</span> <span class="course-number">{{ $latestbooks_count }}</span></button>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Course Top  -->
    </div>
</div>

<div class="rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <!-- Start Card Area -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="rbt-myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="rbt-course-grid-column">

                            <!-- Start Single Course  -->
                            @foreach ($allbooks as $all)
                               
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        @guest
                                        <a href="{{ route('book.select', ['book'=> $all->title,'id'=> $all->id]) }}">
                                        @endguest
                                        @auth
                                        <a href="{{ route('student.book.select', ['book'=> $all->title,'id'=> $all->id]) }}">
                                        @endauth
                                            @if ($all->details)
                                            <img src="{{ asset("storage/app/".$all->details->cover_image) }}"
                                                alt="Card image">
                                            @endif
                                            {{-- <div class="rbt-badge-3 bg-white">
                                                <span>-40%</span>
                                                <span>Off</span>
                                            </div> --}}
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
                                        @auth
                                        <h4 class="rbt-card-title"><a href="{{ route('student.book.select', ['book'=> $all->title,'id'=> $all->id]) }}">{{ $all->title }}</a>
                                        </h4>
                                        @endauth
                                        @guest
                                        <h4 class="rbt-card-title"><a href="{{ route('book.select', ['book'=> $all->title,'id'=> $all->id]) }}">{{ $all->title }}</a>
                                        </h4>
                                        @endguest

                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                            <!-- <li><i class="feather-users"></i>50 Students</li> -->
                                        </ul>
                                        @php
                                            $t = str_replace('<p>','', $all->book_summary);
                                            $tt = str_replace('</p>','', $t);
                                        @endphp
                                        <p class="rbt-card-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">{{ $tt }}</p>
                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                Author <a href="#author">{{ $all->author }}</a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">
                                            @guest
                                            <a class="rbt-btn-link" href="{{ route('book.select', ['book'=> $all->title,'id'=> $all->id]) }}">Learn
                                                More<i class="feather-arrow-right"></i></a>    
                                            @endguest
                                            @auth
                                            <a class="rbt-btn-link" href="{{ route('student.book.select', ['book'=> $all->title,'id'=> $all->id]) }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            

                        </div>
                    </div>
                    <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <div class="rbt-course-grid-column">

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-05.jpg')}}" alt="Card image">
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
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Officia, officiis?</p>
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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-06.jpg')}}" alt="Card image">
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
                                                <span class="rating-count"> (5 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>8 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur, adipisicing
                                            elit. Quidem, quas.</p>

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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                        </div>
                    </div>
                    <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                        <div class="rbt-course-grid-column">
                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-02.jpg')}}" alt="Card image">
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
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                        </ul>

                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Quasi, explicabo?</p>
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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-03.jpg')}}" alt="Card image">
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
                                                <span class="rating-count"> (5 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum, dolor sit
                                                amet consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>8 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Repellat, soluta?</p>

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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-04.jpg')}}" alt="Card image">
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

                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>20 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur, adipisicing
                                            elit. Vel, error.</p>
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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-05.jpg')}}" alt="Card image">
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
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Optio, itaque.</p>
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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-06.jpg')}}" alt="Card image">
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
                                                <span class="rating-count"> (5 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit
                                                amet, consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>8 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit. Quis, atque.</p>

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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                        <div class="rbt-course-grid-column">
                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-02.jpg')}}" alt="Card image">
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
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                        </ul>

                                        <p class="rbt-card-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Voluptatum, architecto!</p>
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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-03.jpg')}}" alt="Card image">
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
                                                <span class="rating-count"> (5 Reviews)</span>
                                            </div>
                                            <div class="rbt-bookmark-btn">
                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                        class="feather-bookmark"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit,
                                                amet consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>8 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Amet, nostrum.</p>

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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('student.mybook') }}">
                                            <img src="{{ asset('assets/images/course/language-academy-04.jpg')}}" alt="Card image">
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

                                        <h4 class="rbt-card-title"><a href="{{ route('student.mybook') }}">Lorem ipsum dolor sit amet
                                                consectetur adipisicing.</a>
                                        </h4>
                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>20 Lessons</li>
                                        </ul>
                                        <p class="rbt-card-text">Lorem ipsum dolor sit amet consectetur, adipisicing
                                            elit. Ratione, consequuntur.</p>
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
                                            <a class="rbt-btn-link" href="{{ route('student.mybook') }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                        <div class="rbt-course-grid-column">

                            <!-- Start Single Course  -->
                            @foreach ($latestbooks as $late)
                               
                            <div class="course-grid-3">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        @guest
                                        <a href="{{ route('book.select', ['book'=> $late->title,'id'=> $late->id]) }}">
                                        @endguest
                                        @auth
                                        <a href="{{ route('student.book.select', ['book'=> $late->title,'id'=> $late->id]) }}">
                                        @endauth
                                            @if ($late->details)
                                            <img src="{{ asset("storage/app/".$late->details->cover_image) }}"
                                                alt="Card image">
                                            @endif
                                            {{-- <div class="rbt-badge-3 bg-white">
                                                <span>-40%</span>
                                                <span>Off</span>
                                            </div> --}}
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
                                        @auth
                                        <h4 class="rbt-card-title"><a href="{{ route('student.book.select', ['book'=> $late->title,'id'=> $late->id]) }}">{{ $late->title }}</a>
                                        </h4>
                                        @endauth
                                        @guest
                                        <h4 class="rbt-card-title"><a href="{{ route('book.select', ['book'=> $late->title,'id'=> $late->id]) }}">{{ $late->title }}</a>
                                        </h4>
                                        @endguest

                                        <ul class="rbt-meta">
                                            <li><i class="feather-book"></i>12 Lessons</li>
                                            <!-- <li><i class="feather-users"></i>50 Students</li> -->
                                        </ul>
                                        @php
                                            $t = str_replace('<p>','', $late->book_summary);
                                            $tt = str_replace('</p>','', $t);
                                        @endphp
                                        <p class="rbt-card-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">{{ $tt }}</p>
                                        <div class="rbt-author-meta mb--10">
                                            <div class="rbt-avater">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                                </a>
                                            </div>
                                            <div class="rbt-author-info">
                                                Author <a href="#author">{{ $late->author }}</a>
                                            </div>
                                        </div>
                                        <div class="rbt-card-bottom">
                                            @guest
                                            <a class="rbt-btn-link" href="{{ route('book.select', ['book'=> $late->title,'id'=> $late->id]) }}">Learn
                                                More<i class="feather-arrow-right"></i></a>    
                                            @endguest
                                            @auth
                                            <a class="rbt-btn-link" href="{{ route('student.book.select', ['book'=> $late->title,'id'=> $late->id]) }}">Learn
                                                More<i class="feather-arrow-right"></i></a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="read-more-btn mt--40 justify-content-center d-flex">
            <a class="rbt-btn rbt-marquee-btn radius-round btn-gradient" href="#">
                <span data-text="Start Learning For Free">
                   Read More
                </span>
            </a>
        </div>
    </div>
</div>


<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>


@endsection
