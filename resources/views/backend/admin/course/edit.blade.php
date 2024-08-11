@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
                <form method="POST" action="{{route('course.update',$edit_data->id)}}" enctype="multipart/form-data" id="valid_form" >
                @csrf
                @method('PUT')
                <div class="card-header">
                    <h3 class="card-title">
                       Edit Course
                    </h3>
                    <button type="submit" class="btn btn-success float-right"> <i class="fas fa-check"></i> Update</button>
                </div>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter Course Name" class="form-control" value="{{$edit_data->name}}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Level</label>
                                <select name="course_level" id="course_level" class="form-control" required>
                                    <option selected disabled>Course Level</option>
                                    <option value="UG" @if($edit_data->course_level == 'UG') selected @endif >UG </option>
                                    <option value="PG" @if($edit_data->course_level == 'PG') selected @endif >PG </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mode Of Study</label>
                                <select name="mode_of_study" id="mode_of_study" class="form-control" required>
                                    <option selected disabled>Mode Of Study</option>
                                    <option value="Online"  @if($edit_data->mode_of_study == 'Online') selected @endif >Online</option>
                                    <option value="Offline" @if($edit_data->mode_of_study == 'Offline') selected @endif>Offline</option>
                                    <option value="Both"    @if($edit_data->mode_of_study == 'Both') selected @endif >Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Type</label>
                                <select name="course_type" id="course_type" class="form-control" required>
                                    <option selected disabled>Course Type</option>
                                    <option value="Certificate" @if($edit_data->course_type == 'Certificate') selected @endif>Certificate</option>
                                    <option value="Diploma" @if($edit_data->course_type == 'Diploma') selected @endif>Diploma</option>
                                    <option value="Degree" @if($edit_data->course_type == 'Degree') selected @endif>Degree</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Language</label>
                                <select name="language[]" id="language" class="form-control select2" multiple required>
                                    <option value="English" @if(in_array('English',$edit_data->language)) selected @endif>English</option>
                                    <option value="Hindi" @if(in_array('Hindi',$edit_data->language)) selected @endif>Hindi</option>
                                    <option value="Spanish" @if(in_array('Spanish',$edit_data->language)) selected @endif>Spanish</option>
                                    <option value="Portuguese" @if(in_array('Portuguese',$edit_data->language)) selected @endif>Portuguese</option>
                                    <option value="Russian" @if(in_array('Russian',$edit_data->language)) selected @endif>Russian</option>
                                    <option value="French" @if(in_array('French',$edit_data->language)) selected @endif>French</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" name="year" placeholder="Enter Year" class="form-control" value="{{$edit_data->year}}"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Semester</label>
                                <select name="semeter" id="semeter" class="form-control " required>
                                    <option value="">Select Semester</option>
                                    <option value="1" @if($edit_data->semeter == '1') selected @endif>1 Semester</option>
                                    <option value="2" @if($edit_data->semeter == '2') selected @endif>2 Semester</option>
                                    <option value="3" @if($edit_data->semeter == '3') selected @endif>3 Semester</option>
                                    <option value="4" @if($edit_data->semeter == '4') selected @endif>4 Semester</option>
                                    <option value="5" @if($edit_data->semeter == '5') selected @endif>5 Semester</option>
                                    <option value="6" @if($edit_data->semeter == '6') selected @endif>6 Semester</option>
                                    <option value="7" @if($edit_data->semeter == '7') selected @endif>7 Semester</option>
                                    <option value="8" @if($edit_data->semeter == '8') selected @endif>8 Semester</option>
                                    <option value="9" @if($edit_data->semeter == '9') selected @endif>9 Semester</option>
                                    <option value="10" @if($edit_data->semeter == '10') selected @endif>10 Semester</option>
                                    <option value="11" @if($edit_data->semeter == '11') selected @endif>11 Semester</option>
                                    <option value="12" @if($edit_data->semeter == '12') selected @endif>12 Semester</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Course Details</label>
                                <textarea class="summernote" name="course_details">
                                    {{ $edit_data->course_details}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('.summernote').summernote({
            height: 300,
            toolbar: [ 
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection