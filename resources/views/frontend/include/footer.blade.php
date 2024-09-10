<div class="footer-section section footer-bg">
    <div class="container">
        <!-- Footer Widget Wrapper Start -->
        <div class="footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">About MatDoc</h4>
                        <div class="widget-info">
                            <p> We at MatDoc, help students in getting the best possible college in their desired Branch.</p>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Useful Links</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('about_us')}}">About Us</a></li>
                                <li><a href="{{route('college_list')}}">College</a></li>
                                <li><a href="{{route('subscription_plans')}}">Packages</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Our Policies</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                                <li><a href="{{route('privacy_policy')}}">Package Policy</a></li>
                                <li><a href="{{route('term_condition')}}">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <div class="widget-info">
                            <p><i class="flaticon-phone-call"></i> <a href="tel:+91-6369149396" style="color:#c3bfbf">+91-6369149396</a>, <a href="tel:+91-8015958614" style="color:#c3bfbf">+91-8015958614</a></p>
                            <p><i class="flaticon-placeholder"></i> <a
                                    href="mailto:info@matdoc.in" style="color:#c3bfbf">info@matdoc.in</a></p>
                            <p><i class="flaticon-open-mail"></i> <span>639, Veeravanji St Vandiyur Madurai TamilNadu (625020)</span>
                            </p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget Wrapper End -->
        <!-- Footer Copyright End -->
        <div class="footer-copyright text-center">
            <p>&copy;2024 MatDoc All rights reserved. </p>
        </div>
        <!-- Footer Copyright End -->
    </div>
</div>



<div class="whatsp">
    <!--- whatsapp icon start here -->
    <a href="https://wa.me/6369149396" target="_blank">
        <img src="{{ asset('front_css/assets/images/neet-whatsapp.png') }}">
    </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Shailesh -->
<script>
    jQuery(function($) {
        var path = window.location.href;
        if (path == 'https://matdoc.in/') {} else {
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

    $(function() {
        $('.single-form a').click(function(e) {
            $('.single-form a').removeClass('active');
            $(this).addClass('active');
        });
    });
    $(function() {
        $('.single-category-items a').click(function(e) {
            $('.single-category-items a').removeClass('current');
            $(this).addClass('current');
        });
    });
</script>
