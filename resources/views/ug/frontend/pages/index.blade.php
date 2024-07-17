@extends('frontend.layouts.front_app') @section('content')
<!-- Slider Start -->
<div class="slider-section section bg-color-1">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6 col-sm-8 m_hide">
				<!-- Slider Images Start -->
				<div class="slider-images">
					<div class="image"> <img src="{{asset('public/front_css/assets/images/hero-1.png')}}" alt="NEET UG Counselling"> </div>
				</div>
				<!-- Slider Images End -->
			</div>
			<div class="col-md-6">
				<!-- Slider Start -->
				<div class="slider-content">
                        <h2 class="title">Your One Stop Solution for NEET UG Counselling</h2>
                        <h5 class="sub-title mt-3">Everything you need to assure your career in medical & dental field</h5>
                           <p>Right Information is key to success & we are determined to provide all the information you need to make your desicion, available at one place.</p>
					<div class="slider-btn mt-3 d-flex">
					<a href="#" target="_blank" class="btn btn-blue btn-hover-heading-color br_rad" style="margin-right: 10px;"> <i class="fa fa-telegram" aria-hidden="true"></i> Join NEET UG Telegram Group</a>
                        <a href="https://www.youtube.com/c/CAREERMEDIA" target="_blank" class="btn btn-danger btn-hover-heading-color br_rad"> <i class="fa fa-youtube" aria-hidden="true"></i> YOUTUBE-Career Media NEET PG </a>
					</div>
				</div>
				<!-- Slider End -->
			</div>
		</div>
	</div>
</div>
<!-- Slider End -->
<div class="section section-padding banner-section d-md-none d-sm-block">
	<div class="container">
		<!-- Banner Start -->
		<div class="banner-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<!-- Single Banner Start -->
					<div class="single-banner">
						<div class="banner-images"> <img src="{{asset('public/front_css/assets/images/banner-01.jpg')}}" alt="NEET UG Counselling"> </div>
						<div class="banner-content">
							<h6><a href="#">To Acess all the Preious Years Cutoffs, Fees, Stipend, Statewise Bond and all the details. LOGIN.</a></h6> <a href="{{route('user-login')}}" class="btn btn-primary btn-hover-heading-color w-50 zoom-in-out-box">Login Now</a> </div>
					</div>
					<!-- Single Banner End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
	</div>
