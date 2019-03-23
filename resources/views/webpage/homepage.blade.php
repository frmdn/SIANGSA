@extends('webpage.master')

@section('content')

<section id="headerhome">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center mb-3">
				<div>
					<img src="img/gbrkomputer.png" style="padding-bottom: 20px;" class="img-fluid">
				</div>
				<div>
					<a href="daftar" class="btn btn-success round mb-2">Daftar</a>
					<a href="login" class="btn btn-warning round mb-2">Masuk</a>
				</div>
			</div>
			<div class="col-md-6">
				<h1>Cara Pintar</h1>
				<h2>Mengatasi Sampah Anda</h2>
				<p>
					Sistem Informasi Angkut Sampah adalah  portal informasi kebersihan di Kabupaten Jepara
					yang memberikan layanan angkut dan penanganan sampah. SIANGSA hadir dalam tampilan
					Desktop dan aplikasi Android
				</p>
				<div class="row">
					<div class="col-md-4 text-center mb-2">
						<img src="img/qrcode.png" class="img-fluid">
					</div>
					<div class="col-md-8">
						<p>
							Scan QR Code untuk mengunduh aplikasi SIANGSA di smartphone Anda,
							atau dapatkan di Google Play.
						</p>
						<a href="https://drive.google.com/open?id=1-rx_10U_fXUhVI-AGWeVCOXnwH075WhO"><img src="img/gplay.png" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
{{-- <section id="berlangganan">
	<div class="container">
		<div class="section-title text-center">
			<h1>Cara Berlangganan</h1>
		</div>
		<div class="section-content text-center">
			<div class="row">
				<div class="col-sm-3">
					<img class="img-fluid" src="img/Cara 1.png" onclick="ShowStep('1')">
				</div>
				<div class="col-sm-3">
					<img class="img-fluid" src="img/Cara 2.png" onclick="ShowStep('2')">
				</div>
				<div class="col-sm-3">
					<img class="img-fluid" src="img/Cara 3.png" onclick="ShowStep('3')">
				</div>
				<div class="col-sm-3">
					<img class="img-fluid" src="img/Cara 4.png" onclick="ShowStep('4')">
				</div>
			</div>
			
			<div id="showstep">
				<h3>Langkah Pertama</h3><p>Mendaftar dan mengisi data diri</p>
			</div>
		</div>
	</div>
</section> --}}
<section id="sosmed">
	<div class="text-center">
		<h3 class="mb-4">Media Sosial</h3>
		<ul style="list-style: none; margin: 0; padding: 0" class="mb-4">
			<li style="display: inline;"><a href="https://www.facebook.com/siangsaku" target="_blank" rel="noopener noreferrer"><img src="/img/icon/wFacebook.png" class="img-fluid"></a></li>
			<li style="display: inline;"><a href="https://www.twitter.com/siangsaku" target="_blank" rel="noopener noreferrer"><img src="/img/icon/wTwitter.png" class="img-fluid"></a></li>
			<li style="display: inline;"><a href="https://www.instagram.com/siangsaku" target="_blank" rel="noopener noreferrer"><img src="/img/icon/wInstagram.png" class="img-fluid"></a></li>
			{{-- <li style="display: inline;"><a href="https://www.facebook.com/siangsaku" target="_blank" rel="noopener noreferrer"><img src="/img/icon/wYoutube.png" class="img-fluid"></li> --}}
		</ul>
	</div>
</section>

@endsection

@section('addscript')
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/step.js"></script>
@endsection