@extends('frontend.layouts.front_app')
@section('content')

        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <img class="shape-4" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
            <img class="shape-5" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">

            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Login</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Login Now </li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Login Start -->
        <div class="section section-padding mb-5">
            <div class="container mb-5">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrapper">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <div class="section-title text-center">
                                  <h2><span>Welcome Back</span> </h2>
                               </div>
                                <div class="login-register-form">
                                    <form action="{{route('user_login')}}" method="post">
                                        @csrf()
                                        <div class="single-form mt-0">
                                            <label>Phone</label>
                                            <input type="number" class="login-form-control" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                                            @error('phone')
                                              <span  role="alert" style="color: red;margin-left: 5%;">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="single-form">
                                            <label>Password</label>
                                            <input type="password" class="login-form-control" name="password" placeholder="Enter Password "  value="{{old('password')}}">
                                             @error('password')
                                              <span  role="alert" style="color: red;margin-left: 5%;">
                                               <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="single-form form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="remember" id="flexCheckDefault">
                                            <label for="flexCheckDefault">Remember me</label>
                                        </div>
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-heading-color w-100 br_rad">Login</button>
                                        </div>
                                         <div class="text-center">
                                            <p class="mt-2">Don't have an account ? <a href="{{route('user-register')}}"> Register Now</a></p>
                                            <p>Lost your password ? <a href="{{route('forgot_password')}}"> Click Here</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->
                        </div>
                        <div class="col-lg-6 mb-3">
                        <div class="section-title text-center">
                           <h2><span>Please login to continue</span> </h2><br>
                        </div>
                        <div class="bg-light text-center">
                         <img src="{{asset('public/front_css/assets/images/login.png')}}" class="auth-side-image">
                         </div>
                        </div>
                    </div>
                </div>
                <!-- Login & Register Wrapper End -->

            </div>
        </div>
@endsection