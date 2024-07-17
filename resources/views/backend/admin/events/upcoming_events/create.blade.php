@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            
            @if(empty($upcoming_events))
                <form method="POST" action="{{route('upcoming_events.store')}}" enctype="multipart/form-data" id="valid_form">
            @else
                <form method="POST" action="{{route('upcoming_events.update', $upcoming_events->id)}}" enctype="multipart/form-data" id="valid_form">
                    @method('PUT')
            @endif
                @csrf
                <div class="card-header">
                    <h3 class="card-title">
                        NEET Upcoming Events
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
                                <input type="text" class="form-control" name="event_name" placeholder="Enter Previous Event Name" value="@if(isset($upcoming_events)){{$upcoming_events->event_name}} @endif" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Event Start Date</label>
                                <input type="date" class="form-control" name="start_date" value="@if(isset($upcoming_events)){{date('Y-m-d',$upcoming_events->start_date)}}@endif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Event End Date</label>
                                <input type="date" class="form-control" name="end_date" value="@if(isset($upcoming_events)){{date('Y-m-d',$upcoming_events->end_date)}}@endif">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>NEET Upcoming Events</label>
                                <textarea class="summernote" name="upcoming_events" required>
                                    @if(isset($upcoming_events))
                                    {!! $upcoming_events->upcoming_events !!}
                                    @endif
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
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