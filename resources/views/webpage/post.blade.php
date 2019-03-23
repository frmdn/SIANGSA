@extends('webpage.master')

@section('content')

<section id="posthead">
</section>
<section id="postbody" class="mt-3 mb-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="judul-post">
					<h1>{{ $data->title }}</h1>
					<small>{{ $data->created_at->toFormattedDateString() }}</small>
				</div>
				<div class="isi-post mt-4">
					{!! $data->description !!}
				</div>
				<div class="share-post mt-4">
					<ul style="list-style: none; margin: 0; padding: 0">
						<li style="display: inline;"><img src="/img/icon/Facebook.png" style="width: 2.8rem; 
	padding-right: 10px;"></li>
						<li style="display: inline;"><img src="/img/icon/Twitter.png" style="width: 2.8rem; 
	padding-right: 10px;"></li>
						<li style="display: inline;"><img src="/img/icon/Instagram.png" style="width: 2.8rem; 
	padding-right: 10px;"></li>
						<li style="display: inline;"><img src="/img/icon/Youtube.png" style="width: 2.8rem; 
	padding-right: 10px;"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection