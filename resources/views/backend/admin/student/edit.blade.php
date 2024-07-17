@extends('backend.layouts.app')
@section('content')
    <section class="content-header">

    </section>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card card-outline card-info">
                <div class="card-body">
                <form method="POST" action="{{ route('student.update', $edit_data->id) }}" enctype="multipart/form-data"
                    id="valid_form">
                    @csrf
                    @method('PUT')
                    <div class="single-form mt-0">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$edit_data->name}}"
                            required>
                    </div>
                    <div class="single-form">
                        <label>Exam Type</label>
                        <select class="form-control" name="exam_type" required>
                            <option value="">Select</option>
                            <option value="UG" @if($edit_data->customer->exam_type=='UG') selected @endif>UG</option>
                            <option value="PG" @if($edit_data->customer->exam_type=='PG') selected @endif >PG</option>
                        </select>
                    </div>
                    <div class="single-form">
                        <label>Score</label>
                        <input type="text" class="form-control" name="score" id="score" value="{{$edit_data->customer->score}}"
                            placeholder="Enter Your Score " required>
                    </div>
                    <div class="single-form">
                        <label>Phone</label>
                        <input type="number" class="form-control" id="phone" placeholder="Phone" value="{{$edit_data->phone}}"
                           readonly required>
                        <span id="phone_error" class="otp_send"></span>
                    </div>
                    <div id="otp">
                        <div class="single-form">
                            <!--<input type="text" class="form-control" id="check_otp" name="check_otp" placeholder="OTP" required>-->
                            <!--<span id="otp_error" class="otp_send"></span>-->
                        </div>
                        <div class="single-form" id="password_div">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password " >
                        </div>
                        
                    </div>
                    <br>
                    <div class="single-form">
                        <button type="submit"  class="btn btn-primary btn-hover-heading-color w-100">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
@endsection
