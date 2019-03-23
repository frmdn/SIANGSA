@extends('backend.adashboard')

@section('css_after')

<link href="/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

@endsection

@section('content')

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
            <th>User ID</th>
            <th>Nama</th>
            <th>Status</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $value)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->user_id }}</td>
            <td>{{ $value->user->name }}</td>
            <td>
              @if ( $value->status ) 
              <span class="badge badge-soft-primary">Lunas</span>
              @else
              <span class="badge badge-soft-danger">Belum Lunas</span>
              @endif
            </td>
            <td>
              <a href="/edittagihan/{{ $value->id }}" class="btn btn-sm btn-success">Edit</button>
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