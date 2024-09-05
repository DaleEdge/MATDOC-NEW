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

   .dt-search input[type='search'] {
      height: auto !important
   }

   .dt-length {
      display: flex;
   }

   .dt-length label {
      margin-top: auto;
      margin-bottom: auto;
      /* Adjust spacing between label and input */
   }

   .dt-search {
      display: flex;
   }

   .dt-search label {
      margin-top: auto;
      margin-bottom: auto;
      /* Adjust spacing between label and input */
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

<!-- Modal -->
<div class="modal fade" id="closingRankDetailsModal" tabindex="-1" role="dialog"
   aria-labelledby="closingRankDetailsModalLabel" aria-hidden="true" data-backdrop="true" data-background=false
   data-keyboard="true">
   <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel">Closing Rank Details</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
         </div>
         <div class="modal-body" id="closingRankDetailsModalBody">
            <table id="closing_rank_details" class="table stripe table-hover nowrap w-100">
               <thead>
                  <tr>
                     <th>Quota</th>
                     <th>Category</th>
                     <th>State</th>
                     <th>Institute</th>
                     <th>Course</th>
                     <th>Fee</th>
                     <th>Beds</th>
                     <th>All India Rank</th>
                  </tr>
               </thead>
            </table>
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

   $("#closing_rank").DataTable({
      destroy: true,
      responsive: false,
      processing: true,
      serverSide: true,
      scrollX: true,
      scrollCollapse: true,
      scrollY: "60vh",
      ordering: false,
      language: {
         searchPlaceholder: 'Global Search'
      },
      ajax: {
         type: "GET",
         url: "{{route('ug.closing_rank')}}",
         error: function (xhr) {
            $("#closing_tank").DataTable().destroy();
            $("#closing_tank").DataTable({ scrollX: true, ordering: false });
         },
         dataSrc: function (data) {
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
               return data ? `<a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
                    data-bs-target="#closingRankDetailsModal" class="cr" 
                    data-quota="${row.quota}"
                    data-category="${row.category}"
                    data-state="${row.state}"
                    data-institute="${row.institute}"
                    data-course="${row.course}"
                    data-session="2023" 
                    data-round=${columnIndex}>
                    ${data}
                </a>` : '-';
            }
         },
      ]
   });

   $(document).on('click', '.cr', function (event) {
      event.preventDefault();

      // Retrieve values from the data attributes of the clicked element
      var quota = $(this).data('quota');
      var category = $(this).data('category');
      var state = $(this).data('state');
      var institute = $(this).data('institute');
      var course = $(this).data('course');
      var session = $(this).data('session');
      var round = $(this).data('round');

      $("#closing_rank_details").DataTable({
         destroy: true,
         responsive: false,
         processing: true,
         serverSide: true,
         scrollX: true,
         scrollCollapse: true,
         scrollY: "30vh",
         ordering: false,
         language: {
            searchPlaceholder: 'Search All India Rank'
         },
         ajax: {
            type: "GET",
            url: "{{route('ug.closing_rank_details')}}",
            data: {
               quota,
               category,
               state,
               institute,
               course,
               round,
               session
            },
            beforeSend: function () {
               $('.preloader').show(); // Show preloader before the request
            },
            complete: function () {
               $('.preloader').hide(); // Ensure preloader is hidden when request completes
            },
            error: function (xhr) {
               $("#closing_rank_details").DataTable().destroy();
               $("#closing_rank_details").DataTable({ scrollX: true, ordering: false });

               // const message = xhr["responseJSON"]["message"];
               // if (xhr["status"] === 420) {
               //    toastr["warning"](message);
               // } else {
               //    toastr["error"](message);
               // }
            },
            dataSrc: function (data) {
               $('.preloader').hide();
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
            { data: "all_india_rank" },
         ],
      });
   });
</script>
@endsection