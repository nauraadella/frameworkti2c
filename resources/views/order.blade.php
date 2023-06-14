@extends('layouts/main')

@section('container')
  <div class="row p-5">
    <div class="col-sm-6 p-5">
      <a class="home" href="#">
        <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="400" height="400">
      </a>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <h1 class="card-title p-sm-5">ORDER NOW</h1>
        <p class="order"></p>
      <div class="col-md-10">
          <form action="proses/proses_checkout.php" method="post">
              <div class="mb-3">
                  <label for="pelanggan" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="pelanggan" name="pelanggan">
              </div>
              <div class="mb-3">
                <label for="pelanggan" class="form-label">Pesanan</label>
                <input type="text" class="form-control" id="pelanggan" name="pelanggan">
            </div>
              </div>
              <div class="row">

                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="kode_order" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="kode_order" name="kode_order">
                          
                      </div>
                  </div>

                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="meja" class="form-label">No. HP</label>
                          <input type="text" class="form-control" id="meja" name="meja">
                      </div>
                  </div>

              </div>

              <button type="submit" name="submit" class="btn btn-dark">Checkout</button>
          </form>
      </div>
    </div>
  </div>
@endsection