@include('backend.include.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white small-box">
                      <div class="card-body">
                        <img src="{{asset('public/backend/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                        <h3><span class="counter-value">{{App\Models\Collage::get()->count()}}</span></h3>
                        <h6 class="card-text">College</h6>
                      </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white small-box">
                      <div class="card-body">
                        <img src="{{asset('public/backend/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                        <h3><span class="counter-value">{{App\Models\Course::get()->count()}}</span></h3>
                        <h6 class="card-text">Course</h6>
                      </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-secondary card-img-holder text-white small-box">
                      <div class="card-body">
                        <img src="{{asset('public/backend/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                        <h3><span class="counter-value">{{App\Models\User::where('user_type','customer')->get()->count()}}</span></h3>
                        <h6 class="card-text">Users</h6>
                      </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white small-box">
                      <div class="card-body">
                        <img src="{{asset('public/backend/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                        <h3><span class="counter-value">{{App\Models\Enquiry::get()->count()}}</span></h3>
                        <h6 class="card-text">Enquiry</h6>
                      </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('backend.include.footer')