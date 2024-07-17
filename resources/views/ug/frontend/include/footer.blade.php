        <div class="footer-section section footer fixed-bottom" style=" bottom:0;">
            <div class="container">

                <!-- Footer Widget Wrapper Start -->
                <div class="footer-widget-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="copyright">
                                        <p>Copyright 2022 Career Media, All Rights Reserved.</p>
                                    </div>
                                    <ul class="footer-nav-menu footer-nav-menu d-flex">
                                        <li><a href="{{route('term_condition')}}">Terms &amp; Conditions</a></li>
                                        <li><a href="{{route('privacy_policy')}}">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- Footer Widget Wrapper End -->


            </div>
        </div>


        <div class="whatsp">
            <!--- whatsapp icon start here -->
            <a href="https://wa.me/919591692952" target="_blank">
            <img src="{{ asset('public/front_css/assets/images/neet-whatsapp.png')}}">
            </a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Shailesh -->
        <script>
       jQuery(function($) {
     var path = window.location.href; 
     if(path=='http://localhost/varun_new/'){
    }
    else{
     // because the 'href' property of the DOM element is the absolute path
     $('.main-menu li a').removeClass('active');
     $('.main-menu li a').each(function() {
      if (this.href === path) {
       $(this).addClass('active');
      }
     });
    }
    });

    jQuery(function($) {
     var path = window.location.href; 
     // because the 'href' property of the DOM element is the absolute path
     $('.navbar-navs li a').removeClass('active');
     $('.navbar-navs li a').each(function() {
      if (this.href === path) {
       $(this).addClass('active');
      }
     });
    });

    $(function () {
        $('.single-form a').click(function (e) {
            $('.single-form a').removeClass('active');
            $(this).addClass('active');
        });
      });
      $(function () {
        $('.single-category-items a').click(function (e) {
            $('.single-category-items a').removeClass('current');
            $(this).addClass('current');
        });
      });

        </script>

