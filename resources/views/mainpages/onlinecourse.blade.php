@extends('main_layout.master')

@section('title', 'Wisdom Chest || Online Courses')

@section('content')

<a class="close_side_menu" href="javascript:void(0);"></a>
<!-- Start breadcrumb Area -->
<div class="rbt-banner-area rbt-banner-8 bg_image--33 about-banner  variation-02">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content">
                        <h1 class="title">Online Courses</h1>
                        <p class="description has-medium-font-size mt--20">Discover a world of knowledge with our online courses. Whether you're a professional seeking career growth, an enthusiast pursuing a passion, or a lifelong learner, our diverse selection caters to your interests. Join a global community of learners and embark on a journey of self-improvement. Explore our courses today.</p>
                </div>
                @guest
                <div class="slider-btn mt--30">
                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ url('login') }}">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Log in to Start</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </span>
                    </a>
                    <a class="rbt-btn hover-icon-reverse btn-white" href="{{ url('register') }}">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Signup</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->
<!-- section-kid-learning -->
<section class="kid-learning">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6"> <img src="{{ asset('assets/images/pricing/online-class.png')}}" class="img-fluid" alt="Kid Learning"> </div>
            <div class="col-lg-6">
                <div class="learning-text">
                    <h2 class="title">About our online courses</h2>
                    <p class="description">Welcome to Wisdom Chest, where we provide top-notch learning experiences for students of all ages and backgrounds. Our team is composed of highly qualified teachers from primary and high schools in the UK, each holding the prestigious Qualified Teacher Status (QTS). With their expertise in English teaching, English literature, as well as GCSE and A-Level subjects, we are committed to providing a standard of education that meets our students' needs. Our lessons are designed to cover a broad range of books that cater to students from kindergarten to high school with personalized attention given at a low teacher-student ratio of no more than 1:3.</p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="learning-text">
                    <h2 class="title">Highlights of the online courses</h2>
                    
                    <p class="description">We understand the importance of flexibility and convenience, we assure you that our lessons can be rescheduled. We also prioritize continuous improvement by providing after-lesson comments and homework marking. We strive for adaptability by ensuring we maintain suitable difficulty levels consistently. At Wisdom Chest, fostering a global reading community is crucial, therefore, our students can communicate and learn from one another regardless of territorial or cultural backgrounds. Our recorded lessons are available for download so that learners can revisit concepts at their own pace without any limitations. </p>
                    <p class="description">Join us at Wisdom Chest's Courses today! Here you'll find an treasure of knowledge supported by qualified teachers, interactive lessons, and a global community of learners who share your passion for literature and language.</p>
                </div>
            </div>
            <div class="col-lg-6"> <img src="{{ asset('assets/images/pricing/classes-raising-hand.png')}}" class="img-fluid" alt="Kid Learning"> </div>
            <div class="w-100 mt-5"></div>
            <div class="col-lg-12 onlineSpeaking">
                <div class="raising-text section-title">
                <span class="subtitle bg-secondary-opacity">Online Speaking Classes</span>
                    <h2 class="title">Introducing Wisdom Chest's Online Speaking Classes <br> where language comes to life!</h2>
                    <p class="description">Are you looking to sharpen your speaking skills and enhance your language abilities? Look no further than Wisdom Chest's Online Speaking Classes! Our immersive experience is tailored to meet the needs of learners of all ages and abilities, with engaging topics that will keep you stimulated and on the edge of your seat.</p>
                </div>
            </div>
            <!--<div class="col-lg-6"> <img src=".assets/images/pricing/classes-raising-hand.png" class="img-fluid" alt="Kid raising hand"> </div>-->
            
        
        
        </div>
    </div>
