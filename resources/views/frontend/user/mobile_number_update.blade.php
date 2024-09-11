<!-- Modal HTML -->
<div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="verificationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verificationModalLabel">Phone Number Verification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Phone Number Form -->
                <div id="phone-number-form">
                    <h5>Enter Your Phone Number</h5>
                    <!-- <form id="sendOtpForm" action="{{ route('send.otp') }}" method="post"> -->
                    <!-- @csrf -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone_number" placeholder="Enter phone number"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Send OTP</button>
                    <!-- </form> -->
                </div>

                <!-- OTP Verification Form -->
                <div id="otp-form" style="display: none;">
                    <h5>Verify Your OTP</h5>
                    <!-- <form id="verifyOtpForm" action="{{ route('verify.otp') }}" method="post"> -->
                    <!-- @csrf -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required>
                    </div>
                    <button type="submit" class="btn btn-success">Verify OTP</button>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>