@extends('frontend.layouts.front_app')
@section('content')
    @push('css')
        <style>
            .login-box {
                margin: 0;
                box-shadow: 0 0 20px 7px #f6f5f5;
            }
        </style>
    @endpush
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-lg-auto">
                    <div class="payment-card p-5">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <h4 class="gordita-bold text-center">
                                    Please Pay Rs.
                                    100/- On below given UPI
                                </h4>
                                <input type="hidden" value="campusbull@icici" id="upi_id">
                                <h1 class="gordita-bold text-center">
                                    campusbull@icici
                                    <a class="btn btn-primary py-1 px-3" onclick="copyText()" style="font-weight: 600;">
                                        <i class="fa fa-copy"></i> Copy UPI
                                    </a>
                                </h1>
                                <h5 class="text-center mb-2">
                                    After Payment share screenshot and registered email id on given number.
                                </h5>
                                <div class="text-center">
                                    <img src="{{ asset('public/front_css/assets/images/qr-code.png') }}" alt="" class="img-fluid">
                                    <p class="text-center" style="color: #372d7a;font-size:12px;font-weight:600;margin-top:5px;">Scan QR Code</p>
                                </div>
                                <h5 class="text-center mb-2">
                                    Payment Screenshot मैं सब Details Show होनी चाहिए। Like :- UTR / UPI Ref. Id ( 12 digital number )
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('js')
        <script>
            function copyText() {
                navigator.clipboard.writeText($('#upi_id').val());
                alert('Referrel Code Copied Successfully!');
            }
        </script>
    @endpush
    @endsection