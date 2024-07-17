@extends('frontend.layouts.front_app')
@section('content')
         <!-- Counter Start -->
         <div class="section counter-section section counter-section mb-5">
            <div class="container mt-5" style="margin-bottom:100px;">
               <div class="neet-pg-layout">
                  <div class="shadow custom-accordion-border card">
                     <div class="card-body">
                        <!-- End State -->
                             <div class="feature-category-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="{{route('get_college_hospital_detail','course=dematologiest')}}">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">Dematology</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=radiologies')}}" @endif  >
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Radiologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=tb_chests')}}" @endif   >
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif TB & CHEST</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                     <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=anaesthesias')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Anaesthesia</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=ents')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif ENT</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=general_medicines')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif General Medicines</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=general_surgeries')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif General Surgeries</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=orthopedices')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Orthopedices</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=paediatrices')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Paediatrices</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=pathologies')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Pathologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=preventive_social_medicine')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Preventive Social Medicine</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=psychiatries')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Psychiatries</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=ophthalmologies')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Ophthalmologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                     <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('get_college_hospital_detail','course=obstrtrics_and_gynaecologies')}}" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Obstrtrics And Gynaecologies</span>
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
      @endsection


















