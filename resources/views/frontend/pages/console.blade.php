@extends('frontend.layouts.front_app')

@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                
        

   <!-- Main content based on user authentication and payment -->
   
@if (Auth::check())
    @if (Auth::user()->user_type == 'admin')
        @if (isset(Auth::user()->payment) && Auth::user()->payment->plan_status == 'success')
            <!-- Main header for Console -->
            @if (Auth::user()->customer->exam_type == 'PG')
            <div class="container">
                <ul class="navbar-navs list hor-swipe c-scrollbar-light">
                    <!-- PG Exam Type Links -->
                    <li class="nav-item"><a href="{{ route('home_user') }}" class="custom-link">Allotments (PG)</a></li>
                    <li class="nav-item"><a href="{{ route('closing_rank') }}" class="custom-link">Closing Ranks (PG)</a></li>
                    <li class="nav-item"><a href="{{ route('seat_matrix') }}" class="custom-link">Seat Matrix (PG)</a></li>
                    <li class="nav-item"><a href="{{ route('fees_stipend_bond') }}" class="custom-link">Fee, Stipend and Bond (PG)</a></li>
                    <li class="nav-item"><a href="{{ route('ug.state_wise_counselings') }}" class="custom-link">Allotment Mapping</a></li>
                    <li class="nav-item"><a href="#" class="custom-link">Counsellings</a></li>
                    <li class="nav-item"><a href="#" class="custom-link">Universities</a></li>
                    <li class="nav-item"><a href="{{ route('college_list') }}" class="custom-link">Institutes</a></li>
                    <li class="nav-item"><a href="{{ route('course') }}" class="custom-link">Courses</a></li>
                    <li class="nav-item"><a href="{{ route('deemed_details') }}" class="custom-link">Deemed Details</a></li>
                    <li class="nav-item"><a href="{{ route('get_college_hospital') }}" class="custom-link">College Hospital Details</a></li>
                    <li class="nav-item"><a href="/dnb-beds" class="custom-link">DNB Hospital By Details</a></li>
                    <li class="nav-item"><a href="{{ route('mark_vs_rank') }}" class="custom-link">College Hospital Rank Predictor</a></li>
                </ul>
            @elseif (Auth::user()->customer->exam_type == 'UG')
                <ul class="navbar-navs list hor-swipe c-scrollbar-light">
                    <!-- UG Exam Type Links -->
                    <li class="nav-item"><a href="{{ route('ug.home_user') }}" class="custom-link">Allotments (UG)</a></li>
                    <li class="nav-item"><a href="{{ route('ug.closing_rank') }}" class="custom-link">Closing Ranks (UG)</a></li>
                    <li class="nav-item"><a href="{{ route('ug.seat_matrix') }}" class="custom-link">Seat Matrix (UG)</a></li>
                    <li class="nav-item"><a href="{{ route('ug.fees_stipend_bond') }}" class="custom-link">Fee, Stipend and Bond (UG)</a></li>
                    <li class="nav-item"><a href="#" class="custom-link">Allotment Mapping</a></li>
                    <li class="nav-item"><a href="#" class="custom-link">Counsellings</a></li>
                    <li class="nav-item"><a href="#" class="custom-link">Universities</a></li>
                    <li class="nav-item"><a href="{{ route('college_list') }}" class="custom-link">Institutes</a></li>
                    <li class="nav-item"><a href="{{ route('course') }}" class="custom-link">Courses</a></li>
                </ul>
                @endif
        @else
            <!-- Payment failure message and button -->
            <div class="container d-flex justify-content-center align-items-center my-5">
                <div class="card shadow-lg border-0 text-center p-4">
                    <div class="card-body">
                        <h5 class="card-title text-danger mb-4">Subscription Required</h5>
                        <p class="payment-failure-message mb-4">Data will be visible after subscribing to a plan.</p>
                        <a href="{{ route('subscription_plans') }}" class="btn btn-primary btn-lg">Subscribe Now</a>
                    </div>
                </div>
            </div>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
        @endif
        
    @else
        <!-- Payment failure message if payment plan status is not 'success' -->
        <div class="container d-flex justify-content-center align-items-center my-5">
            <div class="card shadow-lg border-0 text-center p-4">
                <div class="card-body">
                    <h5 class="card-title text-danger mb-4">Subscription Required</h5>
                    <p class="payment-failure-message mb-4">Data will be visible after subscribing to a plan.</p>
                    <a href="{{ route('subscription_plans') }}" class="btn btn-primary btn-lg">Subscribe Now</a>
                </div>
            </div>
        </div>
    @endif
@endif
@endsection

