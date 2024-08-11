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
        <div class="container mt-5" style="margin-bottom: 160px;">
            <div class="neet-pg-layout">
                <div class="shadow custom-accordion-border card">
                    <div class="card-body">
                          
                           <div class="login-register-wrapper">
                    <div class="row">
                        <div class="col-lg-6 mb-3" style="margin-left: auto;margin-right: auto;" >
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <div class="section-title text-center">
                                  <h2><span>Know Your Rank</span> </h2>
                               </div>
                                <div class="login-register-form">
                                    <form action="{{route('mark_vs_rank')}}" method="GET">
                                        <div class="single-form mt-0">
                                            <label>Mark</label>
                                            <input type="number" class="form-control"  name="mark" placeholder="Enter Mark" value="{{request('mark')}}" min="0" max="725">
                                            @error('mark')
                                              <span  role="alert" style="color: red;margin-left: 5%;">
                                                <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="single-form">
                                            <button class="btn btn-primary btn-hover-heading-color w-100 br_rad">Submit</button>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->
                        </div>
                        <div class="col-lg-6 mb-3">
                        <div class="section-title text-center">
                           <h2><span>Your Expected Rank Should Be Approx</span> </h2><br>
                           <h5>@if(!empty($data)) {{$data->rank}} @else {{'No Rank Found'}} @endif</h5>
                         @if(!empty($data))  <p style="color:green;">To Know Your College . <a style="color:blue;" href="{{route('student_report','rank='.$data->rank)}}">Click Here</a></p>  @endif
                        </div>
                        <div class="bg-light text-center">
                         
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

@endsection
