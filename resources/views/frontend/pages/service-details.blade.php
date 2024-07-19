@extends('frontend.layouts.front_app')
@section('content')
<style>
    .single-testimonial-02 {
       background-color: #e626270d;
    }
    .featured-content p {
       color: #000;
       text-align: justify;
    }
</style>
    <!-- Page Banner Start -->
    <div class="section mb-2">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('public/front_css/assets/images/PG-NEET-Counseling-banner-1.jpg') }}"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/front_css/assets/images/PG-NEET-Counseling-banner-1.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Page Banner End -->

    <div class="pt-3" style="background-color: #eb5353;">
        <div class="container">
            <div class="row justify-between items-center">
                <div class="col-md-12 text-white">

                    <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> 
                            <a href="#">NTA  Regarding NEET (UG) 2024 Posts Circulating on Social Media</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">NTA Ensures Fair Conduct of NEET (UG) 2024 Examination.</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">NEET 2024 Important Advisories</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">NTA - Admit Card 2024 Released</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">Goa MBBS Application Form 2024</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">Kerala MBBS 2024 Application Invited-Date Extended</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">NTA Re-Open the NEET 2024 Registration Window</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">Karnataka MBBS 2024 - Editing the Application details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">Kerala MBBS 2024 Registration Started</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">IPU MBBS 2024 Registration Date Extended</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">MBBS in Karnataka - Last Chance to Apply CET-2024</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">GOA MBBS Registration 2024 Process Started</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">NTA NEET 2024 Application Correction Window Update</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="#">MBBS in Karnataka - Instructions for the candidate related to Last chance for Application</a>
                        </marquee>
                </div>

            </div>
        </div>
    </div>
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <div class="course-lessons mb-3">
                        <div class="lessons-top mb-2">
                            <h3 class="title">Our Services & Package</h3>
                        </div>
                        <p>We specialize in offering comprehensive and up-to-date information on Medical Undergraduate
                            Courses such as MBBS, BDS, BVSC, BAMS, and BHMS, providing complete guidance through the
                            counseling and admission process without any donation requirements. Here are some of the
                            detailed services we offer:</p>
                    </div>
                    <div class="course-learn-list mb-3">
                        <h3 class="title">What you will learn</h3>
                        <ul>
                            <li>Become a UX designer.</li>
                            <li>Become a UX designer.</li>
                            <li>You will be able to add UX designer to your CV</li>
                            <li>You will be able to add UX designer to your CV</li>
                            <li>Build &amp; test a full website design.</li>
                            <li>Build &amp; test a full website design.</li>
                        </ul>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-lg-4">
                    <!-- Sidebar Wrapper Start -->
                    <div class="">
                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-description">
                                <h3>Book a Free Counselling!</h3> <hr>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" class="form-control" placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" class="form-control" placeholder="Your Phone*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="email" class="form-control" placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" class="form-control" placeholder="All india Rank*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <select name="course" class="form-control">
                                                    <option value="Course">Course</option>
                                                    <option value="NEET UG">NEET UG</option>
                                                    <option value="NEET PG">NEET PG</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <select name="category" class="form-control">
                                                    <option value="Category">Category</option>
                                                    <option value="General">General</option>
                                                    <option value="OBC">OBC</option>
                                                    <option value="SC">SC</option>
                                                    <option value="ST">ST</option>
                                                    <option value="EWS">EWS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <textarea class="form-control" placeholder="Write A Massage*"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="btn btn-outline-primary w-100 mb-3"><i class="fa fa-envelope"></i>
                                                Enquiry Now</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->
                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
            </div>
        </div>
    </div>


    <!-- Counter Start -->
    <div class="section counter-section pt-5 pb-4 bg-color-1">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2 class="title">Success Story of Campus Bull</h2>
            </div>
            <!-- Counter Wrapper Start -->
            <div class="counter-wrapper">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <!-- Single Counter Start -->
                        <div class="single-counters">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/trophy.png') }}" alt="Counter Image">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="2">0</span><span class="count"> Lakh+</span>
                                    <p>NEET College Predictor used</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col-md-3 col-6">
                        <!-- Single Counter Start -->
                        <div class="single-counters">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/research.png') }}" alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="3">0</span><span class="count"> Lakh+</span>
                                    <p>Counselling Enquiries</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col-md-3 col-6">
                        <!-- Single Counter Start -->
                        <div class="single-counters">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/discussion.png') }}"
                                        alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="1600">0</span><span class="count">+</span>
                                    <p>Counselling Services Provided</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col-md-3 col-6">
                        <!-- Single Counter Start -->
                        <div class="single-counters">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/letter.png') }}"
                                        alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="1700">0</span><span class="count">+</span>
                                    <p>Successful Admissions including 236 NRIs </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                </div>
            </div>
            <!-- Counter Wrapper End -->
        </div>
    </div>
    <!-- Counter End -->

    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                <!-- Course Lessons Start -->
                <div class="course-lessons">
                    <div class="lessons-top">
                        <h3 class="title">Faqs For Notifications & Updates</h3>
                    </div>
                    <!-- Course Accordion Start -->
                    <div class="course-accordion accordion" id="accordionCourse">
                        <div class="accordion-item">
                            <button data-bs-toggle="collapse" data-bs-target="#collapseOne">What notifications will I
                                receive? </button>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionCourse">
                                <div class="accordion-body">
                                    <p>Notifications on rules, guidelines, deadlines, application procedures, and
                                        documentation from various counseling authorities.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">How will I
                                receive this information?</button>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                                <div class="accordion-body">
                                    <p>Information will be delivered through SMS, WhatsApp, and Email.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Can I get
                                this information on my own?</button>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionCourse">
                                <div class="accordion-body">
                                    <p>Possible but time-consuming; our service saves time and ensures comprehensive
                                        coverage.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Will I be
                                reminded about deadlines?</button>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                                <div class="accordion-body">
                                    <p>Yes, regular reminders will be sent to ensure no deadlines are missed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course Accordion End -->

                </div>
                <!-- Course Lessons End -->
            </div>
            <div class="col-md-5">
               <img src="{{ asset('public/front_css/assets/images/faq.jpg') }}" alt="" class="img-fluid">
            </div>
            </div>
        </div>
    </div>

            <!-- Pricing Start --
            <div class="section section-padding bg-color-1">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title">Campus Bull Packages Price</h2>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-4 col-md-8">
                            <div class="single-pricing">
                                <div class="pricig-header">
                                    <h3 class="title">Basic</h3>
                                    <p>₹<span>2999</span>/mo</p>
                                </div>
                                <div class="pricig-body">
                                    <ul class="pricig-list">
                                        <li><span>10</span> HD Videos</li>
                                        <li><span>3</span> Personal Instructor</li>
                                        <li><span>Unlimited</span> Courses</li>
                                        <li><span>Unlimited</span> Students</li>
                                        <li><span>10,000</span> Quiezzes</li>
                                        <li><span>1,000</span> Active Members</li>
                                        <li><span>1</span> Website</li>
                                        <li><span>1</span> Admin User</li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary btn-hover-heading-color w-100 mt-3" href="#">Start For Free</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <div class="single-pricing active">
                                <div class="pricig-header">
                                    <h3 class="title">Professional</h3>
                                    <p>₹<span>7999</span>/mo</p>
                                </div>
                                <div class="pricig-body">
                                    <ul class="pricig-list">
                                        <li><span>10</span> HD Videos</li>
                                        <li><span>3</span> Personal Instructor</li>
                                        <li><span>Unlimited</span> Courses</li>
                                        <li><span>Unlimited</span> Students</li>
                                        <li><span>10,000</span> Quiezzes</li>
                                        <li><span>1,000</span> Active Members</li>
                                        <li><span>1</span> Website</li>
                                        <li><span>1</span> Admin User</li>
                                    </ul>
                                    <a class="btn btn-white btn-hover-heading-color mt-3 w-100" href="#">Start For Free</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <div class="single-pricing">
                                <div class="pricig-header">
                                    <h3 class="title">Advanced</h3>
                                    <p>₹<span>9999</span>/mo</p>
                                </div>
                                <div class="pricig-body">
                                    <ul class="pricig-list">
                                        <li><span>10</span> HD Videos</li>
                                        <li><span>3</span> Personal Instructor</li>
                                        <li><span>Unlimited</span> Courses</li>
                                        <li><span>Unlimited</span> Students</li>
                                        <li><span>10,000</span> Quiezzes</li>
                                        <li><span>1,000</span> Active Members</li>
                                        <li><span>1</span> Website</li>
                                        <li><span>1</span> Admin User</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-hover-heading-color w-100 mt-3" href="#">Start For Free</a>
                        </div>
                    </div>
                </div>
            </div>
             Pricing End -->

            {{-- <div class="section pb-4 pt-5">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title">Our Gallery</h2>
                    </div>
                </div>
                <div class="gallery-img-wrapper conatiner">
                    <div class="row g-0">
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="gallery-img">
                                <div class="image"><img src="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" alt=""> </div>
                                <a href="{{ asset('public/front_css/assets/images/neet-pg.jpg') }}" class="gallery-plus videoLightbox">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <section class="section section-padding bg-color-1">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="title"><span>How We Work just 4 simple Steps</span> </h2><br>
                    </div>
                </div>
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="rs-process">
                    <div class="row mt_15">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="image-procedure">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid auto_size" width="210" height="210" src="{{ asset('public/front_css/assets/images/free-councelling.jpg')}}" alt="image">
                                        <div class="process-num"><span class="number">01</span></div>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Free Counseling</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Collaborate with team &amp; partners. Get your work over the finish line.</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="image-procedure">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid auto_size" width="210" height="210" src="{{ asset('public/front_css/assets/images/college-admission.jpg')}}" alt="image">
                                        <div class="process-num"><span class="number">02</span></div>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Admission Process</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>'Campus Bull' has a team of expert and trained counselors who help students for their self assessment</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="image-procedure">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid auto_size" width="210" height="210" src="{{ asset('public/front_css/assets/images/documantaion.jpg')}}" alt="image">
                                        <div class="process-num"><span class="number">03</span></div>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Documentation Assistance</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>NEET PG Counselingity' helps you and guides you throughout the process of passport application</p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-procedure">
                                <div class="image-procedure">
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid auto_size" width="210" height="210" src="{{ asset('public/front_css/assets/images/guidence.jpg')}}" alt="image">
                                        <div class="process-num"><span class="number">04</span></div>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Post - Departure Guidance</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>At 'Campus Bull' we provide our students with some of the following post departure facilities. </p>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->
        <div class="section pb-5 pt-5">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2 class="title"><span>What Our Student Says</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
    
            <div class="testimonial-wrapper-02 testimonial-active-02">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02">
                                <div class="testimonial-text">
                                    <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                        also
                                        Varun insisted me personally to go for document verification in Karnataka which turned
                                        to be the best decision of my life.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                    </div>
                                    <div class="meta-content">
                                        <h5 class="name">Shailesh Ravat</h5>
                                        <p class="designation">(M.D Medicine)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02">
                                <div class="testimonial-text">
                                    <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                        also
                                        Varun insisted me personally to go for document verification in Karnataka which turned
                                        to be the best decision of my life.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                    </div>
                                    <div class="meta-content">
                                        <h5 class="name">Shailesh Ravat</h5>
                                        <p class="designation">(M.D Medicine)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02">
                                <div class="testimonial-text">
                                    <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                        also
                                        Varun insisted me personally to go for document verification in Karnataka which turned
                                        to be the best decision of my life.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                    </div>
                                    <div class="meta-content">
                                        <h5 class="name">Shailesh Ravat</h5>
                                        <p class="designation">(M.D Medicine)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02">
                                <div class="testimonial-text">
                                    <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                        also
                                        Varun insisted me personally to go for document verification in Karnataka which turned
                                        to be the best decision of my life.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                    </div>
                                    <div class="meta-content">
                                        <h5 class="name">Shailesh Ravat</h5>
                                        <p class="designation">(M.D Medicine)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                    </div>
    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
