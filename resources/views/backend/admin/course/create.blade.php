@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
                <form method="POST" action="{{route('course.store')}}" enctype="multipart/form-data" id="valid_form" >
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                       Add Course
                    </h3>
                    <button type="submit" class="btn btn-success float-right"> <i class="fas fa-check"></i> Save</button>
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
                                <input type="text" name="name" placeholder="Enter Course Name" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Level</label>
                                <select name="course_level" id="course_level" class="form-control" required>
                                    <option selected disabled>Course Level</option>
                                    <option value="UG">UG </option>
                                    <option value="PG">PG </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mode Of Study</label>
                                <select name="mode_of_study" id="mode_of_study" class="form-control" required>
                                    <option selected disabled>Mode Of Study</option>
                                    <option value="Online">Online</option>
                                    <option value="Offline">Offline</option>
                                    <option value="Both">Both</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Type</label>
                                <select name="course_type" id="course_type" class="form-control" required>
                                    <option selected disabled>Course Type</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Diploma">Diploma</option>
                                    <option value="Degree">Degree</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Language</label>
                                <select name="language[]" id="language" class="form-control select2" multiple required>
                                    <option value="English">English</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Portuguese">Portuguese</option>
                                    <option value="Russian">Russian</option>
                                    <option value="French">French</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" name="year" placeholder="Enter Year" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Semester</label>
                                <select name="semeter" id="semeter" class="form-control " required>
                                    <option value="">Select Semester</option>
                                    <option value="1">1 Semester</option>
                                    <option value="2">2 Semester</option>
                                    <option value="3">3 Semester</option>
                                    <option value="4">4 Semester</option>
                                    <option value="5">5 Semester</option>
                                    <option value="6">6 Semester</option>
                                    <option value="7">7 Semester</option>
                                    <option value="8">8 Semester</option>
                                    <option value="9">9 Semester</option>
                                    <option value="10">10 Semester</option>
                                    <option value="11">11 Semester</option>
                                    <option value="12">12 Semester</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Course Details</label>
                                <textarea class="summernote" name="course_details">
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