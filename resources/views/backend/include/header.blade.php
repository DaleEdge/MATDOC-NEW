<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="app-url" content="{{ getBaseURL() }}">
	<meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/toastr/toastr.min.css')}}">

    <!-- Ekko Lightbox --> 
    <link rel="stylesheet" href="{{asset('public/dashboard_css/plugins/ekko-lightbox/ekko-lightbox.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet" media="all">
    {{-- <link rel="stylesheet" href="{{ asset('public/assets/css/vendors.css') }}">

    <link rel="stylesheet" href="{{ asset('public/assets/css/aiz-core.css') }}">
    <script>
        var AIZ = AIZ || {};
    </script> --}}


    <script>
        $(function () {
            
            // Show Toast Message
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            $( document ).ready(function() {
                var success_message = "{{Session::get('success')}}";
                var error_message = "{{Session::get('error')}}";
                
                if(success_message != ""){
                    success_sweet_alert(success_message);
                }
                if(error_message !=""){
                    error_sweet_alert(error_message)
                }
                
            });
            
            function success_sweet_alert(success_message){
                Toast.fire({
                    icon: 'success',
                    title: success_message
                }); 
            }
            
            function error_sweet_alert(error_message){
               Toast.fire({
                    icon: 'error',
                    title: error_message
                }); 
            }
          
        });
    </script>
</head>
{{-- <style>
    .card-title {
        font-size: 25px;
    }
</style> --}}
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('public/dashboard_css/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div> --}}

        
        <!-- Navbar -->
        @include('backend.include.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.include.sidebar')
        <!-- /. Main Sidebar Container -->