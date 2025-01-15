@extends("admin.admin_dashboard")
@section("admin")
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
                <th>Sl</th>
                <th>Image</th>
                <th>Course Name</th>
                <th>Instructor</th>
                <th>Category</th>
                <th>Price</th>
                <th>Acction</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($course as $key => $item)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td><img src="{{ asset($item->course_image) }}" alt=""
                      style="width: 70px; height: 40px;">
                  </td>
                  <td>{{ $item->course_name }}</td>
                  <td>{{ $item["user"]["name"] }}</td>
                  <td>{{ $item["category"]["category_name"] }}</td>
                  <td>{{ $item->selling_price }}</td>
                  <td>
                    <a href="{{ route("admin.course.details", $item->id) }}"
                      class="text-white btn btn-info text-center"><i
                        class="lni lni-eye"></i></a>
                  </td>
                  <td>
                    <div class="form-check-danger form-check form-switch">
                      <input class="form-check-input status-toggle"
                        style="transform: scale(1.5)" type="checkbox"
                        id="flexSwitchCheckCheckedDanger"
                        data-course-id="{{ $item->id }}"
                        {{ $item->status ? "checked" : "" }}>
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
@section("customJs")
  <script src="{{ asset("backend/assets/js/code.js") }}"></script>
  <script>
    $(document).ready(function() {
      $('.status-toggle').on('change', function() {
        var courseId = $(this).data('course-id');
        var isChecked = $(this).is(':checked');
        $.ajax({
          url: "{{ route("update.course.status") }}",
          type: "post",
          data: {
            course_id: courseId,
            is_checked: isChecked ? 1 : 0,
            _token: "{{ csrf_token() }}"
          },
          success: function(response) {
            toastr.success(response.message)
          }
        });
      })
    })
  </script>
@endsection
