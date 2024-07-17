@extends('frontend.layouts.front_app')
@section('content')
    <style>
        .subNav .nav-tabs {
            border-bottom: 0;
        }

        .subNav .nav-tabs .nav-link.active {
            color: #eb5353;
            background-color: transparent;
            border: 0;
            font-weight: 600
        }

        .nav-tabs .nav-link:hover {
            border: 0;
        }

        .nav-tabs .nav-link:focus {
            border: 0 !important;
        }

        .nav-tabs .nav-link {
            border: 0;
        }
    </style>
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <img class="shape-4" src="{{ asset('public/front_css/assets/images/shape/shape-21.png') }}" alt="shape">
        <img class="shape-5" src="{{ asset('public/front_css/assets/images/shape/shape-21.png') }}" alt="shape">
        <div class="container">
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content mb-4">
                <h2 class="title">{{ $collage->name }}</h2>
                <div><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $collage->address }}</span> | <b>{{ $collage->type }}</b>
                </div>

                {{-- <div class="course-details-meta">
                    <div class="meta-action">
                        <p class="label">Government</p>
                    </div>
                    <div class="meta-action">
                        <p class="label">Institute of Eminence</p>
                    </div>
                    <div class="meta-action">
                        <p class="label">Institute of National Importance</p>
                    </div>
                    <div class="meta-action">
                        <p class="label">NIRF Rank 1st (Overall)</p>
                    </div>
                </div> --}}

                <div class="enqry">
                    <a data-bs-toggle="modal" data-bs-target="#myModal1" class="btn btn-primary btn-hover-heading-color"><i
                            class="fa fa-envelope"></i> Enquiry Now</a>
                </div>
            </div>
            <!-- Course Details Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Course List Start -->
    <div class="section subNav">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#courses-and-fees">Courses & Fees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#cut-offs">Cut-offs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#admissions">Admissions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#placements">Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#facilities">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#ques-and-ans">Ques. & Ans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notable-alumni">Notable Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#colleges-and-departments">Colleges and Departments</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Tab panes -->
    <div class="container mb-4">
        <div class="tab-content border-0 shadow card p-3">
            <div id="overview" class="container tab-pane active">
                <h3>Overview</h3>
               {{$collage->collage_description}}
            </div>
            <div id="courses-and-fees" class="container tab-pane fade">
                <h3>Courses & Fees</h3>
                {{$collage->course_fees}}
            </div>
            <div id="cut-offs" class="container tab-pane fade">
                <h3>Cut-offs</h3>
                {{$collage->cut_off}}
            </div>
            <div id="admissions" class="container tab-pane fade">
                <h3>Admissions</h3>
                {{$collage->course_fees}}
            </div>
            <div id="placements" class="container tab-pane fade">
                <h3>Placements</h3>
                {{$collage->placement}}
            </div>
            <div id="reviews" class="container tab-pane fade">
                <h3>Reviews</h3>
                {{$collage->reviews}}
            </div>
            <div id="facilities" class="container tab-pane fade">
                <h3>Facilities</h3>
                {{$collage->facilities}}
            </div>
            <div id="ques-and-ans" class="container tab-pane fade">
                <h3>Ques. & Ans</h3>
                {{$collage->question_answer}}
            </div>
            <div id="notable-alumni" class="container tab-pane fade">
                <h3>Notable Alumni</h3>
                {{$collage->notable_alumni}}
            </div>
            <div id="colleges-and-departments" class="container tab-pane fade">
                <h3>Colleges and Departments</h3>
                {{$collage->collage_department}}
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
    data-keyboard="false" data-bs-backdrop="static" style="z-index:999999999;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Enquiry Now!</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="{{route('enquiry')}}">
                          @csrf
                          <input type="hidden" name="collage_id" value="{{$collage->id}}" >
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required=""
                                        Placeholder="Enter your name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required=""
                                        Placeholder="Enter your email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="phone" required="" Placeholder="Enter your number"
                                        class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control" required=""
                                        Placeholder="Remark (If Any)... " placeholder="Remark (If Any)... ">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I hereby confirm that I have
                                        filled in all the details in the registration form, correct and absolute to the
                                        best of my understanding. *</label>
                                </div>
                            </div>
                            <div class="send-btn text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-hover-heading-color w-100"
                                    style="border-radius:5px;">Submit <i class="ri-arrow-right-line"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('public/front_css/assets/images/Book-Free-Study-Counselling-Session.png') }}"
                            alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Course List End -->
@endsection
