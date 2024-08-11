@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
                <form method="POST" action="{{route('payment.update',$edit_data->id)}}" enctype="multipart/form-data" id="valid_form" >
                    @method('PUT')
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                       Edit Payment
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
                                <label>User ID</label>
                                <input type="text" name="name" readonly class="form-control"  value="{{$edit_data->user_id}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Id</label>
                                <input type="text" name="payment_id" class="form-control" value="{{$edit_data->payment_id}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Amount</label>
                                <input type="text" name="payment_amount" class="form-control" value="{{$edit_data->payment_amount}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Plan Name	</label>
                                <input type="text" name="plan_name" readOnly class="form-control" value="{{$edit_data->plan_name}}" >
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Payment Status</label>
                                <select name="plan_status" id="plan_status" class="form-control" >
                                    <option selected disabled>UpDate Payment Status</option>
                                    <option value="success" @if($edit_data->plan_status=='success') selected @endif>Success</option>
                                    <option value="pending" @if($edit_data->plan_status=='pending') selected @endif >Pending</option>
                                </select>
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