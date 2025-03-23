@extends('admin.admin_dashboard')
@section('admin')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
  </script>
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i
                  class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Report </li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <div class="row">
          <div class="col-md-4">
            <form id="myForm" action="{{ route('admin.store.coupon') }}"
              method="post" class="row g-3" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-12">
                <label for="input1" class="form-label">Search By Date</label>
                <input type="date" name="date" class="form-control"
                  id="input1">
              </div>
              <div class="col-md-12">
                <div class="gap-3 d-md-flex d-grid align-items-center">
                  <button type="submit" class="px-4 btn btn-primary">Save
                    Changes</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <form id="myForm" action="{{ route('admin.store.coupon') }}"
              method="post" class="row g-3" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-12">
                <label for="input1" class="form-label">Search By Month</label>
                <select name="month" class="mb-3 form-select"
                  aria-label="Default select example">
                  <option selected="">Open this select menu</option>
                  <option value="Janurary">Janurary</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="Jun">Jun</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label for="input1" class="form-label">Search By Year</label>
                <select name="year_name" class="mb-3 form-select"
                  aria-label="Default select example">
                  <option selected="">Open this select menu</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
              </div>

              <div class="col-md-12">
                <div class="gap-3 d-md-flex d-grid align-items-center">
                  <button type="submit" class="px-4 btn btn-primary">Save
                    Changes</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <form id="myForm" action="{{ route('admin.store.coupon') }}"
              method="post" class="row g-3" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-12">
                <label for="input1" class="form-label">Search By Year</label>
                <select name="year" class="mb-3 form-select"
                  aria-label="Default select example">
                  <option selected="">Open this select menu</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
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
        {{-- // end row  --}}
      </div>
    </div>
  </div>
@endsection
