@extends('instructor.instructor_dashboard')
@section('instructor')
  <div class="page-content">
    <div class="row">
      <div class="col-12">
        <div class="card radius-10">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <img src="{{ asset($course->course_image) }}" class="p-1 border rounded-circle" width="90" height="90"
                alt="...">
              <div class="flex-grow-1 ms-3">
                <h5 class="mt-0">{{ $course->course_name }}</h5>
                <p class="mb-0">{{ $course->course_title }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection