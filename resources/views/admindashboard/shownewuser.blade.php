@extends('backend.adashboard')

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
            <th>Nama</th>
            <th>ID</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Start date</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $value)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->user_id }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->created_at->toFormattedDateString() }}</td>
            <td>
              <a href="/aktifasi/{{ $value->id }}" class="btn btn-success btn-sm">Aktifkan</a>
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