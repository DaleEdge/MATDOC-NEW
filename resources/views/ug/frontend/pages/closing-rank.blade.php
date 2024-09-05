@extends('ug.frontend.layouts.front_app')
<style>
   .header-top-wrapper .header-social ul li a {
      padding-top: 7px;
   }

   .fa-lock:before {
      content: "\f023";
      color: #ff9529;
   }

   table.dataTable thead th {
      color: white !important;
   }

   .dt-search #dt-search-0 {
      height: 16px
   }
</style>

@section('content')
<!-- Counter Start -->
<div class="section counter-section mb-5">
   <div class="container mt-5" style="margin-bottom:100px;">
      <div class="neet-pg-layout">
         <div class="card shadow">
            <div class="card-body">
               <div class="mt-3">
                  <table id="closing_rank" class="table stripe table-hover nowrap w-100">
                     <thead>
                        <tr>
                           <th>Quota</th>
                           <th>Category</th>
                           <th>State</th>
                           <th>Institute</th>
                           <th>Course</th>
                           <th>Fee</th>
                           <th>Beds</th>
                           <th>CR 2023 1</th>
                           <th>CR 2023 2</th>
                           <th>CR 2023 3</th>
                           <th>CR 2023 4</th>
                           <th>CR 2023 5</th>
                           <th>CR 2023 6</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')

<!-- MDB5 -->
<!-- <link href="{{url("plugins/MDB5-7.2.0/css/mdb.min.css?v=2")}}" rel="stylesheet" /> -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" /> -->
<!-- <link href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css" rel="stylesheet" /> -->
<!-- <script src="{{url("plugins/MDB5-7.2.0/js/mdb.es.min.js?v=2")}}"></script> -->


<!-- Datatables -->
<link rel="stylesheet" href="{{url("plugins/dataTables/datatables.min.css?v=2")}}" />
<script src="{{url("plugins/dataTables/datatables.min.js?v=2")}}"></script>
<script src="{{url("plugins/dataTables/dataTables.bootstrap5.min.js?v=2")}}"></script>

<script>
   $(function () {
      $('.nav li a').click(function (e) {
         $('.nav li a').removeClass('active');
         $(this).addClass('active');
      });
   });

   $("#closing_rank").DataTable({
      destroy: true,
      responsive: false,
      processing: true,
      serverSide: true,
      scrollX: true,
      scrollCollapse: true,
      scrollY: "40vh",
      ordering: false,
      ajax: {
         type: "GET",
         url: "{{route('ug.closing_rank')}}",
         error: function (xhr) {
            $("#closing_tank").DataTable().destroy();
            $("#closing_tank").DataTable({ scrollX: true, ordering: false });

            // const message = xhr["responseJSON"]["message"];
            // if (xhr["status"] === 420) {
            //    toastr["warning"](message);
            // } else {
            //    toastr["error"](message);
            // }
         },
         dataSrc: function (data) {

            console.log(data)
            data.iTotalRecords = data?.rows?.length || 0;
            data.iTotalDisplayRecords = data.count || 0;
            return data?.rows || [];
         }
      },
      columns: [
         { data: "quota" },
         { data: "category" },
         { data: "state" },
         { data: "institute" },
         { data: "course" },
         { data: "fee" },
         { data: "beds" },
         { data: "cr_2023_1" },
         { data: "cr_2023_2" },
         { data: "cr_2023_3" },
         { data: "cr_2023_4" },
         { data: "cr_2023_5" },
         { data: "cr_2023_6" }
      ],
      columnDefs: [
         {
            targets: [7, 8, 9, 10, 11, 12],
            render: function (data, type, row, meta) {
               const columnIndex = meta.col - 6;
               return data?.['cr_2023_' + columnIndex] ? `<a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
                    data-bs-target="#seatMatrixDetailsModal" class="cr" 
                    data-quota="${row.quota}"
                    data-category="${row.category}"
                    data-state="${row.state}"
                    data-institute="${row.institute}"
                    data-course="${row.course}"
                    data-session="2023" 
                    data-round=${columnIndex}>
                    ${data?.['cr_2023_' + columnIndex]}
                </a>` : '-';
            }
         },
      ]
   });
</script>
@endsection