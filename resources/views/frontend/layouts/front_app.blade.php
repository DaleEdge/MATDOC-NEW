<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title> NEET PG Counselling Services | NEET UG Counselling Services - MatDoc </title>
   <meta name="keywords"
      content="neet pg counselling 2024, neet pg counselling 2024 schedule, all india neet pg counselling 2024, neet pg counselling 2024 dates,neet pg counselling 2024 registration,neet pg counselling 2024 latest news,neet pg counselling 2024 result ">
   <meta name="description"
      content="neet pg counselling 2024, best neet pg colleges maharashtra neet pg counselling 2024, bihar neet pg counselling 2024, haryana neet pg counselling 2024,tamil nadu neet pg counselling 2024,karnataka neet pg counselling 2024,mp neet pg counselling 2024,rajasthan neet pg counselling 2024,up neet pg counselling 2024,assam neet pg counselling 2024,karnatka neet pg counselling 2024">

   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_css/assets/images/favicon.png')}}">
   <!-- Icon Font CSS -->
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/font-awesome.min.css')}}">
   <!-- <link rel="stylesheet" href="{{url("plugins/font-awesome/css/all.min.css?v=2")}}" /> -->
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/flaticon.css')}}">
   <!-- Plugins CSS -->
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/swiper-bundle.min.css')}}">
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/nice-select2.css')}}">
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/jquery.powertip.min.css')}}">
   <link rel="stylesheet" href="{{asset('front_css/assets/css/plugins/glightbox.min.css')}}">
   <!-- Main Style CSS -->
   <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
   <link rel="stylesheet" href="{{asset('front_css/assets/css/style.min.css')}}">
   <link rel="stylesheet" href="{{asset('dashboard_css/plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{asset('dashboard_css/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('dashboard_css/plugins/toastr/toastr.min.css')}}">
   <link rel="stylesheet" href="{{asset('dashboard_css/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
   <!-- Global site tag (gtag.js) - Google Analytics -->

   <!-- Jquery JS -->
   <script src="{{asset('front_css/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>

   <script src="{{asset('front_css/assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
   <!-- Bootstrap JS -->
   <script src="{{asset('front_css/assets/js/plugins/popper.min.js')}}"></script>
   <script src="{{asset('front_css/assets/js/plugins/bootstrap.min.js')}}"></script>
   <!-- Plugins JS -->
   <script src="{{asset('front_css/assets/js/plugins/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('front_css/assets/js/plugins/nice-select2.js')}}"></script>
   <script src="{{asset('front_css/assets/js/plugins/jquery.powertip.min.js')}}"></script>
   <script src="{{asset('front_css/assets/js/plugins/glightbox.min.js')}}"></script>
   <!-- Main JS -->
   <script src="{{asset('front_css/assets/js/main.js')}}"></script>
   <script src="{{asset('dashboard_css/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
   <!-- Toastr -->
   <script src="{{asset('dashboard_css/plugins/toastr/toastr.min.js')}}"></script>

   <script src="{{asset('dashboard_css/plugins/select2/js/select2.full.min.js')}}"></script>

   <style>
      .custom-menu-link {
         transition: all 0.3s ease;
         color: black !important
      }

      .custom-menu-link:hover:not(.nav-link.active) {
         /* transform: scale(1.05); */
         background-color: rgba(0, 0, 255, 0.4);
         text-decoration: none;
         color: black
      }

      .nav-link.active {
         /* transform: scale(1.05); */
         background-color: #678edd !important;
         text-decoration: none;
         --bs-text-opacity: 1;
      }

      .nav-link.active i {
         color: #ffcc00;
      }

      .nav-link.active span {
         color: white !important;
      }

      .text-secondary {
         color: #6c757d;
      }

      .text-danger {
         color: #dc3545;
      }

      .neet-pg-layout card {
         border: 1px solid grey;
         box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
         transition: box-shadow 0.3s ease;
      }
   </style>

</head>

<body>
   <div class="main-wrapper">
      <!-- Preloader Start  -->
      <div class="preloader">
         <div class="loader"></div>
      </div>
      <!-- Preloader End  -->

      @include('frontend.include.header')

      @yield('console-header')

      @yield('content')

      @include('frontend.include.footer')

      <button class="back-btn" id="backBtn"><i class="fa fa-angle-up"></i></button>
      <!-- Back to Top End -->
   </div>
</body>
<!-- JS

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


</html>