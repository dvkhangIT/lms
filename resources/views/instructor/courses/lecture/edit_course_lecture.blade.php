@extends("instructor.instructor_dashboard")
@section("instructor")
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Edit Lecture</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">Edit Lecture</h5>
        <form action="{{ route("store.category") }}" enctype="multipart/form-data" method="POST" id="myForm"
          class="row g-3">
          @csrf
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Lecture Title</label>
            <input type="text" class="form-control" id="input1" name="lecture_title"
              value="{{ $clecture->lecture_title }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Video URL</label>
            <input type="text" class="form-control" id="input1" name="url" value="{{ $clecture->url }}">
          </div>
          <div class="col-md-12 form-group">
            <label for="input1" class="form-label">Lecture Content</label>
            <textarea name="content" class="form-control">{{ $clecture->content }}</textarea>
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
@endsection
