<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Siangsa</title>
	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template -->
	<link href="/css/siangsa.css" rel="stylesheet">
	<link rel="icon" href="/img/logo.ico">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light box-shadow">
		<div class="container">
			<a class="navbar-brand" href="/"><img src="/img/logoatas.png" style="height: 40px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#"><img src="/img/Menu 1.png" width="23"> Layanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/tarif"><img src="/img/Menu 2.png" width="23"> Tarif</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><img src="/img/Menu 3.png" width="23"> Bantuan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/blog"><img src="/img/Menu 4.png" width="23"> Blog</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	@yield('content')
	
	<section id="menubawah">
		<div class="container">
			<div class="row">
				<div class="col-sm mb-4">
					<img src="/img/logobawah.png" class="img-fluid">
					<h5>Supported By :</h5>
					<img src="/img/dlh-jepara.png" class="img-fluid supporter">
					<img src="/img/bpkad-jepara.png" class="img-fluid supporter">
				</div>
				<div class="col-sm mb-4">
					<h5>SIANGSA</h5>
					<p><a>Tentang Kami</a></p>
					<p><a>Syarat &amp; Ketentuan</a></p>
					<p><a>Disclaimer</a></p>
					<p><a>Hubungi Kami</a></p>
				</div>
				<div class="col-sm mb-4">
					<h5>LAYANAN</h5>
					<p>Cara Berlangganan</p>
					<p>Sampah Rumah Tangga</p>
					<p>Sampah Niaga</p>
				</div>
				<div class="col-sm mb-4">
					<h5>DOWNLOAD APLIKASI</h5>
					<a href="https://drive.google.com/open?id=1-rx_10U_fXUhVI-AGWeVCOXnwH075WhO"><img src="/img/gplay.png" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</section>
	<section id="sponsorship">
		<div class="text-center">
			<p class="text-sm-center mt-2 mb-2"><b>&copy; Copyright 2019</b> - Forum Literasi Lingkungan Hidup, All rights reserved.</p>
		</div>
	</section>
	<!-- Bootstrap core JavaScript-->
	<script src="admin/vendor/jquery/jquery.min.js"></script>
	<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	@yield('addscript')
</body>
</html>