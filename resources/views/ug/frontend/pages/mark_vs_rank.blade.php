@extends('frontend.layouts.front_app')
@section('content')

        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <img class="shape-4" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
            <img class="shape-5" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">

            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Rank Predictor</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Rank Predictor </li>
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
                        <div class="col-lg-6 mb-3" style="margin-left: auto;margin-right: auto;" >
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <div class="section-title text-center">
                                  <h2><span>Know Your Rank</span> </h2>
                               </div>
                                <div class="login-register-form">
                                    <form action="{{route('mark_vs_rank')}}" method="GET">
                                        <div class="single-form mt-0">
                                            <label>Mark</label>
                                            <input type="number" class="login-form-control" name="mark" placeholder="Enter Mark" value="{{request('mark')}}" min="0" max="720">
                                            @error('mark')
                                              <span  role="alert" style="color: red;margin-left: 5%;">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-heading-color w-100 br_rad">Submit</button>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->
                        </div>
                        <div class="col-lg-6 mb-3">
                        <div class="section-title text-center">
                           <h2><span>Your Expected Rank Should Be Approx</span> </h2><br>
                           <h5>@if(!empty($data)) {{$data->rank}} @else {{'No Rank Found'}} @endif</h5>
                        </div>
                        <div class="bg-light text-center">
                         
                         </div>
                        </div>
                    </div>
                </div>
                <!-- Login & Register Wrapper End -->

            </div>
        </div>
@endsection