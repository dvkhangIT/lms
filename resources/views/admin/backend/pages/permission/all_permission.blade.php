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
            <li class="breadcrumb-item active" aria-current="page">All Permission
            </li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <a href="{{ route('add.permission') }}" class="btn btn-primary">Add
            Permission</a>&nbsp;&nbsp;
          <a href="{{ route('import.permission') }}"
            class="btn btn-warning">Import</a>
          &nbsp;&nbsp;
          <a href="{{ route('export') }}" class="btn btn-danger">Export</a>
        </div>
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
                <th>Permission Name</th>
                <th>Group Name</th>
                <th>Acction</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($permissions as $key => $item)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->group_name }}</td>
                  <td>
                    <a href="{{ route('edit.permission', $item->id) }}"
                      class="px-5 text-white btn btn-info">Edit</a>
                    <a href="{{ route('delete.permission', $item->id) }}"
                      class="px-5 btn btn-danger" id="delete">Delete</a>
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
@section('customJs')
  <script src="{{ asset('backend/assets/js/code.js') }}"></script>
@endsection
