@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <form method="POST" action="{{route('ug_neet_ranks.store')}}" enctype="multipart/form-data" id="valid_form">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        Add UG Rank
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
                                <label>All India Rank</label>
                                <input type="number" name="all_india_rank" placeholder="Enter All India Rank"
                                    class="form-control">
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
                                <label>Neet Score</label>
                                <input type="number" name="neet_score" placeholder="Enter Neet Score"
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" placeholder="Enter Category" class="form-control">
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="number" name="seats" placeholder="Enter Seats" class="form-control">
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fee</label>
                                <input type="number" name="fee" placeholder="Enter Fee" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Beds</label>
                                <input type="number" name="beds" placeholder="Enter Beds" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Session</label>
                                <input type="number" name="session" placeholder="Enter Session" class="form-control">
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 1</label>
                                <input type="number" name="cr_2023_1" placeholder="Enter CR 2023 1"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 2</label>
                                <input type="number" name="cr_2023_2" placeholder="Enter CR 2023 2"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 3</label>
                                <input type="number" name="cr_2023_3" placeholder="Enter CR 2023 3"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 4</label>
                                <input type="number" name="cr_2023_4" placeholder="Enter CR 2023 4"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 5</label>
                                <input type="number" name="cr_2023_5" placeholder="Enter CR 2023 5"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CR 2023 6</label>
                                <input type="number" name="cr_2023_6" placeholder="Enter CR 2023 6"
                                    class="form-control">
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