<div class="footer-section section footer-bg">
    <div class="container">
        <!-- Footer Widget Wrapper Start -->
        <div class="footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">About Campus Bull</h4>
                        <div class="widget-info">
                            <p> We at Campus Bull(A unit of Globe Consulting Services), helps students in getting the besest posible college in their desied Branch.</p>
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
                                <li><a href="{{route('services')}}">Pricing</a></li>
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
                            <p><i class="flaticon-phone-call"></i> <a href="tel:+91-9341888827">+91-9341888827</a>, <a href="tel:+91-9036344111">+91-9036344111</a></p>
                            <p><i class="flaticon-placeholder"></i> <a
                                    href="mailto:info@campus_bull.com">info@campus_bull.com</a></p>
                            <p><i class="flaticon-open-mail"></i> <span>17, JDR complex new bel road Bengaluru (560094)</span>
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
            <p>&copy;2024 Campus Bull (A unit of Globe Consulting Services) All rights reserved. </p>
        </div>
        <!-- Footer Copyright End -->
    </div>
</div>



<div class="whatsp">
    <!--- whatsapp icon start here -->
    <a href="https://wa.me/9341888827" target="_blank">
        <img src="{{ asset('public/front_css/assets/images/neet-whatsapp.png') }}">
    </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Shailesh -->
<script>
    jQuery(function($) {
        var path = window.location.href;
        if (path == 'https://campusbull.com/') {} else {
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
