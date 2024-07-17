@extends('frontend.layouts.front_app')
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Services</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Services </li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
    
    <div class="section section-padding">
        <div class="container">
            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper-02">
                <div class="row justify-content-between">
                    <div class="col-lg-12">
                        <!-- Blog Wrapper Start -->
                        <div class="blog-wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Single Blog Start -->
                                    <div class="single-blog single-blog-02">
                                        <div class="blog-image">
                                            <a href="{{route('service_details')}}"><img src="{{ asset('public/front_css/assets/images/blog/blog-1.png')}}" alt="Blog"></a>
                                            <span class="tags">Education</span>
                                        </div>
                                        <div class="blog-content">
                                            <h1 class="title"><a href="{{route('service_details')}}">NEET UG Counselling</a></h1>
                                        </div>
                                    </div>
                                    <!-- Single Blog End -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Single Blog Start -->
                                    <div class="single-blog single-blog-02">
                                        <div class="blog-image">
                                            <a href="{{route('service_details')}}"><img src="{{ asset('public/front_css/assets/images/blog/blog-1.png')}}" alt="Blog"></a>
                                            <span class="tags">Education</span>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="title"><a href="{{route('service_details')}}">NEET PG Counselling</a></h3>
                                        </div>
                                    </div>
                                    <!-- Single Blog End -->
                                </div>
                            </div>
                        </div>
                        <!-- Blog Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Blog Wrapper End -->
        </div>
    </div>
@endsection