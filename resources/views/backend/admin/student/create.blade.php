@extends('backend.layouts.app')
@section('content')
<section class="content-header">
    
</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
                <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data" id="valid_form" >
                @csrf
              
            </form>
        </div>
    </div>
</div>
@endsection