@extends('frontend.layouts.front_app')


@section('content')
<!-- Page Banner Start -->
<div class="section page-banner-section bg-color-1">
    <div class="container">
        <!-- Page Banner Content Start -->
        <div class="page-banner-content text-center py-2">
            <h2 class="">Subscription Plans</h2>
            <!-- <ul class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Subscription Plans</li>
            </ul> -->
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner End -->

<!-- Pricing Start -->
<div class="section pricing-section mb-5">
    <div class="container">
        <div class="row d-flex justify-content-around mb-4">
            <!-- Pricing Card Start -->
            <div class="col-lg-5 col-md-6 col-sm-12 mt-5">
                <div class="pricing-card shadow-lg p-4 rounded fixed-height">
                    <div class="pricing-header text-center mb-4">
                        <h3 class="title">Basic Plan</h3>
                        <p class="price">₹<span>3999</span> + 18% tax</p>
                    </div>
                    <div class="pricing-body">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle text-success"></i> Access to complete College wise Cutoffs,
                                Fees Structure</li>
                            <li><i class="fa fa-check-circle text-success"></i> Access to all Updated Bond & Stipends
                            </li>
                            <li><i class="fa fa-check-circle text-success"></i> Personalized Student Report</li>
                            <li><i class="fa fa-check-circle text-success"></i> Complete Choice Filling from team MatDoc
                            </li>
                            <li><i class="fa fa-check-circle text-success"></i> Premium Telegram group access</li>
                            <li><i class="fa fa-check-circle text-success"></i> Detailed College Department wise
                                information</li>
                            <li><i class="fa fa-check-circle text-success"></i> Access to Website till Admission Process
                            </li>
                        </ul>
                    </div>
                    <div class="pricing-footer text-center mt-2">
                        @if (empty(Auth::check() && optional(Auth::check() && Auth::user()->payment && Auth::user()->payment->user_id)))
                            <form action="{{ route('user-login') }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user() && Auth::user()->id }}">
                                <input type="hidden" name="packages" value="3999">
                                <button class="btn btn-outline-primary rounded" style="padding-top:initial" class="pay-now"
                                    type="submit">Pay Now</button>
                            </form>
                        @else
                            @if (optional(Auth::check() && Auth::user()->payment)->plan_name == 'Plan of 3999')
                                <a class="btn btn-secondary">Subscribed</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <!-- Pricing Card End -->

            <!-- Pricing Card Start -->
            <div class="col-lg-5 col-md-6 col-sm-12 mt-5">
                <div class="pricing-card shadow-lg p-4 rounded fixed-height">
                    <div class="pricing-header text-center mb-4">
                        <h3 class="title">Premium Plan</h3>
                        <p class="price">₹<span>24,999</span></p>
                    </div>
                    <div class="pricing-body">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check-circle text-success"></i> One to One Consulting</li>
                            <li><i class="fa fa-check-circle text-success"></i> Admission Support</li>
                            <li><i class="fa fa-check-circle text-success"></i> 24x7 Assistance on Call</li>
                            <li><i class="fa fa-check-circle text-success"></i> Documentation Support</li>
                            <li><i class="fa fa-check-circle text-success"></i> Access to complete College wise Cutoffs,
                                Fees Structure</li>
                            <li><i class="fa fa-check-circle text-success"></i> Access to all Updated Bond & Stipends
                            </li>
                            <li><i class="fa fa-check-circle text-success"></i> Personalized Student Report</li>
                            <li><i class="fa fa-check-circle text-success"></i> Detailed College Department wise
                                information</li>
                            <li><i class="fa fa-check-circle text-success"></i> Premium Telegram group access</li>
                            <li><i class="fa fa-check-circle text-success"></i> Complete Choice Filling from team MatDoc
                            </li>
                        </ul>
                    </div>
                    <div class="pricing-footer text-center mt-4">
                        @if (empty(Auth::check() && Auth::user()->payment && Auth::user()->payment->user_id))
                            <form action="{{ route('user-login') }}">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user() && Auth::user()->id }}">
                                <input type="hidden" name="packages" value="24999">
                                <button class="btn rounded btn-outline-primary pay-now" style="padding-top:initial"
                                    type="submit">Pay
                                    Now</button>
                            </form>
                        @else
                            @if (optional(Auth::check() && Auth::user() && Auth::user()->payment)->plan_name == 'Plan of 24999')
                                <a class="btn btn-secondary">Subscribed</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <!-- Pricing Card End -->
        </div>
    </div>
</div>
<!-- Pricing End -->

<!-- Modals -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal Body -->
            <div class="modal-body text-center">
                <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Payment Success</h4>
                <img src="http://craftizen.org/wp-content/uploads/2019/02/successful_payment_388054.png"
                    style="width: 70px;">
                <p id="payment_id"></p>
                You Have Successfully Paid ₹3999
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="paymentmodel" tabindex="-1" role="dialog" aria-labelledby="paymentmodelLabel"
    aria-hidden="true" style="background: #212529cf;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal Body -->
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
    $("#close").click(function () {
        $('#myModal').modal('hide');
        location.reload();
    });

    $('#paymentmodel').on('show.bs.modal', function (e) {
        const orderToken = "";
        const cashfree = new Cashfree();
        const paymentDom = document.getElementById("payment-form");
        const success = function (data) {
            if (data.order && data.order.status == "PAID") {
                $.ajax({
                    url: "{{ route('checkstatus') }}" + '?order_id=' + data.order.orderId,
                    success: function (result) {
                        if (result.order_status == "PAID") {
                            $('#paymentmodel').modal('hide');
                            $('#myModal').modal('show');
                        }
                    },
                });
            } else {
                alert("Order is ACTIVE")
            }
        }
        let failure = function (data) {
            alert(data.order.errorText)
        }
        document.getElementById("pay-btn").addEventListener("click", () => {
            $('#paymentmodel').modal('show');
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
                    "theme": "light",
                }
            }
            if (orderToken == "") {
                $.ajax({
                    url: "{{ route('fetchtoken') }}",
                    success: function (result) {
                        orderToken = result["order_token"];
                        const cashfree = new Cashfree();
                        cashfree.initialiseDropin(paymentDom, dropConfig);
                    },
                });
            } else {
                cashfree.initialiseDropin(paymentDom, dropConfig);
            }
        })
    });
</script>
@endsection