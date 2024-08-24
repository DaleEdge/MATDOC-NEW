@extends('frontend.layouts.front_app')

<style>
    thead tr th {
  position: sticky;
  top: 0;
    }
  .header-top-wrapper .header-social ul li a {
    padding-top: 6px !important;
    }

</style>
@section('content')
    <div class="section counter-section section counter-section mb-5">
        <div class="container mt-5 mb-5">
            <div class="neet-pg-layout">
                <div class="shadow custom-accordion-border card">
                    <div class="card-body">
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="card mt-3 home-card">
                                    <div class="border-0 card">
                                        <div class="card-body p-0" id="table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name Of Hospital</th>
                                                            <th>Bed Capacity</th>
                                                            <th>Management Body</th>
                                                            <th>State</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (DB::table('dnb_beds')->get() as $data)
                                                            <tr>   
                                                                <td>{{$data->name_of_hospital}}</td>
                                                                <td>{{$data->bed_capacity}}</td>
                                                                <td>{{$data->management_body}}</td>
                                                                <td>{{$data->state}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
