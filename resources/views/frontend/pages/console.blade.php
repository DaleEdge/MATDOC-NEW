@extends('frontend.layouts.front_app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('console-header')
<!-- Page Banner Start -->
<div class="section page-banner-section bg-color-1">
    <div class="container">
        <!-- Page Banner Content Start -->
        <div class="page-banner-content text-center py-2">
            <h2 class="">Console</h2>
            <!-- <ul class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Console</li>
            </ul> -->
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner End -->



<!-- Main content based on user authentication and payment -->
<!-- Main content based on user authentication and payment -->
@if (Auth::check() && isset(Auth::user()->payment) && Auth::user()->payment->plan_status == 'success')
    <!-- Main header for Console -->
    @if (Auth::user()->customer->exam_type == 'PG')
        <div class="container">
            <ul class="navbar-navs list hor-swipe c-scrollbar-light">
                <!-- PG Exam Type Links with Icons -->
                <li class="nav-item">
                    <a href="{{ route('home_user') }}" class="custom-link">
                        <i class="fas fa-calendar-alt"></i> Allotments (PG)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('closing_rank') }}" class="custom-link">
                        <i class="fas fa-ranking-star"></i> Closing Ranks (PG)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('seat_matrix') }}" class="custom-link">
                        <i class="fas fa-th"></i> Seat Matrix (PG)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('fees_stipend_bond') }}" class="custom-link">
                        <i class="fas fa-money-bill-wave"></i> Fee, Stipend and Bond (PG)
                    </a>
                </li>
                <!-- <li class="nav-item">
                                    <a href="{{ route('ug.state_wise_counselings') }}" class="custom-link">
                                        <i class="fas fa-map-marked-alt"></i> Allotment Mapping
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="custom-link">
                                        <i class="fas fa-user-graduate"></i> Counsellings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="custom-link">
                                        <i class="fas fa-university"></i> Universities
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('college_list') }}" class="custom-link">
                                        <i class="fas fa-school"></i> Institutes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('course') }}" class="custom-link">
                                        <i class="fas fa-book-open"></i> Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('deemed_details') }}" class="custom-link">
                                        <i class="fas fa-info-circle"></i> Deemed Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('get_college_hospital') }}" class="custom-link">
                                        <i class="fas fa-hospital"></i> College Hospital Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dnb-beds" class="custom-link">
                                        <i class="fas fa-bed"></i> DNB Hospital By Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('mark_vs_rank') }}" class="custom-link">
                                        <i class="fas fa-chart-line"></i> College Hospital Rank Predictor
                                    </a>
                                </li> -->
            </ul>
        </div>
    @elseif (Auth::user()->customer->exam_type == 'UG')
        <div class="container">
            <ul class="navbar-navs list hor-swipe c-scrollbar-light">
                <!-- UG Exam Type Links with Icons -->
                <li class="nav-item">
                    <a href="{{ route('ug.home_user') }}" class="custom-link">
                        <i class="fas fa-calendar-alt"></i> Allotments (UG)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ug.closing_rank') }}" class="custom-link">
                        <i class="fas fa-ranking-star"></i> Closing Ranks (UG)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ug.seat_matrix') }}" class="custom-link">
                        <i class="fas fa-th"></i> Seat Matrix (UG)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ug.fees_stipend_bond') }}" class="custom-link">
                        <i class="fas fa-money-bill-wave"></i> Fee, Stipend and Bond (UG)
                    </a>
                </li>
                <!-- <li class="nav-item">
                            <a href="#" class="custom-link">
                                <i class="fas fa-map-marked-alt"></i> Allotment Mapping
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="custom-link">
                                <i class="fas fa-user-graduate"></i> Counsellings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="custom-link">
                                <i class="fas fa-university"></i> Universities
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('college_list') }}" class="custom-link">
                                <i class="fas fa-school"></i> Institutes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('course') }}" class="custom-link">
                                <i class="fas fa-book-open"></i> Courses
                            </a>
                        </li> -->
            </ul>
        </div>
    @endif
@else
    <!-- Payment failure message and button -->
    <div class="container d-flex justify-content-center align-items-center my-5">
        <div class="card shadow-lg border-0 text-center p-4">
            <div class="card-body">
                <h5 class="card-title text-danger mb-4">Subscription Required</h5>
                <p class="payment-failure-message mb-4">Data will be visible after subscribing to a plan.</p>
                <a href="{{ route('subscription_plans') }}" class="btn btn-primary btn-lg"
                    style="padding-top:initial">Subscribe Now</a>
            </div>
        </div>
    </div>
@endif


<!-- Page Banner End -->
@endsection