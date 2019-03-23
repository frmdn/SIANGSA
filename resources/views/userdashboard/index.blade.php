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
            <h6 class="card-title text-uppercase text-muted mb-2">Layanan</h6>
            <!-- Heading -->
            @if ($tagihan)
            <span class="h2 mb-0">{{ number_format($tagihan->nominal) }}</span>
            @else
            <span class="h2 mb-0">Belum Aktifasi</span>
            @endif
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
            <h6 class="card-title text-uppercase text-muted mb-2">Jumlah</h6>
            <!-- Heading -->
            @if ($data->layanan_id == "1")
            <span class="h2 mb-0">{{ $data->qty }} orang</span>
            @elseif($data->layanan_id == "3")
            <span class="h2 mb-0">Belum Aktifasi</span>
            @else
            <span class="h2 mb-0">{{ $data->qty }} m<sup>3</sup></span>
            @endif
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
            <h6 class="card-title text-uppercase text-muted mb-2">Klasifikasi</h6>
            <div class="row align-items-center no-gutters">
              <div class="col-auto">
                <!-- Heading -->
                <span class="h2 mr-2 mb-0">{{ $data->keterangan }}</span>
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
    <!-- Orders -->
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col">
            <!-- Title -->
            <h4 class="card-header-title">
              Orders
            </h4>
          </div>
        </div> <!-- / .row -->
      </div>
      <div class="card-body">
        <div>
          <ul class="uli">
            <li><p>Nomor ID Layanan : <br> <strong>{{ $data->user_id }}</strong></p></li>
            <li><p>Nama : <br> <strong>{{ $data->name }}</strong></p></li>
            <li><p>Nomor Telepon : <br> <strong>{{ $data->phone }}</strong></p></li>
            <li><p>Email : <br> <strong>{{ $data->email }}</strong></p></li>
            <li><p>Alamat : <br> {{ $data->address }}</p></li>
            @if($data->layanan_id == '3')
              <li><p>Paket Layanan : <br> <a href="#" class="btn btn-success">Aktifkan Layanan</a></p></li>
            @endif
          </ul>
        </div>

      </div>
    </div>
  </div>
</div> <!-- / .row -->


@endsection