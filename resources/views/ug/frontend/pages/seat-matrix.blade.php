@extends('ug.frontend.layouts.front_app')
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
                  @include('ug.frontend.pages.seat-matrix_table')
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
         url: "{{route('ug.seat_matrix')}}",
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
      var baseUrl = "{{ route('ug.seat_matrix') }}";
      var url = baseUrl + $(this).attr('href');

      $.ajax({
         url: url,
         type: 'GET',
         success: function(data) {
            $('#table-container').html(data);
         }
      });
   });

   $(document).on('click', '.cr', function(event) {
      event.preventDefault();

      // Retrieve values from the data attributes of the clicked element
      var round = $(this).data('round');
      var quota = $(this).data('quota');
      var category = $(this).data('category');
      var state = $(this).data('state');
      var institute = $(this).data('institute');
      var seats = $(this).data('seats');
      var course = $(this).data('course');
      var session = $(this).data('session');
      var page = 1;

      function fetchData(page) {
         $.ajax({
            beforeSend: function() {
               $('.preloader').show(); // Show preloader before the request
            },
            url: "{{ route('ug.seat_matrix_details') }}", // URL for the AJAX request
            method: 'GET',
            data: {
               quota,
               category,
               state,
               institute,
               course,
               seats,
               round,
               session,
               page
            },
            success: function(data) {
               $('.preloader').hide(); // Hide preloader on successful response

               // Build HTML for the modal
               var html = '<div class="table-responsive"><table class="table" style="white-space:nowrap;">';
               html += '<thead><tr><th>Round</th><th>Quota</th><th>Category</th><th>State</th><th>Institute</th><th>Course</th><th>Seats</th><th>Fee</th><th>Beds</th><th>All India Rank</th></tr></thead><tbody class="table-body-contents">';
               if (data.data.length) {
                  data.data.forEach(function(item) {
                     html += '<tr>';
                     html += '<td>' + item.round + '</td>';
                     html += '<td>' + item.quota + '</td>';
                     html += '<td>' + item.category + '</td>';
                     html += '<td>' + item.state + '</td>';
                     html += '<td>' + item.institute + '</td>';
                     html += '<td>' + item.course + '</td>';
                     html += '<td>' + (item.seats !== null ? item.seats : '') + '</td>';
                     html += '<td>' + item.fee + '</td>';
                     html += '<td>' + item.beds + '</td>';
                     html += '<td>' + item.all_india_rank + '</td>';
                     html += '</tr>';
                  });
               } else {
                  html += '<tr><td colspan="10" style="text-align:center;">No data found</td></tr>';
               }
               html += '</tbody></table></div>';

               // Pagination links
               var paginationHtml = '';
               if (data.last_page > 1) {
                  paginationHtml += '<nav><ul class="pagination justify-content-center">';
                  data.links.forEach(function(link, index_num) {
                     if (link.url) {
                        paginationHtml += '<li class="page-item ' + (link.active ? 'active' : '') + '">';
                        paginationHtml += '<a class="page-link page_click" href="/ug/seat-matrix-details?page=' + index_num + '" data-page="' + new URL(link.url).searchParams.get('page') + '">' + link.label + '</button>';
                        paginationHtml += '</li>';
                     } else {
                        paginationHtml += '<li class="page-item disabled"><span class="page-link">' + link.label + '</span></li>';
                     }
                  });
                  paginationHtml += '</ul></nav>';
               }

               if ($('#seatMatrixDetailsModal').hasClass('show') == true) {
                  $(".table-body-contents").empty();
                  $('#seatMatrixDetailsModalBody').html(html + paginationHtml)
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               console.error('AJAX Error:', textStatus, errorThrown);
               alert("An error occurred: " + errorThrown);
               $('.preloader').hide(); // Hide preloader on error
            },
            complete: function() {
               $('.preloader').hide(); // Ensure preloader is hidden when request completes
            },
            timeout: 8000 // Set a timeout for the request
         });
      }

      fetchData(page);

      $(document).on('click', '.pagination .page_click', function(event) {
         event.preventDefault();
         var page = $(this).data('page');
         fetchData(page); // Fetch data for the clicked page
      });
   });
</script>
@endsection