<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> NEET UG Counselling Services | NEET UG Counselling Services- The NEET UG Counselling </title>
      <meta name="keywords" content="neet pg counselling 2022, neet pg counselling 2022 schedule, all india neet pg counselling 2022, neet pg counselling 2022 dates,neet pg counselling 2022 registration,neet pg counselling 2022 latest news,neet pg counselling 2022 result ">
      <meta name="description" content="best neet pg colleges maharashtra neet pg counselling 2022, bihar neet pg counselling 2022, haryana neet pg counselling 2022,tamil nadu neet pg counselling 2022,karnataka neet pg counselling 2022,mp neet pg counselling 2022,rajasthan neet pg counselling 2022,up neet pg counselling 2022,assam neet pg counselling 2022,karnatka neet pg counselling 2022 ">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/front_css/assets/images/favicon.png')}}">
      <!-- Icon Font CSS -->
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/flaticon.css')}}">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/swiper-bundle.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/nice-select2.css')}}">
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/jquery.powertip.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/plugins/glightbox.min.css')}}">
      <!-- Main Style CSS -->
      <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
      <link rel="stylesheet" href="{{asset('public/front_css/assets/css/style.min.css')}}">
      <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1FFXRTE23D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1FFXRTE23D');
</script>
   </head>
   <body oncopy="return false" oncut="return false"  onselectstart="return false">
      <div class="main-wrapper">
         <!-- Preloader Start  -->
         <div class="preloader">
            <div class="loader"></div>
         </div>
         <!-- Preloader End  -->
  
@include('frontend.include.header-2')


    @yield('content')


@include('frontend.include.footer')

<button class="back-btn" id="backBtn"><i class="fa fa-angle-up"></i></button>
<!-- Back to Top End -->
</div>
<!-- JS
============================================ -->
<!-- Jquery JS -->
<script src="{{asset('public/front_css/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('public/front_css/assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('public/front_css/assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('public/front_css/assets/js/plugins/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('public/front_css/assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('public/front_css/assets/js/plugins/nice-select2.js')}}"></script>
<script src="{{asset('public/front_css/assets/js/plugins/jquery.powertip.min.js')}}"></script>
<script src="{{asset('public/front_css/assets/js/plugins/glightbox.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('public/front_css/assets/js/main.js')}}"></script>
<script src="{{asset('public/dashboard_css/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- Toastr -->
        <script src="{{asset('public/dashboard_css/plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('public/dashboard_css/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function () {

//Initialize Select2 Elements
   $('.select2').select2(
   {
      placeholder: 'Select Option',
    }
   );
  
});
var Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000
       }); 
</script>


@foreach (['error', 'warning', 'success', 'info'] as $msg)
@if(Session::has($msg))
<script>

   $(function () {
       var Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000
       }); 

       Toast.fire({
               icon: "{{$msg}}",
               title: "{{Session::get($msg)}}",
               showCloseButton: true,
           }); 
   });
</script>
@endif
@endforeach

@yield('script')
</body>
</html>