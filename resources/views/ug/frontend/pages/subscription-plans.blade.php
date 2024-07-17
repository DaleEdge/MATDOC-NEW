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
                                        <h3 class="title">Silver Plan</h3>
                                        <p>₹<span>499</span>/-</p>
                                        <hr>
                                    </div>
                                    
                                    <div class="pricig-body">
                                        <p> Predict Your Admission Chances.</p>
                                        <p>Know your admission chances in Medical Colleges with NEET Rank.</p>
                                        <p>See your chances in All India Quota, State Quota, Central & Deemed University Seat..</p>
                                        <p>Get Fee Structure of All possibilites & colleges in PDF.</p>
                                        <p>Get a personalized Report - Based on your budget & Category, Domicile, AIQ 15% in PDF.</p>
                                       
                                    </div><br><br><br>
                                    <div class="pricig-header">
                                        <a href="#" target="_blank" class="btn btn-blue btn-hover-heading-color br_rad" style="margin-right: 10px;">No Personal Guidance &amp; Call Support</a>
                                        @if(Auth::check())
                                               @if(!empty(optional(Auth::user()->payment)->payment_amount) && (optional(Auth::user()->payment)->payment_amount==590))
                                                <a class="btn btn-primary btn-hover-heading-color" style="background-color: #086fef;" >Subscribed</a>
                                               @else
                                                <a class="btn btn-primary btn-hover-heading-color" href="#" onclick="pay(590)" style="background-color: #086fef;" >Pay
                                                   Now</a>
                                                @endif
                                               @else
                                                 <a class="btn btn-primary btn-hover-heading-color" href="{{route('user-login')}}" style="background-color: #086fef;" >Pay
                                                   Now</a>
                                                @endif
                                    </div>

                                </div>
                                <!-- Single Pricing End -->
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing active1">
                                    <div class="pricig-header">
                                        <h3 class="title">Gold Plan</h3>
                                        <p>₹<span>999</span>/-</p>
                                        <hr>
                                    </div>
                                    <div class="pricig-body">
                                        <p>Counselling Details.</p>
                                        <p>Bond information state wise.</p>
                                        <p>Closing Rank AIQ; State; Deemed, central unive.</p>
                                        <p>Announcement & Update.</p>
                                        <p>Complete Choice Feeling from team Career Media.</p>
                                        <p>Personalised College Predictor.</p>
                                        <p>Access to all updated fee structure.</p>
                                        <p>Access to premium telegram group.</p>
                                        <p>Complete Website Access till 2022 Counselling.</p>
                                        <p>Marks vs Rank Predictor</p>
                                        </ul>
                                        <div class="pricig-header">
                                            <a href="#" target="_blank" class="btn btn-blue btn-hover-heading-color br_rad" style="margin-right: 10px;">No Personal Guidance &amp; Call Support</a>
                                            @if(Auth::check())
                                               @if(!empty(optional(Auth::user()->payment)->payment_amount) && (optional(Auth::user()->payment)->payment_amount==1179))
                                                <a class="btn btn-primary btn-hover-heading-color">Subscribed</a>
                                               @else
                                                <a class="btn btn-primary btn-hover-heading-color" href="#" onclick="pay(1179)">Pay
                                                   Now</a>
                                                @endif
                                               @else
                                                 <a class="btn btn-primary btn-hover-heading-color" href="{{route('user-login')}}">Pay
                                                   Now</a>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Pricing End -->
                            </div>
                             <div class="col-lg-6 col-md-8">
                                <!-- Single Pricing Start -->
                                <div class="single-pricing active1">
                                    <div class="pricig-header">
                                        <h3 class="title">Platinum Plan</h3>
                                        <p>₹<span>15000</span>/-</p>
                                        <hr>
                                    </div>
                                    <div class="pricig-body">
                                        <p>Fee Structure: Latest fee structures of all medical colleges.</p>
                                        <p>Exclusive information & alerts of vacant seats at Mop-Up round. (Also, Offline & Stray vacancy Round.</p>
                                       
                                         <ul class="pricig-list">
                                            <p>Dedicated personal counsellor along with 3 level support system. Get direct discussion with Directors of the company at any time, if required. </p>
                                            <li>• 24x7 Alert for Counselling & Admission related Dates and instructions. Candidate will be informed via WhatsApp, Voice call& one to one Call.</li>
                                            <li>• Get Counselling services for AIQ + Deemed University + Government & Private Colleges of All states of your choice (Including your Home State) will be Guide by our Experts.</li>
                                            
                                        </ul>
                                        <p>Guidance And Strategy For Physical Counselling Round.</p>
                                        <p>Detailed information on Admission Procedure.</p>
                                        <p>Full Refund of Our Charges if Student fails to get a seat.</p>
                                        <p>Regular Updates on NMC Circulars and NTA NEET Notices.</p>
                                        <p>Score Based Analysis & Suggestions for Best Fit Colleges in your Budget.</p>
                                        <p>Information about Lowest Package of Management Quota/NRI/Other Quota seats.</p>
                                       <ul class="pricig-list">
                                            <p>Documentation: Keep all counselling documentation in order. </p>
                                            <li>• Fee Structure: Latest fee structures of all medical colleges.</li>
                                            <li>• Exclusive information & alerts of vacant seats at Mop-Up round. (Also, Offline & Stray vacancy Round.</li>
                                             <li>• Level support system. Get dir discussion with Directors of the company at.</li>
                                            
                                        </ul>
                                        </ul>
                                        <div class="pricig-header">
                                            <a href="#" target="_blank" class="btn btn-blue btn-hover-heading-color br_rad" style="margin-right: 10px;">Personal Guidance &amp; Call Support Available</a>
                                            @if(Auth::check())
                                               @if(!empty(optional(Auth::user()->payment)->payment_amount) && (optional(Auth::user()->payment)->payment_amount==17700))
                                                <a class="btn btn-primary btn-hover-heading-color">Subscribed</a>
                                               @else
                                                <a class="btn btn-primary btn-hover-heading-color" href="#" onclick="pay(17700)">Pay
                                                   Now</a>
                                                @endif
                                               @else
                                                 <a class="btn btn-primary btn-hover-heading-color" href="{{route('user-login')}}">Pay
                                                   Now</a>
                                                @endif
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
@endsection

@section('script')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $("#close").click(function() {
            $('#myModal').hide();
            location.reload();
        });


         function pay(amount) {
            var options = {
                "key": "rzp_live_RCHAyxmAi8eVcY", // Enter the Key ID generated from the Dashboard
                "amount": amount *
                    100, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "Careermedia",
                "description": "Subscription Plan",
                "image": "https://careermedia.ai/public/front_css/assets/images/logo.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function(response) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('payment.rozer') }}",
                        data: {
                            razorpay_payment_id: response.razorpay_payment_id
                        },
                        success: function(data) {
                            $('#myModal').show()
                            $('#payment_id').append(response.razorpay_payment_id);
                            $('#payment_amount').append(data.amount);
                        }
                    });
                },
                "prefill": {
                    "name": "{{ Auth::user()->name }}",
                    "email": "{{ Auth::user()->email }}",
                    "contact": "{{ Auth::user()->phone }}"
                },
                "theme": {
                    "color": "#EB5353"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>
@endsection
