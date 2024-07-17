@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            @if(empty($state_document))
                <form method="POST" action="{{route('state_document.store')}}" enctype="multipart/form-data" id="valid_form" >
            @else
                <form method="POST" action="{{route('state_document.update', $state_document->id)}}" enctype="multipart/form-data" id="valid_form">
                @method('PUT')
            @endif
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        School Notice
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>State Name</label>
                                <input type="text" name="state_name" placeholder="Enter Title" class="form-control" value="@if(isset($state_document)){{$state_document->state_name}}@endif" required>
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="summernote" name="state_desc" required>
                                    @if(isset($state_document)){{$state_document->state_desc}}@endif
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