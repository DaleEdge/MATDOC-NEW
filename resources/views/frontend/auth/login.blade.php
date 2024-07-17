@extends('frontend.layouts.front_app')
@section('content')

        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Login</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Login Now </li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Login Start -->
        <div class="section section-padding">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="bg-light">
                              <img src="{{asset('public/front_css/assets/images/login.png')}}" class="auth-side-image img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 m-auto">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <div class="login-register-form">
                                    <form action="{{route('user_login')}}" method="post">
                                        @csrf()
                                        <div class="single-form mt-0">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                                            @error('phone')
                                              <span  role="alert" style="color: red;margin-left: 5%;">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="single-form">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password"  value="{{old('password')}}">
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
                                            <button class="btn btn-primary btn-hover-heading-color w-100">Login</button>
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
                    </div>
            </div>
        </div>
@endsection