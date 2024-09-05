@extends('frontend.layouts.front_app')

<head>
   <!-- MDB -->
   <link href="{{url("plugins/MDB5-7.2.0/css/mdb.min.css?v=2")}}" rel="stylesheet" />
   <link rel="stylesheet" href="{{url("plugins/dataTables/datatables.min.css?v=2")}}" />
   <link rel="stylesheet" href="{{url("plugins/select2/css/select2.min.css?v=2")}}" />

   <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->


</head>

<!-- Bootstrap -->
<!-- <link href="{{url("plugins/bootstrap/css/bootstrap.min.css?v=2")}}" rel="stylesheet" /> -->
<style>
   .header-top-wrapper .header-social ul li a {
      padding-top: 7px;
   }

   .fa-lock:before {
      content: "\f023";
      color: #ff9529;
   }

   /* Modal */
   .modal-content {
      border: 3px solid rgb(213 213 213) !important;
      background: white !important;
      /* box-shadow: 0 30px 30px rgba(0, 0, 0, 0.2); */
   }

   table.dataTable {
      border-radius: 14px;
   }

   /* Table */
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

   .form-control {
      border-radius: 4px !important;
      height: auto !important;
      padding: 5px 10px !important;
   }

   .select2-dropdown {
      z-index: 10000 !important;
   }
</style>

@section('content')
<!-- Counter Start -->
<div class="section counter-section mb-5">
   <div class="container mt-5" style="margin-bottom:100px;">
      <div class="neet-pg-layout">
         <div class="card shadow">
            <div class="card-body">
               <div class="d-flex justify-content-end d-none">
                  <div class="btn btn-outline-primary d-flex justify-content-center rounded align-items-center"
                     style="height:35px" data-bs-toggle="modal" data-bs-target="#filtersModal">
                     <span><i class="fa fa-filter fs-6"></i></span>
                     &nbsp;&nbsp;
                     <span class="text-sm">Filter</span>
                  </div>
               </div>

               <div class="mt-3">
                  <table id="closing_rank" class="table display table-hover nowrap w-100">
                     <thead class="w-auto">
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

<!-- Filter Modal -->
<div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
   aria-hidden="true" data-backdrop="true" data-background=false data-keyboard="true">
   <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header mx-4 px-0">
            <h5 class="modal-title">Filters</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row d-flex justify-content-between">
               <div class="col-lg-4">
                  <fieldset class="p-3 border border-grey rounded">
                     <div class="form-group">
                        <label class="w-auto">Rank</label>
                        <div class="d-flex align-items-center">
                           <input type="number" class="form-control" placeholder="Enter rank">
                           <span class="mx-2">-</span>
                           <input type="number" class="form-control" placeholder="Enter rank">
                        </div>
                     </div>

                     <div class="form-group mt-3">
                        <label for="round">Round</label>
                        <select class="form-control input-dropdown w-100" name="round" id="round">
                        </select>
                     </div>
                  </fieldset>
               </div>
               <div class="col-lg-4">
                  <fieldset class="p-4 border border-grey rounded">
                     <legend class="w-auto">Rank</legend>
                     <div class="d-flex align-items-center">
                        <input type="text" class="form-control me-2" placeholder="Enter rank">
                        <span class="mx-2">-</span>
                        <input type="text" class="form-control ms-2" placeholder="Enter rank">
                     </div>
                  </fieldset>
               </div>
               <div class="col-lg-4">
                  <fieldset class="p-4 border border-grey rounded">
                     <legend class="w-auto">Rank</legend>
                     <div class="d-flex align-items-center">
                        <input type="text" class="form-control me-2" placeholder="Enter rank">
                        <span class="mx-2">-</span>
                        <input type="text" class="form-control ms-2" placeholder="Enter rank">
                     </div>
                  </fieldset>
               </div>
            </div>

         </div>
         <div class="modal-footer mx-4 px-0">
            <span style="font-weight:500;font-size:12px; cursor:pointer">Clear Filters</span>
            <div class="btn btn-sm btn-primary d-flex align-items-center justify-content-center me-0">View Results</div>
         </div>
      </div>
   </div>
</div>

<!-- Details Modal -->
<div class="modal fade" id="closingRankDetailsModal" tabindex="-1" role="dialog"
   aria-labelledby="closingRankDetailsModalLabel" aria-hidden="true" data-backdrop="true" data-background=false
   data-keyboard="true">
   <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header mx-4 px-0">
            <h5 class="modal-title">Closing Rank Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <table id="closing_rank_details" class="table stripe table-hover nowrap w-100">
               <thead class="w-auto">
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

<!-- MDB -->
<script src="{{url("plugins/MDB5-7.2.0/js/mdb.es.min.js?v=2")}}"></script>

<!-- Bootstrap -->
<!-- <script src="{{url("plugins/bootstrap/js/bootstrap.min.js?v=2")}}"></script> -->

<!-- Datatables -->
<script src="{{url("plugins/dataTables/datatables.min.js?v=2")}}"></script>
<!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
<script src="{{url("plugins/dataTables/dataTables.bootstrap5.min.js?v=2")}}"></script>

<!-- Select2 -->
<script src="{{url("plugins/select2/js/select2.min.js?v=2")}}"></script>


<script>

   $("#round").select2({
      placeholder: "Choose a round",
      allowClear: true,
      data: [{ id: "1", text: "1" }, { id: "2", text: "1" }]
   })

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
         url: "{{route('closing_rank')}}",
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
      // $('.preloader').show();

      // Retrieve values from the data attributes of the clicked element
      var quota = $(this).data('quota');
      var category = $(this).data('category');
      var state = $(this).data('state');
      var institute = $(this).data('institute');
      var course = $(this).data('course');
      var session = $(this).data('session');
      var round = $(this).data('round');

      $('#closingRankDetailsModal').on('shown.bs.modal', function () {
         // $('.preloader').hide();

         $("#closing_rank_details").DataTable({
            destroy: true,
            responsive: false,
            processing: true,
            serverSide: true,
            scrollX: true,
            scrollCollapse: true,
            scrollY: "30vh",
            ordering: false,
            "oLanguage": {
               "sSearch": "Filter All India Rank:"
            },
            language: {
               searchPlaceholder: '10'
            },
            ajax: {
               type: "GET",
               url: "{{route('closing_rank_details')}}",
               data: {
                  quota,
                  category,
                  state,
                  institute,
                  course,
                  round,
                  session
               },
               complete: function () {
                  // $('.preloader').hide(); // Ensure preloader is hidden when request completes
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
                  // $('.preloader').hide();
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
   });

   $('#closingRankDetailsModal').on('hidden.bs.modal', function () {
      $('#closing_rank_details').DataTable().clear().destroy();
   })

</script>
@endsection