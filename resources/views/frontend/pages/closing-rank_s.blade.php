@extends('frontend.layouts.front_app')
<style>
.header-top-wrapper .header-social ul li a {
    padding-top: 7px;
}
.fa-lock:before {
    content: "\f023";
    color: #eb5353;
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
                                  
                                 <li class="nav-item"><a href="#" onclick="fetch_data('All Indias')"  class="active nav-link"> MCC</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Andhra Pradeshes')"  class="nav-link">  Andhra Pradesh</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Assams')"     class="nav-link"> Assam</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Bihars')"  class="nav-link"> Bihar</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Chandigarhs')"    class="nav-link"> Chandigarh</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Chhattisgarhs')"   class="nav-link"> Chhattisgarh</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Gujarats')"    class="nav-link"> Gujarat</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Haryanas')"    class="nav-link"> Haryana</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Jammu and Kashmirs')"     class="nav-link"> Jammu and Kashmir</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Jharkhands')"   class="nav-link"> Jharkhand</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Karnatakas')"     class="nav-link"> Karnataka</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Keralas')"    class="nav-link"> Kerala</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Madhya Pradeshes')"    class="nav-link"> Madhya Pradesh</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Maharashtras')"   class="nav-link"> Maharashtra</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Manipurs')"   class="nav-link"> Manipur</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Meghalayas')"  class="nav-link"> Meghalaya</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Odishas')"    class="nav-link"> Odisha</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Pondicherries')"   class="nav-link"> Pondicherry</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Punjabs')"  class="nav-link"> Punjab</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Rajasthans')"     class="nav-link"> Rajasthan</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Tamil Nadus')"     class="nav-link"> Tamil Nadu</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Telanganas')"    class="nav-link"> Telangana</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Tripuras')"    class="nav-link"> Tripura</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Uttar Pradeshes')"    class="nav-link"> Uttar Pradesh</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('Uttarakhands')"     class="nav-link"> Uttarakhand</a></li>
                                 <li class="nav-item"><a   onclick="fetch_data('West Bengals')"    class="nav-link"> West Bengal</a></li>
                              </ul>
                           </div>
                        </div>
                        <!-- End State -->
                        <hr>
                        <div class="row" id="table">
                           @include('frontend.pages.closing-rank_table')
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
   
   $(function () {
        $('.nav li a').click(function (e) {
            $('.nav li a').removeClass('active');
            $(this).addClass('active');
        });
      });



    function fetch_data(state) {
        $.ajax({
            beforeSend: function() {
                $('.preloader').show();
            },
            url: "{{route('closing_rank')}}",
            data:{
               'state':state
            },
            success: function(data) {
                $('#table').html(data);
        },
         complete: function() {
             $('.preloader').hide();
          }
        });
      }


   
</script>
@endsection