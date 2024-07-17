@extends('frontend.layouts.front_app')
@section('content')
      <!-- Counter Start -->
      <div class="section counter-section section counter-section mb-5">
         <div class="container mt-5 mb-5">
            <!-- Counter Wrapper Start -->
            <div class="counter-wrapper">
               <div class="shadow custom-accordion-border card">
                  <div class="welcome-background card-body">
                     <div class="mb-4 welcome-background">
                        <div class="text-center col-md-12">
                           <h3 class="mb-3">Hello <b style="color:#2b73b5;">{{Auth::user()->name}}</b>. You’ll get everything related to counselling</h3>
                        </div>
                        <div class="row">
                           <div class="col-md-8">
                              <ul class="pd">
                                 <li>Now as you are here, so don’t worry just trust on us and you’ll definitely thank us later.</li>
                                 <li>Here, you’ll get every details and updates related to counselling under announcement section in your dashboard.</li>
                                 <li>If you have any doubts or queries you can join or telegram group.</li>
                              </ul>
                              
                           </div>
                           <div class="col-md-4"><img src="{{asset('public/front_css/assets/images/neet-home-img.png')}}" class="home-page-img"></div>
                        </div>

                        <div class="row mb-5">
                           <div class="col-md-12">
                              <div class="card shadow">
                                 <div class="card-body">
                                    <div class="section-title text-center">
		                        	<h2 class="title" style="font-size: 25px;"><span><i class="fa fa-bullhorn" aria-hidden="true"></i> Announcements</span> </h2>
		                        	</div><br>
                                    <form class="">
                                       <div class="row">
                                          <div class="header-search">
                                    <form action="#">
                                    <input type="text" placeholder="Search Announcements">
                                    <button><i class="flaticon-loupe"></i></button>
                                    </form>
                                    </div>
                                    </div>
                                    </form>
                                    <div class="home-cards">
                                       <div class="border-0 card">
                                          <div class="card-body p-0 mt-5">
                                             <div class="table-responsive">
                                                <table class="table">
                                                   <thead>
                                                      <tr>
                                                         <th>News </th>
                                                         <th>Details </th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                   @if(count(App\Models\SchoolNotice::where('delete_status', 0)->get()) > 0 )
                                                      @foreach(App\Models\SchoolNotice::where('delete_status', 0)->get() as $data)
                                                      <tr>
                                                         <td> {{$data->title}} </td>
                                                         <td> {{$data->description}} </td>
                                                      </tr>
                                                     @endforeach
                                                     @else
                                                       <tr>
                                                         <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                                       </tr>
                                                     @endif
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--<div class="col-md-6">-->
                           <!--   <div class="border-0 shadow card">-->
                           <!--      <div class="card-body">-->
                           <!--         <h4 class="text-theme text-center mb-3">-->
                           <!--            <i class="fa fa-calendar-o" aria-hidden="true"></i> Events-->
                           <!--         </h4>-->
                                    <!-- Pricing Wrapper End -->
                           <!--         <div class="pricing-wrapper">-->
                           <!--            <ul class="nav pricing-btn">-->
                           <!--               <li><button class="active" data-bs-toggle="tab" data-bs-target="#past">All Event</button></li>-->
                           <!--               <li><button data-bs-toggle="tab" data-bs-target="#upcoming">Upcoming</button></li>-->
                           <!--               <li><button data-bs-toggle="tab" data-bs-target="#today">Previous</button></li>-->
                                         
                           <!--            </ul>-->
                           <!--            <div class="tab-content hg-ovrflw">-->
                           <!--               <div class="tab-pane fade show active" id="past">-->
                           <!--                  <div class="table-responsive">-->
                           <!--                     <table role="table" class="table">-->
                           <!--                        <thead>-->
                           <!--                           <tr>-->
                           <!--                              <th>Event Name</th>-->
                           <!--                              <th>Start Date </th>-->
                           <!--                              <th>End Date </th>-->
                           <!--                           </tr>-->
                           <!--                        </thead>-->
                           <!--                        <tbody>-->
                           <!--                           @if(count(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get())>0)-->
                           <!--                           @foreach(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get() as $data)-->
                           <!--                           <tr>-->
                           <!--                              <td> {{$data->event_name}} </td>-->
                           <!--                              <td>{{date('d-m-Y', $data->start_date)}}</td>-->
                           <!--                              <td>{{date('d-m-Y', $data->end_date)}}</td>-->
                           <!--                           </tr>-->
                           <!--                          @endforeach-->
                           <!--                          @else-->
                           <!--                          <tr>-->
                           <!--                           <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>-->
                           <!--                         </tr>-->
                           <!--                          @endif-->
                           <!--                        </tbody>-->
                           <!--                     </table>-->
                           <!--                  </div>-->
                           <!--               </div>-->
                                          
                           <!--               <div class="tab-pane fade" id="upcoming">-->
                           <!--                  <div class="table-responsive">-->
                           <!--                     <table role="table" class="table">-->
                           <!--                        <thead>-->
                           <!--                           <tr>-->
                           <!--                              <th>Event Name</th>-->
                           <!--                              <th>Start Date </th>-->
                           <!--                              <th>End Date </th>-->
                           <!--                           </tr>-->
                           <!--                        </thead>-->
                           <!--                        <tbody>-->
                           <!--                           @if(count(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get())>0)-->
                           <!--                           @foreach(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get() as $data)-->
                           <!--                           <tr>-->
                           <!--                              <td> {{$data->event_name}} </td>-->
                           <!--                              <td>{{date('d-m-Y', $data->start_date)}}</td>-->
                           <!--                              <td>{{date('d-m-Y', $data->end_date)}}</td>-->
                           <!--                           </tr>-->
                           <!--                          @endforeach-->
                           <!--                          @else-->
                           <!--                          <tr>-->
                           <!--                           <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>-->
                           <!--                         </tr>-->
                           <!--                          @endif-->

                           <!--                        </tbody>-->
                           <!--                     </table>-->
                           <!--                  </div>-->
                           <!--               </div>-->

                           <!--               <div class="tab-pane fade" id="today">-->
                           <!--                  <div class="table-responsive">-->
                           <!--                     <table role="table" class="table">-->
                           <!--                        <thead>-->
                           <!--                           <tr>-->
                           <!--                              <th>Event Name</th>-->
                           <!--                              <th>Start Date </th>-->
                           <!--                              <th>End Date </th>-->
                           <!--                           </tr>-->
                           <!--                        </thead>-->
                           <!--                        <tbody>-->
                           <!--                           @if(count(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get())>0)-->
                           <!--                           @foreach(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get() as $data)-->
                           <!--                           <tr>-->
                           <!--                              <td> {{$data->event_name}} </td>-->
                           <!--                              <td>{{date('d-m-Y', $data->start_date)}}</td>-->
                           <!--                              <td>{{date('d-m-Y', $data->end_date)}}</td>-->
                           <!--                           </tr>-->
                           <!--                          @endforeach-->
                           <!--                          @else-->
                           <!--                          <tr>-->
                           <!--                           <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>-->
                           <!--                         </tr>-->
                           <!--                          @endif-->

                           <!--                        </tbody>-->
                           <!--                     </table>-->
                           <!--                  </div>-->
                           <!--               </div>-->

                           <!--            </div>-->
                           <!--         </div>-->
                                    <!-- Pricing Wrapper End -->
                           <!--      </div>-->
                           <!--   </div>-->
                           <!--</div>-->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Counter Wrapper End -->
            </div>
         </div>
         <!-- Counter End -->
     </div>
     @endsection
        