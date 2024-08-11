@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            @if(empty($notice))
                <form method="POST" action="{{route('notice.store')}}" enctype="multipart/form-data" id="valid_form" >
            @else
                <form method="POST" action="{{route('notice.update', $notice->id)}}" enctype="multipart/form-data" id="valid_form">
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
                                <label>Title</label>
                                <input type="text" name="title" placeholder="Enter Title" class="form-control" value="@if(isset($notice)){{$notice->title}}@endif" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="summernote" name="description" required>
                                    @if(isset($notice)){{$notice->description}}@endif
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