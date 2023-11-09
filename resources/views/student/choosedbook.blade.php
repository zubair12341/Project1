@extends('layout2.masters')
@section('title', 'Wisdom Chest || '.$title)
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@section('content')

<a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
        <div class="breadcrumb-inner">
            <img src="{{ asset('assets/images/bg/bg-image-10.jpg')}}" alt="Education Images">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content text-start">
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item"><a href="{{ route('books') }}">Books</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Books Details</li>
                        </ul>
                        @foreach ($bookk as $item)
                            @php
                                $id = $item->id;
                            @endphp
                        <h2 class="title">{{ $item->title }}</h2>
                        @php
                            $t = str_replace('<p>', '', $item->book_summary);
                            $t = str_replace('</p>', '', $t);
                        @endphp
                        <p class="description" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">{{ $t }}</p>

                        <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">

                            <div class="feature-sin best-seller-badge">
                                <span class="rbt-badge-2">
                                    <span class="image"><img src="{{ asset('assets/images/icons/card-icon-1.png')}}"
                                            alt="Best Seller Icon"></span> Top Rated
                                </span>
                            </div>

                            <div class="feature-sin rating">
                                <a href="#">4.8</a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>

                            <div class="feature-sin total-rating">
                                <a class="rbt-badge-4" href="#">215,475 rating</a>
                            </div>

                            <div class="feature-sin total-student">
                                <span>616,029 readers</span>
                            </div>

                        </div>

                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="{{ asset('assets/images/client/avatar-02.png')}}" alt="Sophia Jaymes">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                Author <a href="#autor"><b>{{ $item->author }}</b></a>
                            </div>
                        </div>

                        <ul class="rbt-meta">
                            <li><i class="feather-calendar"></i>Last updated {{ $item->updated_at->format('F d, Y') }}</li>
                            <li><i class="feather-globe"></i>English</li>
                            <li><i class="feather-award"></i>
                            @if($check != null)

                            @else
                            <a class="rbt-btn btn-sm" href="{{ route('add.list', ['id' =>$id ]) }}">Add Book to List&nbsp;>
                            </a>
                            @endif
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-course-details-area ptb--60">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-12">
                    <div class="course-details-content">
                        <div class="rbt-course-feature-box rbt-shadow-box thuumbnail">
                            @if ($item->details)
                                <img src="{{ asset("storage/app/".$item->details->cover_image) }}"
                                    alt="Card image">
                            @endif
                        </div>

                        <div class="rbt-inner-onepage-navigation sticky-top mt--30">
                            <nav class="mainmenu-nav onepagenav">
                                <ul class="mainmenu">
                                    <li class="current">
                                        <a href="#overview">Overview</a>
                                    </li>
                                    <li>
                                        <a href="#coursecontent">Book Content</a>
                                    </li>
                                    <li>
                                        <a href="#details">Details</a>
                                    </li>
                                    <li>
                                        <a href="#intructor">Author</a>
                                    </li>
                                    <li>
                                        <a href="#review">Review</a>
                                    </li>
                                    <li>
                                        <a href="#vocabulary">Vocabulary</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more" id="overview">
                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Book Overview</h4>
                                </div>
                                <p>{{ $t }}</p>
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                        <!-- End Course Feature Box  -->

                        <!-- Start Course Content  -->
                        <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30" id="coursecontent">
                            <div class="rbt-course-feature-inner">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Book Content</h4>
                                </div>
                                <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                    <div class="accordion" id="accordionExampleb2">

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
                                                    Book Videos
                                                </button>
                                            </h2>
                                            <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        <li>
                                                            {{-- <a href="{{ route('student.show.content', ['book' => $item->title, 'id' => $item->id ]) }}"> --}}
                                                               <a href="" data-bs-toggle="modal" data-bs-target="#addtList">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">Introduction Video</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    @if ($item->details)
                                                                    <span class="min-lable" id="videoDuration">
                                                                     @endif</span>
                                                                    <span class="rbt-badge variation-03 bg-primary-opacity"><i class="feather-eye"></i> Preview</span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        @if($item->videos)
                                                        @foreach ($item->videos as $val)
                                                        <li>
                                                            {{-- <a href="{{ route('student.show.content', ['book'=> $item->title, 'id'=> $item->id]) }}"> --}}
                                                            <a href="" data-bs-toggle="modal" data-bs-target="#addtList">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                        class="text">{{ $val->video_title }}</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="min-lable" id="videoDurations_{{ $val->id }}"></span>
                                                                    <span class="rbt-badge variation-03 bg-primary-opacity"><i class="feather-eye"></i> Preview</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="headingTwo2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                    Book PDF (Documents)
                                                </button>
                                            </h2>
                                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">
                                                        @if ($item->content)
                                                        @foreach ($item->content as $vals)
                                                        <li>
                                                            {{-- <a href="{{ asset("storage/app/".$vals->document_file) }}" download> --}}
                                                            <a href="" data-bs-toggle="modal" data-bs-target="#addtList">
                                                                <div class="course-content-left">
                                                                    <i class="feather-file-text"></i> <span
                                                                        class="text">{{ $vals->document_name }}</span>
                                                                </div>
                                                                <div class="course-content-right">
                                                                    <span class="course-lock"><i class="feather-download"></i></span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Course Content  -->

                        <!-- Start Course Feature Box  -->
                        {{-- <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30" id="details">
                            <div class="row g-5">
                                <!-- Start Feture Box  -->
                                <div class="col-lg-6">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3 mb--20">Requirements</h4>
                                    </div>
                                    <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                        <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    </ul>
                                </div> --}}
                                <!-- End Feture Box  -->

                                <!-- Start Feture Box  -->
                                {{-- <div class="col-lg-6">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3 mb--20">Description</h4>
                                    </div>
                                    <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    <li><i class="feather-check"></i>Lorem, ipsum dolor sit amet consectetur adipisicing.</li>
                                    </ul>
                                </div>
                                <!-- End Feture Box  -->
                            </div>
                        </div> --}}
                        <!-- End Course Feature Box  -->

                        <!-- Start Intructor Area  -->
                        <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="intructor">
                            <div class="about-author border-0 pb--0 pt--0">
                                <div class="section-title mb--30">
                                    <h4 class="rbt-title-style-3">Author</h4>
                                </div>
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="#author">{{ $item->author }}</a>
                                            </h5>
                                            <ul class="rbt-meta mb--20 mt--10">
                                                <li><a href="#"><i class="feather-book"></i>{{ $total_book }} Books</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Intructor Area  -->



                        <!-- Start Vocabulary Area  -->
                        <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="vocabulary">
                            <div class="about-author border-0 pb--0 pt--0">
                                <div class="section-title mb--30">
                                    <h4 class="rbt-title-style-3">Download Vocabulary PDF</h4>
                                </div>


                                <div class="media align-items-center">
                                <div class="rbt-inner-onepage-navigation  ">
                            <nav class="mainmenu-nav onepagenav">
                                <ul class="mainmenu">
                                    <!-- on this buttons vocabulary pdfs will be download  -->
                                    @if ($item->vocabularyPdfs)
                                    @foreach ($item->vocabularyPdfs as $voc)
                                    <li class="">
                                        {{-- <a href="{{ asset("storage/app/".$voc->file_path) }}" download>{{ $voc->vocab_name }}  <i class="feather-download"></i></a> --}}
                                        <a href="" data-bs-toggle="modal" data-bs-target="#addtList">{{ $voc->vocab_name }} <i class="feather-download"></i></a>
                                    </li>
                                    @endforeach
                                    @endif


                                </ul>
                            </nav>
                        </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Vocabulary Area  -->

                        <!-- Start Edu Review List  -->
                        {{-- <div class="rbt-review-wrapper rbt-shadow-box review-wrapper mt--30" id="review">
                            <div class="course-content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Review</h4>
                                </div>
                                <div class="row g-5 align-items-center">
                                    <div class="col-lg-3">
                                        <div class="rating-box">
                                            <div class="rating-number"></div>
                                            <div class="rating">
                                                @foreach ($review as $rating)
                                                    @if ($rating->rating >= 1)
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                        </svg>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <span class="sub-title">Books Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="review-wrapper">
                                            <!-- Your other content here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <!-- End Edu Review List  -->

                        <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 has-show-more">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Featured review</h4>
                            </div>
                            <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                               @foreach ($review as $reviews)                                   
                               
                                <div class="rbt-course-review about-author">
                                    <div class="media">
                                        <div class="thumbnail">
                                            {{-- <a href="#">
                                                <img src="{{ asset('assets/images/testimonial/testimonial-8.jpg')}}" alt="Author Images">
                                            </a> --}}
                                        </div>
                                        <div class="media-body">
                                            <div class="author-info">
                                                <h5 class="title">
                                                    <a class="hover-flip-item-wrapper" href="#">{{ $reviews->user->name }}</a>
                                                </h5>
                                                <div class="rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $reviews->rating)
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        @else
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        @endif
                                                    @endfor
                                                </div>
                                                
                                            </div>
                                            <div class="content">
                                                <p class="description">{{ $reviews->comment }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{--  --}}
                        @auth
                        <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 has-show-more">
                            <h4 class="rbt-title-style-3">Add Review</h4>
                            <form action="{{ route('add.review') }}" method="post">
                                @csrf
                                <div class="course-field mb--20">
                                    <h6>Rating</h6>
                                    <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                        <div class="pro-quantity">
                                                <input
                                                    @error('rating') is-invalid @enderror
                                                    name="rating"
                                                    id="field-3"
                                                    type="number"
                                                    value="5"
                                                >
                                                @error('rating')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea id="comment" name="comment" rows="4" required></textarea>
                                </div>
                                <input type="hidden" name="bookid" value="{{ $item->id }}">
                                <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse text-center">Submit Review</button>
                            </form>
                        </div>
                        @endauth
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                            const ratingInput = document.getElementById("field-3");


                            ratingInput.addEventListener("input", function () {
                                const value = parseInt(ratingInput.value, 10);

                                if (isNaN(value)) {
                                    // Handle non-numeric input (e.g., letters)
                                    ratingInput.value = "";
                                } else if (value < 1) {
                                    ratingInput.value = "1";
                                } else if (value > 5) {
                                    ratingInput.value = "5";
                                }
                            });
                        });
                        </script>


                        {{--  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <div class="rbt-related-course-area bg-color-white pt--60 rbt-section-gapBottom">
        <div class="container">
            <div class="section-title mb--30">
                <span class="subtitle bg-primary-opacity">More Similar Books</span>
                <h4 class="title">Related Books</h4>
            </div>
            <div class="row g-5">

                <!-- Start Single Card  -->
                @foreach ($relatedBooks as $relat)

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            @if ($relat->details)
                            <a href="#">
                                <img src="{{ asset("storage/app/".$relat->details->cover_image) }}"
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
                                    <span class="rating-count"> (5 Reviews)</span>
                                </div>
                                {{-- <div class="rbt-bookmark-btn">
                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                            class="feather-bookmark"></i></a>
                                </div> --}}
                            </div>
                            <h4 class="rbt-card-title"><a href="#">{{ $relat->title }}</a>
                            </h4>
                            @php
                                $t = str_replace('<p>','', $relat->book_summary);
                                $tt = str_replace('</p>','', $t);
                            @endphp
                            <p class="rbt-card-text" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">{{ $tt }}</p>

                            <div class="rbt-author-meta mb--20">
                                <div class="rbt-author-info">
                                    Author <a href="">{{ $relat->author }}</a>
                                </div>
                            </div>
                            <div class="rbt-card-bottom">
                                <a class="rbt-btn-link" href="#">Learn
                                    More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

<div class="modal fade col-5" id="addtList" tabindex="-1" aria-labelledby="editAnnouncementLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 10px!important;padding: 0px 10px 10px 3px;!important">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="modal-title mb--20" id="editAnnouncementLabel">Add Book to List, To Preview the Book</h5>
                                    <div class="form-content">
                                        <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y pull-right" href="{{ route('add.list', ['id' =>$id ]) }}">Add to List</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
<script>
    // Get a reference to the video element
    var video = document.createElement('video');
    video.src = "{{ asset('storage/app/'.$item->details->intro_video) }}";

    // Wait for the video's metadata to load
    video.addEventListener('loadedmetadata', function() {
        // Get the video duration in seconds
        var durationInSeconds = video.duration;

        // Calculate the duration in minutes
        var durationInMinutes = Math.floor(durationInSeconds / 60);

        // Update the element with the duration
        var durationElement = document.getElementById('videoDuration');
        durationElement.textContent =  durationInMinutes + ' min';
    });
</script>

<script>