</section>
<!-- section-kid-learning End -->
<!-- book-online-favourted -->
<section class="vector-and-detail">
    <div class="container">
        <div class="row text-light">
            <div class="col-lg-3">
                <div class="zero-eng-box">
                    <div class="zero-heading">
                        <h5 class="title">Zero-English Beginner</h5>
                        <h4 class="title">0-5</h4> </div>
                    <p class="description">Our students begin their language adventure with the Zero-English Beginner stage. Through engaging activities, phonics exercises, and supported reading, they develop a solid foundation in English. As their interest in learning English grows, so does their proficiency.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="vector-box frst-vec-rw "> <img src="{{ asset('assets/images/pricing/vector_1.png')}}" class="img-fluid" alt="Vector img 1"> </div>
            </div>
            <div class="col-lg-3">
                <div class="zero-eng-box">
                    <div class="zero-heading">
                        <h5 class="title">Reading, Comprehension &amp; Writing </h5>
                        <h4 class="title">10-15</h4> </div>
                    <p class="description">In the next stage, our students embark on a journey of deeper exploration. They immerse themselves in a diverse range of English literature, exploring various genres and expanding their literary horizons. Through daily reading, they enhance their comprehension skills, broaden their vocabulary, and learn to articulate their thoughts through writing with greater independence and accuracy.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="vector-box frst-vec-rw "> <img src="{{ asset('assets/images/pricing/vector_2.png')}}" class="img-fluid" alt="Vector img 2"> </div>
            </div>
            <div class="w-100 mt-4"></div>
            <div class="col-lg-3">
                <div class="vector-box"> <img src="{{ asset('assets/images/pricing/vector_3.png')}}" class="img-fluid" alt="Vector img 3"> </div>
            </div>
            <div class="col-lg-3">
                <div class="sec-rw-box">
                    <div class="zero-heading">
                        <h5 class="title">Oxford Reading Tree </h5>
                        <h4 class="title">6-11</h4> </div>
                    <p class="description">Once our students have grasped the basics, they progress to the Oxford Reading Tree stage. Here, they dive into captivating stories and informational texts, expanding their vocabulary and deepening their comprehension skills. Daily reading and listening sessions, along with regular writing practice, enhance their fluency and expression.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="vector-box "> <img src="{{ asset('assets/images/pricing/vector_4.png')}}" class="img-fluid" alt="Vector img 4"> </div>
            </div>
            <div class="col-lg-3">
                <div class="sec-rw-box lst-box">
                    <div class="zero-heading">
                        <h5 class="title">English Literature</h5>
                        <h4 class="title">13-17</h4> </div>
                    <p class="description">At the pinnacle of their language journey, our students reach the English Literature stage. Here, they delve into the profound world of classic and contemporary literary works. They analyze texts, appreciate the artistry of writing, dissect themes, and develop critical thinking skills. Through in-depth study, they learn to craft persuasive and insightful literary essays, showcasing their mastery of the English language.</p>
                </div>
            </div>
            <div class="col-lg-12 mt--30 text-center">
                <p class="description text-dark">Our classes are led by native English teachers who prioritize fluency development and mastery of natural speech patterns. With real-world scenarios and practical applications of English, you'll gain confidence in expressing yourself authentically in any situation. Dive into a multicultural environment where you'll connect with students from diverse backgrounds, enriching your language journey. Our experienced teachers provide personalized guidance and feedback to ensure that you make steady progress towards your goals.</p>
                <p class="description text-dark">Join us at Wisdom Chest's Online Speaking Classes for a transformative language adventure that will allow you to let your voice be heard, make global connections, and take your speaking skills to the next level!</p>
            </div>
        </div>
    </div>
</section>
<!-- book-online-favourted End-->
<!-- package-start -->
<section id="services-packge-sec">
    <div class="container-fluid">
        <div class="services-mn-txt" data-aos="fade-down">
            <h2>Courses</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, suscipit. </p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Tabs with Background on Card -->
                <div class="card">
                    <div class="card-header d-none">
                        <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#Price-1" role="tab">Price Tab 1</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Price-2" role="tab">Price Tab 2</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Price-3" role="tab">Price Tab 3</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Price-4" role="tab">Price Tab 4</a> </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="Price-1" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($course as $cour)
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">{{ $cour->title }}</h4> <span>${{ $cour->price }}<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        @php
                                                           $st = str_replace('<p>','',$cour->summary);
                                                           $ss = str_replace('</p>','',$st);
                                                        @endphp
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Age Range: {{ $cour->age_range }}</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Summary: {{ $ss }}</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Teacher: {{ $cour->teacher }}</li>
                                                    {{-- <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li> --}}
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/best-seller.webp')}}" class="tag-serv" alt="top rated tag">
                                                <h4 class="title">Level 4</h4> <span>$699<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Price-2" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">Level 1</h4> <span>$129<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/tag-1.png')}}" class="tag-serv" alt="popular tag">
                                                <h4 class="title">Level 2</h4> <span>$149<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">Level 3</h4> <span>$399 <small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/tag-2.png')}}" class="tag-serv" alt="top rated tag">
                                                <h4 class="title">Level 4</h4> <span>$699<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Price-3" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">Level 1</h4> <span>$129<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/tag-1.png')}}" class="tag-serv" alt="popular tag">
                                                <h4 class="title">Level 2</h4> <span>$149<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">Level 3</h4> <span>$399 <small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/tag-2.png')}}" class="tag-serv" alt="top rated tag">
                                                <h4 class="title">Level 4</h4> <span>$699<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Price-4" role="tabpanel">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">Level 1</h4> <span>$129<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/tag-1.png')}}" class="tag-serv" alt="popular tag">
                                                <h4 class="title">Level 2</h4> <span>$149<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card">
                                                <h4 class="title">Level 3</h4> <span>$399 <small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="pack-card"> <img src="{{ asset('assets/images/pricing/tag-2.png')}}" class="tag-serv" alt="top rated tag">
                                                <h4 class="title">Level 4</h4> <span>$699<small>/Month</small></span>
                                                <ul class="serv-pr-detail">
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                    <li>
                                                        <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#fff" style="width:20px;height:20px"></lord-icon>Lorem ipsum dolor sit.</li>
                                                </ul> <a href="#contact-sec" class="btn-1">Get Started</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tabs on plain Card -->
            </div>
        </div>
    </div>
</section>
<!-- package-End -->


@endsection