</div>
<!-- Counter Start -->
<div class="section counter-section feature-section">
	<div class="container">
		<!-- Counter Wrapper Start -->
		<div class="counter-wrapper">
		    
			<div class="row row-cols-2 row-cols-sm-4">
				<div class="col">
					<!-- Single Counter Start -->
					<div class="single-counter">
						<div class="counter-box">
							<div class="counter-icon"> <img src="{{asset('public/front_css/assets/images/icon-1.png')}}" alt="NEET UG Counselling"> </div>
							<div class="counter-content"> <span class="count value" data-count="95">0</span><span class="count">%</span>
								<p>Success Rate</p>
							</div>
						</div>
					</div>
					<!-- Single Counter End -->
				</div>
				<div class="col">
					<!-- Single Counter Start -->
					<div class="single-counter">
						<div class="counter-box">
							<div class="counter-icon"> <img src="{{asset('public/front_css/assets/images/icon-2.png')}}" alt="NEET UG Counselling"> </div>
							<div class="counter-content"> <span class="count value" data-count="1000">0</span><span class="count">%</span>
								<p>Complete Guidance</p>
							</div>
						</div>
					</div>
					<!-- Single Counter End -->
				</div>
				<div class="col">
					<!-- Single Counter Start -->
					<div class="single-counter">
						<div class="counter-box">
							<div class="counter-icon"> <img src="{{asset('public/front_css/assets/images/icon-3.png')}}" alt="NEET UG Counselling"> </div>
							<div class="counter-content"> <span class="count value" data-count="100">0</span><span class="count">%</span>
								<p>Responsible</p>
							</div>
						</div>
					</div>
					<!-- Single Counter End -->
				</div>
				<div class="col">
					<!-- Single Counter Start -->
					<div class="single-counter">
						<div class="counter-box">
							<div class="counter-icon"> <img src="{{asset('public/front_css/assets/images/icon-4.png')}}" alt="NEET UG Counselling"> </div>
							<div class="counter-content"> <span class="count value" data-count="1200">0</span><span class="count">+</span>
								<p>Candidates Counseled </p>
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
<!-- Courses Start -->
<div class="section section-padding bg-color-1">
	<div class="container">
		<!-- Section Title Start -->
		<div class="section-title text-center">
			<h2 class="title"><span>Why trust Career Media??</span> </h2> </div>
		<!-- Section Title End -->
		<!-- Courses Wrapper Start -->
		<div class="blog-wrapper">
			<div class="row">
				<div class="col-lg-6 col-sm-6">
					<!-- Single Courses Start -->
					<div class="single-course">
						<div class="courses-image">
							<a href="course-details.html"><img src="{{asset('public/front_css/assets/images/blog/blog-1.png')}}" alt="NEET UG Counselling 2022"></a>
						</div>
						<div class="courses-content">
							<h3 class="title">100% Complete Admission Guidance</h3>
							<p>Get complete guidance till your admission with full knowledge of collegewise details like Collegewise fee structure, branchwise closing ranks, Stipend Amount Provided, Bond and seat leaving penalty etc, and all the information at your fingertips.</p>
						</div>
					</div>
					<!-- Single Courses End -->
				</div>
				<div class="col-lg-6 col-sm-6">
					<!-- Single Courses Start -->
					<div class="single-course">
						<div class="courses-image">
							<a href="course-details.html"><img src="{{asset('public/front_css/assets/images/blog/blog-2.png')}}" alt="NEET UG Counselling 2022"></a>
						</div>
						<div class="courses-content">
							<h3 class="title">Collegewise Hospital Details for better Choice Filling</h3>
							<div class="course-learn-list">
								<h5 style="font-size: 14px;">Get Complete Hospitalwise Informations like</h5>
								<ul>
									<li>Daily Basis OPD</li>
									<li>Hospital Beds, ICU Beds</li>
									<li>Daily Basis MRI, CT Scan, Ultrasounds etc.</li>
									<li>No of monthly Cesarian Delivery/Normal Delivery.</li>
									<li>Major Surgery, Minor Surgery etc</li>
									<li>All branchwise hospital details </li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Single Courses End -->
				</div>
				<div class="col-lg-6 col-sm-6">
					<!-- Single Courses Start -->
					<div class="single-course">
						<div class="courses-image">
							<a href="course-details.html"><img src="{{asset('public/front_css/assets/images/blog/blog-3.png')}}" alt="NEET UG Counselling 2022"></a>
						</div>
						<div class="courses-content">
							<h3 class="title">Personalized Student Report</h3>
							<div class="course-learn-list">
								<p>A personalized college availability report for every candidate based on rank, budget, branch requirement, category, states preffered will be designed and will be sent to e-mail and can be downloaded.</p>
							</div>
						</div>
					</div>
					<!-- Single Courses End -->
				</div>
				<div class="col-lg-6 col-sm-6">
					<!-- Single Courses Start -->
					<div class="single-course">
						<div class="courses-image">
							<a href="course-details.html"><img src="{{asset('public/front_css/assets/images/blog/blog-4.png')}}" alt="NEET UG Counselling 2022"></a>
						</div>
						<div class="courses-content">
							<h3 class="title"> One to One Counselling Support, and All Doubts & queries answering.</h3>
							<div class="course-learn-list">
								<p>We will guide you through all required information so that you can get the best possible college per your branch. Our team will guide and monitor you till your admission.</p>
							</div>
						</div>
					</div>
					<!-- Single Courses End -->
				</div>
			</div>
		</div>
		<!-- Courses Wrapper End -->
	</div>
