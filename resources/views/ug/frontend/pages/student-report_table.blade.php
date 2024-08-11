@extends('frontend.layouts.front_app')
@section('content')

        <!-- Pricing Start -->
        <div class="section section-padding">
            <div class="container">
                <!-- Pricing Wrapper End -->
                <div >
                    <ul class="nav pricing-btns">
                       @foreach($counselling_preference as $counselling)
                        <li class="mr-10 wd-100"><button  data-bs-toggle="tab" data-bs-target="#tab_{{$counselling}}">{{str_replace('_',' ',strtoupper($counselling))}}</button></li>
                        @endforeach
                    </ul>

                    <div class="tab-content shadow ">
                     @foreach($counselling_preference as $counselling)
                        <div class="tab-pane fade" id="tab_{{$counselling}}">
                            <div class="card-body">
                               @if($counselling=='state_other')
                               <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Name </th>
                                          <th>Counseling Type </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($input['counselling_preference_other_state'] as $state)
                                       <tr>
                                          <td>
                                              <form action="{{route('ug.student_report_closing_rank_details')}}" method="POST">
                                                  @csrf()
                                                 
                                                    <input type="hidden" name="state" value="{{$state}}">
                                                      <input type="hidden" name="type" value="state_other">
                                                        <input type="hidden" name="rank" value="{{request('rank')}}">
                                                        <input type="hidden" name="budget" value="{{$input['budget']}}">
                                                  
                                              <button class="btn btn-primary btn-hover-heading-color" type="submit" >{{str_replace('_',' ',strtoupper($state))}}</button>
                                              </form>
                                              </td>
                                              
                                          <td>View Details </td>
                                       </tr>
                                       @endforeach                  
                                    </tbody>
                                 </table>
                              </div>
                               @endif
                               @if($counselling=='state_home')
                               <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Name </th>
                                          <th>Counseling Type </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                              <form action="{{route('ug.student_report_closing_rank_details')}}" method="POST">
                                                  @csrf()
                                                 
                                                    <input type="hidden" name="state" value="{{$input['domicile']}}">
                                                      <input type="hidden" name="type" value="state_home">
                                                         <input type="hidden" name="rank" value="{{request('rank')}}">
                                                        <input type="hidden" name="budget" value="{{$input['budget']}}">
                                                  
                                                 <button class="btn btn-primary btn-hover-heading-color" type="submit" >{{str_replace('_',' ',strtoupper($input['domicile']))}}</button>
                                              </form>
                                              </td>
                                          <td>View Details </td>
                                       </tr>
                                                            
                                    </tbody>
                                 </table>
                              </div>
                               @endif
                               @if($counselling=='deemed')
                               <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Name </th>
                                          <th>Counseling Type </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                               <form action="{{route('ug.student_report_closing_rank_details')}}" method="POST">
                                                  @csrf()
                                                 
                                                    <input type="hidden" name="state" value="deemeds">
                                                      <input type="hidden" name="type" value="deemed">
                                                         <input type="hidden" name="rank" value="{{request('rank')}}">
                                                        <input type="hidden" name="budget" value="{{$input['budget']}}">
                                                  
                                                 <button class="btn btn-primary btn-hover-heading-color" type="submit" >{{str_replace('_',' ',strtoupper($counselling))}}</button>
                                              </form>
                                              </td>
                                          <td>MNG , NRI </td>
                                       </tr>
                                                            
                                    </tbody>
                                 </table>
                              </div>
                               @endif
                              @if($counselling=='all_indias')
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Name </th>
                                          <th>Counseling Type </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                              <form action="{{route('ug.student_report_closing_rank_details')}}" method="POST">
                                                  @csrf()
                                                 
                                                    <input type="hidden" name="state" value="{{$counselling}}">
                                                      <input type="hidden" name="type" value="all">
                                                         <input type="hidden" name="rank" value="{{request('rank')}}">
                                                        <input type="hidden" name="budget" value="{{$input['budget']}}">
                                                  
                                              <button class="btn btn-primary btn-hover-heading-color" type="submit" >{{str_replace('_',' ',strtoupper($counselling))}}</button>
                                              </form>
                                              </td>
                                          <td>Government Quota </td>
                                       </tr>
                                                            
                                    </tbody>
                                 </table>
                              </div>
                              @endif
                             {{-- @if($counselling=='aiims')
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Name </th>
                                          <th>Counseling Type </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                              <form action="{{route('ug.student_report_closing_rank_details')}}" method="POST">
                                                  @csrf()
                                                 
                                                    <input type="hidden" name="state" value="{{$counselling}}">
                                                      <input type="hidden" name="type" value="aiims">
                                                         <input type="hidden" name="rank" value="{{Auth::user()->customer->rank}}">
                                                        <input type="hidden" name="budget" value="{{$input['budget']}}">
                                                  
                                              <button class="btn btn-primary btn-hover-heading-color" type="submit" >{{str_replace('_',' ',strtoupper($counselling))}}</button>
                                              </form>
                                              </td>
                                          <td>Government Quota </td>
                                       </tr>
                                                            
                                    </tbody>
                                 </table>
                              </div>
                              @endif --}}
                             </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <!-- Pricing Wrapper End -->

            </div>
        </div>
        <!-- Pricing End -->
         <!-- Counter Start -->
         
      </div>
      @endsection