@extends('frontend.layouts.front_app')
@section('content')
<style>
    form .error {
  color: #ff0000;
}
.otp_send{
    color: #4caf50;
    margin-top: 6px;
    font-size: 13px;
}

</style>
        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Forgot Password</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Forgot Password</li>
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
                        <div class="col-lg-6 m-auto">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <div class="login-register-form">
                                    <form action="{{route('password_forgot')}}" name="registration" method="post">
                                        @csrf()
                                        <div class="single-form">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone " required>
                                            <span id="phone_error" class="otp_send"></span>
                                        </div>
                                        <div id="otp" style="display:none;" class="otp_send">
                                        <div class="single-form">
                                            <input type="text" class="form-control" id="check_otp" name="check_otp" placeholder="OTP" required>
                                            <span id="otp_error" class="otp_send"></span>
                                        </div>
                                        <div class="single-form" id="password_div" style="display:none;">
                                            <input type="password" class="form-control" id="password" name="password"  placeholder="Password " required>
                                        </div>
                                    </div>
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-heading-color w-100">Reset Password</button>
                                        </div>
                                        <div class="text-center">
                                            <p class="mt-2">Already have an account? <a href="{{route('user-login')}}"> Login</a></p>
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
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" ></script>
<script>
$("#phone").keyup(function(){
    var phone=$('#phone').val();
    if(phone.length > 9){
       $.ajax({
           type:"POST",
           async: false,
           dataType: 'json',
           url:  "{{route('otp_forgot_password')}}",
           data: {
             _token: '{{ csrf_token() }}',
             phone: phone
          },
           success: function(response) {
            
             
               if(response.status==true){
                   $('#otp').show();
                     $('#phone_error').html('Otp Send Successfully !');

                     var otp=response.otp;
                     $.validator.addMethod(
                         'otpcheck',
                           function (value, element) {
                               return value == otp;
                            },
                             'Invalid Otp.'
                             );

                      return true;
               }
                 if(response.status==false){
                  $('#phone_error').html('Number Not Exits !');
                   return false;
               }
               if(response.status=='Wrong'){
                  $('#phone_error').html('Wrong Input !');
                   return false;
               }
           }
       });
     }
   });

   $("#check_otp").keyup(function(){
    var check_otp=$('#check_otp').val();
    if(check_otp.length > 3){
       $.ajax({
           type:"POST",
           async: false,
           dataType: 'json',
           url:  "{{route('check_otp')}}", 
           data: {
             _token: '{{ csrf_token() }}',
             otp: check_otp
          },
           success: function(response) {
             console.log(response);
             
               if(response.status==true){
                   $('#password_div').show();
                     $('#otp_error').html('Otp Verified !');
                      return true;
               }
                 if(response.status==false){
                    $('#password_div').hide();
                   return false;
               }
              
           }
       });
    }
   });

   $(function() {
 
  $("form[name='registration']").validate({
   
    rules: {
      phone: "required",
      check_otp: {
        required: true,
        otpcheck:true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
   
    messages: {
        phone: "Please enter phone",
        check_otp:{
            required: "Please provide  Otp",
            otpcheck:"Invalid Otp"
        },
      password: {
        required: "Please provide password",
        minlength: "Your password must be at least 5 characters long"
      },
     
    },
   
    submitHandler: function(form) {
      form.submit();
    }
  });
});


</script>
@endsection