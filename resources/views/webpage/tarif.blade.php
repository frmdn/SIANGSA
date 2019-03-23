@extends('webpage.master')

@section('content')
<div class="container mt-5">
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4 box-shadow">
			<div class="card-header bg-warning text-white">
				<h4 class="my-0 font-weight-normal">Rumah Tangga</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title">Rp 7.500,- <small class="text-muted">/ bln</small></h1>
				<ul class="list-unstyled mt-3 mb-4">
					<li>Sampah perumahan</li>
					<li>2 kali / minggu</li>
					<li>1 akun akses</li>
					<li>Free 1 bulan pertama</li>
				</ul>
				<button type="button" class="btn btn-lg btn-block btn-success">Pilih Paket</button>
			</div>
		</div>
		<div class="card mb-4 box-shadow">
			<div class="card-header bg-warning text-white">
				<h4 class="my-0 font-weight-normal">Niaga</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title">Rp 15.000,- <small class="text-muted">/ bln</small></h1>
				<ul class="list-unstyled mt-3 mb-4">
					<li>Sampah usaha/perniagaan</li>
					<li>3 kali / minggu</li>
					<li>1 akun akses</li>
					<li>Free 1 bulan pertama</li>
				</ul>
				<button type="button" class="btn btn-lg btn-block btn-success">Pilih Paket</button>
			</div>
		</div>
	</div>
</div>
@endsection