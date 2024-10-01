@extends('admin.admin_dashboard')
@section('admin')
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">Add Category</h5>
        <form action="{{ route('store.category') }}" enctype="multipart/form-data" method="POST" id="myForm"
          class="row g-3">
          @csrf
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="input1" name="category_name">
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-6 form-group">
            <label for="input2" class="form-label">Category Image</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>
          <div class="col-md-6">
            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin"
              class="p-1 border border-4 rounded-circle border-primary" width="80">
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
@section('customJs')
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
          category_name: {
            required: true,
          },
          image: {
            required: true,
          }

        },
        messages: {
          category_name: {
            required: 'Please Enter Category Name',
          },
          image: {
            required: 'Please Select Category Image',
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
