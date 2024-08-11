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
                                        <div class="card-body p-0" id="table">
                                           <div class="table-responsive">
    <table class="table">
       <thead>
          <tr>
             <th>College</th>
             <th>Branch</th>
             <th>State</th>
             <th>Major Surgery</th>
             <th>Minor Surgery</th>
             <th>Pain Clinic</th>
             <th>Pre Anesthetic Clinic</th>
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>   
             <td>{{$data->college}}</td>
             <td>{{$data->branch}}</td>
             <td>{{$data->state}}</td>
             <td>{{$data->major_surgery}}</td>
             <td>{{$data->minor_surgery}}</td>
             <td>{{$data->pain_clinic}}</td>
             <td>{{$data->pre_anesthetic_clinic}}</td>
            

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
    
@endsection

