@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
        
    </section>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card card-danger card-tabs">
                <div class="card-header p-0">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'all_events')active @endif" href="{{route('all_events')}}" role="tab" aria-selected="true">All Events</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link @if(Route::currentRouteName() == 'upcoming_events.index')active @endif" href="{{route('upcoming_events.index')}}" role="tab" aria-selected="true">Upcoming Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'previous_events.index')active @endif" href="{{route('previous_events.index')}}" role="tab" aria-selected="true">Previous Events</a>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="tab-content" >
                    <div class="tab-pane fade show active" role="tabpanel">
                        <div class="card-header">
                            <h3 class="card-title">NEET Upcoming Events</h3>
                            <a class="btn btn-primary btn-info float-right" href="{{route('upcoming_events.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> New Events</a>
                            <div class="card-tools">
                                <form class="mr-4" action="" method="GET" id="valid_form">
                                    <div class="input-group input-group" style="width: 250px;">
                                        <input type="text" name="search" class="form-control float-right" placeholder="Enter Event Name" @isset($search) value="{{ $search }}" @endisset>
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
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Events Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($upcoming_events) && $upcoming_events->count())
                                        @php $i = 1; @endphp
                                        @foreach ($upcoming_events as $events)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$events->event_name}} </td>
                                                <td>{{date('d-m-Y', $events->start_date)}}</td>
                                                <td>{{date('d-m-Y', $events->end_date)}}</td>
                                                <td class="d-flex">
                                                    <a class="btn btn-success btn-sm mr-1" href="{{ route('upcoming_events.edit',$events->id) }}"><i class="far fa-edit"></i></a>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['upcoming_events.destroy', $events->id],'style'=>'display:inline']) !!}
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
                        <div class="card-footer">
                            {!! $upcoming_events->links() !!}
                        </div>
                        
                    </div>
                </div>
                
                <!-- /.card -->
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">NEET Upcoming Events</h3>
                    <a class="btn btn-primary btn-info float-right" href="{{route('upcoming_events.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> New Upcoming Events</a>
                    <div class="card-tools">
                        <form class="mt-1 mr-4" action="" method="GET" id="valid_form">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Enter Event Name" @isset($search) value="{{ $search }}" @endisset>
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Events Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($upcoming_events) && $upcoming_events->count())
                                @php $i = 1; @endphp
                                @foreach ($upcoming_events as $events)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$events->event_name}} </td>
                                        <td>{{date('d-m-Y', $events->start_date)}}</td>
                                        <td>{{date('d-m-Y', $events->end_date)}}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('upcoming_events.edit',$events->id) }}"><i class="far fa-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['upcoming_events.destroy', $events->id],'style'=>'display:inline']) !!}
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
                <div class="card-footer">
                    {!! $upcoming_events->links() !!}
                </div>
            </div>
        </div>
    </div> --}}
@endsection