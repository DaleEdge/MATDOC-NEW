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
    <div class="section counter-section section counter-section mb-5">
        <div class="container mt-5 mb-5">
            <div class="neet-pg-layout">
                <div class="shadow custom-accordion-border card">
                    <div class="card-body">
                        <form id="serch_form"  method="POST" action="{{route('student_report_closing_rank_details')}}">
                            @csrf
                        <div class="row mb-2">
                          <input type="hidden" name="state" value="{{request('state')}}">
                          <input type="hidden" name="type" value="{{request('type')}}">
                          <input type="hidden" name="rank" value="{{request('rank')}}">
                          <input type="hidden" name="budget" value="{{request('budget')}}">
                          <input type="hidden" name="course" value="{{$cour}}">
                          
                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="year">Year :</label>
                                    <select class="form-control  select2" name="year[]" id="year" onchange="filter_data()" multiple>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                           
                          
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

                            {{-- <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="course">Course :</label>
                                    <select class="form-control  select2" name="course[]" id="course" tabindex="-1"
                                        aria-hidden="true"  onchange="filter_data()"  multiple>
                                        @foreach ($course as $data)
                                            <option value="{{ $data->course }}">{{ $data->course }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
               
                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="quota">Quota :</label>
                                    <select class="form-control  select2" name="quota[]" id="quota" onchange="filter_data()" multiple>
                                        @foreach ($quota as $data)
                                            <option value="{{ $data->quota }}">{{ $data->quota }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                 
                   @if(request('type')!='deemed')
                            <div class="col-md-3 mt-3">
                                <div class="form-group">
                                    <label for="category">Category :</label>
                                    <select class="form-control  select2" name="category[]" id="category" onchange="filter_data()" multiple>
                                        @foreach ($category as $data)
                                            <option value="{{ $data->category }}">{{ strtoupper($data->category) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-3 mt-3">
                                 <label for="category">PDF File :</label>
                            <button class="btn btn-primary btn-hover-heading-color" name="submit" value="submit" type="submit">Download Your Report</button>
                             </div>
                        </div>
                    </form>    
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card mt-3 home-card">
                                    <div class="border-0 card">
                                        <div class="card-body p-0" id="table">
                                            @include('frontend.pages.student-report-closing-rank-details_table')
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
            type: "POST",
            url: "student-report-closing-rank-details?page="+ page,
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
