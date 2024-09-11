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

    a,
    i {
        padding-top: initial !important;
    }

    .fixed-height {
        height: 500px;
        /* Set a fixed height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .pricing-header,
    .pricing-footer {
        flex-shrink: 0;
        /* Prevent these sections from shrinking */
    }

    .pricing-body {
        flex: 1;
        /* Allow the body to grow and take available space */
        overflow-y: auto;
        /* Add scroll if content exceeds the fixed height */
    }
</style>

<div id="header" class="header section">
    <div class="header-top-section d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-info">
                    <ul>
                        <li><span><i class="fa fa-volume-control-phone"></i> <a
                                    href="tel:+91-8015958614">+91-8015958614</a></span></li>
                        <li><span><i class="fa fa-whatsapp"></i> <a href="https://wa.me/6369149396"
                                    target="_blank">+91-6369149396</a></span></li>
                        <li><span><i class="fa fa-envelope-o"></i> <a href="mailto:info@matdoc.in"
                                    target="_blank">info@matdoc.in</a></span></li>
                    </ul>
                </div>
                <div class="header-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-wrapper">
            <div class="header-logo">
                <a href="{{ route('index') }}"><img src="{{ asset('front_css/assets/images/logo.png') }}"
                        alt="Logo"></a>
            </div>
            <div class="header-menu d-none d-lg-block">
                <ul class="main-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('console') }}">Console</a></li>
                    <li><a href="{{ route('subscription_plans') }}">Packages</a></li>
                    <li><a href="{{ route('about_us') }}">About Us</a></li>
                    <!-- <li><a href="{{ route('user_dashboard') }}">Profile</a></li> -->
                    <li><a href="{{ route('help') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="">
                <div class="d-none d-lg-flex">
                    @if (Auth::check())
                        <a class="link" href="{{ route('user_logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                    @else
                        <!-- <div class="d-flex justify-content-center"> -->
                        <div class="btn btn-primary rounded" style="padding-top:initial"><a class="link fs-6"
                                style="text-transform: none;" href="{{ route('user-login') }}"><i class="fa fa-user-o"></i>
                                Login</a>
                            <!-- <div class="btn btn-primary rounded" style="padding-top:initial"><a class="link"
                                                        style="text-transform: none;" href="{{ route('user-register') }}">Register</a></div> -->
                            <!-- </div> -->
                            <!-- <a class="link" href="{{ route('user-login') }}"><i class="fa fa-user-o"></i> Login</a>
                                                                                                                                                <a class="link" href="{{ route('user-register') }}">Register</a> -->
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
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" id="offcanvasMenu">
        <div class="offcanvas-header">
            <div class="offcanvas-logo">
                <a href="/"><img src="{{ asset('front_css/assets/images/logo.png') }}" alt="Logo"></a>
            </div>
            <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                <ul class="main-menu">
                    @if (Auth::check())
                        @if(Auth::user()->user_type != 'admin')
                            <li><a href="{{ route('user_dashboard') }}">Profile</a></li>
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