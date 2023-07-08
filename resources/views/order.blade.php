@extends('layouts/main')

@section('container')
  <div class="row p-5">
    <div class="col-sm-6 p-5">
      <a class="home" href="#">
        <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="400" height="400">
      </a>
    </div>
    <form action="{{route('order.store1') }}" method="post">
      @csrf
    <div class="col-sm-6 mb-3 mb-sm-0">
        <h1 class="card-title p-sm-5">ORDER NOW</h1>
        <p class="order"></p>
      <div class="col-md-10">
              <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" name="nama_pemesan">
              </div>
              <div class="mb-3">
                <label for="pesanan" class="form-label">Pesanan</label>
                <input type="text" class="form-control" id="pesanan" name="nama_pesanan">
            </div>
              </div>
              <div class="row">

                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <input type="text-area" class="form-control" id="alamat" name="alamat">
                          
                      </div>
                  </div>

                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="nohp" class="form-label">No. HP</label>
                          <input type="text" class="form-control" id="nohp" name="nohp">
                      </div>
                  </div>

              </div>

              <button type="submit" name="submit" class="btn btn-dark">Checkout</button>
      </div>
    </div>
  </div>
@endsection



