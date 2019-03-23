@extends('backend.adashboard')

@section('content')

<div class="row">
	<div class="col-12">    
		<form action="/pelunasan" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $data->id }}">
			<div class="form-group">
				<label>User ID</label>
				<input type="text" class="form-control" name="user_id" value="{{ $data->user_id }}">
			</div>
			<div class="form-group">
				<label>Nominal</label>
				<input type="text" name="nominal" class="form-control"  value="{{ $data->nominal }}">
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control">
					<option value="0">Belum Lunas</option>
					<option value="1">Lunas</option>
				</select>
			</div>
			<button type="submit" class="btn btn-success">Update Data</button>
		</form>
	</div>
</div>

@endsection