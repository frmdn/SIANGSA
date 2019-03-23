@extends('backend.udashboard')


@section('content')

<div class="row">
  <div class="col-12 col-lg-4 col-xl">
    <!-- Card -->
    <div class="card">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <!-- Title -->
            <h6 class="card-title text-uppercase text-muted mb-2">No ID Layanan</h6>
            <!-- Heading -->
            <span class="h2 mb-0">{{ Auth::user()->user_id }}</span>
          </div>
          <div class="col-auto">
            <!-- Icon -->
            <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 col-xl">
    <!-- Card -->
    <div class="card">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <!-- Title -->
            <h6 class="card-title text-uppercase text-muted mb-2">Tanggal Order</h6>
            <!-- Heading -->
            <span class="h2 mb-0">{{ Auth::user()->created_at->toFormattedDateString() }}</span>
          </div>
          <div class="col-auto">
            <!-- Icon -->
            <span class="h2 fe fe-briefcase text-muted mb-0"></span>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4 col-xl">
    <!-- Card -->
    <div class="card">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <!-- Title -->
            <h6 class="card-title text-uppercase text-muted mb-2">Status</h6>
            <div class="row align-items-center no-gutters">
              <div class="col-auto">
                <!-- Heading -->
                @if (Auth::user()->status)
                <span class="h2 mr-2 mb-0">Aktif</span>
                @else 
                <span class="h2 mr-2 mb-0">Tidak Aktif</span>
                @endif
              </div>
            </div> <!-- / .row -->
          </div>
          <div class="col-auto">
            <!-- Icon -->
            <span class="h2 fe fe-clipboard text-muted mb-0"></span>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>
  </div>
</div> <!-- / .row -->

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
       <h4 class="card-header-title">
        History Pembayaran
      </h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Tagihan Bulan</th>
              <th>Nominal</th>
              <th>Status</th>
              <th>Invoice</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $value)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $value->jatuhtempo->format('F Y') }}</td>
              <td>Rp {{ number_format($value->nominal) }}</td>
              <td>
                @if ( $value->status ) 
                Lunas
                @else
                Belum Lunas
                @endif
              </td>
              {{-- <td>@if (!$value->tglbayar) - @else {{$value->tglbayar}} @endif</td> --}}
              <td><a href="/invoice">Lihat Detail</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

@endsection