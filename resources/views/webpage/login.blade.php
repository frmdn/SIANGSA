@extends('webpage.master')

@section('content')

<section id="headerhome">
	<div class="container">
		<div class="row">
			<div class="col-sm text-center">
				<div>
					<img class="img-fluid" src="img/gbrkomputer.png" style="padding-bottom: 20px;">
				</div>
			</div>
			<div class="col-sm">
				<h1>Mashook</h1>
				<form method="post" action="login"> 
					{{ csrf_field() }}
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
					<div class="text-center" style="padding: 10px 0">
						<a href="#" style="color: #bababa;">Lali password ta ?</a>
					</div>
					<button type="submit" class="btn btn-success btn-block round">Masuk</button>
					<div class="text-center" style="padding: 10px 0">
						Belum terdaftar di SIANGSA? <a href="/daftar" class="text-warning font-weight-bold">nDaftar.</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection