@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form method="POST" action="{{route('allotment.store')}}" enctype="multipart/form-data" id="valid_form">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        Add Allotment
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
                                <input type="number" name="round" placeholder="Enter Round" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State Rank</label>
                                <input type="number" name="state_rank" placeholder="Enter State Rank"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <select name="state" id="state" class="form-control">
                                    <option selected disabled>Select State</option>
                                    <option value="Bihars">Bihars</option>
                                    <option value="chhattisgarhs">Chhattisgarhs</option>
                                    <option value="Gujarats">Gujarats</option>
                                    <option value="Haryanas">Haryanas</option>
                                    <option value="Himachal Pradeshes">Himachal Pradeshes</option>
                                    <option value="Jammu and Kashmirs">Jammu and Kashmirs</option>
                                    <option value="Jharkhands">Jharkhands</option>
                                    <option value="Karnatakas">Karnatakas</option>
                                    <option value="Madhya Pradeshes">Madhya Pradeshes</option>
                                    <option value="Maharashtras">Maharashtras</option>
                                    <option value="Pondicherries">Pondicherries</option>
                                    <option value="Punjabs">Punjabs</option>
                                    <option value="Telanganas">Telanganas</option>
                                    <option value="Uttar Pradeshes">Uttar Pradeshes</option>
                                    <option value="Uttarakhands">Uttarakhands</option>
                                    <option value="West Bengals">West Bengals</option>
                                    <option value="Tamilnadu">Tamilnadu</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Institute Name</label>
                                <input type="text" name="institute" placeholder="Enter Institute Name"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course</label>
                                <input type="text" name="course" placeholder="Enter Course" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quota</label>
                                <input type="text" name="quota" placeholder="Enter Quota" class="form-control">
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