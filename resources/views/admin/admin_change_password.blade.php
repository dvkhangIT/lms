@extends('admin.admin_dashboard')
@section('admin')
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="breadcrumb-title pe-3">Change Password</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i
                  class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Change Password
            </li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button"
            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle
              Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
              class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div> <a class="dropdown-item"
              href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
      <div class="main-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center d-flex flex-column align-items-center">
                  <img
                    src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                    alt="Admin"
                    class="p-1 border border-4 rounded-circle border-primary"
                    width="110">
                  <div class="mt-3">
                    <h4>{{ $profileData->name }}</h4>
                    <p class="mb-1 text-secondary">{{ $profileData->username }}
                    </p>
                    <p class="text-muted font-size-sm">{{ $profileData->email }}
                    </p>
                    <button class="btn btn-primary">Follow</button>
                    <button class="btn btn-outline-primary">Message</button>
                  </div>
                </div>
                <hr class="my-4">
                <ul class="list-group list-group-flush">
                  <li
                    class="flex-wrap list-group-item d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-globe icon-inline me-2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22"
                          y2="12"></line>
                        <path
                          d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                        </path>
                      </svg>Website</h6>
                    <span class="text-secondary">https://codervent.com</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <form action="{{ route('admin.password.update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="mb-3 row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Old Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="password"
                        class="form-control @error('old_password')
                          is-invalid
                      @enderror"
                        id="old_password" name="old_password" value="">
                      @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">New Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="password"
                        class="form-control @error('new_password')
                          is-invalid
                      @enderror"
                        id="new_password" name="new_password" value="">
                      @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Confirm Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="password" class="form-control"
                        id="new_password_confirmation"
                        name="new_password_confirmation" value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                      <input type="submit" class="px-4 btn btn-primary"
                        value="Save Changes">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
