@extends('backend.adashboard')

@section('content')

<div class="row">
	<div class="col-12">    
		<form action="/edituser" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $data->id }}">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $data->name }}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" placeholder="Email" class="form-control"  value="{{ $data->email }}">
			</div>
			<div class="form-group">
				<label>No. Handphone</label>
				<input type="text" name="phone" placeholder="Email" class="form-control"  value="{{ $data->phone }}">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="address" placeholder="Email" class="form-control"  value="{{ $data->address }}">
			</div>
			<div class="form-group">
				<label>Jumlah Anggota</label>
				<input type="text" name="jumlah_anggota" placeholder="Email" class="form-control"  value="{{ $data->jumlah_anggota }}">
			</div>
			<div class="form-group">
				<label>Layanan</label>
				<input type="text" name="layanan_id" placeholder="Email" class="form-control"  value="{{ $data->layanan_id }}">
			</div>
			<div class="mb-3 container-fluid" id="map" style="min-height: 300px;"></div>
			<button type="submit" class="btn btn-success">Simpan</button>
		</form>
	</div>
</div>

@endsection

@section('addscript')

<script src="http://maps.google.com/maps/api/js?v=3&sensor=false" type="text/javascript"></script>
<script type="text/javascript">
	function initialize() {
		var lat = {{ $data->address_lat }};
		var lng = {{ $data->address_lng }};
		var myLatlng = new google.maps.LatLng(lat, lng);
		var mapOptions = {
			zoom: 15,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}  
		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Hello World!'
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>

@endsection