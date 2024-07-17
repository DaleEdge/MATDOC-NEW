@extends('frontend.layouts.front_app')
@section('content')
    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Course List Wrapper Start -->
            <div class="course-list-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-lg-8">
                        <!-- Course List Start -->
                        @foreach ($collages as $key=>$value)
                        <div class="course-list-items">
                            <!-- Course List Start -->
                            <div class="card_block">
                                <div class="tupple">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="left_side_tupple">
                                            <div class="tupple_top_block">
                                                <div class="image_block mb-2">
                                                    <a href="#">
                                                        <img class="border_radius5" quality="100"
                                                            src="{{ asset('public/front_css/assets/images/college.png')}}"
                                                            alt="{{$value->name}}" width="62" height="62">
                                                    </a>
                                                </div>
                                                <div class="content_block d-block d-md-none"><span><i
                                                            class="fa fa-map-marker" aria-hidden="true"></i>{{$value->address}}</span><br>
                                                    <div class="block_border"></div><span>{{$value->type}}</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h1 class="college_name" title="{{$value->name}}"
                                                        data-testid="college_name"><a href="{{route('college_details',$value->id)}}">{{$value->name}}</a></h1>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            {{$value->address}}</span> <span>{{$value->type}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">
                                                @foreach($value->course_id as $course_id)
                                                    {{App\Models\Course::find($course_id)->name}} ,
                                                @endforeach
                                            </a>
                                        </div>
                                        <div class="combined_block d-md-none">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li> <a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-none d-md-block">
                                        <div class="combined_block">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li><a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course List End -->

                        </div>
                        @endforeach
                       
                        {{$collages->links()}}

                    </div>

                    <div class="col-lg-4">
                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-wrap-02">
                            <h3 class="title">Filters By</h3> <hr/>
                            <!-- Sidebar Wrapper Start -->
                            <form method="GET">
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Category</h3>
                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="University" name="category" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1">University</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="College" name="category" id="checkbox2">
                                            <label class="form-check-label" for="checkbox2">College</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Mode Of Study</h3>
                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Government" name="type" id="checkbox21">
                                            <label class="form-check-label" for="checkbox21">Government</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Semi Govt" name="type"
                                                id="checkbox22">
                                            <label class="form-check-label" for="checkbox22">Semi Govt.</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Private" name="type"
                                                id="checkbox23">
                                            <label class="form-check-label" for="checkbox23">Private</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Stream</h3>
                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Engineering" name="stream"
                                                id="checkbox6">
                                            <label class="form-check-label" for="checkbox6">Engineering</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Medical" name="stream"
                                                id="checkbox7">
                                            <label class="form-check-label" for="checkbox7">Medical</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            {{-- <div class="sidebar-widget-02">
                                <h3 class="widget-title">State</h3>
                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="UTTAR PRADESH" name="state"
                                                id="checkbox12">
                                            <label class="form-check-label" for="checkbox12">Uttar Peadesh</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Kolkata" name="state"
                                                id="checkbox14">
                                            <label class="form-check-label" for="checkbox14">Kolkata</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" value="Mumbai" name="state"
                                                id="checkbox15">
                                            <label class="form-check-label" for="checkbox15">Mumbai</label>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            <!-- Sidebar Wrapper End -->
                            <button type="submit" class="btn btn-primary btn-hover-heading-color mt-3">Search <i class="fa fa-search"></i></a>
                            </form>
                        </div>
                        <!-- Sidebar Wrapper End -->
                    </div>

                </div>
            </div>
            <!-- Course List Wrapper End -->

        </div>
    </div>
    <!-- Course List End -->
@endsection
