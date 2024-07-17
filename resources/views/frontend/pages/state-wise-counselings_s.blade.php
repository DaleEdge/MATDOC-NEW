@extends('frontend.layouts.front_app')
@section('content')
         <!-- Counter Start -->
         <div class="section counter-section section counter-section mb-5">
            <div class="container mt-5 mb-5">
               <div class="neet-pg-layout">
                <div class="row">
                  <div class="col-md-12 mb-3">
                <!-- Single Form Start -->
                <div class="single-form">
                    <a href="#" class="btn btn-primary btn-hover-heading-color mb-3 wd-100 active">State Counseling Government</a>
                    <a href="#" class="btn btn-primary btn-hover-heading-color mb-3 wd-100">State Counseling Private</a>
                </div>

                <!-- Single Form End -->
                  </div>
                </div>
                  <div class="shadow custom-accordion-border card">
                     <div class="card-body">
                        <!-- Include State -->
                        <div class="row">
                           <div class="col-12">
                              <div class="row">
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details_andhra','state=andhra_pradeshes')}}" class="current">
                                                <span class="title">Andhra Pradesh</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=assams')}}" style="background:#e91e63;">
                                                <span class="title"> Assam</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div> 
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=bihars')}}" style="background:#ffc107;">
                                                <span class="title"> Bihar</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=chandigarhs')}}" style="background:rgb(20, 240, 68);">
                                                <span class="title"> Chandigarh</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=chhattisgarhs')}}" style="background:rgb(105 115 205);">
                                                <span class="title"> Chhattisgarh</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                     <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=gujarats')}}" style="background:rgb(199 112 201);">
                                                <span class="title"> Gujarat</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=haryanas')}}" style="background:rgb(109 183 225);">
                                                <span class="title"> Haryana</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=himachal_pradeshes')}}" style="background:#009688;">
                                                <span class="title"> Himachal Pradesh</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=jammu_and_kashmirs')}}" style="background:rgb(67, 169, 228);">
                                                <span class="title"> Jammu and Kashmir</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=jharkhands')}}" style="background:rgba(58, 129, 85, 0.555);">
                                                <span class="title"> Jharkhand</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=karnatakas')}}" style="background:rgb(189 213 55);">
                                                <span class="title"> Karnataka</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=keralas')}}" style="background:rgb(35 88 167 / 67%);">
                                                <span class="title"> Kerala</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=madhya_pradeshes')}}" style="background:rgb(88, 128, 109);">
                                                <span class="title"> Madhya Pradesh</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=maharashtras')}}" style="background:rgb(124, 230, 75);">
                                                <span class="title"> Maharashtra</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=manipurs')}}" style="background:rgba(36, 53, 63, 0.527);">
                                                <span class="title"> Manipur</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=meghalayas')}}" style="background:rgb(166, 93, 248);">
                                                <span class="title"> Meghalaya</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=odishas')}}" style="background:rgba(116, 34, 34, 0.479);">
                                                <span class="title"> Odisha</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=pondicherries')}}" style="background:rgb(205 189 51);">
                                                <span class="title"> Pondicherry</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=punjabs')}}" style="background:rgb(49 166 171);">
                                                <span class="title"> Punjab</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=rajasthans')}}" style="background:rgb(191 156 79);">
                                                <span class="title"> Rajasthan</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                   
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=tamil_nadus')}}" style="background:rgba(4, 58, 87, 0.459);">
                                                <span class="title"> Tamil Nadu</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=telanganas')}}" style="background:rgb(70, 167, 223);">
                                                <span class="title"> Telangana</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=tripuras')}}" style="background:rgb(2 116 59 / 68%);">
                                                <span class="title"> Tripura</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=uttar_pradeshes')}}" style="background:rgb(80 86 21);">
                                                <span class="title"> Uttar Pradesh</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=uttarakhands')}}" style="background:#607d8b;">
                                                <span class="title"> Uttarakhand</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-items">
                                            <a href="{{route('state_wise_counseling_details','state=west_bengals')}}" style="background:rgb(86, 43, 240);">
                                                <span class="title"> West Bengal</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endsection