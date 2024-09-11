@extends('frontend.layouts.front_app')

<link rel="stylesheet" href="{{url("plugins/font-awesome/css/all.min.css?v=2")}}" />

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
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <!-- PG Section -->
            @if (Auth::user()->customer->contains('exam_type', 'PG'))
                <div class="rounded p-0 mt-4" style="border:1px solid #4267B2">
                    <div class="text-center rounded-top text-white mb-1 fs-5 fw-bold" style="background-color:#4267B2">PG</div>
                    <div class="nav d-flex justify-content-center">
                        @foreach ([['route' => 'home_user', 'icon' => 'calendar-alt', 'text' => 'Allotments', 'color' => 'text-primary'], ['route' => 'closing_rank', 'icon' => 'ranking-star', 'text' => 'Closing Ranks', 'color' => 'text-warning'], ['route' => 'seat_matrix', 'icon' => 'th', 'text' => 'Seat Matrix', 'color' => 'text-success'], ['route' => 'fees_stipend_bond', 'icon' => 'money-bill-wave', 'text' => 'Fee, Stipend and Bond', 'color' => 'text-info']] as $item)
                            <div class="col nav-item p-1">
                                <a href="{{ route($item['route']) }}"
                                    class="nav-link text-center custom-menu-link pt-3 {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                                    <i class="fas fa-{{ $item['icon'] }} fs-5"></i>
                                    <span class="d-block">{{ $item['text'] }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- UG Section -->
            @if (Auth::user()->customer->contains('exam_type', 'UG'))
                <div class="rounded p-0 mt-4" style="border:1px solid #a047d2">
                    <div class="text-center rounded-top text-white mb-1 fs-5 fw-bold" style="background-color:#4267B2">UG</div>
                    <div class="nav d-flex justify-content-between">
                        @foreach ([['route' => 'ug.home_user', 'icon' => 'calendar-alt', 'text' => 'Allotments', 'color' => 'text-secondary'], ['route' => 'ug.closing_rank', 'icon' => 'ranking-star', 'text' => 'Closing Ranks', 'color' => 'text-danger'], ['route' => 'ug.seat_matrix', 'icon' => 'th', 'text' => 'Seat Matrix', 'color' => 'text-info'], ['route' => 'ug.fees_stipend_bond', 'icon' => 'money-bill-wave', 'text' => 'Fee, Stipend and Bond', 'color' => 'text-warning']] as $item)
                            <div class="col nav-item p-1">
                                <a href="{{ route($item['route']) }}"
                                    class="nav-link text-center custom-menu-link pt-3 {{ request()->routeIs($item['route']) ? 'active' : '' }}">
                                    <i class="fas fa-{{ $item['icon'] }} fs-5"></i>
                                    <span class="d-block">{{ $item['text'] }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
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