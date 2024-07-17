@extends('frontend.layouts.front_app')
@section('content')

    <!-- Profile List Start -->
    <div class="section section-padding mb-5">
        <div class="container  mb-5">

            <div class="row justify-content-between">
                <div class="col-lg-3 mb-3">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-details-wrap">

                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-video">
                                @if(empty(Auth::user()->profile_img))
                                  <img src="{{ asset('public/front_css/assets/images/profile.png')}}" alt="User Profile">
                                @else
                                <img src="{{ asset('public/front_css/assets/images/'.Auth::user()->id.'/'.Auth::user()->customer->profile_image) }}" alt="User Profile">
                                @endif
                            </div>
                            <div class="sidebar-description">
                                <ul class="description-list">
                                    <li><a href="#dashboard" onclick="show_div('#dashboard')"><i class="fa fa-clock-o"></i> Dashboard</a></li>
                                    <li><a href="#"><i class="fa fa-sliders"></i> Subscription Plans </a></li>
                                    <!-- <li><a href="#"><i class="fa fa-file-o"></i> Lectures </a></li> -->
                                    <li><a href="#profile" onclick="show_div('#profile')"><i class="fa fa-language"></i> Manage Profile </a></li>
                                </ul>
                                {{-- <a class="btn btn-outline-primary w-100" href="#"><i class="fa fa-share"></i> Edit
                                    Profile</a> --}}
                            </div>
                        </div>
                    

                    </div>
                  
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="course-details-wrapper" id="dashboard">
                      
                        @include('frontend.user.dashboard')
                    </div>
                   
                    <div class="course-details-wrapper" id="profile" style="display:none;">
                      
                        @include('frontend.user.profile_info')
                     
                    </div>
                  
                </div>
            </div>


        </div>
    </div>
    <!-- Profile List End -->
@endsection
@section('script')
<script>

$(document).ready(function(){
    var pathname = window.location.hash;
    if(pathname){
        $('.course-details-wrapper').hide();
       $(pathname).show();
    }
});

   function show_div(id){
       $('.course-details-wrapper').hide();
       $(id).show();
   }

   function profile_update() {
     var form = $('#profile_form')[0];
        var formData = new FormData(form);
        $.ajax({
            beforeSend: function() {
              //  $('.preloader').show();
            },
            type:'POST',
            processData: false,
            contentType: false,
            url: "{{route('profile_update')}}",
            data:formData,
            success: function(data) {
                location.reload();
                // Toast.fire({icon: "success",title: "Profile Updated Successfully",showCloseButton: true,}); 
        },
         complete: function() {
            // $('.preloader').hide();
          }
        });

      }
</script>
@endsection