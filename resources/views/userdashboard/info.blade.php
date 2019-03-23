@extends('backend.udashboard')


@section('content')

<div class="row">
  @foreach ($data as $value)
  <div class="col-lg-4 col-md-6">
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

@endsection