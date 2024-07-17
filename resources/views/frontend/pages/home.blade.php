@extends('frontend.layouts.front_app')
@section('content')


<div class="section section-padding">
   <div class="container">
       <div class="row justify-content-between">
           <div class="col-lg-3 mb-3">
               <!-- Sidebar Wrapper Start -->
               <div class="sidebar-details-wrap">
                   <!-- Sidebar Details Video Description Start -->
                   <div class="sidebar-details-video-description">
                       <div class="sidebar-video text-center">
                           @if(empty(Auth::user()->profile_img))
                             <img src="{{ asset('public/front_css/assets/images/profile.png')}}" alt="User Profile">
                           @else
                           <img src="{{ asset('public/front_css/assets/images/'.Auth::user()->id.'/'.Auth::user()->customer->profile_image) }}" alt="User Profile">
                           @endif
                           <h6 class="mt-1">{{Auth::user()->name}}</h6>
                           <p class="mt-1">(Varanasi)</p>
                       </div>
                       <div class="sidebar-description">
                        <ul class="description-list">
                           @if(Auth::user()->customer->exam_type=='PG')
                              <li><a href="{{route('student_report')}}"><i class="fa fa-file-o"></i> College Predictor </a></li>
                              <li><a href="{{route('mark_vs_rank')}}"><i class="fa fa-file-o"></i> Rank Predictor </a></li>
                              <li><a href="{{route('college_list')}}"><i class="fa fa-file-o"></i> Preffered college </a></li>
                              <li><a href="{{route('subscription_plans')}}"><i class="fa fa-file-o"></i> My Guide Expert Counselling </a></li>
                            @endif
                            @if(Auth::user()->customer->exam_type=='UG')
                             
                              <li><a href="{{route('ug.student_report')}}"><i class="fa fa-file-o"></i> College Predictor </a></li>
                              <li><a href="{{route('college_list')}}"><i class="fa fa-file-o"></i> Preffered College </a></li>
                              <li><a href="{{route('subscription_plans')}}"><i class="fa fa-file-o"></i> My Guide Expert Counselling </a></li>
                            @endif
                        </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xl-6 col-lg-6 mb-3">
            <div class="search-form mt-0 mb-3">
               @if(Auth::check())
                  @if(Auth::user()->customer->exam_type=='UG')
                  <form action="{{route('ug.student_report')}}">
                  @endif
                  @if(Auth::user()->customer->exam_type=='PG')
                   <form action="{{route('student_report')}}">
                  @endif
              
               @else
                <form action="{{route('user-login')}}">
               @endif
                   <select class="custom-select">
                       @if(Auth::user()->customer->exam_type=='UG')
                       <option value="NEET UG">NEET UG</option>
                       @endif
                       @if(Auth::user()->customer->exam_type=='PG')
                       <option value="NEET PG">NEET PG</option>
                       @endif
                     </select>
                   <input type="text" name="rank" placeholder="Rank..." required>
                   @if(Auth::check())
                     @if(empty(optional(Auth::user()->payment)->user_id))
                      <a   href="{{route('subscription_plans')}}"   class="btn btn-primary btn-hover-heading-color" ><i class="fa fa-search"></i></a>
                     @else 
                     <button type="submit"   class="btn btn-primary btn-hover-heading-color" ><i class="fa fa-search"></i></button>
                     @endif

                    @else
                      <a href="{{route('user-login')}}"  class="btn btn-primary btn-hover-heading-color">  <i class="fa fa-search"></i></a>
                    @endif
               </form>
           </div>
            <div class="border-0 shadow card">
               <div class="card-body">
                  <h4 class="text-theme text-center mb-3">
                     <i class="fa fa-calendar-o" aria-hidden="true"></i> News & Events
                  </h4>
                  <hr/>
                  <!-- Pricing Wrapper End -->
                  <div class="pricing-wrapper">
                     <ul class="nav pricing-btn">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#past">All Event</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#upcoming">Upcoming</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#today">Previous</button></li>
                       
                     </ul>
                     <div class="tab-content hg-ovrflw">
                        <div class="tab-pane fade show active" id="past">
                           <div class="table-responsive">
                              <table role="table" class="table">
                                 <thead>
                                    <tr>
                                       <th>Event Name</th>
                                       <th>Start Date </th>
                                       <th>End Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get())>0)
                                    @foreach(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get() as $data)
                                    <tr>
                                       <td> {{$data->event_name}} </td>
                                       <td>{{date('d-m-Y', $data->start_date)}}</td>
                                       <td>{{date('d-m-Y', $data->end_date)}}</td>
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
                        
                        <div class="tab-pane fade" id="upcoming">
                           <div class="table-responsive">
                              <table role="table" class="table">
                                 <thead>
                                    <tr>
                                       <th>Event Name</th>
                                       <th>Start Date </th>
                                       <th>End Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get())>0)
                                    @foreach(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get() as $data)
                                    <tr>
                                       <td> {{$data->event_name}} </td>
                                       <td>{{date('d-m-Y', $data->start_date)}}</td>
                                       <td>{{date('d-m-Y', $data->end_date)}}</td>
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

                        <div class="tab-pane fade" id="today">
                           <div class="table-responsive">
                              <table role="table" class="table">
                                 <thead>
                                    <tr>
                                       <th>Event Name</th>
                                       <th>Start Date </th>
                                       <th>End Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get())>0)
                                    @foreach(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get() as $data)
                                    <tr>
                                       <td> {{$data->event_name}} </td>
                                       <td>{{date('d-m-Y', $data->start_date)}}</td>
                                       <td>{{date('d-m-Y', $data->end_date)}}</td>
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
                  <!-- Pricing Wrapper End -->
               </div>
            </div>
           </div>
           <div class="col-md-3">
            <div class="card shadow">
               <div class="card-body">
                  <h4 class="text-center mb-3">
                     <i class="fa fa-bullhorn" aria-hidden="true"></i> Announcements
                  </h4>
                  <hr/>
                  <form class="">
                     <div class="row">
                        <div class="header-search">
                  <form action="#">
                  <input type="text" placeholder="Search...">
                  <button><i class="flaticon-loupe"></i></button>
                  </form>
                  </div>
                  </div>
                  </form>
                  <div class="home-cards">
                     <div class="border-0 card">
                        <div class="card-body p-0 mt-3">
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
       </div>


   </div>
</div>

     @endsection
        