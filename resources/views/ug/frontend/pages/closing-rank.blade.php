@extends('ug.frontend.layouts.front_app')

<head>
   <!-- MDB -->
   <link href="{{url("plugins/MDB5-7.2.0/css/mdb.min.css?v=2")}}" rel="stylesheet" />
   <link rel="stylesheet" href="{{url("plugins/dataTables/datatables.min.css?v=2")}}" />
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">
   <link rel="stylesheet" href="{{url("plugins/select2/css/select2.min.css?v=2")}}" />

   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{url("plugins/font-awesome/css/all.min.css?v=2")}}" />

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

   /* Select 2 */
   .select2-dropdown {
      z-index: 10000 !important;
   }

   .select2-selection,
   .select2-selection--multiple {
      height: auto !important;
      border-radius: 4px !important;
   }

   .select2-selection__arrow b {
      margin-top: auto !important;
      margin-bottom: auto !important;
   }

   .select2-selection__clear {
      margin-right: 5px !important;
   }

   .select2-results__options {
      &[aria-multiselectable=true] {

         .select2-results__option {
            &[aria-selected=true]:before {
               content: '☑';
               font-size: 20px;
               padding: 0 6px 0 4px;
            }

            &:before {
               content: '◻';
               font-size: 20px;
               padding: 0 6px 0 4px;
            }
         }
      }
   }
</style>

@section('console-header')
@include('frontend.pages.console') <!-- This includes the content from console-header.blade.php -->
@endsection

