@extends('backend.adashboard')

@section('content')

<div class="row">
  <div class="col-12">    
    <form action="createadmin" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Judul Post">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" placeholder="Email" class="form-control">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" class="form-control">
      </div>
      <div class="form-group">
        <label>Role</label>
        <select name="role_id" class="form-control">
          <option value="1">Super Admin</option>
          <option value="2">Driver</option>
          <option value="3">Admin Loket</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>

@endsection

@section('addscript')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection