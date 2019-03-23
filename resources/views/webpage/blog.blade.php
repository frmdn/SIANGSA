@extends('webpage.master')

@section('content')

<section id="blog">
	<div class="container">
		<div class="text-center">
			<h1>BLOG SIANGSA</h1>
		</div>
		<div class="row">
			@foreach ($data as $value)
			<div class="col-md-4 mb-2 mt-2">
				<div class="card">
					<img class="card-img-top" src="img/gbrkomputer.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{ $value->title }}</h5>
						<p class="card-text">{!! str_limit($value->description, 50) !!}</p>
						<div class="text-center">
							<a href="/blogpost/{{ $value->id }}" class="btn btn-primary">Baca Sekarang</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endsection