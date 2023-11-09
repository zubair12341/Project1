@extends('main_layout.master')
@section('title', 'Wisdom Chest || Genre Books')
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
                            <li class="rbt-breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item"><a href="#genre">Genre</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ ucfirst(trans($title)) }}</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">{{ ucfirst(trans($title)) }}</h1>
                        </div>
                        <p class="description">All books displayed by the selected genre. </p>

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
                            {{-- grid and number result view remove --}}
                        </div>
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
                            @foreach ($books as $all)
                               
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
                        <div class="mt-5"></div>
                        

                    </div>                    
                </div>
            </div>
            {{-- for adding extra space --}}
            <div class="mt-5"></div>
            <div class="mt-5"></div>
            <div class="mt-5"></div>
            <div class="mt-5"></div>
            <div class="mt-5"></div>
            <div class="mt-5"></div>
            <div class="mt-5"></div> 
            <div class="mt-5"></div>
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>


@endsection
