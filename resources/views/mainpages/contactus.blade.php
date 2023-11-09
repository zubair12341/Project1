@extends('main_layout.master')

@section('title', 'Wisdom Chest || Contact Us')

@section('content')



    <div class="rbt-contact-address rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="thumbnail">
                        <!--<img class="w-100 radius-6" src="{{ asset('assets/images/about/contact.jpg')}}" alt="Contact Images">-->
                        <div class="headings">
                              <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">REACH OUT</span>
                        </div>
                        <h3 class="title">Join the Wisdom Chest Community</h3>
                        <p>We are thrilled to connect with you and welcome you to the Wisdom Chest community. Whether you have a question, need assistance, or simply want to share your thoughts, we are here to support you every step of the way.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <form id="contact-form" method="POST" action="http://rainbowit.net/html/Wisdom Chest /mail.php" class="rainbow-dynamic-form max-width-auto">
                            <div class="form-group">
                                <input name="contact-name" id="contact-name" type="text">
                                <label>Name</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="contact-phone" type="email">
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject">
                                <label>Your Subject</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <textarea name="contact-message" id="contact-message"></textarea>
                                <label>Message</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-submit-group">
                                <button name="submit" type="submit" id="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">GET IT NOW</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-0 col-lg-2">
                    
                </div>
                <div class="col-md-0 col-lg-2">
                    
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Contact Phone Number</h4>
                            <p><a href="tel:+444555666777">+444 555 666 777</a></p>
                            <p><a href="tel:+222222222333">+222 222 222 333</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Email Address</h4>
                            <p><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                            <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Location</h4>
                            <p>Lorem ipsum dolor sit amet consectetur<br>,  example 54786</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-google-map bg-color-white rbt-section-gapTop">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" height="600" style="border:0"></iframe>
    </div>

@endsection
