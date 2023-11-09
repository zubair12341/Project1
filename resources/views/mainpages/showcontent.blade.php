<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wisdom Chest | Book | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
    <!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png')}}">
<style>
    .custom-video-player {
    position: relative;
    text-align: center;
}

 #myVideo {
    width: 100%;
 }

  .auth-overlay {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    z-index: 9999;
 }

</style>
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sal.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/euclid-circulara.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnify.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnigy-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                <div class="rbt-course-feature-inner rbt-search-activation">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">Book Content</h4>
                    </div>

                    <div class="lesson-search-wrapper">
                        <form action="#" class="rbt-search-style-1">
                            <input class="rbt-search-active" type="text" placeholder="Search Lesson">
                            <button class="search-btn disabled"><i class="feather-search"></i></button>
                        </form>
                    </div>

                    <hr class="mt--10">

                    <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">


                        <div class="accordion" id="accordionExampleb2">

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo1" aria-controls="collapseTwo1">
                                        Book Videos<span class="rbt-badge-5 ml--10"</span>
                                    </button>
                                </h2>
                                @foreach ($bookk as $item)
                                    
                                <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @if ($item->details)
                                            <li>
                                                <a href="#" class="play-video2" data-video-path="{{ asset('public/storage/'. $item->details['intro_video']) }}" data-video-id="{{ $item->id }}">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">Introduction Video</span>
                                                    </div>
                                                    
                                                    
                                                    <div class="course-content-right">
                                                        <span class="min-lable" id="videoDuration"></span>
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                            @endif

                                            @if($item->videos)
                                            @foreach ($item->videos as $val)
                                            <li>
                                                <a href="#" class="play-video" data-video-path="{{ asset('public/storage/'. $val->video) }}" data-video-id="{{ $val->id }}">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">{{ $val->video_title }}</span>
                                                    </div>
                                                    
                                                    <div class="course-content-right">
                                                        <span class="min-lable" id="videoDurations_{{ $val->id }}"></span>
                                                        <span class="rbt-check"><i class="feather-lock"></i></span>
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
                                <h2 class="accordion-header card-header" id="headingTwo4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo4" aria-controls="collapseTwo4">
                                        Book pdfs
                                    </button>
                                </h2>
                                <div id="collapseTwo4" class="accordion-collapse collapse show" aria-labelledby="headingTwo4">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @if ($item->content)
                                            @foreach ($item->content as $vals)
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#registerFirst">
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">{{ $vals->document_name }}
                                                    </span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <i class="feather-lock"></i>
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapseTwo2" aria-controls="collapseTwo2">
                                         Quiz
                                    </button>
                                </h2>
                                <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @if ($item->quiz)
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#registerFirst">
                                                    <div class="course-content-left">
                                                        <i class="feather-help-circle"></i> <span class="text"> {{ $quiz_title }}</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check unread"><i class="feather-lock"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                            @endif
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
                <div class="lesson-top-bar">
                    <div class="lesson-top-left">
                        <div class="rbt-lesson-toggle">
                            <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
                        </div> 
                        <h5>{{ $item->title }}</h5>
                    </div>
                    <div class="lesson-top-right">
                        <div class="rbt-btn-close">
                            <a href="{{ route('book.select', ['book'=> $item->title, 'id' => $item->id]) }}" title="Go Back to Book" class="rbt-round-btn"><i class="feather-x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="inner">

                    <div class="custom-video-player">
                        <video id="myVideo" controls>
                            <source src="{{ asset('public/storage/'. $item->details->intro_video) }}" type="video/mp4" />
                        </video>
                        <div class="auth-overlay" id="authOverlay">
                            <p>Please register or log in to continue watching.</p>
                            <p>
                                <button class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y"><a style="text-decoration: none; color: #fff;" href="{{ url('login') }}?return_url={{ url()->current() }}">Login</a></button>&nbsp;&nbsp;&nbsp;<button class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y"><a style="text-decoration: none; color: #fff;" href="{{ url('register') }}?return_url={{ url()->current() }}">Register</a></button>
                            </p>

                        </div>
                    </div>

                    {{-- <div class="content">
                        <div class="section-title">
                            <h4>About Lesson</h4>
                            <p>Let us analyze the greatest hits of the past and learn what makes these tracks so
                                special. </p>
                        </div> --}}
                    </div>
                </div>

                {{-- <div class="bg-color-extra2 ptb--15 overflow-hidden">
                    <div class="rbt-button-group">

                        <a class="rbt-btn icon-hover icon-hover-left btn-md bg-primary-opacity" href="#">
                            <span class="btn-icon"><i class="feather-arrow-left"></i></span>
                            <span class="btn-text">Previous</span>
                        </a>

                        <a class="rbt-btn icon-hover btn-md" href="#">
                            <span class="btn-text">Next</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>

                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    @endforeach
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <div class="modal fade col-5" id="registerFirst" tabindex="-1" aria-labelledby="editAnnouncementLabel" aria-hidden="true">
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
                                <h5 class="modal-title mb--20" id="editAnnouncementLabel">Register or Login Required</h5>
                                    <div class="form-content">
                                        <button type="" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y"><a href="{{ url('register') }}?return_url={{ url()->current() }}">Register</a> </button>
                                        <button type="" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y"><a href="{{ route('login') }}?return_url={{ url()->current() }}">Login</a> </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <!-- sal.js -->
    <script src="{{ asset('assets/js/vendor/sal.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/magnify.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/backtotop.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/isotop.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/imageloaded.js')}}"></script>

    <script src="{{ asset('assets/js/vendor/wow.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/easypie.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/magnify-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/paralax-scroll.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/paralax.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/countdown.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/plyr.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
<div class="modal fade col-5" id="registerFirst" tabindex="-1" aria-labelledby="editAnnouncementLabel" aria-hidden="true">
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
                            <h5 class="modal-title mb--20" id="editAnnouncementLabel">Register or Login Required</h5>
                                <div class="form-content">
                                    <button type="" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Register</button>
                                    <button type="" class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Login</button>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    var video = document.createElement('video');
    video.src = "{{ asset('public/storage/'. $item->details->intro_video) }}";

    video.addEventListener('loadedmetadata', function() {
        var durationInSeconds = video.duration;

        var durationInMinutes = Math.floor(durationInSeconds / 60);

        var durationElement = document.getElementById('videoDuration');
        durationElement.textContent =  durationInMinutes + ' min';
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        @foreach ($item->videos as $val)
            var videos_{{ $val->id }} = document.createElement('video');
            videos_{{ $val->id }}.src = "{{ asset('public/storage/'. $val->video) }}";

            videos_{{ $val->id }}.addEventListener('loadedmetadata', function() {
                var durationInSecondss = videos_{{ $val->id }}.duration;

                var durationInMinutess = Math.floor(durationInSecondss / 60);

                var durationElement_{{ $val->id }} = document.getElementById('videoDurations_{{ $val->id }}');
                durationElement_{{ $val->id }}.textContent = durationInMinutess + ' min';
            });
        @endforeach
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.getElementById('myVideo');
        const authOverlay = document.getElementById('authOverlay');
        const player = new Plyr(video, {
            // Customize Plyr options as needed
        });

        const maxDuration = 10;
        player.on('timeupdate', function (event) {
            const currentTime = player.currentTime;
            if (currentTime >= maxDuration) {
                player.pause();

                authOverlay.style.display = 'block';
                video.style.opacity = 0;
                video
                // Show the authentication modal
                // $('#registerFirst').modal('show');
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
       // Get references to the video player and video list
       const videoPlayer = document.getElementById('myVideo');
       const videoList = document.querySelectorAll('.play-video');
   
       // Add a click event listener to each video title
       videoList.forEach((videoItem) => {
           videoItem.addEventListener('click', function (event) {
               event.preventDefault();
               authOverlay.style.display = 'none';
   
               // Get the clicked video's path and ID
               const videoPath = videoItem.getAttribute('data-video-path');
               const videoId = videoItem.getAttribute('data-video-id');
   
               // Set the video source and play the video
               videoPlayer.src = videoPath;
               videoPlayer.load();
               videoPlayer.play();
               videoPlayer.style.opacity = 1;
   
               // Optionally, update video duration for the clicked video
               const videoDurationElement = document.getElementById(`videoDuration_${videoId}`);
               if (videoDurationElement) {
                   // You can update the duration using JavaScript if needed
               }
           
       });
    });
});
   </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Get references to the video player and video link
    const singleVideoPlayer = document.getElementById('myVideo');
    const playVideoLink = document.querySelector('.play-video2');

    // Add a click event listener to the playVideoLink
    playVideoLink.addEventListener('click', function (event) {
        event.preventDefault();
        authOverlay.style.display = 'none';

        // Get the video path from the data-video-path attribute
        const videoPath = playVideoLink.getAttribute('data-video-path');

        // Set the video source and play the video
        singleVideoPlayer.src = videoPath;
        singleVideoPlayer.load();
        singleVideoPlayer.play();
        singleVideoPlayer.style.opacity = 1;

        // Optionally, update video duration for the single video
        const videoDurationElement = document.getElementById('videoDuration');
        if (videoDurationElement) {
            // You can update the duration using JavaScript if needed
        }
    });
});

</script>


