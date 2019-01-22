<!DOCTYPE html>
<html>
<head>
	<title>Siangsa</title>
	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/siangsa.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="/">Siangsa</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#"><img src="/img/Menu 1.png" width="23"> Layanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><img src="/img/Menu 2.png" width="23"> Tarif</a>
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
				<div class="col-sm">
					<img src="/img/logobawah.png">
					<p>SIANGSA CORNER</p>
					<p>Jl Sidik Harun,<br>Ujungbatu, Jepara, 59416</p>
				</div>
				<div class="col-sm">
					<h5>SIANGSA</h5>
					<p><a>Tentang Kami</a></p>
					<p><a>Kru Siangsa</a></p>
					<p><a>Disclaimer</a></p>
				</div>
				<div class="col-sm">
					<h5>INFORMASI PENTING</h5>
					<p>Kabar Terbaru</p>
					<p>Agen SIANGSA</p>
					<p>Karir</p>
				</div>
				<div class="col-sm">
					<h5>DOWNLOAD APLIKASI</h5>
					<img src="/img/gplay.png">
					<ul style="list-style: none; margin: 0; padding: 0">
						<li style="display: inline;"><img src="/img/icon/Facebook.png" style="width: 10%; padding-right: 10px"></li>
						<li style="display: inline;"><img src="/img/icon/Twitter.png" style="width: 10%; padding-right: 10px"></li>
						<li style="display: inline;"><img src="/img/icon/Ig.png" style="width: 10%; padding-right: 10px"></li>
						<li style="display: inline;"><img src="/img/icon/Youtube.png" style="width: 10%; padding-right: 10px"></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section id="sponsorship">
		<div class="text-center">
			<h5>In Association With :</h5>
		</div>
		<div class="row">
			<div class="col-sm">
				<img src="/img/sponsor.png">
			</div>
			<div class="col-sm">
				<img src="/img/sponsor.png">
			</div>
			<div class="col-sm">
				<img src="/img/sponsor.png">
			</div>
			<div class="col-sm">
				<img src="/img/sponsor.png">
			</div>
			<div class="col-sm">
				<img src="/img/sponsor.png">
			</div>
			<div class="col-sm">
				<img src="/img/sponsor.png">
			</div>
		</div>
	</section>
</body>
</html>