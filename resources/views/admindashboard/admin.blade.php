@extends('backend.adashboard')
@section('css_after')

<link href="/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

@endsection
@section('content')

@if ( Auth::user()->role_id == "1" )  
<a href="/createadmin" class="btn btn-success mb-3">Create New Admin</a>
@endif
 <!-- DataTables Example -->
 <div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Data Table Example</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $value)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->role->role_name }}</td>
            <td>
              <button type="button" class="btn btn-primary btn-sm">View Detail</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection

@section('js_after')
<script src="/admin/vendor/datatables/jquery.dataTables.js"></script>
<script src="/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="/admin/js/demo/datatables-demo.js"></script>
@endsection