</div>
<!-- Courses End -->
        <!-- Testimonial Start -->
        <div class="section section-padding">
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
                            <div class="single-testimonial-02">
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
                            <div class="single-testimonial-02">
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
                            <div class="single-testimonial-02">
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
                            <div class="single-testimonial-02">
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
                            <div class="single-testimonial-02">
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
        <!-- Testimonial End -->
        {{--
<div class="section section-padding pt-0 mb-3">
	<div class="container">
		<!-- Section Title Start -->
		<div class="section-title text-center">
			<h2 class="title"><span>The NEET UG Counselling</span> </h2> </div>
		<!-- Section Title End -->
	</div>
	<!-- Pricing Wrapper End -->
	<div class="pricing-wrapper">
		<div class="tab-content">
			<div class="tab-pane fade show active">
				<div class="row justify-content-center gx-0">
					<div class="col-lg-4 col-md-8">
						<!-- Single Pricing Start -->
						<div class="single-pricing">
							<div class="pricig-header">
								<h3 class="title">Basic</h3>
								<p>₹<span>29</span>/mo</p> <a class="btn btn-primary btn-hover-heading-color" href="#">Start For Free</a> </div>
							<div class="pricig-body">
								<ul class="pricig-list">
									<li>Maharashtra CPS Counseling Information</li>
									<li>Announcements & Updates</li>
									<li>Notifications of Other Counselings</li>
									<li>Allotments, Closing Ranks of 2020 Round 1 and Round 2 of Maharashtra CPS Counseling</li>
									<li>Correlating / Analyzing Information of 2020 and 2021 counselings (shifts across rounds instantly)</li>
									<li>View of allotment and closing rank data instantly across all rounds, filterable across rank range, Courses, Categories etc.</li>
									<li>Not in Scope - CHS Mahrashtra data & Other State CPS Data for 2020/2021</li>
								</ul>
								</ul>
							</div>
						</div>
						<!-- Single Pricing End -->
					</div>
					<div class="col-lg-4 col-md-8">
						<!-- Single Pricing Start -->
						<div class="single-pricing active">
							<div class="pricig-header">
								<h3 class="title">Professional</h3>
								<p>₹<span>79</span>/mo</p> <a class="btn btn-white btn-hover-heading-color" href="#">Start For Free</a> </div>
							<div class="pricig-body">
								<ul class="pricig-list">
									<li>Maharashtra CPS Counseling Information</li>
									<li>Announcements & Updates</li>
									<li>Notifications of Other Counselings</li>
									<li>Allotments, Closing Ranks of 2020 Round 1 and Round 2 of Maharashtra CPS Counseling</li>
									<li>Correlating / Analyzing Information of 2020 and 2021 counselings (shifts across rounds instantly)</li>
									<li>View of allotment and closing rank data instantly across all rounds, filterable across rank range, Courses, Categories etc.</li>
									<li>Not in Scope - CHS Mahrashtra data & Other State CPS Data for 2020/2021</li>
								</ul>
								</ul>
							</div>
						</div>
						<!-- Single Pricing End -->
					</div>
					<div class="col-lg-4 col-md-8">
						<!-- Single Pricing Start -->
						<div class="single-pricing">
							<div class="pricig-header">
								<h3 class="title">Advanced</h3>
								<p>₹<span>99</span>/mo</p> <a class="btn btn-primary btn-hover-heading-color" href="#">Start For Free</a> </div>
							<div class="pricig-body">
								<ul class="pricig-list">
									<li>Maharashtra CPS Counseling Information</li>
									<li>Announcements & Updates</li>
									<li>Notifications of Other Counselings</li>
									<li>Allotments, Closing Ranks of 2020 Round 1 and Round 2 of Maharashtra CPS Counseling</li>
									<li>Correlating / Analyzing Information of 2020 and 2021 counselings (shifts across rounds instantly)</li>
									<li>View of allotment and closing rank data instantly across all rounds, filterable across rank range, Courses, Categories etc.</li>
									<li>Not in Scope - CHS Mahrashtra data & Other State CPS Data for 2020/2021</li>
								</ul>
								</ul>
							</div>
						</div>
						<!-- Single Pricing End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Pricing Wrapper End -->
</div>
</div> --}} @endsection