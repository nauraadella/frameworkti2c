@extends('layouts/main')

@section('container')
<img src="{{ URL::to('/asset/img/homeee.png') }}" class="img-fluid" alt="...">

<div class="row p-5">
  <div class="col-sm-2 mb-3 mb-sm-0">
        <h1 class="card-title">BEST SELLER</h1>
      </br>
    </br>
  </br>
</br>
        <a href="/order" class="btn btn-dark text-light btn-center">ORDER NOW</a>
  </div>
  <div class="col-sm-3">
    <a class="home" href="#">
      <img src="{{ URL::to('/asset/img/beranda1.png') }}" alt="" width="100%" height="100%">
    </a>
  </div>
  <div class="col-sm-3">
    <a class="home" href="#">
      <img src="{{ URL::to('/asset/img/beranda2.png') }}" alt="" width="100%" height="100%">
    </a>
  </div>
  <div class="col-sm-3">
    <a class="home" href="#">
      <img src="{{ URL::to('/asset/img/beranda3.png') }}" alt="" width="100%" height="100%">
    </a>
  </div>
</div>
@endsection