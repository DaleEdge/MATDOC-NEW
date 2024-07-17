@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
        
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">NEET Notices</h3>
                    <a class="btn btn-primary btn-info float-right" href="{{route('notice.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> New Notice</a>
                    <div class="card-tools">
                        <form class="mt-1 mr-4" action="" method="GET" id="valid_form">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Enter Notice Title" @isset($search) value="{{ $search }}" @endisset>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Noitce Title</th>
                                <th>Notice Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($notices) && $notices->count())
                                @php $i = 1; @endphp
                                @foreach ($notices as $notice)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td> {{$notice->title}} </td>
                                        <td>{!!$notice->description!!}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm mr-1" href="{{ route('notice.edit',$notice->id) }}"><i class="far fa-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['notice.destroy', $notice->id],'style'=>'display:inline']) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
