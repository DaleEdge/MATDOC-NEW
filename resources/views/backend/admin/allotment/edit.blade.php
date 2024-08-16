@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form method="POST" action="{{route('allotment.update', $edit_data->id)}}" enctype="multipart/form-data"
                id="valid_form">
                @method('PUT')
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        Edit Allotment
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
                                <input type="text" name="round" placeholder="Enter Round" class="form-control"
                                    value="{{$edit_data->round}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State Rank</label>
                                <input type="text" name="state_rank" placeholder="Enter State Rank" class="form-control"
                                    value="{{$edit_data->state_rank}}">
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
                                <label>Institute Name</label>
                                <input type="text" name="institute" placeholder="Enter Institute Name" class="form-control"
                                    value="{{$edit_data->institute}}">
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
                                <label>Quota</label>
                                <input type="text" name="quota" placeholder="Enter Quota" class="form-control"
                                    value="{{$edit_data->quota}}">
                            </div>
                        </div>

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