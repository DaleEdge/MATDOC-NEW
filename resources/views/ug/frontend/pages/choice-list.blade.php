@extends('frontend.layouts.front_app')

<head>
   <!-- MDB CSS -->
   <link href="{{ url('plugins/MDB5-7.2.0/css/mdb.min.css?v=2') }}" rel="stylesheet" />
   <link rel="stylesheet" href="{{ url('plugins/dataTables/datatables.min.css?v=2') }}" />
   <link rel="stylesheet" href="{{ url('plugins/select2/css/select2.min.css?v=2') }}" />

   <style>
      .header-top-wrapper .header-social ul li a {
         padding-top: 7px;
      }

      .fa-lock:before {
         content: "\f023";
         color: #ff9529;
      }

      /* Modal Styling */
      .modal-content {
         border: 3px solid #d5d5d5 !important;
         background: white !important;
      }

      /* DataTables Styling */
      table.dataTable {
         border-radius: 14px;
      }

      table.dataTable thead th {
         background-color: #007bff; /* Adjust header color */
         color: white !important;
      }

      .dt-search input[type='search'] {
         height: auto !important;
      }

      .dt-length, .dt-search {
         display: flex;
         align-items: center;
      }

      .form-control {
         border-radius: 4px !important;
         padding: 5px 10px !important;
         height: auto !important;
      }

      .select2-dropdown {
         z-index: 10000 !important;
      }

      /* Compact Layout adjustments */
      .container {
         max-width: 600px; /* Set a smaller max width for the container */
         margin-bottom: 50px; /* Reduced margin */
         margin-top: 50px;
      }

      .neet-pg-layout .card {
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         border-radius: 10px;
         padding: 20px; /* Reduced padding for a more compact card */
      }

      .payment-failure-section {
         text-align: center;
         padding: 20px;
      }

      .payment-failure-section p {
         font-size: 14px; /* Slightly smaller font size */
         color: #555;
         margin-bottom: 15px; /* Reduced margin */
      }

      .payment-failure-section .btn {
         background-color: #007bff;
         color: white;
      }

      .payment-failure-section .btn:hover {
         background-color: #0056b3;
      }

      /* Smaller button styling */
      .small-btn {
         height: 30px; /* Smaller height */
         padding: 5px 10px; /* Reduced padding */
         font-size: 12px; /* Smaller font size */
      }
   </style>
</head>

@section('content')
   <!-- Counter Section in Smaller Container -->
   <div class="section counter-section">
      <div class="container">
         <div class="neet-pg-layout">
            <div class="card shadow">
               <div class="card-body">
                  <!-- Section for Payment Failure or Choice Lists -->
                  <div class="section payment-failure-section">
                     <p>Create Counseling specific Choice lists to curate your choices (preferred order of seats) specific to each counseling.</p>

                     <p>You can add a preferred seat to a Choice list from the Allotments, Closing Ranks, Seat Matrix, and Fee, Stipend & Bond menus.</p>

                     <p>You don’t have any choice lists currently. Create one here or add from any of the sections.</p>

                     <!-- Smaller button -->
                     <div class="btn justify-content-center align-items-center small-btn"
                        data-bs-toggle="modal" data-bs-target="#choiceListModal">
                        <span class="text-sm">+ Create Choice List</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Filter Modal -->
      <div class="modal fade" id="choiceListModal" tabindex="-1" role="dialog" aria-labelledby="choiceListModalLabel"
         aria-hidden="true" data-backdrop="true" data-keyboard="true">
         <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
               <div class="modal-header mx-4 px-0">
                  <h5 class="modal-title">Create Choice List</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="row d-flex justify-content-between">
                     <div class="col-lg-4">
                        <fieldset class="p-4 border border-grey rounded">
                           <div class="form-group mt-3">
                              <label for="course" class="fw-bold">Select Counselling</label>
                              <select class="form-control input-dropdown w-100" name="course" id="course">
                              </select>
                           </div>
                        </fieldset>
                     </div>
                  </div>
               </div>
               <div class="modal-footer mx-4 px-0">
                  <span id='clear_filters' style="font-weight:500;font-size:12px; cursor:pointer">Cancel</span>
                  <div id="view_results" class="btn btn-sm btn-primary d-flex align-items-center justify-content-center me-0">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14 5.5C14 3.84333 12.6007 2.5 10.8747 2.5C9.58467 2.5 8.47667 3.25067 8 4.322C7.52333 3.25067 6.41533 2.5 5.12467 2.5C3.4 2.5 2 3.84333 2 5.5C2 10.3133 8 13.5 8 13.5C8 13.5 14 10.3133 14 5.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                     Create Choice List
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

@section('script')
<!-- MDB -->
<script src="{{ url('plugins/MDB5-7.2.0/js/mdb.es.min.js?v=2') }}"></script>

<!-- Datatables -->
<script src="{{ url('plugins/dataTables/datatables.min.js?v=2') }}"></script>
<script src="{{ url('plugins/dataTables/dataTables.bootstrap5.min.js?v=2') }}"></script>

<!-- Select2 -->
<script src="{{ url('plugins/select2/js/select2.min.js?v=2') }}"></script>

<script>
   $('#choiceListModal').on('shown.bs.modal', function () {
      $("#course").select2({
         placeholder: "Choose a course",
         dropdownParent: $('#choiceListModal'),
         allowClear: true,
         multiple: false,
         closeOnSelect: false,
         ajax: {
            url: "{{ route('ug.get_courses') }}",
            data: function(params) {
               params.page = params.page || 1;
               params.length = 25;
               params.start = (params.page - 1) * params.length;

               return {
                  dropdownSearch: params.term,
                  start: params.start,
                  length: params.length,
               };
            },
            processResults: function(data, params) {
               return {
                  results: $.map(data.rows, function(item) {
                     return {
                        id: item.course,
                        text: item.course,
                     };
                  }),
                  pagination: {
                     more: params.page * params.length < data.count,
                  },
               };
            },
         },
      });
   });
</script>
@endsection
