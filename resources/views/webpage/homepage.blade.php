@extends('webpage.master')

@section('content')

<section id="headerhome">
	<div class="container">
		<div class="row">
			<div class="col-sm text-center">
				<div>
					<img src="/img/gbrkomputer.png" style="padding-bottom: 20px;" class="img-fluid">
				</div>
				<div>
					<a href="/daftar" class="btn btn-success round">Daftar</a>
					<a href="/login" class="btn btn-warning round">Masuk</a>
				</div>
			</div>
			<div class="col-sm">
				<h1>Cara Pintar</h1>
				<h2>Mengatasi Sampah Anda</h2>
				<p>
					Sistem Informasi Angkut Sampah adalah  portal informasi kebersihan di Kabupaten Jepara
					yang memberikan layanan angkut dan penanganan sampah. SIANGSA hadir dalam tampilan
					Desktop dan aplikasi Android
				</p>
				<div class="row">
					<div class="col-4">
						<img src="/img/qrcode.png" class="img-fluid">
					</div>
					<div class="col-8">
						<p>
							Scan QR Code disamping untuk mengunduh aplikasi SIANGSA di smartphone Anda,
							atau dapatkan di Google Play.
						</p>
						<img src="/img/gplay.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="berlangganan">
	<div class="container">
		<div class="section-title text-center">
			<h1>Cara Berlangganan</h1>
		</div>
		<div class="section-content text-center">
			<img src="/img/alurlangganan.png">
			<h3>Langkah Kedua</h3>
			<p>Setelah melakukan pendaftaran, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua,</p>
			<p>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</section>

@endsection