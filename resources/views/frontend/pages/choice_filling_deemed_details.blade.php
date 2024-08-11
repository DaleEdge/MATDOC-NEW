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
                    

                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card mt-3 home-card">
                                    <div class="border-0 card">
                                        <div class="card-body p-0" >
                                           <div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
                <th>College Name</th>
                <th>Branch</th>
                <th>State</th>
                <th>Tuition Fees</th>
                <th>Hostel Fees</th>
                <th>Bed</th>
                <th>Stipend</th>
                <th>Senior Residency</th>
                <th>Bond Penalty</th>
                <th>Course Discontinious Bond</th>
               
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>
            <td>
              {{$data->college_name}}
            </td>
            <td>
              {{$data->branch}}
            </td>
            <td>
              {{$data->state}}
            </td>
            <td>
              {{$data->tuition_fees}}
            </td>
            <td>
              {{$data->hostel_fees}}
            </td>
            <td>
              {{$data->bed}}
            </td>
             <td>
              {{$data->stipend}}
            </td>
             <td>
              {{$data->senior_residency}}
            </td>
            <td>
              {{$data->bond_penalty}}
            </td>
            <td>
              {{$data->course_discontinious_bond}}
            </td>
          </tr>
          @endforeach
       </tbody>
    </table>
    
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
            url: "get_college_hospital_detail?page="+ page,
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
