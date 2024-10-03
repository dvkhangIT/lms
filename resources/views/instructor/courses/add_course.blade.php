@extends('instructor.instructor_dashboard')
@section('instructor')
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Course</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">Add Course</h5>
        <form action="{{ route('store.category') }}" enctype="multipart/form-data" method="POST" id="myForm"
          class="row g-3">
          @csrf
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="input1" name="course_name">
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="input1" name="course_title">
          </div>
          <div class="col-md-6 form-group">
            <label for="input2" class="form-label">Course Image</label>
            <input class="form-control" type="file" id="image" name="course_image">
          </div>
          <div class="col-md-6">
            <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin"
              class="p-1 border border-4 rounded-circle border-primary" width="80">
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Intro Video</label>
            <input type="file" accept="video/mp4,video/webm" class="form-control" name="video">
          </div>
          <div class="col-md-6 form-group"></div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Category</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="category_id">
              <option selected="" disabled>Open this select menu</option>
              @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Subcategory</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="subcategory_id">
              <option></option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Certificate Avalible</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="certificate">
              <option selected="" disabled>Open this select menu</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Label</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="label">
              <option selected="" disabled>Open this select menu</option>
              <option value="Begginner">Begginner</option>
              <option value="Middle">Middle</option>
              <option value="Advance">Advance</option>
            </select>
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Course Price</label>
            <input type="text" class="form-control" id="input1" name="selling_price">
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Discount Price</label>
            <input type="text" class="form-control" id="input1" name="discount_price">
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Duration</label>
            <input type="text" class="form-control" id="input1" name="duration">
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Resources</label>
            <input type="text" class="form-control" id="input1" name="resources">
          </div>
          <div class="col-md-12 form-group">
            <label for="input1" class="form-label">Course Prerequisites</label>
            <textarea name="prerequisites" class="form-control" id="input23" placeholder="Prerequisites..." rows="3"></textarea>
          </div>
          <div class="col-md-12 form-group">
            <label for="input1" class="form-label">Course Description</label>
            <textarea id="myeditorinstance" name="description" class="form-control" id="input23"></textarea>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" name="bestseller" type="checkbox" value="1" id="bestseller">
                <label class="form-check-label" for="bestseller">Best Seller</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="featured" id="featured">
                <label class="form-check-label" for="featured">Featured</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                  name="highestrated">
                <label class="form-check-label" for="flexCheckDefault">Highest Rated</label>
              </div>
            </div>
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
          course_name: {
            required: true,
          },
          course_title: {
            required: true,
          },
          course_image: {
            required: true,
          }

        },
        messages: {
          course_name: {
            required: 'Please Enter Course Name',
          },
          course_title: {
            required: 'Please Enter Course Title',
          },
          course_image: {
            required: 'Please Select Course Image',
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('select[name="category_id"]').on('change', function() {
        var category_id = $(this).val();
        if (category_id) {
          $.ajax({
            url: "{{ url('/subcategory/ajax') }}/" + category_id,
            type: "GET",
            dataType: "json",
            success: function(data) {
              $('select[name="subcategory_id"]').html('');
              var d = $('select[name="subcategory_id"]').empty();
              $.each(data, function(key, value) {
                $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value
                  .subcategory_name + '</option>');
              });
            },
          });
        } else {
          alert('danger');
        }
      });
    });
  </script>
@endsection
@endsection
