@extends('backend.adashboard')



@section('content')

<div class="row">
	<div class="col-12">
		<div class="h1">Selamat Datang, Admin!</div>
	</div>
</div>

<!-- Icon Cards-->
<div class="row">
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<!-- Title -->
						<h6 class="card-title text-uppercase text-muted mb-2">Pengguna</h6>
						<!-- Heading -->
						{{ $user }} 
					</div>
					<div class="col-auto">
						<!-- Icon -->
						<span class="h2 fe fe-user text-muted mb-0"></span>
					</div>
				</div> <!-- / .row -->
			</div>
			<a class="card-footer text-muted clearfix small z-1" href="/adminshowuser">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<!-- Title -->
						<h6 class="card-title text-uppercase text-muted mb-2">Laporan</h6>
						<!-- Heading -->
						{{ $laporan }} 
					</div>
					<div class="col-auto">
						<!-- Icon -->
						<span class="h2 fe fe-info text-muted mb-0"></span>
					</div>
				</div> <!-- / .row -->
			</div>
			<a class="card-footer text-muted clearfix small z-1" href="adminlaporan">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
</div>

@endsection