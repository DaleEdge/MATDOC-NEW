@extends('backend.layouts.app')
@section('content')


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Branches </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Branch</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card  card-info">
                <div class="card-header">
                    <h3 class="card-title">Search Box</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>


                <div class="card-body" >

                    <form class="search-form-2" id="rank_search" action=""
                        accept-charset="UTF-8" method="post">
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="college">College :</label>
                                    <select class="form-control" name="college"
                                        id="college">
                                        <option selected="selected" value="0">ALL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="course">Course :</label>
                                    <select class="form-control" name="course" id="course"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="0">ALL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="quota">Quota :</label>
                                    <select class="form-control"
                                        name="quota"
                                        id="quota">
                                        <option value="">ALL</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="category">Category :</label>
                                    <select class="form-control"
                                        name="category"
                                        id="category">
                                        <option value="">ALL</option>
                                        
                                    </select>
                                </div>
                            </div>


                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-success">
                                <span class="fa fa-search"></span> SEARCH
                            </button>

                            <a class="btn btn-warning" >CLEAR FORM</a>
                        </div>
                    </form>

                </div>


            </div>

            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">All Rank Data</h3>

                    
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0" id="table_data">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Quota</th>
                                <th>Collage</th>
                                <th>Course</th>
                                <th>Category</th>
                                <th>Course Fee</th>
                                <th>R1</th>
                                <th>R2</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($list as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->quota}}</td>
                                    <td>{{$data->college}}</td>
                                    <td>{{$data->course}}</td>
                                    <td>{{$data->category}}</td>
                                    <td>
                                       @if($data->quota=='KAR DNB Serv') 
                                        {{$data->course_fee}}
                                       @endif
                                       @if($data->quota=='KAR Govt Quota-InS') 
                                        {{$data->course_fee}}
                                       @endif
                                       @if($data->quota=='KAR Govt Quota-Open') 
                                        {{$data->course_fee}}
                                       @endif
                                       @if($data->quota=='KAR NRI Quota') 
                                        {{$data->nri_fee}}
                                       @endif
                                       @if($data->quota=='KAR Others (Inst.Q)') 
                                        {{$data->nri_fee}}
                                       @endif
                                       @if($data->quota=='KAR Priv Seats-GMP') 
                                        {{$data->private_mgmt_fee}}
                                       @endif
                                       @if($data->quota=='KAR Priv Seats-Min.') 
                                        {{$data->private_mgmt_fee}}
                                       @endif
                                       @if($data->quota=='KAR Priv Seats-Open') 
                                        {{$data->private_mgmt_fee}}
                                       @endif
                                        
                                        <td>
                                    <td>{{json_decode($data->rank)[0]}}</td>
                                    <td>{{json_decode($data->rank)[1]}}</td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $list->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

@endsection