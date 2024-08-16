@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Allotment List</h3>
                <a class="btn btn-primary btn-info float-right" href="{{ route('allotment.create') }}"><i
                        class="fa fa-plus" aria-hidden="true"></i> Add Allotment</a>
                <div class="card-tools">

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Round</th>
                            <th>All India Rank</th>
                            <th>State Rank</th>
                            <th>Neet Score</th>
                            <th>State</th>
                            <th>Institute</th>
                            <th>Course</th>
                            <th>Quota</th>
                            <th>Category</th>
                            <th>Fees</th>
                            <th>Beds</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($list as $key => $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$data->round}}</td>
                                <td>{{$data->all_india_rank}}</td>
                                <td>{{$data->state_rank}}</td>
                                <td>{{$data->neet_score}}</td>
                                <td>{{$data->state}}</td>
                                <td>{{$data->institute}}</td>
                                <td>{{$data->course}}</td>
                                <td>{{$data->quota}}</td>
                                <td>{{$data->category}}</td>
                                <td>{{$data->fee}}</td>
                                <td>{{$data->beds}}</td>
                                <td>
                                    <a class="btn btn-success  btn-sm mr-1" href="{{route('allotment.edit', $data->id)}}"><i
                                            class="far fa-edit"></i></a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['allotment.destroy', $data->id], 'style' => 'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center text-info">Opps!! There Are No Data Found..</td>
                            </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection