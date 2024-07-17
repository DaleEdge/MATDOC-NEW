@extends('frontend.layouts.front_app')
@section('content')
        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
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
                   <div class="about-content">
                       <h1 class="title">Campus Bull</h1>
                       <p>We at Campus Bull(A unit of Globe Consulting Services), helps students in getting the besest posible college in their desied Branch. We try to make the counselling process very smooth for each student, so that they can take the most imortant decision of choosing their college easily.  </p>
                       {{-- <ul>
                           <li>Get access to 4,000+ of our top courses </li>
                           <li>Popular topics to learn now </li>
                           <li>Find the right instructor for you </li>
                       </ul> --}}
                     </div>
                   <!-- About Images End -->
               </div>
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
           </div>
       </div>
       <!-- About Wrapper End -->
   </div>
</div>

    <!-- Testimonial End -->
    <div class="section section-padding">
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
                                <p>Found everything I wanted and it solved all of my queries for which I was searching a lot....very helpful site. A must visit.... kudos to the team!</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                    <h5 class="name">Neha Gupta</h5>
                                    <p class="designation">Medical Aspirant </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial-02">
                            <div class="testimonial-text">
                                <p>When you look back in life , this app would have played a huge role in laying the foundation of your career decisions.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                <h5 class="name">Abhishek Singh</h5>
                                <p class="designation">Medical Aspirant </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial-02">
                            <div class="testimonial-text">
                                <p>No need to find colleges in other sites, this is the best site in India to know about any colleges in India.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                <h5 class="name">Ranjit yadav</h5>
                                <p class="designation">Medical Aspirant  </p>
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