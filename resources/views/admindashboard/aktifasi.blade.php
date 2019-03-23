@extends('backend.adashboard')

@section('content')

<div class="row">
	<div class="col-12">    
		<form action="/activate" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $data->id }}">
			<div class="form-group">
				<label>User ID</label>
				<input type="text" class="form-control" name="user_id" placeholder="User ID" value="{{ $data->user_id }}">
			</div>
			<div class="form-group">
				<label>Tipe Layanan</label>
				<input type="text" name="layanan_id" placeholder="Layanan" class="form-control"  value="{{ $data->layanan_id }}">
			</div>
			<div class="form-group">
				<label>Quantity</label>
				<input type="text" name="qty" placeholder="Quantity" class="form-control"  value="{{ $data->qty }}">
			</div>
			<div class="form-group">
				<label>Besar Tagihan</label>
				<input type="text" name="nominal" placeholder="Nominal" class="form-control" value="{{ $data->nominal }}">
			</div>
			<div class="form-group">
				<label>Jatuh Tempo</label>
				<input type="text" name="jatuhtempo" placeholder="Jatuh Tempo" class="form-control" id="datepicker" value="{{ $data->created_at->toDateString() }}">
			</div>
			<button type="submit" class="btn btn-success">Simpan</button>
		</form>
	</div>
</div>

@endsection

@section('addscript')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	//Date picker
    $('#datepicker').datepicker({    	
    	format: 'yyyy-mm-dd',
      	autoclose: true
    })
</script>

@endsection

@section('js_after')
<script src="/admin/vendor/datatables/jquery.dataTables.js"></script>
<script src="/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="/admin/js/demo/datatables-demo.js"></script>
@endsection