@section('content')
<!-- Counter Start -->
<div class="section counter-section mb-5">
   <div class="container mt-5" style="margin-bottom:100px;">
      <div class="neet-pg-layout">
         <div class="card shadow">
            <div class="card-body">
               <!-- Filter Button -->
               <div class="d-flex justify-content-end mb-3">
                  <div class="btn btn-outline-primary d-flex justify-content-center rounded align-items-center"
                     style="h eight:35px" data-bs-toggle="modal" data-bs-target="#filtersModal">
                     <span><i class="fa fa-filter fs-6"></i></span>
                     &nbsp;&nbsp;
                     <span class="text-sm">Filter</span>
                  </div>
               </div>
               <!-- Filter Button End -->

               <!-- Tabs for All India Rank and State Rank -->
               <ul class="nav nav-tabs" id="rankTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="all-india-rank-tab" data-bs-toggle="tab"
                        data-bs-target="#all-india-rank" type="button" role="tab" aria-controls="all-india-rank"
                        aria-selected="true">All India Rank</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="state-rank-tab" data-bs-toggle="tab" data-bs-target="#state-rank"
                        type="button" role="tab" aria-controls="state-rank" aria-selected="false">State Rank</button>
                  </li>
               </ul>


               <div class="tab-content mt-3" id="rankTabContent">
                  <!-- All India Rank Tab -->
                  <div class="tab-pane fade show active" id="all-india-rank" role="tabpanel"
                     aria-labelledby="all-india-rank-tab">
                     <table id="closing_rank-air" class="table display table-hover nowrap w-100">
                        <thead class="w-auto">
                           <tr>
                              <th>Quota</th>
                              <th>Category</th>
                              <th>State</th>
                              <th>Institute</th>
                              <th>Institute Type</th>
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

                  <!-- State Rank Tab -->
                  <div class="tab-pane fade" id="state-rank" role="tabpanel" aria-labelledby="state-rank-tab">
                     <table id="closing_rank-sr" class="table display table-hover nowrap w-100">
                        <thead class="w-auto">
                           <tr>
                              <th>Quota</th>
                              <th>Category</th>
                              <th>State</th>
                              <th>Institute</th>
                              <th>Institute Type</th>
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
                  <fieldset class="p-4 border border-grey rounded">
                     <div class="form-group">
                        <label class="fw-bold">Rank</label>
                        <div class="d-flex align-items-center">
                           <input id="rankStart" type="number" class="form-control" placeholder="0">
                           <span class="mx-2">-</span>
                           <input id="rankEnd" type="number" class="form-control" placeholder="100000">
                        </div>
                     </div>

                     <div class="form-group mt-3">
                        <label for="session" class="fw-bold">Session</label>
                        <select class="form-control input-dropdown w-100" name="session" id="session">
                        </select>
                     </div>

                     <div class="form-group mt-3">
                        <label for="round" class="fw-bold">Round</label>
                        <select class="form-control input-dropdown w-100" name="round" id="round">
                        </select>
                     </div>

                     <div class="form-group mt-3">
                        <label for="quota" class="fw-bold">Quota</label>
                        <select class="form-control input-dropdown w-100" name="quota" id="quota">
                        </select>
                     </div>

                     <div class="form-group mt-3">
                        <label for="category" class="fw-bold">Category</label>
                        <select class="form-control input-dropdown w-100" name="category" id="category">
                        </select>
                     </div>
                  </fieldset>
               </div>
               <div class="col-lg-4">
                  <fieldset class="p-4 border border-grey rounded">
                     <div class="form-group">
                        <label for="state" class="fw-bold">State</label>
                        <select class="form-control input-dropdown w-100" name="state" id="state">
                        </select>
                     </div>

                     <div class="form-group mt-3">
                        <label for="institute" class="fw-bold">Institute</label>
                        <select class="form-control input-dropdown w-100" name="institute" id="institute">
                        </select>
                     </div>

                     <div class="form-group mt-3">
                        <label for="institute_type" class="fw-bold">Institute Type</label>
                        <select class="form-control input-dropdown w-100" name="institute_type" id="institute_type">
                        </select>
                     </div>

                     <div class="form-group mt-3">
                        <label class="fw-bold">Beds</label>
                        <div class="d-flex align-items-center">
                           <input id="bedStart" type="number" class="form-control" placeholder="0">
                           <span class="mx-2">-</span>
                           <input id="bedEnd" type="number" class="form-control" placeholder="100000">
                        </div>
                     </div>

                     <div class="form-group mt-3">
                        <label class="fw-bold">Fee</label>
                        <div class="d-flex align-items-center">
                           <input id="feeStart" type="number" class="form-control" placeholder="0">
                           <span class="mx-2">-</span>
                           <input id="feeEnd" type="number" class="form-control" placeholder="1000000000">
                        </div>
                     </div>
                  </fieldset>
               </div>
               <div class="col-lg-4 h-100">
                  <fieldset class="p-4 border border-grey rounded">
                     <div class="form-group">
                        <label for="course" class="fw-bold">Course</label>
                        <select class="form-control input-dropdown w-100" name="course" id="course">
                        </select>
                     </div>
                  </fieldset>
               </div>
            </div>

         </div>
         <div class="modal-footer mx-4 px-0">
            <span id='clear_filters' style="font-weight:500;font-size:12px; cursor:pointer">Clear Filters</span>
            <div id="view_results" class="btn btn-sm btn-primary d-flex align-items-center justify-content-center me-0">
               View Results</div>
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
                     <th>Institute Type</th>
                     <th>Course</th>
                     <th>Fee</th>
                     <th>Beds</th>
                     <th id="rankColType">Rank</th>
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
   loadClosingRankTable();

   $('#filtersModal').on('shown.bs.modal', function () {
      // Initializing Select2

      $("#session").select2({
         placeholder: "Choose a session",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_sessions')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val()
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.session,
                        text: item.session,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      $("#round").select2({
         placeholder: "Choose a round",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_rounds')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val()
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.round,
                        text: item.round,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      $("#quota").select2({
         placeholder: "Choose a quota",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_quota')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val(),
                  round: $("#round").val()
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.quota,
                        text: item.quota,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      $("#category").select2({
         placeholder: "Choose a category",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_categories')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val(),
                  round: $("#round").val(),
                  quota: $("#quota").val(),
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.category,
                        text: item.category,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      $("#state").select2({
         placeholder: "Choose a state",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_states')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val(),
                  round: $("#round").val(),
                  quota: $("#quota").val(),
                  category: $("#category").val(),
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.state,
                        text: item.state,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      $("#institute").select2({
         placeholder: "Choose a institute",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_institutes')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val(),
                  round: $("#round").val(),
                  quota: $("#quota").val(),
                  category: $("#category").val(),
                  state: $("#state").val(),
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.institute,
                        text: item.institute,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      $("#institute_type").select2({
         placeholder: "Choose a institute type",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_institute_types')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val(),
                  round: $("#round").val(),
                  quota: $("#quota").val(),
                  category: $("#category").val(),
                  state: $("#state").val(),
                  institute: $("#institute").val(),
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.institute_type,
                        text: item.institute_type,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });

      // // Event listener to re-render the selection display on change
      // $('#institute').on('change', function () {
      //    $(this).trigger('select2:select');
      // });

      $("#course").select2({
         placeholder: "Choose a course",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('ug.get_courses')}}",
            data: (params) => {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               let query = {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
                  rankStart: $("#rankStart").val(),
                  rankEnd: $("#rankEnd").val(),
                  session: $("#session").val(),
                  round: $("#round").val(),
                  quota: $("#quota").val(),
                  category: $("#category").val(),
                  state: $("#state").val(),
                  institute: $("#institute").val(),
                  institute_type: $("#institute_type").val(),
                  bedStart: $("#bedStart").val(),
                  bedEnd: $("#bedEnd").val(),
                  feeStart: $("#feeStart").val(),
                  feeEnd: $("#feeEnd").val(),
               };

               // Query parameters will be ?search=[term]&page=[page]
               return query;
            },
            processResults: (data, params) => {
               return {
                  results: $.map(data?.rows, (item) => {
                     return {
                        id: item.course,
                        text: item.course,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data?.count,
                  },
               };
            },
         },
      });
   })

   $(document).on('click', '#view_results', () => {
      loadClosingRankTable();
      checkFilter();
      $("#filtersModal").modal('hide');
   });

   function checkFilter() {
      if ($("#rankStart").val("") != "" || $("#rankEnd").val("") != "" || $("#session").val("") != "" || $("#round").val("") != "" || $("#quota").val("") != "" || $("#category").val("") != "" || $("#state").val("") != "" || $("#institute").val("") != "" || $("#institute_type").val("") != "" || $("#bedStart").val("") != "" || $("#bedEnd").val("") != "" || $("#feeStart").val("") != "" || $("#feeEnd").val("") != "" || $("#course").val("") != "") {
         $("#outside_clear_filters").removeClass("d-none");
      } else {
         $("#outside_clear_filters").addClass("d-none");
      }
   }

   $(document).on('click', '#outside_clear_filters', () => {
      $("#clear_filters").click();
      $("#outside_clear_filters").addClass("d-none");
   })

   $(document).on('click', '#clear_filters', () => {
      $("filtersModal input").val("");
      $("#session").val("").trigger("change");
      $("#round").val("").trigger("change");
      $("#quota").val("").trigger("change");
      $("#category").val("").trigger("change");
      $("#state").val("").trigger("change");
      $("#institute").val("").trigger("change");
      $("#institute_type").val("").trigger("change");
      $("#course").val("").trigger("change");

      loadClosingRankTable();
      $("#filtersModal").modal('hide');
   })

   function loadClosingRankTable() {
      $("#closing_rank-air").DataTable({
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
            data: {
               rankType: "all_india_rank",
               rankStart: $("#rankStart").val(),
               rankEnd: $("#rankEnd").val(),
               session: $("#session").val(),
               round: $("#round").val(),
               quota: $("#quota").val(),
               category: $("#category").val(),
               state: $("#state").val(),
               institute: $("#institute").val(),
               institute_type: $("#institute_type").val(),
               bedStart: $("#bedStart").val(),
               bedEnd: $("#bedEnd").val(),
               feeStart: $("#feeStart").val(),
               feeEnd: $("#feeEnd").val(),
               course: $("#course").val()
            },
            error: function (xhr) {
               $("#closing_rank").DataTable().destroy();
               $("#closing_rank").DataTable({ scrollX: true, ordering: false });
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
            { data: "institute_type" },
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
               targets: [8, 9, 10, 11, 12, 13],
               render: function (data, type, row, meta) {
                  const columnIndex = meta.col - 7;
                  return data ? `<a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
                    data-bs-target="#closingRankDetailsModal" class="cr" 
                    data-quota="${row.quota}"
                    data-category="${row.category}"
                    data-state="${row.state}"
                    data-institute="${row.institute}"
                    data-institute_type="${row.institute_type}"
                    data-course="${row.course}"
                    data-session="2023" 
                    data-round=${columnIndex}>
                    ${data}
                </a>` : '-';
               }
            },
         ]
      });

      $("#closing_rank-sr").DataTable({
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
            data: {
               rankType: "state_rank",
               rankStart: $("#rankStart").val(),
               rankEnd: $("#rankEnd").val(),
               session: $("#session").val(),
               round: $("#round").val(),
               quota: $("#quota").val(),
               category: $("#category").val(),
               state: $("#state").val(),
               institute: $("#institute").val(),
               institute_type: $("#institute_type").val(),
               bedStart: $("#bedStart").val(),
               bedEnd: $("#bedEnd").val(),
               feeStart: $("#feeStart").val(),
               feeEnd: $("#feeEnd").val(),
               course: $("#course").val()
            },
            error: function (xhr) {
               $("#closing_rank").DataTable().destroy();
               $("#closing_rank").DataTable({ scrollX: true, ordering: false });
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
            { data: "institute_type" },
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
               targets: [8, 9, 10, 11, 12, 13],
               render: function (data, type, row, meta) {
                  const columnIndex = meta.col - 7;
                  return data ? `<a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
                    data-bs-target="#closingRankDetailsModal" class="cr" 
                    data-quota="${row.quota}"
                    data-category="${row.category}"
                    data-state="${row.state}"
                    data-institute="${row.institute}"
                    data-institute_type="${row.institute_type}"
                    data-course="${row.course}"
                    data-session="2023" 
                    data-round=${columnIndex}>
                    ${data}
                </a>` : '-';
               }
            },
         ]
      });
   }

   $(document).on('click', '.cr', function (event) {
      event.preventDefault();

      $("#rankColType").text($('.nav-tabs .active').text());

      // Retrieve values from the data attributes of the clicked element
      var quota = $(this).data('quota');
      var category = $(this).data('category');
      var state = $(this).data('state');
      var institute = $(this).data('institute');
      var institute_type = $(this).data('institute_type');
      var course = $(this).data('course');
      var session = $(this).data('session');
      var round = $(this).data('round');

      $('#closingRankDetailsModal').one('shown.bs.modal', function (event) {
         event.preventDefault();

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
               "sSearch": "Filter " + $('.nav-tabs .active').text()
            },
            language: {
               searchPlaceholder: '10'
            },
            ajax: {
               type: "GET",
               url: "{{route('ug.closing_rank_details')}}",
               data: {
                  rankType: $('.nav-tabs .active').text().toLowerCase().replaceAll(" ", "_"),
                  quota,
                  category,
                  state,
                  institute,
                  institute_type,
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
               { data: "institute_type" },
               { data: "course" },
               { data: "fee" },
               { data: "beds" },
               { data: $('.nav-tabs .active').text().toLowerCase().replaceAll(" ", "_") },
            ],
         });
      });
   });

   $('#closingRankDetailsModal').on('hidden.bs.modal', function () {
      $('#closing_rank_details').DataTable().clear().destroy();
   })

</script>
@endsection