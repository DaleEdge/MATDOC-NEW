@extends('frontend.layouts.front_app')
<style>
   .header-top-wrapper .header-social ul li a {
      padding-top: 7px;
   }

   .fa-lock:before {
      content: "\f023";
      color: #ff9529;
   }
</style>
@section('content')
<!-- Counter Start -->
<div class="section counter-section section counter-section mb-5">
   <div class="container mt-5" style="margin-bottom:100px;">
      <div class="neet-pg-layout">
         <div class="shadow custom-accordion-border card">
            <div class="card-body">
               <!-- Include State -->
               <div class="row">
                  <div class="col-12">
                     <ul class="nav">





                        <li class="nav-item"><a onclick="fetch_data('Bihars')" class="nav-link"> Bihar</a></li>



                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Chhattisgarhs')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Chhattisgarh</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Gujarats')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Gujarat</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Haryanas')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Haryana</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Himachal Pradeshes')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Himachal Pradesh</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Jammu and Kashmirs')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Jammu and Kashmir</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Jharkhands')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Jharkhand</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Karnatakas')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Karnataka</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Madhya Pradeshes')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Madhya Pradesh</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Maharashtras')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Maharashtra</a></li>

                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Pondicherries')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Pondicherry</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Punjabs')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Punjab</a></li>

                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Telanganas')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Telangana</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Uttar Pradeshes')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Uttar Pradesh</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Uttarakhands')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Uttarakhand</a></li>
                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('West Bengals')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif West Bengal</a></li>

                        <li class="nav-item"><a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @endif @if(!empty(optional(Auth::user()->payment)->user_id)) onclick="fetch_data('Tamilnadu')" @endif class="nav-link">@if(empty(optional(Auth::user()->payment)->user_id))<i class="fa fa-lock"></i>@endif Tamilnadu</a></li>
                     </ul>
                  </div>
               </div>
               <!-- End State -->
               <hr>
               <div class="row" id="table">
                  @include('frontend.pages.home_table')
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
@section('script')
<script>
   fetch_data('all_indias');
   $(function() {
      $('.nav li a').click(function(e) {
         $('.nav li a').removeClass('active');
         $(this).addClass('active');
      });
   });

   function fetch_data(state) {
      $.ajax({
         beforeSend: function() {
            $('.preloader').show();
         },
         url: "{{route('home_user')}}",
         data: {
            'state': state
         },
         success: function(data) {
            $('#table').html(data);
         },
         complete: function() {
            $('.preloader').hide();
         }
      });
   }

   $(document).on('click', '.pagination a', function(event) {
      event.preventDefault();
      var baseUrl = "{{ route('home_user') }}";
      var url =  baseUrl + $(this).attr('href');

      $.ajax({
         url:  url,
         type: 'GET',
         success: function(data) {
            $('#table-container').html(data);
         }
      });
   });
</script>
@endsection