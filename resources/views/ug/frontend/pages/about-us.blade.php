@extends('frontend.layouts.front_app')
@section('content')
        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
         <img class="shape-4" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
         <img class="shape-5" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">

         <div class="container">
             <!-- Page Banner Content Start -->
             <div class="page-banner-content">
                 <h2 class="title">About Us</h2>
                 <ul class="breadcrumb justify-content-center">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active">About Us </li>
                 </ul>
             </div>
             <!-- Page Banner Content End -->
         </div>
     </div>
     <!-- Page Banner End -->
<div class="section section-padding">
   <div class="container">
       <!-- About Wrapper Start -->
       <div class="about-wrapper">
           <div class="row align-items-center">
               <div class="col-lg-6">
                   <!-- About Images Start -->
                   <div class="about-images">
                     <div class="">
                        <div class="image">
                           <img src="{{asset('public/front_css/assets/images/hero-1.png')}}" alt="Hero">
                        </div>
                     </div>
                   </div>
                   <!-- About Images End -->
               </div>
               <div class="col-lg-6">
                   <!-- About Images Start -->
                   <div class="about-content">
                       <h3 class="title">Career Media</h3>
                       <p>We at Career Media, helps students in getting the besest posible college in their desied Branch. We try to make the counselling process very smooth for each student, so that they can take the most imortant decision of choosing their college easily.  </p>
                       {{-- <ul>
                           <li>Get access to 4,000+ of our top courses </li>
                           <li>Popular topics to learn now </li>
                           <li>Find the right instructor for you </li>
                       </ul> --}}
                     </div>
                   <!-- About Images End -->
               </div>
           </div>
       </div>
       <!-- About Wrapper End -->
   </div>
</div>

   <div class="section section-padding bg-color-1">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2 class="title"><span>What Our Student Says</span> </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="testimonial-wrapper-02 testimonial-active-02">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02 bg-white">
                                <div class="testimonial-text">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Every call and every doubt was promptly handled there was no situation where i could not seek their help, the best thing was they have full and proper knowledge about councelling procedures, so they do not let you go in blind.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                      <img src="{{asset('public/front_css/assets/images/profile.png')}}" alt="NEET PG Counselling 2022">
                                    </div>
                                    <div class="meta-content">
                                         <h5 class="name">Dr. Aditya Bedia </h5>
                                     <p class="designation">MD Paediatrics</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02 bg-white">
                                <div class="testimonial-text">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Very efficient guidance and accurate prediction by MR Sidharth. Always 100% Accurate Prediction</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{asset('public/front_css/assets/images/profile.png')}}" alt="NEET PG Counselling 2022">
                                    </div>
                                    <div class="meta-content">
                                     <h5 class="name">Dr. Praneetha Modumudi</h5>
                                     <p class="designation">MS General Surgery</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02 bg-white">
                                <div class="testimonial-text">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                     <p>Your promptness, honest guidance and always answering all our queries. Thanks for all the help. Will be recommending you to my friends too.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{asset('public/front_css/assets/images/profile.png')}}" alt="NEET PG Counselling 2022">
                                    </div>
                                    <div class="meta-content">
                                     <h5 class="name">Dr.Priyanka Thakur</h5>
                                     <p class="designation">MS Obstetrics & Gynaecology</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02 bg-white">
                                <div class="testimonial-text">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Ready to help nature & family like advise giver always by Mr Siddarth.</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{asset('public/front_css/assets/images/profile.png')}}" alt="NEET PG Counselling 2022">
                                    </div>
                                    <div class="meta-content">
                                    <h5 class="name">Dr. Salman Khan</h5>
                                    <p class="designation">MD Anaesthesia</p>
                                    </div>
                                </div>

                            </div>
                            <!-- Single Testimonial End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Testimonial Start -->
                            <div class="single-testimonial-02 bg-white">
                                <div class="testimonial-text">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    <p>Very efficient guidance and accurate prediction by MR Sidharth. Always 100% Accurate Prediction</p>
                                </div>
                                <div class="testimonial-meta">
                                    <div class="testimonial-quote">
                                        <img src="{{asset('public/front_css/assets/images/profile.png')}}" alt="NEET PG Counselling 2022">
                                    </div>
                                    <div class="meta-content">
                                    <h5 class="name">Dr. Sajal Goyal </h5>
                                     <p class="designation">MD General Medicine</p>
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
     @endsection