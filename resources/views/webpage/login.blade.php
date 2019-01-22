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
				<h1>Mashook</h1>
				<form>
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text">@</div>
						</div>
						<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email">
					</div>
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text">@</div>
						</div>
						<input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
					</div>
					<div class="text-center" style="padding: 10px 0">
						<a href="#" style="color: #bababa;">Lali password ta ?</a>
					</div>
					<button type="submit" class="btn btn-success btn-block">Masuk</button>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection