@extends('frontend.layouts.front_app')

<head>
   <!-- MDB -->
   <link href="{{url("plugins/MDB5-7.2.0/css/mdb.min.css?v=2")}}" rel="stylesheet" />
   <link rel="stylesheet" href="{{url("plugins/dataTables/datatables.min.css?v=2")}}" />
   <link rel="stylesheet" href="{{url("plugins/select2/css/select2.min.css?v=2")}}" />
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
               <!-- Filter Button -->
               <div class="d-flex justify-content-end">
                  <div id="outside_clear_filters"
                     class="btn btn-outline-warning d-flex justify-content-center rounded align-items-center me-2 d-none"
                     style="height:35px">
                     <i class="fa-solid fa-filter-circle-xmark"></i>
                  </div>
                  <div class="btn btn-primary d-flex justify-content-center rounded align-items-center m-0"
                     style="height:35px" data-bs-toggle="modal" data-bs-target="#filtersModal">
                     <span><i class="fa fa-filter fs-6"></i></span>
                     &nbsp;&nbsp;
                     <span class="text-sm">Filter</span>
                  </div>
               </div>


               <!-- Tabs for All India Rank and State Rank -->
               <ul class="nav nav-tabs" id="rankTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="all-india-rank-tab" data-bs-toggle="tab" data-bs-target="#all-india-rank" type="button" role="tab" aria-controls="all-india-rank" aria-selected="true">All India Rank</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="state-rank-tab" data-bs-toggle="tab" data-bs-target="#state-rank" type="button" role="tab" aria-controls="state-rank" aria-selected="false">State Rank</button>
                  </li>
               </ul>
            

               <div class="tab-content mt-3" id="rankTabContent">
                  <!-- All India Rank Tab -->
                  <div class="tab-pane fade show active" id="all-india-rank" role="tabpanel" aria-labelledby="all-india-rank-tab">
                     <table id="allotments-air" class="table display table-hover nowrap w-100">
                        <thead class="w-auto">
                           <tr>
                              <th>Round</th>
                              <th>All India Rank</th>
                              <th>Neet Score</th>
                              <th>State</th>
                              <th>Institute</th>
                              <th>Institute Type</th>
                              <th>Course</th>
                              <th>Quota</th>
                              <th>Category</th>
                              <th>Fee</th>
                              <th>Beds</th>
                           </tr>
                        </thead>
                     </table>
                  </div>

                  <!-- State Rank Tab -->
                  <div class="tab-pane fade" id="state-rank" role="tabpanel" aria-labelledby="state-rank-tab">
                     <table id="allotments-sr" class="table display table-hover nowrap w-100">
                        <thead class="w-auto">
                           <tr>
                              <th>Round</th>
                              <th>State Rank</th>
                              <th>Neet Score</th>
                              <th>State</th>
                              <th>Institute</th>
                              <th>Institute Type</th>
                              <th>Course</th>
                              <th>Quota</th>
                              <th>Category</th>
                              <th>Fee</th>
                              <th>Beds</th>
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
<div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true" data-backdrop="true" data-keyboard="true">
   <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Filters</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-lg-6">
                  <fieldset class="p-3 border rounded">
                     <div class="form-group">
                        <label for="rankRange">Rank Range</label>
                        <div class="d-flex align-items-center">
                           <input id="rankStart" type="number" class="form-control me-2" placeholder="Min Rank">
                           <span class="mx-2">-</span>
                           <input id="rankEnd" type="number" class="form-control ms-2" placeholder="Max Rank">
                        </div>
                     </div>
                     <div class="form-group mt-3">
                        <label for="round">Round</label>
                        <select class="form-control" id="round">
                           <!-- Options go here -->
                        </select>
                     </div>
                     <div class="form-group mt-3">
                        <label for="session">Session</label>
                        <select class="form-control input-dropdown w-100" id="session">
                           <!-- Options go here -->
                        </select>
                     </div>
                     <div class="form-group mt-3">
                        <label for="quota">Quota</label>
                        <select class="form-control input-dropdown w-100" id="quota">
                           <!-- Options go here -->
                        </select>
                     </div>
                     <div class="form-group mt-3">
                        <label for="category">Category</label>
                        <select class="form-control input-dropdown w-100" id="category">
                           <!-- Options go here -->
                        </select>
                     </div>
                  </fieldset>
               </div>
               <div class="col-lg-6">
                  <fieldset class="p-3 border rounded">
                     <div class="form-group">
                        <label for="state">State</label>
                        <select class="form-control input-dropdown w-100" id="state">
                           <!-- Options go here -->
                        </select>
                     </div>
                     <div class="form-group mt-3">
                        <label for="institute">Institute</label>
                        <select class="form-control input-dropdown w-100" id="institute">
                           <!-- Options go here -->
                        </select>
                     </div>
                     <div class="form-group mt-3">
                        <label for="instituteType">Institute Type</label>
                        <select class="form-control input-dropdown w-100" id="institute_type">
                           <!-- Options go here -->
                        </select>
                     </div>
                     <div class="form-group mt-3">
                        <label for="beds">Beds Range</label>
                        <div class="d-flex align-items-center">
                           <input id="bedStart" type="number" class="form-control me-2" placeholder="Min Beds">
                           <span class="mx-2">-</span>
                           <input id="bedEnd" type="number" class="form-control ms-2" placeholder="Max Beds">
                        </div>
                     </div>
                     <div class="form-group mt-3">
                        <label for="feeRange">Fee Range</label>
                        <div class="d-flex align-items-center">
                           <input id="feeStart" type="number" class="form-control me-2" placeholder="Min Fee">
                           <span class="mx-2">-</span>
                           <input id="feeEnd" type="number" class="form-control ms-2" placeholder="Max Fee">
                        </div>
                     </div>
                  </fieldset>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Apply Filters</button>
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
<script src="{{url("plugins/dataTables/dataTables.bootstrap5.min.js?v=2")}}"></script>

