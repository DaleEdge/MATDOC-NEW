@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form method="POST" action="{{route('pg_allotments.update', $edit_data->id)}}" enctype="multipart/form-data"
                id="valid_form">
                @method('PUT')
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        Edit UG Neet
                    </h3>
                    <button type="submit" class="btn btn-success float-right"> <i class="fas fa-check"></i>
                        Save</button>
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
                                <label>Round</label>
                                <input type="number" name="round" placeholder="Enter Round" class="form-control"
                                    value="{{$edit_data->round}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>All India Rank</label>
                                <input type="number" name="all_india_rank" placeholder="Enter All India Rank" class="form-control"
                                    value="{{$edit_data->all_india_rank}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State Rank</label>
                                <input type="number" name="state_rank" placeholder="Enter State Rank" class="form-control"
                                    value="{{$edit_data->state_rank}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Neet Score</label>
                                <input type="number" name="neet_score" placeholder="Enter Neet Score" class="form-control"
                                    value="{{$edit_data->neet_score}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <select name="state" id="state" class="form-control">
                                    <option @if($edit_data->state == 'Bihars') selected @endif value="Bihars">Bihars</option>
                                    <option @if($edit_data->state == 'chhattisgarhs') selected @endif value="chhattisgarhs">Chhattisgarhs</option>
                                    <option @if($edit_data->state == 'Gujarats') selected @endif value="Gujarats">Gujarats</option>
                                    <option @if($edit_data->state == 'Haryanas') selected @endif value="Haryanas">Haryanas</option>
                                    <option @if($edit_data->state == 'Himachal Pradeshes') selected @endif value="Himachal Pradeshes">Himachal Pradeshes</option>
                                    <option @if($edit_data->state == 'Jammu and Kashmirs') selected @endif value="Jammu and Kashmirs">Jammu and Kashmirs</option>
                                    <option @if($edit_data->state == 'Jharkhands') selected @endif value="Jharkhands">Jharkhands</option>
                                    <option @if($edit_data->state == 'Karnatakas') selected @endif value="Karnatakas">Karnatakas</option>
                                    <option @if($edit_data->state == 'Madhya Pradeshes') selected @endif value="Madhya Pradeshes">Madhya Pradeshes</option>
                                    <option @if($edit_data->state == 'Maharashtras') selected @endif value="Maharashtras">Maharashtras</option>
                                    <option @if($edit_data->state == 'Pondicherries') selected @endif value="Pondicherries">Pondicherries</option>
                                    <option @if($edit_data->state == 'Punjabs') selected @endif value="Punjabs">Punjabs</option>
                                    <option @if($edit_data->state == 'Telanganas') selected @endif value="Telanganas">Telanganas</option>
                                    <option @if($edit_data->state == 'Uttar Pradeshes') selected @endif value="Uttar Pradeshes">Uttar Pradeshes</option>
                                    <option @if($edit_data->state == 'Uttarakhands') selected @endif value="Uttarakhands">Uttarakhands</option>
                                    <option @if($edit_data->state == 'West Bengals') selected @endif value="West Bengals">West Bengals</option>
                                    <option @if($edit_data->state == 'Tamilnadu') selected @endif value="Tamilnadu">Tamilnadu</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Institute</label>
                                <input type="text" name="institute" placeholder="Enter Institute" class="form-control"
                                    value="{{$edit_data->institute}}">
                            </div>
                        </div>

                           <div class="col-md-6">
                            <div class="form-group">
                                <label>Institute Type</label>
                                <input type="text" name="institute_type" placeholder="Enter Institute Type"
                                    class="form-control" value="{{$edit_data->institute_type}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course</label>
                                <input type="text" name="course" placeholder="Enter Course" class="form-control"
                                    value="{{$edit_data->course}}">
                            </div>
                        </div>

                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Type</label>
                                <input type="text" name="course_type" placeholder="Enter Course Type"
                                    class="form-control" value="{{$edit_data->course_type}}">
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="number" name="seats" placeholder="Enter Seats" class="form-control" value="{{$edit_data->seats}}">
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quota</label>
                                <input type="text" name="quota" placeholder="Enter Quota" class="form-control"
                                    value="{{$edit_data->quota}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" placeholder="Enter Category" class="form-control"
                                    value="{{$edit_data->category}}">
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" name="degree" placeholder="Enter Degree" class="form-control" value="{{$edit_data->degree}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fee</label>
                                <input type="number" name="fee" placeholder="Enter Fee" class="form-control"
                                    value="{{$edit_data->fee}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Beds</label>
                                <input type="number" name="beds" placeholder="Enter Beds" class="form-control"
                                    value="{{$edit_data->beds}}">
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label>Stipend 1st Year</label>
                                <input type="number" name="stipend_1_year" placeholder="Enter 1st year stipend"
                                    class="form-control" value="{{$edit_data->stipend_1_year}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bonus Years</label>
                                <input type="number" name="bond_years" placeholder="Enter Bonus Years"
                                    class="form-control" value="{{$edit_data->bond_years}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bonus Penality</label>
                                <input type="number" name="bond_penalty" placeholder="Enter Bonus Penality"
                                    class="form-control" value="{{$edit_data->bond_penalty}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Session</label>
                                <input type="number" name="session" placeholder="Enter Session" class="form-control"
                                    value="{{$edit_data->session}}">
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 1</label>
                                <input type="number" name="cr_2023_1" placeholder="Enter CR 2023 1" class="form-control"
                                    value="{{$edit_data->cr_2023_1}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 2</label>
                                <input type="number" name="cr_2023_2" placeholder="Enter CR 2023 2" class="form-control"
                                    value="{{$edit_data->cr_2023_2}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 3</label>
                                <input type="number" name="cr_2023_3" placeholder="Enter CR 2023 3" class="form-control"
                                    value="{{$edit_data->cr_2023_3}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 4</label>
                                <input type="number" name="cr_2023_4" placeholder="Enter CR 2023 4" class="form-control"
                                    value="{{$edit_data->cr_2023_4}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 5</label>
                                <input type="number" name="cr_2023_5" placeholder="Enter CR 2023 5" class="form-control"
                                    value="{{$edit_data->cr_2023_5}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 6</label>
                                <input type="number" name="cr_2023_6" placeholder="Enter CR 2023 6" class="form-control"
                                    value="{{$edit_data->cr_2023_6}}">
                            </div>
                        </div> -->

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function () {
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