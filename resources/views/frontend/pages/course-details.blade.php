@extends('frontend.layouts.front_app')
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <img class="shape-4" src="{{ asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
        <img class="shape-5" src="{{ asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
        <div class="container">
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content mb-3">
                <h2 class="title">{{$course->name}} </h2>
              
                {{-- <div class="course-details-meta">
                    <div class="meta-action">
                        <div class="meta-author">
                            <img src="{{ asset('public/front_css/assets/images/author-1.jpg')}}" alt="Author">
                        </div>
                        <div class="meta-name">
                            <h5 class="name">Adam Helen</h5>
                        </div>
                    </div>
                    <div class="meta-action">
                        <p class="label">Last Update : <span>2/12/2021</span></p>
                    </div>
                </div> --}}
            </div>
            <!-- Course Details Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-8">
                    <!-- Course Details Wrapper Start -->
                    <div class="course-details-wrapper">
                        <!-- Course Overview Start -->
                        {!!$course->course_details!!}
                        <!-- Course Learn List End -->
                    </div>
                    <!-- Course Details Wrapper End -->
                </div>
                <div class="col-lg-4">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-details-wraps">
                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-video p-0 mt-4">
                                <img src="{{ asset('public/front_css/assets/images/sidebar-video.jpg')}}" alt="video">
                            </div>
                            <div class="sidebar-description">
                                <div class="price">
                                    <span class="sale-price">Rs. 499/-</span>
                                    <span class="regular-price">Rs. 799/-</span>
                                </div>
                                {{-- <a class="btn btn-primary btn-hover-heading-color w-100" href="#">Course Details</a> --}}
                                <ul class="description-list">
                                    <li><i class="fa fa-clock-o"></i> Duration <span>{{$course->year}} Years</span></li>
                                    <li><i class="fa fa-sliders"></i> Semester <span>{{$course->semeter}}</span></li>
                                    <li><i class="fa fa-file-o"></i> Course Level <span>{{$course->course_level}}</span></li>
                                    <li><i class="fa fa-language"></i> Language <span>{{implode(',',$course->language)}}</span></li>
                                    <li><i class="fa fa-user-o"></i> Mode Of Sudy <span>{{$course->mode_of_study}}</span></li>
                                </ul>
                                {{-- <a class="btn btn-outline-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fa fa-envelope"></i>
                                    Enquiry Now</a> --}}
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->
                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Course List End -->
@endsection