<!-- Select2 -->
<script src="{{url("plugins/select2/js/select2.min.js?v=2")}}"></script>


<script>
   loadAllotmentsTable();


   $('#filtersModal').on('shown.bs.modal', function () {
      // Initializing Select2

      $("#session").select2({
         placeholder: "Choose a session",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('get_sessions')}}",
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
            url: "{{route('get_rounds')}}",
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
            url: "{{route('get_quota')}}",
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
            url: "{{route('get_categories')}}",
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
            url: "{{route('get_states')}}",
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
            url: "{{route('get_institutes')}}",
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
            url: "{{route('get_institute_types')}}",
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

      $("#course").select2({
         placeholder: "Choose a course",
         dropdownParent: $("#filtersModal"),
         allowClear: true,
         multiple: true,
         closeOnSelect: false,
         ajax: {
            url: "{{route('get_courses')}}",
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
      loadAllotmentsTable();
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

      loadAllotmentsTable();
      $("#filtersModal").modal('hide');
   })

   function loadAllotmentsTable() {
      $("#allotments-air").DataTable({
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
            url: "{{route('home_user')}}",
            data: {
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
               $("#allotments").DataTable().destroy();
               $("#allotments").DataTable({ scrollX: true, ordering: false });
            },
            dataSrc: function (data) {
               data.iTotalRecords = data?.rows?.length || 0;
               data.iTotalDisplayRecords = data.count || 0;
               return data?.rows || [];
            }
         },
         columns: [
            { data: "round" },
            { data: "all_india_rank" },
            { data: "neet_score" },
            { data: "state" },
            { data: "institute" },
            { data: "institute_type" },
            { data: "course" },
            { data: "quota" },
            { data: "category" },
            { data: "fee" },
            { data: "beds" },
         ],
      });
      $("#allotments-sr").DataTable({
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
            url: "{{route('home_user')}}",
            data: {
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
               $("#allotments").DataTable().destroy();
               $("#allotments").DataTable({ scrollX: true, ordering: false });
            },
            dataSrc: function (data) {
               data.iTotalRecords = data?.rows?.length || 0;
               data.iTotalDisplayRecords = data.count || 0;
               return data?.rows || [];
            }
         },
         columns: [
            { data: "round" },
            { data: "state_rank" },
            { data: "neet_score" },
            { data: "state" },
            { data: "institute" },
            { data: "institute_type" },
            { data: "course" },
            { data: "quota" },
            { data: "category" },
            { data: "fee" },
            { data: "beds" },
         ],
      });
   }

</script>
@endsection