@extends('frontend.layouts.front_app')

<head>
   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
         z-index: 1055 !important;
      }

      /* DataTables Styling */
      table.dataTable {
         border-radius: 14px;
      }

      table.dataTable thead th {
         background-color: #007bff;
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
         max-width: 600px;
         margin-bottom: 50px;
         margin-top: 50px;
      }

      .neet-pg-layout .card {
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         border-radius: 10px;
         padding: 20px;
      }

      .payment-failure-section {
         text-align: center;
         padding: 20px;
      }

      .payment-failure-section p {
         font-size: 14px;
         color: #555;
         margin-bottom: 15px;
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
         height: 30px;
         padding: 5px 10px;
         font-size: 12px;
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

                     <!-- Button to trigger modal -->
                     <button class="btn justify-content-center align-items-center small-btn" data-bs-toggle="modal" data-bs-target="#choiceListModal">
                        <span class="text-sm">+ Create Choice List</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>

     <!-- Modal for Choice List -->
     <div class="modal fade" id="choiceListModal" tabindex="-1" aria-labelledby="choiceListModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="choiceListModalLabel">Create Choice List</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                 <div class="row d-flex justify-content-between">
                    <div class="col-lg-4">
                       <fieldset class="p-4 border border-grey rounded">
                          <div class="form-group mt-3">
                             <label for="course" class="fw-bold">Select Counselling</label>
                             <select class="form-control input-dropdown w-100" name="course" id="course"></select>
                          </div>
                       </fieldset>
                    </div>
                 </div>
              </div>
              <div class="modal-footer">
                 <span id="clear_filters" style="cursor: pointer;">Cancel</span>
                 <button id="view_results" class="btn btn-primary">Create Choice List</button>
              </div>
           </div>
        </div>
     </div>
   </div>
</div>

@endsection

@section('script')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- MDB -->
<script src="{{ url('plugins/MDB5-7.2.0/js/mdb.es.min.js?v=2') }}"></script>

<!-- Datatables -->
<script src="{{ url('plugins/dataTables/datatables.min.js?v=2') }}"></script>
<script src="{{ url('plugins/dataTables/dataTables.bootstrap5.min.js?v=2') }}"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="{{ url('plugins/select2/js/select2.min.js?v=2') }}"></script>

<script>
    $(document).ready(function() {
        // Ensure the modal is shown when the page loads
        $('#choiceListModal').on('shown.bs.modal', function () {
            $("#course").select2({
                placeholder: "Choose a course",
                dropdownParent: $('#choiceListModal'),  // Important for select2 inside modals
                allowClear: true,
                multiple: false,
                closeOnSelect: true,
                ajax: {
                   url: "{{ route('ug.cl_get_courses') }}",
                   data: function(params) {
                      return {
                         dropdownSearch: params.term, // Search term
                         start: ((params.page || 1) - 1) * 25, // Pagination logic
                         length: 25, // Results per page
                      };
                   },
                   processResults: function(data) {
                      return {
                         results: $.map(data.rows, function(item) {
                            return { id: item.course, text: item.course };
                         }),
                         pagination: { more: data.count > 25 } // Handle pagination
                      };
                   },
                },
            });
        });
    });
</script>
@endsection
