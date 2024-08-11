@extends('backend.layouts.app')
@section('content')
    <section class="content-header">
        
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">State Documents</h3>
                    <a class="btn btn-primary btn-info float-right" href="{{route('state_document.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add Document</a>
                    <div class="card-tools">
                        <form class="mt-1 mr-4" action="" method="GET" id="valid_form">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Enter Document" @isset($search) value="{{ $search }}" @endisset>
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
                                <th>State Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($state_docs) && $state_docs->count())
                                @php $i = 1; @endphp
                                @foreach ($state_docs as $state_doc)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td> {{$state_doc->state_name}} </td>
                                        <td>{!!$state_doc->state_desc!!}</td>
                                        <td class="text-center">
                                            {!! Form::open(['method' => 'DELETE','route' => ['state_document.destroy', $state_doc->id],'style'=>'display:inline']) !!}
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
