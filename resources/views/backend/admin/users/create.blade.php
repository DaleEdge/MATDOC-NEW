@extends('backend.layouts.app')
@section('content')
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bff;
            border: 1px solid #007bff;
            border-radius: 4px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 0 5px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-weight: bold;
            margin-right: 2px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
            color: #f00;
        }
    </style>
    <section class="content-header">
                
    </section>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-info">
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <div class="card-header">
                        <h2 class="card-title">Create New User</h2>
                        <button type="submit" class="btn btn-success float-right"> <i class="fas fa-check"></i> Save</button>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                                    <strong>Staff Name:</strong>
                                    <select name="staff_name" id="staff_name" class="form-control">
                                        <option selected disabled> Select Staff</option>
                                        @foreach ($staffs as $staff)
                                            <option value="{{$staff->id}}" id="{{$staff->id}}">{{$staff->staff_name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Branch:</strong>
                                    <select name="branch" id="branch" class="form-control">
                                        <option selected disabled> Select Branch</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{$branch->id}}">{{$branch->branch_name}} ({{$branch->registration_number}})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'id' => 'email', 'readonly')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Confirm Password:</strong>
                                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Role:</strong>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control select2','multiple')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            $('#staff_name').on('change', function() {
                var staff_id = $(this).val();
                $.get("{{route('get_staff','')}}"+"/"+staff_id, function(data) {
                    if(data.staff_email != ''){
                        $('#email').val(data.staff_email);
                        $('#name').val(data.staff_name);
                        $("#email").prop('readonly', true);
                    }else{
                        $('#email').val('');
                        $('#name').val('');
                        $("#email").prop('readonly', false);
                    }
                });
            });
        });
    </script>
@endsection