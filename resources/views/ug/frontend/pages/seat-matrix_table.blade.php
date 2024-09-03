<style>
  /* Ensure the backdrop is behind the modal */
  .modal-backdrop {
    display: none;
    /* z-index: 1040 !important; */
  }

  /* .modal-body {
    padding: 1rem !important;
  } */

  /* Ensure the modal is above the backdrop */
  .modal {
    z-index: 9997 !important;
  }

  /* Ensure the modal-dialog is above the modal */
  .modal-dialog {
    z-index: 9998 !important;
  }

  .modal-content {
    z-index: 9999 !important;
    border: 3px solid rgb(213 213 213);
    box-shadow: 0 30px 30px rgba(0, 0, 0, 0.2);
  }

  .header {
    z-index: 0 !important
  }
</style>

<div class="col-md-12">
  <div class="card mt-3">
    <div class="border-0 card">
      <div class="card-body p-0" id="table-container">
        <div class="table-responsive">
          <table class="table" style="white-space:nowrap;">
            <thead>
              <tr>
                <th>Round</th>
                <th>Quota</th>
                <th>Category</th>
                <th>State</th>
                <th>Institute</th>
                <th>Course</th>
                <th>Seats</th>
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
            <tbody>
              @if($list->isEmpty())
          <tr>
          <td colspan="21" style="text-align:center;">No data found</td>
          </tr>
        @else
        @foreach($list as $data)
      <tr>
      <td>{{ $data->round }}</td>
      <td>{{ $data->quota }}</td>
      <td>{{ $data->category }}</td>
      <td>{{ $data->state }}</td>
      <td>{{ $data->institute }}</td>
      <td>{{ $data->course }}</td>
      <td>{{ $data->seats }}</td>
      <td>{{ $data->fee }}</td>
      <td>{{ $data->beds }}</td>
      <td>
        @if($data->{'cr_2023_1'})
      <a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
      data-bs-target="#seatMatrixDetailsModal" class="cr" data-quota="{{ $data->{'quota'} }}"
      data-category="{{ $data->{'category'} }}" data-state="{{ $data->{'state'} }}"
      data-institute="{{ $data->{'institute'} }}" data-course="{{ $data->{'course'} }}"
      data-session="2023" data-round="1">
      {{ $data->{'cr_2023_1'} }}
      </a>
    @else
    -
  @endif
      </td>
      <td>
        @if($data->{'cr_2023_2'})
      <a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
      data-bs-target="#seatMatrixDetailsModal" class="cr" data-quota="{{ $data->{'quota'} }}"
      data-category="{{ $data->{'category'} }}" data-state="{{ $data->{'state'} }}"
      data-institute="{{ $data->{'institute'} }}" data-course="{{ $data->{'course'} }}"
      data-session="2023" data-round="2">
      {{ $data->{'cr_2023_2'} }}
      </a>
    @else
    -
  @endif
      </td>
      <td>
        @if($data->{'cr_2023_3'})
      <a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
      data-bs-target="#seatMatrixDetailsModal" class="cr" data-quota="{{ $data->{'quota'} }}"
      data-category="{{ $data->{'category'} }}" data-state="{{ $data->{'state'} }}"
      data-institute="{{ $data->{'institute'} }}" data-course="{{ $data->{'course'} }}"
      data-session="2023" data-round="3">
      {{ $data->{'cr_2023_3'} }}
      </a>
    @else
    -
  @endif
      </td>
      <td>
        @if($data->{'cr_2023_4'})
      <a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
      data-bs-target="#seatMatrixDetailsModal" class="cr" data-quota="{{ $data->{'quota'} }}"
      data-category="{{ $data->{'category'} }}" data-state="{{ $data->{'state'} }}"
      data-institute="{{ $data->{'institute'} }}" data-course="{{ $data->{'course'} }}"
      data-session="2023" data-round="4">
      {{ $data->{'cr_2023_4'} }}
      </a>
    @else
    -
  @endif
      </td>
      <td>
        @if($data->{'cr_2023_5'})
      <a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
      data-bs-target="#seatMatrixDetailsModal" class="cr" data-quota="{{ $data->{'quota'} }}"
      data-category="{{ $data->{'category'} }}" data-state="{{ $data->{'state'} }}"
      data-institute="{{ $data->{'institute'} }}" data-course="{{ $data->{'course'} }}"
      data-session="2023" data-round="5">
      {{ $data->{'cr_2023_5'} }}
      </a>
    @else
    -
  @endif
      </td>
      <td>
        @if($data->{'cr_2023_6'})
      <a style="color:blue; text-decoration:underline" data-bs-toggle="modal"
      data-bs-target="#seatMatrixDetailsModal" class="cr" data-quota="{{ $data->{'quota'} }}"
      data-category="{{ $data->{'category'} }}" data-state="{{ $data->{'state'} }}"
      data-institute="{{ $data->{'institute'} }}" data-course="{{ $data->{'course'} }}"
      data-session="2023" data-round="6">
      {{ $data->{'cr_2023_6'} }}
      </a>
    @else
    -
  @endif
      </td>
      </tr>
    @endforeach
      @endif
            </tbody>
          </table>
          @if(!empty(optional(Auth::user()->payment)->user_id))
        <div class="text-center d-flex justify-content-end mb-2">
        {{ $list->appends(request()->query())->links() }}
        </div>
      @endif
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="seatMatrixDetailsModal" tabindex="-1" role="dialog"
  aria-labelledby="seatMatrixDetailsModalLabel" aria-hidden="true" data-backdrop="false" data-background=false
  data-keyboard="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Seat Matrix Details</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body" id="seatMatrixDetailsModalBody">

      </div>
    </div>
  </div>
</div>