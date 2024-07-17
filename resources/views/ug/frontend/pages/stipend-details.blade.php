@extends('frontend.layouts.front_app')

<style>
    thead tr th {
  position: sticky;
  top: 0;
    }
  .header-top-wrapper .header-social ul li a {
    padding-top: 6px !important;
    }

</style>
@section('content')
    <!-- Counter Start -->
    <div class="section counter-section section counter-section">
        <div class="container mt-5 mb-5">
            <div class="neet-pg-layout">
                <div class="shadow custom-accordion-border card">
                    <div class="card-body">
                        <form id="serch_form">
                        <div class="row mb-2">
                          <input type="hidden" name="state" value="{{request('state')}}">
                          <input type="hidden" name="counseling_type" value="{{request('counseling_type')}}">
                            <div class="col-md-3">
                                <div class="form-group mt-3 ">
                                    <label for="college">College :</label>
                                    <select class="form-control select2" name="college[]" id="college" onchange="filter_data()"  multiple>
                                        @foreach ($college as $data)
                                            <option value="{{ $data->college }}">{{ $data->college }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            
                          
                         
                        </div>
                    </form>    

                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card mt-3 home-card">
                                    <div class="border-0 card">
                                        <div class="card-body p-0" id="table">
                                            @include('frontend.pages.stipend-details_table')
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
    </div>
@endsection
@section('script')
<script>
    $(document).on('click', '.rank_details a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

    function fetch_data(page) {
        var college = $('#college').val();
        var course = $('#course').val();
        var quota = $('#quota').val();
        var category = $('#category').val();

        $.ajax({
            beforeSend: function() {
                $('.preloader').show();
            },
            url: "stipend-details?page="+ page,
            data:$("#serch_form").serialize(),
            success: function(data) {
                $('#table').html(data);
        },
         complete: function() {
             $('.preloader').hide();
          }
        });

      }


    function filter_data() {
        var page = $('#current_page_number').val();
        fetch_data(page);
    }
</script>
@endsection
