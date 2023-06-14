@extends('layouts/main')

@section('container')
<div class="album py-5 text-center">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
          
          <div class="card-body">
            <h5>NAMA MENU</h5>
            <h6>Harga</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="#">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
          
          <div class="card-body">
            <h5>NAMA MENU</h5>
            <h6>Harga</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="#">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
          
          <div class="card-body">
            <h5>NAMA MENU</h5>
            <h6>Harga</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="#">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
          
          <div class="card-body">
            <h5>NAMA MENU</h5>
            <h6>Harga</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="#">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
          
          <div class="card-body">
            <h5>NAMA MENU</h5>
            <h6>Harga</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="#">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
          
          <div class="card-body">
            <h5>NAMA MENU</h5>
            <h6>Harga</h6>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="#">Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection