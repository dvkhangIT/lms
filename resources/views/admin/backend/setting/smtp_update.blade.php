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
            <li class="breadcrumb-item active" aria-current="page">Edit Category
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">SMTP Setting</h5>
        <form action="{{ route('update.smtp') }}" enctype="multipart/form-data"
          method="POST" id="myForm" class="row g-3">
          @csrf
          <input type="hidden" name="id" value="{{ $smtp->id }}">
          <div class="col-md-6 form-group">
            <label for="mailer" class="form-label">Mailer</label>
            <input type="text" class="form-control" id="mailer"
              name="mailer" value="{{ $smtp->mailer }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="host" class="form-label">Host</label>
            <input type="text" class="form-control" id="host"
              name="host" value="{{ $smtp->host }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="port" class="form-label">Port</label>
            <input type="text" class="form-control" id="port"
              name="port" value="{{ $smtp->port }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username"
              name="username" value="{{ $smtp->username }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password"
              name="password" value="{{ $smtp->password }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="enscryption" class="form-label">Enscryption</label>
            <input type="text" class="form-control" id="enscryption"
              name="enscryption" value="{{ $smtp->enscryption }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="from_address" class="form-label">From Address</label>
            <input type="text" class="form-control" id="from_address"
              name="from_address" value="{{ $smtp->from_address }}">
          </div>
          <div class="col-md-12">
            <div class="gap-3 d-md-flex d-grid align-items-center">
              <button type="submit" class="px-4 btn btn-primary">Save
                Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
