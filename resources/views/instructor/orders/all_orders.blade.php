@extends('instructor.instructor_dashboard')
@section('instructor')
  <div class="page-content">
    <!--breadcrumb-->
    <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="p-0 mb-0 breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:;"><i
                  class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">All Orders</li>
          </ol>
        </nav>
      </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered"
            style="width:100%">
            <thead>
              <tr>
                <th>Sl</th>
                <th>Date</th>
                <th>Invoice</th>
                <th>Amount</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orderItem as $key => $item)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $item['payment']['order_date'] }}</td>
                  <td>{{ $item['payment']['invoice_no'] }}</td>
                  <td>{{ $item['payment']['total_amount'] }}</td>
                  <td>{{ $item['payment']['payment_type'] }}</td>
                  <td>
                    <span
                      class="badge bg-success">{{ $item['payment']['status'] }}
                    </span>
                  </td>
                  <td>
                    <a href="{{ route('instructor.order.details', $item->payment_id) }}"
                      class="text-white btn btn-info"><i
                        class="lni lni-eye"></i></a>
                    <a href="{{ route('delete.course', $item->id) }}"
                      class="btn btn-danger" title="Delete" id="delete"><i
                        class="lni lni-download"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
