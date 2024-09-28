@extends("admin.admin_dashboard")
@section("admin")
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add SubCategory</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">Add subCategory</h5>
        <form action="{{ route("store.subcategory") }}" enctype="multipart/form-data" method="POST" id="myForm"
          class="row g-3">
          @csrf
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Category Name</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="category_id">
              <option selected="" disabled>Open this select category</option>
              @foreach ($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">SubCategory Name</label>
            <input type="text" class="form-control" id="input1" name="subcategory_name">
          </div>
          <div class="col-md-12">
            <div class="gap-3 d-md-flex d-grid align-items-center">
              <button type="submit" class="px-4 btn btn-primary">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@section("customJs")
  <script type="text/javascript">
    $(document).ready(function() {
      $('#image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0'])
      })
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#myForm').validate({
        rules: {
          subcategory_name: {
            required: true,
          },
          category_id: {
            required: true,
          }

        },
        messages: {
          subcategory_name: {
            required: 'Please Enter SubCategory Name',
          },
          category_id: {
            required: 'Please Select Category Name',
          },


        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        },
      });
    });
  </script>
@endsection
@endsection
