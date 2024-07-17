@extends('frontend.layouts.front_app')
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <img class="shape-4" src="{{ asset('public/front_css/assets/images/shape/shape-21.png') }}" alt="shape">
        <img class="shape-5" src="{{ asset('public/front_css/assets/images/shape/shape-21.png') }}" alt="shape">

        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Plan</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Subsciption Plan </li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
    <!-- Pricing Start -->
    <div class="section mb-5">
        <div class="container mb-5">
            <!-- Pricing Wrapper End -->
            <div class="pricing-wrapper">
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <div class="row justify-content-center gx-0">
                            <div class="col-lg-6 col-md-8 mb-3">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing active">
                                    <div class="pricig-header">
                                        <h3 class="title">Subsciption</h3>
                                        <p>₹<span>1990</span> + 18% tax/-</p>
                                        <hr>
                                    </div>

                                    <div class="pricig-body">
                                        <p>Access to complete College wise Cutoffs, Fees Structure.</p>
                                        <p>Access to all Updated Bond & Stipends.</p>
                                        <p>Personalized Student Report – Just Put your Rank, Branch Wanted, Budget Allowed &
                                            your Category and get the Complete PDF report, made just for you. All your major
                                            doubts will be cleared after seeing this.</p>
                                        <p>Complete Choice Filling from team Campus Bull.</p>
                                        <p>You’ll be added to our Premium Telegram group made just for paid members.</p>
                                        <ul class="pricig-list">
                                            <p>Get all College Department wise details, like - </p>
                                            <li>Radio –Daily Basis CT Scans, MRI, Ultrasounds,</li>
                                            <li>Gen surgery – IPD Details – Daily Basis Major Surgery, Minor Surgery</li>
                                            <li>Gen Medicine –Daily Basis OPD Details, Hospital ICU Beds.</li>
                                            <li>Etc for all Departments.</li>
                                        </ul><br>
                                        <p>Access to Website till Admission Process.</p>
                                    </div><br><br>
                                    <div class="pricig-header">
                                        @if (empty(optional(Auth::user()->payment)->user_id))
                                            <a class="btn btn-white btn-hover-heading-color" id="pay-btn">Pay
                                                Now</a>
                                        @else
                                            <a class="btn btn-white btn-hover-heading-color">Subscribed</a>
                                        @endif
                                    </div>


                                </div>
                                <!-- Single Pricing End -->
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing active1">
                                    <div class="pricig-header">
                                        <h3 class="title">Subsciption</h3>
                                        <p>₹<span>24,999</span>/-</p>
                                        <hr>
                                    </div>
                                    <div class="pricig-body">
                                        <p>One to One Consulting – A personalized mentor to guide you.</p>
                                        <p>Admission Support.</p>
                                        <p>24x7 Assistance on Call.</p>
                                        <p>Documentation Support.</p>
                                        <p>Access to complete College wise Cutoffs, Fees Structure.</p>
                                        <p>Access to all Updated Bond & Stipends.</p>
                                        <p>Personalized Student Report – Just Put your Rank, Branch Wanted, Budget Allowed &
                                            your Category and get the Complete PDF report, made just for you. All your major
                                            doubts will be cleared after seeing this.</p>
                                        <ul class="pricig-list">
                                            <p>Get all College Department wise details, like - </p>
                                            <li>Radio –Daily Basis CT Scans, MRI, Ultrasounds.</li>
                                            <li>Gen surgery – IPD Details – Daily Basis Major Surgery, Minor Surgery.</li>
                                            <li>Gen Medicine –Daily Basis OPD Details, Hospital ICU Beds.</li>
                                            <li>Etc for all the departments.</li><br>
                                            <p>You’ll be added to our Premium Telegram group made just for paid members.
                                                Complete Choice Filling from team Campus Bull.</p>
                                        </ul>
                                        </ul>
                                        <div class="pricig-header">
                                            <a class="btn btn-white btn-hover-heading-color1" href="tel:+91-9561485956">Call
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Pricing End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Pricing Wrapper End -->

        </div>
    </div>
    <!-- Pricing End -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                {{-- <div class="modal-header">
              <h4 class="modal-title">Payment Success</h4>
              <button type="button" class="close" id="close">&times;</button>
            </div> --}}

                <!-- Modal body -->
                <div class="modal-body">
                    <a type="button" class="close" id="close"
                        style="right: 10px;top: 0px;position: absolute;font-size: 20px;">
                        <li class="fa fa-close"></li>
                    </a>
                    <center>
                        <h4 class="modal-title">Payment Success</h4> <br>
                        <img src="http://craftizen.org/wp-content/uploads/2019/02/successful_payment_388054.png"
                            style="width: 70px;"><br>
                        <p id="payment_id"></p>
                        You Have Successfully Paid ₹ 1990
                    </center>
                </div>

            </div>
        </div>
    </div>


    <div class="modal" id="paymentmodel" style="background: #212529cf;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="payment-form"></div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://sdk.cashfree.com/js/ui/1.0.26/dropinClient.prod.js"></script>
    <script>
        $("#close").click(function() {
            $('#myModal').hide();
            location.reload();
        });
    </script>
    {{-- <script>
        let orderToken = "";
        const cashfree = new Cashfree();
        const paymentDom = document.getElementById("payment-form");
        const success = function(data) {
            if (data.order && data.order.status == "PAID") {
                $.ajax({
                    url: "{{ route('checkstatus') }}" + '?order_id=' + data.order.orderId,
                    success: function(result) {
                        if (result.order_status == "PAID") {
                            $('#paymentmodel').hide();
                            $('#myModal').show();
                        }
                    },
                });
            } else {
                //order is still active
                alert("Order is ACTIVE")
            }
        }
        let failure = function(data) {
            alert(data.order.errorText)
        }
        document.getElementById("pay-btn").addEventListener("click", () => {
            $('#paymentmodel').show();
            const dropConfig = {
                "components": [
                    "order-details",
                    "card",
                    "app",
                    "upi"
                ],
                "orderToken": orderToken,
                "onSuccess": success,
                "onFailure": failure,
                "style": {
                    "backgroundColor": "#ffffff",
                    "color": "#11385b",
                    "fontFamily": "Lato",
                    "fontSize": "14px",
                    "errorColor": "#ff0000",
                    "theme": "light", //(or dark)
                }
            }
            if (orderToken == "") {
                $.ajax({
                    url: "{{ route('fetchtoken') }}",
                    success: function(result) {
                        orderToken = result["order_token"];
                        const dropConfig = {
                            "components": [
                                "order-details",
                                "card",
                                "netbanking",
                                "app",
                                "upi"
                            ],
                            "orderToken": orderToken,
                            "onSuccess": success,
                            "onFailure": failure,
                            "style": {
                                "backgroundColor": "#ffffff",
                                "color": "#11385b",
                                "fontFamily": "Lato",
                                "fontSize": "14px",
                                "errorColor": "#ff0000",
                                "theme": "light", //(or dark)
                            }
                        }
                        const cashfree = new Cashfree();
                        const paymentDom = document.getElementById("payment-form");
                        cashfree.initialiseDropin(paymentDom, dropConfig);
                    },
                });
            } else {
                cashfree.initialiseDropin(paymentDom, dropConfig);
            }

        })
    </script> --}}
@endsection
