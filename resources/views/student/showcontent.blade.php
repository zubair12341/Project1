<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wisdom Chest | Book | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
 #noteTextarea{
    font:20px 'Gloria Hallelujah', cursive; 
    line-height:1.5;
    border:0;
    border-radius:3px;
    background: linear-gradient(#F9EFAF, #F7E98D);
    box-shadow:0 4px 6px rgba(0,0,0,0.1);
    overflow:hidden;
    transition:box-shadow 0.5s ease;
    font-smoothing:subpixel-antialiased;
    max-width:820px;
    max-height:650px; height: 200px;
 }

 .ress{
    padding: 15px;
    font:20px 'Gloria Hallelujah', cursive; 
    line-height:1.5;
    border:0;
    border-radius:3px;
    background: linear-gradient(#F9EFAF, #F7E98D);
    box-shadow:0 4px 6px rgba(0,0,0,0.1);
    overflow:hidden;
    transition:box-shadow 0.5s ease;
    font-smoothing:subpixel-antialiased;
    /* max-width:820px;
    max-height:650px; height: 200px; */
 }

 section.node .col-sm-4 {
    margin-left: 10px!important;
    margin-right: 10px!important;
    margin-bottom: 20px!important;
    width: 31%;
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
                                        Book Videos<span class="rbt-badge-5 ml--10"></span>
                                    </button>
                                </h2>
                                @foreach ($bookk as $item)
                                <div id="book_id" data-bookid="{{ $item->id }}"></div>
                                <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @if ($item->details)
                                            <li>
                                                <a href="#" id="videobutt" class="play-video2" data-video-path="{{ asset("storage/app/".$item->details['intro_video']) }}" data-video-id="{{ $item->id }}">
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
                                                <a href="#" id="videobutt2" class="play-video" data-video-path="{{ asset("storage/app/".$val->video) }}" data-video-id="{{ $val->id }}">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> <span class="text">{{ $val->video_title }}</span>
                                                    </div>
                                                    
                                                    <div class="course-content-right">
                                                        <span class="min-lable" id="videoDurations_{{ $val->id }}"></span>
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
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
                                                <a href="{{ asset("storage/app/".$vals->document_file) }}" download>
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">{{ $vals->document_name }}
                                                    </span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <i class="feather-download"></i>
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
                                <h2 class="accordion-header card-header" id="headingTwo7">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo5" aria-controls="collapseTwo5">
                                        Book Vocabulary
                                    </button>
                                </h2>
                                <div id="collapseTwo5" class="accordion-collapse collapse show" aria-labelledby="headingTwo7">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @if ($item->content)
                                            @foreach ($item->vocabularyPdfs as $voc)
                                            <li>
                                                <a href="{{ asset("storage/app/".$voc->file_path) }}" download>
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">{{ $voc->vocab_name }}
                                                    </span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <i class="feather-download"></i>
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
                                                <a href="#" id="quizbutt">
                                                    <div class="course-content-left">
                                                        <i class="feather-help-circle"></i> <span class="text"> {{ $quiz_title }}</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" id="quizbutt_res">
                                                    <div class="course-content-left">
                                                        <i class="feather-help-circle"></i> <span class="text"> Quiz Result</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                            @endif
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- notes --}}
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapseTwo3" aria-controls="collapseTwo3">
                                         Create Notes
                                    </button>
                                </h2>
                                <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            <li>
                                                <textarea id="noteTextarea" placeholder="Take notes..."></textarea>
                                            </li>
                                            <li>
                                                <button id="saveNoteButton" class="rbt rbt-btn btn btn-primary">Save Note</button>
                                            </li>
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
                            <a href="{{ route('student.books') }}" title="Go Back to My Books" class="rbt-round-btn"><i class="feather-x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="inner" id="viddiv">

                    <div class="custom-video-player">
                        <video id="myVideo" controls>
                            <source src="{{ asset("storage/app/".$item->details->intro_video) }}" type="video/mp4" />
                        </video>
                        <div class="auth-overlay" id="authOverlay">
                            <p>Please register or log in to continue watching.</p>
                            <p>
                                <button class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Login</button>&nbsp;&nbsp;&nbsp;<button class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y">Register</button>
                            </p>

                        </div>
                    </div>
                    <div class="content">
                        <section class="node">
                            <div class="container">
                                <h4>Book Saved Notes</h4>
                                <div class="row" id="savedNotes">
                                    <!-- Display saved notes here -->
                                </div>
                        </div>
                    </section>
                    </div>

                    
                </div>

                <div class="inner" id="results" style="display: none">
                    <div class="content">
                        <div class="section-title">
                            <p class="mb--10">Quiz</p>
                            <h5>{{ $quiz_title }}</h5>
                        </div>

                        <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                            <table class="rbt-table table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Quiz</th>
                                        <th>Total Questions</th>
                                        <th>Obtain Score</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody id="resultdiv">
                                    


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="inner" id="inn" style="display: none">
                    <div class="content">
                        @if($item->quiz)
                        @php
                            $num =1;
                        @endphp
                        <form id="quiz-form" action="{{ route('quiz.submit') }}" method="POST" class="quiz-form-wrapper">
                            <!-- Start Single Quiz  -->
                            @csrf
                            <div class="questions">
                                @foreach ($item->quiz as $quizz)
                                <div class="quiz-question" id="question-{{ $quizz->id }}" style="display: {{ $quizz->id == 11 ? 'block' : 'none' }}">
                                    <div class="quize-top-meta">
                                        <div class="quize-top-left">
                                            <span>Question No: <strong>{{ $num }}/{{ $total_q }}</strong></span>
                                            <span>Attempts Allowed: <strong>No Limit</strong></span>
                                        </div>
                                        <div class="quize-top-right">
                                            <span>Time remaining: <strong>No Limit</strong></span>
                                        </div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="b_id" value="{{ $item->id }}">
                                    <h4>{{ $num }}. {{ $quizz->question }}</h4>
                                    <div class="row g-3 mt--10">
                                        <div class="col-lg-6">
                                            <p class="rbt-radio-wrapper mb--5">
                                                <input id="rbt-radio-{{ $quizz->id }}-1" name="rbt-radio-{{ $quizz->id }}" type="radio" value="{{ $quizz->option_1 }}" required>
                                                <label for="rbt-radio-{{ $quizz->id }}-1">{{ $quizz->option_1 }}</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-radio-wrapper">
                                                <input id="rbt-radio-{{ $quizz->id }}-2" name="rbt-radio-{{ $quizz->id }}" type="radio" value="{{ $quizz->option_2 }}" required>
                                                <label for="rbt-radio-{{ $quizz->id }}-2">{{ $quizz->option_2 }}</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-radio-wrapper">
                                                <input id="rbt-radio-{{ $quizz->id }}-3" name="rbt-radio-{{ $quizz->id }}" type="radio" value="{{ $quizz->option_3 }}" required>
                                                <label for="rbt-radio-{{ $quizz->id }}-3">{{ $quizz->option_3 }}</label>
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="rbt-radio-wrapper">
                                                <input id="rbt-radio-{{ $quizz->id }}-4" name="rbt-radio-{{ $quizz->id }}" type="radio" value="{{ $quizz->option_4 }}" required>
                                                <label for="rbt-radio-{{ $quizz->id }}-4">{{ $quizz->option_4 }}</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $num++
                                @endphp
                                @endforeach
                            </div>
                            <!-- Start Single Quiz  -->
                            <div class="rbt-quiz-btn-wrapper mt--30" style="display: inline-flex">
                                <button class="rbt-btn bg-primary-opacity btn-sm" id="prev-btn" type="button" disabled>Previous</button>&nbsp;
                                <button class="rbt-btn bg-primary-opacity btn-sm" id="next-btn" type="button" disabled>Next</button>&nbsp;
                                <button class="rbt-btn btn-gradient btn-sm" type="submit" id="submit-btn" style="display: none;">Submit</button>
                            </div>
                        </form>
                        

                        
                        @endif
                    
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                const nextBtn = document.getElementById('next-btn');
                                const prevBtn = document.getElementById('prev-btn');
                                const submitBtn = document.getElementById('submit-btn');
                                const questions = document.querySelectorAll('.quiz-question');
                                let currentQuestionIndex = 0;
                    
                                // Function to hide all questions
                                function hideAllQuestions() {
                                    questions.forEach((question) => {
                                        question.style.display = 'none';
                                    });
                                }
                    
                                // Show the current question
                                function showQuestion(index) {
                                    hideAllQuestions();
                                    questions[index].style.display = 'block';
                    
                                    prevBtn.disabled = index === 0;
                                    nextBtn.disabled = index === questions.length - 1;
                                    submitBtn.style.display = index === questions.length - 1 ? 'block' : 'none';
                                    nextBtn.style.display = index === questions.length - 1 ? 'none' : 'block';
                                }
                    
                                // Event listener for the "Next" button
                                nextBtn.addEventListener('click', () => {
                                    if (areRadioInputsSelected(questions[currentQuestionIndex])) {
                                        currentQuestionIndex++;
                                        showQuestion(currentQuestionIndex);
                                    }
                                });
                    
                                // Event listener for the "Previous" button
                                prevBtn.addEventListener('click', () => {
                                    currentQuestionIndex--;
                                    showQuestion(currentQuestionIndex);
                                });
                    
                                // Function to check if any radio inputs are selected in a question
                                function areRadioInputsSelected(question) {
                                    const radioInputs = question.querySelectorAll('input[type="radio"]');
                                    return Array.from(radioInputs).some((radio) => radio.checked);
                                }
                    
                                // Show the first question initially (no need to set display: block here)
                                showQuestion(currentQuestionIndex);
                            });
                        </script>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>

    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById('quiz-form');
        const submitBtn = document.getElementById('submit-btn');
        const res = document.getElementById('results');
        const pre = document.getElementById('inn');

        // 
        function loadResult() {
    // Use AJAX to fetch notes for the current lesson
    const bookIdElement = document.getElementById('book_id');
    const bookId = bookIdElement.getAttribute('data-bookid');
    const savedRes = document.getElementById('resultdiv'); // Get the tbody element where results should be inserted

    fetch(`/get-result/${bookId}`)
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                // Clear the table body before adding new rows
                savedRes.innerHTML = '';

                data.resss.forEach((res) => {
                    const stat = res.status;
                    const totalQuestions = res.total_questions; // Get total questions from the response

                    const rowClass = stat === 'Fail' ? 'danger' : 'success';

                    savedRes.innerHTML += `
                        <tr class="${rowClass}">
                            <th>${formatDate(res.created_at)}</th>
                            <td>`+{{{ $total_q }}}+`</td>
                            <td>${res.result}</td>
                            <td><span class="rbt-badge-5 bg-color-${rowClass}-opacity color-${rowClass}">${res.status}</span></td>
                        </tr>
                    `;
                    function formatDate(dateString) {
                        const options = { year: 'numeric', month: 'long', day: 'numeric' };
                        return new Date(dateString).toLocaleDateString('en-US', options);
                    }
                });
            } else {
                // Handle errors if note retrieval fails
                alert('Failed to retrieve notes.');
            }
        });
}

       loadResult();
        // 

        submitBtn.addEventListener('click', () => {
            // Serialize form data
            const formData = new FormData(form);

            // Include the book_id in the form data
            formData.append('b_id', '{{ $item->id }}'); // Use the correct syntax to get the book ID

            // Send an AJAX request
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-Token': formData.get('_token'), // Include CSRF token
                },
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response data
                if (data.score !== undefined) {
                    // Handle the user's score
                    res.style.display = 'block';
                    pre.style.display = 'none';
                    loadResult();
                    console.log('User Score:', data.score);
                    // You can display the score or perform other actions here
                } else {
                    // Handle form validation errors or other errors
                    console.log(data.score);
                    // alert('Form submission failed. Please check your inputs.');
                }
            })
            .catch(error => {
                // Handle network or other errors
                console.error('Form submission error:', error);
            });
        });
    });

    </script>
    
    
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

