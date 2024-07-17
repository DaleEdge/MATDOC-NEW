@extends('frontend.layouts.front_app')
@section('content')

        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <img class="shape-4" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
            <img class="shape-5" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">

            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Contact</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us </li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->

<div class="section section-padding-02">
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">

                        <!-- Contact Info Wrapper Start -->
                        <div class="contact-info-wrapper">
                            <div class="row gx-0">
                                <div class="col-md-4">
                                    <!-- Single Contact Info Start -->
                                    <div class="single-contact-info">
                                        <div class="info-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Call Us</h5>
                                            <p><a href="tel:+91-7903534993">+91-7903534993</a></p>
                                            <p><a href="tel:+91-8596955212">+91-8596955212</a></p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info End -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Single Contact Info Start -->
                                    <div class="single-contact-info">
                                        <div class="info-icon">
                                            <i class="flaticon-mail"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Our Mail</h5>
                                            <p><a href="careermedia365@gmail.com">careermedia365@gmail.com</a></p>
                                            <p><a href="owlsytechnologies@gmail.com">owlsytechnologies@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info End -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Single Contact Info Start -->
                                    <div class="single-contact-info">
                                        <div class="info-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Delhi Office</h5>
                                            <p>B-12, Basement, Sector 2, Noida, 201301, Uttar Pradesh</p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info End -->
                                </div>
                            </div>
                        </div>
                        <!-- Contact Info Wrapper End -->

                    </div>
                </div>
            </div>
        </div>
 <!-- Contact Form Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <!-- Section Title Start -->
                 
                                
                        <div class="section-title text-center">
                            <h2 class="title"><span>Get Support from our Team</span> </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form-wrapper">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Your Name*">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="email" class="form-control" placeholder="Your Email*">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Your Phone*">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Subject*">
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <textarea class="form-control" placeholder="Write A Massage*"></textarea>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form text-center mb-3">
                                            <button class="btn btn-primary btn-hover-heading-color">Send Message</button>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->

                    </div>
                    <div class="col-lg-4 mb-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115408.23982816288!2d82.92106847304923!3d25.3207460997825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2db76febcf4d%3A0x68131710853ff0b5!2sVaranasi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1657014036656!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form End -->

        @endsection