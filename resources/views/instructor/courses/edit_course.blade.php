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
            <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">Edit Course</h5>
        <form action="{{ route('update.course') }}" enctype="multipart/form-data" method="POST" id="myForm"
          class="row g-3">
          @csrf
          <input type="hidden" name="course_id" value="{{ $course->id }}">
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="input1" name="course_name"
              value="{{ $course->course_name }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Title</label>
            <input type="text" class="form-control" id="input1" name="course_title"
              value="{{ $course->course_title }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Category</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="category_id">
              <option selected="" disabled>Open this select menu</option>
              @foreach ($categories as $cat)
                <option {{ $cat->id == $course->category_id ? 'selected' : '' }} value="{{ $cat->id }}">
                  {{ $cat->category_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Subcategory</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="subcategory_id">
              <option selected="" disabled>Open this select menu</option>
              @foreach ($subcategories as $subcat)
                <option {{ $subcat->id == $course->subcategory_id ? 'selected' : '' }} value="{{ $subcat->id }}">
                  {{ $subcat->subcategory_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Certificate Avalible</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="certificate">
              <option selected="" disabled>Open this select menu</option>
              <option {{ $course->certificate == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
              <option {{ $course->certificate == 'No' ? 'selected' : '' }} value="No">No</option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Course Label</label>
            <select class="mb-3 form-select" aria-label="Default select example" name="label">
              <option selected="" disabled>Open this select menu</option>
              <option {{ $course->label == 'Begginner' ? 'selected' : '' }} value="Begginner">Begginner</option>
              <option {{ $course->label == 'Middle' ? 'selected' : '' }} value="Middle">Middle</option>
              <option {{ $course->label == 'Advance' ? 'selected' : '' }} value="Advance">Advance</option>
            </select>
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Course Price</label>
            <input type="text" class="form-control" id="input1" name="selling_price"
              value="{{ $course->selling_price }}">
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Discount Price</label>
            <input type="text" class="form-control" id="input1" name="discount_price"
              value="{{ $course->discount_price }}">
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Duration</label>
            <input type="text" class="form-control" id="input1" name="duration" value="{{ $course->duration }}">
          </div>
          <div class="col-md-3 form-group">
            <label for="input1" class="form-label">Resources</label>
            <input type="text" class="form-control" id="input1" name="resources"
              value="{{ $course->resources }}">
          </div>
          <div class="col-md-12 form-group">
            <label for="input1" class="form-label">Course Prerequisites</label>
            <textarea name="prerequisites" class="form-control" id="input23" placeholder="Prerequisites..." rows="3">{{ $course->prerequisites }}</textarea>
          </div>
          <div class="col-md-12 form-group">
            <label for="input1" class="form-label">Course Description</label>
            <textarea id="myeditorinstance" name="description" class="form-control" id="input23">{!! $course->description !!}</textarea>
          </div>
          <!--   //////////// Goal Option /////////////// -->
          <!--   //////////// End Goal Option /////////////// -->
          <hr>
          <div class="row">
            <div class="col-md-4">
              <div class="form-check">
                <input {{ $course->bestseller == 1 ? 'checked' : '' }} class="form-check-input" name="bestseller"
                  type="checkbox" value="1" id="bestseller">
                <label class="form-check-label" for="bestseller">Best Seller</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input {{ $course->featured == 1 ? 'checked' : '' }} class="form-check-input" type="checkbox"
                  value="1" name="featured" id="featured">
                <label class="form-check-label" for="featured">Featured</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-check">
                <input {{ $course->highestrated == 1 ? 'checked' : '' }} class="form-check-input" type="checkbox"
                  value="1" id="flexCheckDefault" name="highestrated">
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
  <div class="page-content">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('update.course.image') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $course->id }}">
          <input type="hidden" name="old_img" value="{{ $course->course_image }}">
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="input2" class="form-label">Course Image</label>
              <input class="form-control" type="file" id="image" name="course_image">
            </div>
            <div class="col-md-6">
              <img id="showImage"
                src="{{ $course->course_image ? asset($course->course_image) : url('upload/no_image.jpg') }}"
                alt="Admin" class="p-1 border border-4 rounded-circle border-primary" width="100">
            </div>
          </div>
          <div class="mt-3 col-md-12">
            <div class="gap-3 d-md-flex d-grid align-items-center">
              <button type="submit" class="px-4 btn btn-primary">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('update.course.video') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <input type="hidden" name="vid" value="{{ $course->id }}">
          <input type="hidden" name="old_vid" value="{{ $course->video }}">
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="input1" class="form-label">Course Intro Video</label>
              <input type="file" accept="video/mp4,video/webm" class="form-control" name="video">
            </div>
            <div class="col-md-6">
              <video width="300" height="130" controls>
                <source src="{{ asset($course->video) }}" type="video/mp4">
              </video>
            </div>
          </div>
          <div class="mt-3 col-md-12">
            <div class="gap-3 d-md-flex d-grid align-items-center">
              <button type="submit" class="px-4 btn btn-primary">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('update.course.goal') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <input type="hidden" name="id" value="{{ $course->id }}">
          <!--   //////////// Goal Option /////////////// -->
          @foreach ($goals as $item)
            <div class="row add_item">
              <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                <div class="container mt-2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="goals" class="form-label"> Goals </label>
                        <input type="text" name="course_goals[]" id="goals" class="form-control"
                          value="{{ $item->goal_name }}" placeholder="Goals">
                      </div>
                    </div>
                    <div class="form-group col-md-6" style="padding-top: 30px;">
                      <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add More..</a>
                      <span class="btn btn-danger btn-sm removeeventmore"><i
                          class="fa fa-minus-circle">Remove</i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!---end row-->
          @endforeach
          <!--   //////////// End Goal Option /////////////// -->
          <div class="mt-3 col-md-12">
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
        },
        messages: {
          course_name: {
            required: 'Please Enter Course Name',
          },
          course_title: {
            required: 'Please Enter Course Title',
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
  <!--========== Start of add multiple class with ajax ==============-->
  <div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
      <div class="whole_extra_item_delete" id="whole_extra_item_delete">
        <div class="container mt-2">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="goals">Goals</label>
              <input type="text" name="course_goals[]" id="goals" class="form-control" placeholder="Goals  ">
            </div>
            <div class="form-group col-md-6" style="padding-top: 20px">
              <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
              <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle">Remove</i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!----For Section-------->
  <script type="text/javascript">
    $(document).ready(function() {
      var counter = 0;
      $(document).on("click", ".addeventmore", function() {
        var whole_extra_item_add = $("#whole_extra_item_add").html();
        $(this).closest(".add_item").append(whole_extra_item_add);
        counter++;
      });
      $(document).on("click", ".removeeventmore", function(event) {
        $(this).closest("#whole_extra_item_delete").remove();
        counter -= 1
      });
    });
  </script>
  <!--========== End of add multiple class with ajax ==============-->
@endsection
@endsection
