@extends('backend.layouts.app')
@section('content')
    <section class="content-header">

    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Payment List</h3>
                    
                    <div class="card-tools">
                        <!--<form class="mt-1 mr-4" action="" method="GET" id="valid_form">
                            <div class="input-group input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right"
                                    placeholder="Enter Collage Name"
                                    @isset($search) value="{{ $search }}" @endisset> 
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>-->
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Id</th>
                                <th>Payment Id</th>
                                <th>Payment Amount</th>
                                <th>Plan Name</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($list as $key=>$data)

                            <td> {{$key+1}} </td>
                            <td>{{$data->user_id}}</td>
                            <td>{{$data->payment_id}}</td>
                            <td>{{$data->payment_amount}}</td>
                            <td>{{$data->plan_name}}</td>
                            <td>{{$data->plan_status}}</td>
                            <td>
                                <a class="btn btn-success  btn-sm mr-1" href="{{route('payment.edit',$data->id)}}"><i class="far fa-edit"></i></a>
                                <!-- <a class="btn btn-danger btn-sm mr-1" href=""><i class="fa fa-trash"></i></a> -->
                            </td>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
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
