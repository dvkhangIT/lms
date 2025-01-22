@extends('admin.admin_dashboard')
@section('admin')
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="breadcrumb-title pe-3">Order Details</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i
                  class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Order Details
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
      <div class="main-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <h4>Payment Details</h4>
              <div class="card-body">
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->name }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->email }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->phone }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->address }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Payment Type</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->cash_delivery }}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Total Amount</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->total_amount }}$</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Payment Type</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->payment_type }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Invoice Number</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->invoice_no }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Order Date</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <strong>{{ $payment->order_date }}</strong>
                  </div>
                </div>
                <div class="mb-3 row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Status</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    @if ($payment->status == 'pending')
                      <a href="" class="btn btn-block btn-success">Confirm
                        Order</a>
                    @elseif ($payment->status == 'confirm')
                      <a href="" class="btn btn-block btn-success">Confirm
                        Order</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
