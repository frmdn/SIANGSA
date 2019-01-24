@extends('webpage.master')

@section('content')

<section id="headerhome">
	<div class="container">
		<div class="row">
			<div class="col-sm text-center">
				<div>
					<img src="/img/gbrkomputer.png" style="padding-bottom: 20px;">
				</div>
			</div>
			<div class="col-sm">
				<h1>Daftar</h1>
				<form method="post" action="/daftar">
					{{ csrf_field() }}
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-id-card"></i></div>
						</div>
						<input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
					</div>
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-envelope"></i></div>
						</div>
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-key"></i></div>
						</div>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-phone"></i></div>
						</div>
						<input type="text" class="form-control" name="phone" placeholder="No. Telepon">
					</div>
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-users"></i></div>
						</div>
						<input type="text" class="form-control" placeholder="Jumlah Anggota Keluarga">
					</div>
					<button type="submit" class="btn btn-success btn-block round">Lanjutkan</button>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection