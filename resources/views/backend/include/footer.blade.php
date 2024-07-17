        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="#" target="_blank"></a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('public/dashboard_css/plugins/jquery/jquery.min.js')}}"></script>

        <script src="{{ asset('public/assets/js/vendors.js') }}"></script>
        <script src="{{ asset('public/assets/js/aiz-core.js') }}"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('public/dashboard_css/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('public/dashboard_css/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('public/dashboard_css/plugins/chart.js/Chart.min.js')}}"></script>
        
        <!-- jQuery Knob Chart -->
        <script src="{{asset('public/dashboard_css/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('public/dashboard_css/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('public/dashboard_css/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('public/dashboard_css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('public/dashboard_css/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('public/dashboard_css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- SweetAlert2 -->
        <!-- Bootstrap Switch -->
        <script src="{{asset('public/dashboard_css/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
        <script src="{{asset('public/dashboard_css/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- Toastr -->
        <script src="{{asset('public/dashboard_css/plugins/toastr/toastr.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('public/dashboard_css/dist/js/adminlte.js')}}"></script>
        
        <!-- Select2 -->
        <script src="{{asset('public/dashboard_css/plugins/select2/js/select2.full.min.js')}}"></script>

        <!-- bs-custom-file-input -->
        <script src="{{asset('public/dashboard_css/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>  

        <!-- jquery-validation -->
        <script src="{{asset('public/dashboard_css/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/dashboard_css/plugins/jquery-validation/additional-methods.min.js')}}"></script>

        <!-- Ekko Lightbox -->
        <script src="{{asset('public/dashboard_css/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
        <!-- Filterizr-->
        <script src="{{asset('public/dashboard_css/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
        <script>
            $(function () {
                $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })


    
                //Initialize Select2 Elements
                $('.select2').select2() 

                // Summernote
                $('.summernote').summernote();

                //Image Input
                bsCustomFileInput.init();

                //Date picker
                $('.reservationdate').datetimepicker({
                    format: 'L'
                });

                // Form Validation By id valid_form

                $('#valid_form').validate({
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    }
                });

                // Form Validation By Class valid_form

                $('.valid_form').validate({
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    }
                });
              
            });

            // Enter Only Number

            jQuery.fn.ForceNumericOnly =
            function()
            {
                return this.each(function()
                {
                    $(this).keydown(function(e)
                    {
                        var key = e.charCode || e.keyCode || 0;
                        
                        return (
                            key == 8 || 
                            key == 9 ||
                            key == 13 ||
                            key == 46 ||
                            key == 110 ||
                            key == 190 ||
                            (key >= 35 && key <= 40) ||
                            (key >= 48 && key <= 57) ||
                            (key >= 96 && key <= 105));
                    });
                });
            };
            
            $(".number_only").ForceNumericOnly();
        </script>

    </body>

</html>