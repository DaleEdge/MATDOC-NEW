@extends('frontend.layouts.front_app')
@section('content')
         <!-- Counter Start -->
         <div class="section counter-section section counter-section">
            <div class="container mt-5" style="margin-bottom:120px;">
               <div class="neet-pg-layout">
                  <div class="shadow custom-accordion-border card">
                     <div class="card-body">
                        <!-- End State -->
                             <div class="feature-category-body">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                          @if(request('state')=='uttar_pradeshes')
                                            <a href="#">
                                               @elseif(request('state')=='gujarats')
                                            <a href="#">
                                               @elseif(request('state')=='maharashtras')
                                            <a href="#">
                                              @else
                                               <a href="#">
                                              @endif 
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-13.png')}}" alt="">
                                                <span class="title">Choice Filling</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="#" onclick="fetch_data('{{request('state')}}')">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-14.png')}}" alt="">
                                                <span class="title">Year-Wise Cutoff</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="{{route('bond_details','state='.request('state'))}}">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">Bond Details</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                     <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="{{route('fee_details','state='.request('state'))}}">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-11.png')}}" alt="">
                                                <span class="title">Fee Structure</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="{{route('stipend_details','state='.request('state'))}}">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                <span class="title">Stipend Details</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href="#" onclick="fetch_document('{{request('state')}}')">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-12.png')}}" alt="">
                                                <span class="title">Documents Required</span>
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



         <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Year-Wise Cutoff</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row" id="table">
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal" id="myModal_document">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Document Required</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row" id="document">
            </div>
        </div>

        
      </div>
    </div>
  </div>



      @endsection
      @section('script')
      <script>
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
                $('#myModal').modal('show');
                $('#table').html(data);
        },
         complete: function() {
             $('.preloader').hide();
          }
        });
      }

      function fetch_document(state) {
        $.ajax({
            beforeSend: function() {
                $('.preloader').show();
            },
            url: "{{route('state_document')}}",
            data:{
               'state':state
            },
            success: function(data) {
                $('#myModal_document').modal('show');
                $('#document').html(data);
        },
         complete: function() {
             $('.preloader').hide();
          }
        });
      }

      </script>
      @endsection