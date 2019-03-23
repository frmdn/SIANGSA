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
				<h1>Daftar</h1>
				<form method="post" action="daftar">
					{{ csrf_field() }}
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-id-card"></i></div>
						</div>
						<input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
					</div>
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
					<div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-phone"></i></div>
						</div>
						<input type="text" class="form-control" name="phone" placeholder="No. Telepon">
					</div>
					{{-- <div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-filter"></i></div>
						</div>
						<select name="layanan_id" class="form-control" onchange="PilihLayanan(this)">
							<option>-- Pilih Layanan --</option>
							<option value="1">Rumah Tangga</option>
							<option value="2">Niaga</option>
						</select>
					</div> --}}
					{{-- <div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-users"></i></div>
						</div>
						<input type="text" class="form-control" id="qty" name="qty" placeholder="">
					</div> --}}
					{{-- <div class="input-group mb-2 mr-sm-2">
						<div class="input-group-prepend">
							<div class="input-group-text bg-transparent"><i class="fa fa-map-marker"></i></div>
						</div>
						<textarea name="address" class="form-control" placeholder="Alamat"></textarea>
						<input type="hidden" name="address_lat" id="alat">
						<input type="hidden" name="address_lng" id="alng">
					</div> --}}
					{{-- <div class="mb-3 container-fluid" id="map" style="min-height: 300px;"></div> --}}
					
					<button type="submit" class="btn btn-success btn-block round">Daftar</button>
					<div class="text-center" style="padding: 10px 0">
						Sudah punya akun SIANGSA? <a href="/login" class="text-warning font-weight-bold">Masuk.</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@endsection


@section('addscript')
<script type="text/javascript">
	function PilihLayanan(pilih)
	{
		var data = pilih.value;
		if (data == '1') {
			$('#qty').attr('placeholder','Jumlah Anggota Rumah');	
		} else {
			$('#qty').attr('placeholder','Volume Sampah Niaga');
		}
		
	}
</script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
	var markersArray = [];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: new google.maps.LatLng(-6.5808613,110.6312728),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow();
	
	google.maps.event.addListener(map, 'click', function( event ){
		clearOverlays();
		var lat = event.latLng.lat();

		var lng = event.latLng.lng();
		var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
		var marker = new google.maps.Marker({
			position: latlng,
			map: map
		});
		markersArray.push(marker);
		// infowindow.setContent(results[0].formatted_address);
		infowindow.open(map, marker);
		document.getElementById("alat").value = lat;
		document.getElementById("alng").value = lng;
	});
	
	
	function clearOverlays() {
		
		for (var i = 0; i < markersArray.length; i++ ) {
			markersArray[i].setMap(null);
		}
	}
</script>
@endsection
