@extends('backend.udashboard')


@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">Laporan Keluhan</div>
      <div class="card-body">
        <div class="col-lg-6">
          <div class="mr-5">No ID Layanan</div>
          <p class="h2 text-warning mb-3">{{ Auth::user()->user_id }}<p>
          <form action="/lapor" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
            <div class="form-group">
              <label>Pilih Jenis Keluhan/Gangguan</label>
              <div class="custom-control custom-radio">
                <input type="radio" name="customRadio" id="customRadio1" class="custom-control-input" value="Sampah Tidak Diangkut">
                <label class="custom-control-label" for="customRadio1">Sampah Tidak Diangkut</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" name="customRadio" id="customRadio2" class="custom-control-input" value="Keterlambatan Pengangkutan Sampah">
                <label class="custom-control-label" for="customRadio2">Keterlambatan Pengangkutan Sampah</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" name="customRadio" id="customRadio3" class="custom-control-input" value="Kendala Pendaftaran">
                <label class="custom-control-label" for="customRadio3">Kendala Pendaftaran</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" name="customRadio" id="customRadio4" class="custom-control-input" value="Lainnya">
                <label class="custom-control-label" for="customRadio4">Lainnya</label>
              </div>
            </div>
            <div class="form-group">
              <label>Catatan Keluhan/Gangguan</label>
              <textarea name="catatan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-danger round">Lapor</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection