@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
                <form method="POST" action="{{route('collage.update',$edit_data->id)}}" enctype="multipart/form-data" id="valid_form" >
                    @method('PUT')
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                       Edit College
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
                                <input type="text" name="name" placeholder="Enter Collage Name" class="form-control"  value="{{$edit_data->name}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" id="category" class="form-control" >
                                    <option selected disabled>Select Category</option>
                                    <option value="University" @if($edit_data->category=='University') selected @endif>University </option>
                                    <option value="College"    @if($edit_data->category=='College') selected @endif >College </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type</label>
                                <select name="type" id="type" class="form-control" >
                                    <option selected disabled>Select Type</option>
                                    <option value="Government" @if($edit_data->type=='Government') selected @endif>Government</option>
                                    <option value="Semi Govt" @if($edit_data->type=='Semi Govt') selected @endif >Semi Govt.</option>
                                    <option value="Private" @if($edit_data->type=='Private') selected @endif >Private</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stream</label>
                                <select name="stream" id="stream" class="form-control" >
                                    <option selected disabled>Select Stream</option>
                                    <option value="Engineering" @if($edit_data->stream=='Engineering') selected @endif >Engineering</option>
                                    <option value="Medical" @if($edit_data->stream=='Medical') selected @endif >Medical</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course</label>
                                <select name="course[]" id="course" class="form-control select2" multiple >
                                    @foreach(App\Models\Course::all() as $course)
                                    <option value="{{$course->id}}" @if(in_array($course->id,$edit_data->course_id)) selected @endif >{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pincode</label>
                                <input type="text" name="pincode" placeholder="Enter Pincode" class="form-control" value="{{$edit_data->pincode}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" name="state" placeholder="Enter State" class="form-control" value="{{$edit_data->state}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" placeholder="Enter City" class="form-control" value="{{$edit_data->city}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Enter Address" class="form-control" value="{{$edit_data->address}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cover Image</label>
                                <input type="file" name="cover_image" class="form-control"  >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Thumbnail Image</label>
                                <input type="file" name="thumbnail" class="form-control"  >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>College Description</label>
                                <textarea class="summernote" name="collage_description">{{$edit_data->collage_description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Courses & Fees </label>
                                <textarea class="summernote" name="course_fees">{{$edit_data->course_fees}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Admission </label>
                                <textarea class="summernote" name="admission">{{$edit_data->admission}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cut-offs</label>
                                <textarea class="summernote" name="cut_off">{{$edit_data->cut_off}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Placements</label>
                                <textarea class="summernote" name="placement">{{$edit_data->placement}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Reviews</label>
                                <textarea class="summernote" name="reviews">{{$edit_data->reviews}}
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Facilities</label>
                                <textarea class="summernote" name="facilities">{{$edit_data->facilities}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ques. & Ans</label>
                                <textarea class="summernote" name="question_answer">{{$edit_data->question_answer}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Notable Alumni</label>
                                <textarea class="summernote" name="notable_alumni">{{$edit_data->notable_alumni}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Colleges and Departments</label>
                                <textarea class="summernote" name="collage_department">{{$edit_data->collage_department}}
                                </textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" placeholder="Enter Meta Title" class="form-control" value="{{$edit_data->meta_title}}" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Desciption</label>
                                <textarea class="summernote" name="meta_description">{{$edit_data->meta_description}}
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