<script>
    var video = document.createElement('video');
    video.src = "{{ asset('storage/app/'.$item->details->intro_video) }}";

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
            videos_{{ $val->id }}.src = "{{ asset('storage/app/'.$val->video) }}";

            videos_{{ $val->id }}.addEventListener('loadedmetadata', function() {
                var durationInSecondss = videos_{{ $val->id }}.duration;

                var durationInMinutess = Math.floor(durationInSecondss / 60);

                var durationElement_{{ $val->id }} = document.getElementById('videoDurations_{{ $val->id }}');
                durationElement_{{ $val->id }}.textContent = durationInMinutess + ' min';
            });
        @endforeach
    });
</script>

{{-- <script>
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
                video
                // Show the authentication modal
                // $('#registerFirst').modal('show');
            }
        });
    });
</script> --}}

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

        // Optionally, update video duration for the single video
        const videoDurationElement = document.getElementById('videoDuration');
        if (videoDurationElement) {
            // You can update the duration using JavaScript if needed
        }
    });
 });

</script>

{{-- script for ajax --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
       const noteTextarea = document.getElementById('noteTextarea');
       const saveNoteButton = document.getElementById('saveNoteButton');
       const savedNotesDiv = document.getElementById('savedNotes');
   
       // Function to load saved notes
       function loadSavedNotes() {
           // Use AJAX to fetch notes for the current lesson
           const bookIdElement = document.getElementById('book_id');
           const bookId = bookIdElement.getAttribute('data-bookid');
   
           fetch(`/get-notes/${bookId}`)
               .then((response) => response.json())
               .then((data) => {
                   if (data.success) {
                       // Display saved notes in savedNotesDiv
                       savedNotesDiv.innerHTML = '';
                       data.notes.forEach((note) => {
                           savedNotesDiv.innerHTML += `<div class="col-sm-4 ress">${note.content}</div>`;
                       });
                   } else {
                       // Handle errors if note retrieval fails
                       alert('Failed to retrieve notes.');
                   }
               });
       }
   
       // Load saved notes when the page loads
       loadSavedNotes();
   
       const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
       const headers = new Headers({
           'Content-Type': 'application/json',
           'X-CSRF-TOKEN': csrfToken,
       });
   
       saveNoteButton.addEventListener('click', function () {
           
           const noteContent = noteTextarea.value;
           const bookIdElement = document.getElementById('book_id');
           const bookId = bookIdElement.getAttribute('data-bookid');
           
   
           // Use AJAX to save the note to the server
           fetch('/save-note', {
               method: 'POST',
               headers: headers, 
               body: JSON.stringify({ book_id: bookId, noteContent }),
           })
               .then((response) => response.json())
               .then((data) => {
                   if (data.success) {
                       // Note saved successfully, clear the textarea
                       noteTextarea.value = '';
                       // Reload saved notes
                       loadSavedNotes();
                   } else {
                       // Handle errors if note saving fails
                       alert('Failed to save note, refresh page & try again.');
                   }
               });
       });
    });
   
   
   </script>
{{-- quiz script for displaying the quiz --}}
<script>
    const quizbutton = document.getElementById('quizbutt');
    const quizbutt_res = document.getElementById('quizbutt_res');
    const videobutton = document.getElementById('videobutt');
    const videobutton2 = document.getElementById('videobutt2');
    const videoPlayer = document.getElementById('myVideo');

    const quizsection = document.getElementById('inn');
    const videosection = document.getElementById('viddiv');
    const quizresultsection =  document.getElementById('results');

    quizbutton.addEventListener('click', function () {
            quizsection.style.display = 'block';
            quizresultsection.style.display = 'none';
            videosection.style.display = 'none';
            videoPlayer.pause();
        });
    
    quizbutt_res.addEventListener('click', function(){
        quizresultsection.style.display = 'block';
        quizsection.style.display = 'none';
        videosection.style.display = 'none';
        videoPlayer.pause();
    });
    
    videobutton.addEventListener('click', function () {
            quizsection.style.display = 'none';
            quizresultsection.style.display = 'none';
            videosection.style.display = 'block';
        });

    videobutton2.addEventListener('click', function () {
            quizsection.style.display = 'none';
            quizresultsection.style.display = 'none';
            videosection.style.display = 'block';
        });


</script>

