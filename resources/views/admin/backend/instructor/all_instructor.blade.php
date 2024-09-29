@extends('admin.admin_dashboard')
@section('admin')
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i
                  class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">All Instructor
            </li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered"
            style="width:100%">
            <thead>
              <tr>
                <th>SL</th>
                <th>Instructor Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Acction</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($allinstructor as $key => $item)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->username }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>
                    @if ($item->status == 1)
                      <span class="btn btn-success">Active</span>
                    @else
                      <span class="btn btn-danger">InActive</span>
                    @endif
                  </td>
                  <td>
                    <div class="form-check-danger form-check form-switch">
                      <input class="form-check-input status-toggle"
                        style="transform: scale(1.5)" type="checkbox"
                        id="flexSwitchCheckCheckedDanger"
                        data-user-id="{{ $item->id }}"
                        {{ $item->status ? 'checked' : '' }}>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('customJs')
  <script src="{{ asset('backend/assets/js/code.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.status-toggle').on('change', function() {
        var userId = $(this).data('user-id');
        var isChecked = $(this).is(':checked');
        $.ajax({
          type: "post",
          url: "{{ route('update.user.status') }}",
          data: {
            user_id: userId,
            is_checked: isChecked ? 1 : 0,
            _token: "{{ csrf_token() }}"
          },
          dataType: "dataType",
          success: function(response) {
            toastr.success(response.message)
          }
          error: function() {

          }
        });
      })
    })
  </script>
@endsection
