@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
                
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h2 class="card-title">Role Management</h2>
                    @can('role-create')
                        <a class="btn btn-primary btn-info float-right" href="{{ route('roles.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Create New Role</a>
                    @endcan
                    <div class="card-tools">
                        <form class="mt-1 mr-4" action="" method="GET">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Enter Role Name" @isset($search) value="{{ $search }}" @endisset>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th width="280px">Action</th>
                        </tr>
                        @if (!empty($roles) && $roles->count())
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm mr-1" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye"></i></a>
                                        @can('role-edit')
                                            <a class="btn btn-primary btn-sm mr-1" href="{{ route('roles.edit',$role->id) }}"><i class="far fa-edit"></i></a>
                                        @endcan
                                        @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                            <tr>
                        @endif
                    </table>
                </div>
                <div class="card-footer">
                    {!! $roles->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection