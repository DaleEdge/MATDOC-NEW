@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            @if(empty($previous_events))
                <form method="POST" action="{{route('previous_events.store')}}" enctype="multipart/form-data" id="valid_form">
            @else
                <form method="POST" action="{{route('previous_events.update', $previous_events->id)}}" enctype="multipart/form-data" id="valid_form">
                    @method('PUT')
            @endif
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        NEET Previous Events
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Previous Event Name</label>
                                <input type="text" class="form-control" name="event_name" placeholder="Enter Previous Event Name" value="@if(isset($previous_events)){{$previous_events->event_name}} @endif" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Event Start Date</label>
                                <input type="date" class="form-control" name="start_date" value="@if(isset($previous_events)){{date('Y-m-d',$previous_events->start_date)}}@endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Event End Date</label>
                                <input type="date" class="form-control" name="end_date" value="@if(isset($previous_events)){{date('Y-m-d',$previous_events->end_date)}}@endif">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Events Images</label>
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                    </div>
                                    <div class="form-control file-amount">Choose File</div>
                                    <input type="hidden" name="image" class="selected-files" value="@if (isset($previous_events) && $previous_events->images != null){{$previous_events->images}} @endif">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>NEET Previous Events</label>
                                <textarea class="summernote" name="previous_events" required>
                                    @if(isset($previous_events))
                                    {!! $previous_events->previos_events !!}
                                    @endif
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- /.col-->
</div>
<script>
    $(function(){
        $('.summernote').summernote({
            height: 300,
            toolbar: [ 
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection