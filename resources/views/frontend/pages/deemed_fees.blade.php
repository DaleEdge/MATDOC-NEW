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
             <th>Branch</th>
             <th>College</th>
             <th>Tuition Fee</th>
          </tr>
       </thead>
       <tbody>
          @foreach ($list as $data)
          <tr>   
             <td>{{$data->branch}}</td>
             <td>{{$data->college}}</td>
             <td>{{$data->tuition_fees}}</td>
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

