@extends('frontend.layouts.front_app')
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <img class="shape-4" src="{{ asset('public/front_css/assets/images/shape/shape-21.png') }}" alt="shape">
        <img class="shape-5" src="{{ asset('public/front_css/assets/images/shape/shape-21.png') }}" alt="shape">

        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Plan Payment</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Subsciption Plan Pay</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
    <!-- Pricing Start -->
    <div class="section section-padding">
        <div class="container mb-5">
            <!-- Pricing Wrapper End -->
            <div class="row">
                <div class="col-md-10 m-auto">
                <div class="payment-card">
                    <div class="section-title mb-4 mt-2">
                        <h3>Payment Modes</h3>
                        <hr>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Cosmofeed
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="mb-2">Pay Using Cosmofeed</p>
                                <a href="#" class="btn btn-primary btn-hover-heading-color w-100">Place Order <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Razorpay
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="mb-2">Pay Using Razorpay</p>
                                <a href="#" class="btn btn-primary btn-hover-heading-color w-100">Place Order <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              QR Code
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="mb-2">  Pay Using QR <br>
                                    You can pay directly through QR</p>
                                <a href="#" class="btn btn-primary btn-hover-heading-color w-100">Pay With QR Code <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <!-- Pricing Wrapper End -->
        </div>
        </div>
    </div>
    <!-- Pricing End -->
    <!-- The Modal -->
  


  
@endsection

@section('script')
   
@endsection
