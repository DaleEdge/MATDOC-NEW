@extends('backend.layouts.app')
@section('content')
<section class="content-header">

</section>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Allotments List</h3>
                <a class="btn btn-primary btn-info float-right" href="{{ route('ug_neet_ranks.create') }}"><i
                        class="fa fa-plus" aria-hidden="true"></i> Add Allotments</a>
                <div class="card-tools">

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped text-center" style="white-space:nowrap;">
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
                            <!-- <th>Seats</th> -->
                            <th>Fees</th>
                            <th>Beds</th>
                            <th>Session</th>
                            <!-- <th>CR 2023 1</th>
                            <th>CR 2023 2</th>
                            <th>CR 2023 3</th>
                            <th>CR 2023 4</th>
                            <th>CR 2023 5</th>
                            <th>CR 2023 6</th> -->
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
                                <!-- <td>{{$data->seats}}</td> -->
                                <td>{{$data->fee}}</td>
                                <td>{{$data->beds}}</td>
                                <td>{{$data->session}}</td>
                                <!-- <td>{{$data->cr_2023_1}}</td>
                                                                        <td>{{$data->cr_2023_2}}</td>
                                                                        <td>{{$data->cr_2023_3}}</td>
                                                                        <td>{{$data->cr_2023_4}}</td>
                                                                        <td>{{$data->cr_2023_5}}</td>
                                                                        <td>{{$data->cr_2023_6}}</td> -->
                                <td>
                                    <a class="btn btn-success  btn-sm mr-1"
                                        href="{{route('ug_neet_ranks.edit', $data->id)}}"><i class="far fa-edit"></i></a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['ug_neet_ranks.destroy', $data->id], 'style' => 'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="13" class="text-center text-info">Opps!! There Are No Data Found..</td>
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