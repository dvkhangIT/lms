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
            <li class="breadcrumb-item active" aria-current="page">Edit Coupone</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="p-4 card-body">
        <h5 class="mb-4">Edit Coupon</h5>
        <form action="{{ route("admin.update.coupon") }}"
          enctype="multipart/form-data" method="POST" id="myForm"
          class="row g-3">
          @csrf
          <input type="hidden" name="id" value="{{ $coupon->id }}">
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Coupon Name</label>
            <input type="text" class="form-control" id="input1"
              name="coupon_name" value="{{ $coupon->coupon_name }}">
          </div>
          <div class="col-md-6 form-group">
            <label for="input1" class="form-label">Coupon Discount</label>
            <input type="text" class="form-control" id="input1"
              name="coupon_discount" value="{{ $coupon->coupon_discount }}">
          </div>
          <div class="col-md-6
              form-group">
            <label for="input1" class="form-label">Coupon Validity Date</label>
            <input type="date" class="form-control" id="input1"
              min="{{ Carbon\Carbon::now()->format("Y-m-d") }}"
              name="coupon_validity" value="{{ $coupon->coupon_validity }}">
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
@section("customJs")
@endsection
@endsection
