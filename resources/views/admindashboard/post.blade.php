@extends('backend.adashboard')

@section('content')

<div class="row">
  <div class="col-12">    
    <form action="posting" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="title" placeholder="Judul Post">
      </div>
      <div class="form-group">
        <label>Isi Post</label>
        <textarea class="description" name="description"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>

@endsection

@section('js_after')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection