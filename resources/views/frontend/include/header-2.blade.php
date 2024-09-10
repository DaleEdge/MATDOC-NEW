<style>
    .payment-failure-section {
        background-color: #f8f9fa;
        border-bottom: 1px solid #ddd;
        padding: 20px 0;
    }

    .payment-failure-content {
        text-align: center;
        background: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .payment-failure-message {
        font-size: 16px;
        color: #333;
        margin-bottom: 15px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<div id="header" class="header section">
    <div class="header-top-section d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-info">
                    <ul>
                        <li><span><i class="fa fa-volume-control-phone"></i> <a
                                    href="tel:+91-8015958614">+91-8015958614</a></span> </li>
                        <li><span><i class="fa fa fa-whatsapp"></i> <a href="https://wa.me/6369149396"
                                    target="_blank">+91-6369149396</a></span> </li>
                        <li><span><i class="fa fa-envelope-o"></i> <a href="mailto:info@matdoc.in"
                                    target="_blank">info@matdoc.in</a></span> </li>
                    </ul>
                </div>
                <div class="header-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <!-- Header Wrapper Start  -->
        <div class="header-wrapper">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a href="{{ route('index') }}"><img src="{{ asset('front_css/assets/images/logo.png') }}" alt=""></a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Menu Start -->
            <div class="header-menu d-none d-lg-block">
                <ul class="main-menu">
                    <!-- <li><a href="@if (Auth::check()) {{ route('home_user') }} @else {{ route('index') }} @endif"
                                    class="active">Home </a></li> -->
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('console') }}">Console</a></li>
                    <li><a href="{{ route('subscription_plans') }}">Packages </a></li>
                    @if (Auth::check() && Auth::user()->user_type == 'admin')
    <!-- Check if payment information is available -->
    @if(isset(Auth::user()->payment->user_id))
        @if(Auth::user()->customer->exam_type == 'UG')
            <li><a href="{{ route('ug.choice_list') }}">My Choice List (UG)</a></li>
        @elseif(Auth::user()->customer->exam_type == 'PG')
            <li><a href="{{ route('pg.choice_list') }}">My Choice List (PG)</a></li>
        @endif
    @endif
@endif


                    <li><a href="{{ route('about_us') }}">About Us</a></li>
                    <li><a href="{{ route('user_dashboard') }}">Profile</a></li>
                    <li><a href="{{ route('help') }}">Contact Us </a></li>
                </ul>
            </div>
            <!-- Header Menu End -->

            <!-- Header Meta Start -->
            <div class="header-meta">
                <div class="header-login d-none d-lg-flex">
                    @if (Auth::check())
                        <a class="link" href="{{ route('user_logout') }}"><i class="fa fa-sign-out"></i>
                            Logout</a>
                    @else
                        <a class="link" href="{{ route('user-login') }}"><i class="fa fa-user-o"></i>
                            Login</a>
                        <a class="link" href="{{ route('user-register') }}">Register</a>
                    @endif
                </div>

                <div class="header-toggle d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
            <!-- Header Meta End -->
        </div>
        <!-- Header Wrapper End -->
    </div>
</div>
<!-- Header End -->
<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-start" id="offcanvasMenu">

    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="/"><img src="{{ asset('front_css/assets/images/logo.png') }}" alt=""></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <div class="offcanvas-menu">
            <ul class="main-menu">
                <!-- <li><a
                                href="@if (Auth::check()) {{ route('home_user') }} @else {{ '/' }} @endif">Home
                            </a></li> -->
                            <!--<li><a href="{{'https://matdoc.in/' }}">Home</a></li>
                            <li><a href="{{ route('user_login') }}">Console</a></li>
                            <li><a href="{{ route('subscription_plans') }}"> Packages </a></li>
                <li><a href="{{ route('about_us') }}">About Us</a></li> -->
                <!-- <li><a href="{{ route('course') }}">Courses</a></li>
                        <li><a href="{{ route('college_list') }}">College</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('help') }}">Contact Us </a></li>  -->
                @if (Auth::check())
                    @if(Auth::user()->user_type != 'admin'))
                        
                        <li><a href="{{ route('user_dashboard') }}">Profile </a></li>
                    @endif
                    <li><a href="{{ route('user_logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ route('user-login') }}">Login</a></li>
                    <li><a href="{{ route('user-register') }}">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- Offcanvas End -->


<!-- Main Header -->
<header>
    <!-- Existing header content -->

    <!-- Check if user is authenticated and is an admin -->
     <!-- Check if user is authenticated and is an admin -->
     @if (Auth::check() && Auth::user()->user_type == 'admin')
        <!-- Check if payment information is available -->
        @if(isset(Auth::user()->payment->user_id))
            <!-- Check payment status -->
            @if(Auth::user()->payment->plan_status == "success")
                <!-- Main header for Console -->
                <div class="section bg-header" style="border-bottom: 1px solid #dddddd6b;">
                    <div class="container">

                        <div class="bg-custom-theme">
                            @if(Auth::user()->customer->exam_type == 'PG')
                                <ul class="navbar-navs list hor-swipe c-scrollbar-light">
                                    <!-- PG Exam Type Links -->
                                    <li class="nav-item">
                                        <a href="{{ route('home_user') }}" class="custom-link">Allotments (PG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('closing_rank') }}" class="custom-link">Closing Ranks (PG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('seat_matrix') }}" class="custom-link">Seat Matrix (PG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('fees_stipend_bond') }}" class="custom-link">Fee, Stipend and Bond (PG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ug.state_wise_counselings') }}" class="custom-link">Allotment Mapping</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="custom-link">Counsellings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="custom-link">Universities</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('college_list') }}" class="custom-link">Institutes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('course') }}" class="custom-link">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('deemed_details') }}" class="custom-link">Deemed Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('get_college_hospital') }}" class="custom-link">College Hospital Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dnb-beds" class="custom-link">DNB Hospital By Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('mark_vs_rank') }}" class="custom-link">College Hospital Rank Predictor</a>
                                    </li>
                                </ul>
                            @elseif(Auth::user()->customer->exam_type == 'UG')
                                <ul class="navbar-navs list hor-swipe c-scrollbar-light">
                                    <!-- UG Exam Type Links -->
                                    <li class="nav-item">
                                        <a href="{{ route('ug.home_user') }}" class="custom-link">Allotments (UG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ug.closing_rank') }}" class="custom-link">Closing Ranks (UG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ug.seat_matrix') }}" class="custom-link">Seat Matrix (UG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('ug.fees_stipend_bond') }}" class="custom-link">Fee, Stipend and Bond (UG)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="custom-link">Allotment Mapping</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="custom-link">Counsellings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="custom-link">Universities</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('college_list') }}" class="custom-link">Institutes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('course') }}" class="custom-link">Courses</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <!-- Payment failure message and button -->
            <div class="section payment-failure-section">
                 <div class="container">
                     <div class="payment-failure-content">
                        <p class="payment-failure-message">Access to this data is available only with a subscription plan.</p>
                        <a href="{{ route('subscription_plans') }}" class="btn btn-primary">Subscribe Now</a>
                    </div>
                </div>
            </div>
            @endif
        @endif
    @endif

    <!-- Other header content -->
</header>
