@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
                        
    </section>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h2 class="card-title">Create New Role</h2>
                    <a class="btn btn-info float-right" href="{{ route('roles.index') }}"><i class="fa fa-arrow-left nav-icon"></i> Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $role->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permissions:</strong>
                                @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                        <label class="label label-success">{{ $v->name }},</label>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection