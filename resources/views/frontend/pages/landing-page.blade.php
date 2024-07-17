@extends('frontend.layouts.front_app')
@section('content')



<style>
  .header {
    display: none;
  }

  .fixed {
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.5);
    height: 120px;
    width: 100%;
    position: fixed;
    border-top: solid 5px #088dd3;
    background: #fff;
    z-index: 3;
    top: 0;
    left: 0;
  }
</style>



<!-- Page Banner Start -->
<div class="section page-banner-section bg-color-1 fixed">
  <img class="shape-4" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
  <img class="shape-5" src="{{asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">

  <div class="container">
    <!-- Page Banner Content Start -->
    <div class="page-banner-content">
      <h2 class="title"><span style="color:#eb5353">Admission Helpline</span> <a
          href="tel:+91-9960570853"><i class="fa fa-volume-control-phone"></i> +91-9960570853</a></h2>
    </div>
    <!-- Page Banner Content End -->
  </div>
</div>
<!-- Page Banner End -->

<!-- Page Banner Start -->
<div class="section page-banner-section pg-medical-admission">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 left">
        <h3>PG MEDICAL Admission DIRECT Admission Guidance</h3>
      </div>
      <div class="col-md-6 right">
        <h3>Top Medical Colleges NEET PG Admission through Management Quota </h3>
      </div>
    </div>
  </div>
</div>
<!-- Page Banner End -->

<div class="section">
  <div class="container why-choose">
    <!-- About Wrapper Start -->
    <div class="about-wrapper">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="why">
            <h3 class="title">Why Choose Us</h3>
            <ul>
              <li>18 years of Experience</li>
              <li>Students Refrences all over India</li>
              <li>Direct Admission Confirmation in College</li>
              <li>Direct Contacts in Almost all Medical Colleges of India</li>
            </ul>
          </div>

        </div>
        <div class="col-lg-6">
          <!-- About Images Start -->
          <div class="login-register-box" style="background: #ffffffe3;">
            <div class="login-register-form">
                  
              <form action="{{route('medical-admission-form')}}" method="post">
                   @csrf()
               
                <div class="row">
                  <div class="col-md-6">
                    <div class="single-form mt-0">
                      <label>Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="single-form mt-0">
                      <label>NEET PG Score</label>
                      <input type="text" class="form-control" name="neet_score" id="neet_score"  placeholder="NEET PG Score " required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="single-form">
                      <label>Mobile Number</label>
                      <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number"
                        required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="single-form">
                      <label>NEET PG Branch</label>
                      <input type="text" class="form-control" id="branch" name="branch" placeholder="NEET PG Branch"
                        required="">
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="single-form">
                      <label>Total Budget</label>
                      <input type="text" class="form-control" id="budget" name="budget" placeholder="Total Budge"
                        required="">
                    </div>
                  </div>

                </div>
                <div class="single-form">
                  <button class="btn btn-primary btn-hover-heading-color w-100">Submit</button>
                </div>

              </form>
            </div>
          </div>
          <!-- About Images End -->
        </div>
      </div>
    </div>
    <!-- About Wrapper End -->
  </div>
</div>

<div class="section section-padding mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="shape-4" src="{{asset('public/front_css/assets/images/F2.jpg')}}" alt="shape">
      </div>

      <div class="col-md-6">
        <img class="shape-4" src="{{asset('public/front_css/assets/images/F3.jpg')}}" alt="shape">
      </div>

      <div class="col-md-12 text-center mt-4">
        <button type="button" class="btn btn-blue btn-hover-heading-color me-2" data-bs-toggle="modal"
          data-bs-target="#myModal">
          Download Fee Structure of Colleges
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-center">Download Fee Structure of Colleges</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="login-register-box">
          <div class="login-register-form">
             <form action="{{route('medical-admission-form')}}" method="post">
                   @csrf()
              <div class="row">
                <div class="col-md-12">
                  <div class="single-form mt-0">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="single-form">
                    <label>Whatsapp Number For Download Link</label>
                    <input type="number" class="form-control" id="phone" name="phone"
                      placeholder="Whatsapp number for download link" required="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="single-form">
                    <label>NEET PG Score </label>
                    <input type="text" class="form-control" name="neet_score" id="neet_score" placeholder="NEET PG Score "
                      required="">
                  </div>
                </div>

              </div>
              <div class="single-form">
                <button class="btn btn-primary btn-hover-heading-color w-100">Download form </button>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection