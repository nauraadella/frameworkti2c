@extends('layouts/main')

@section('container')
<div class="album py-5 text-center">
  <div class="container">
    <div class="card-body">
      
    <div class="row ">
      @foreach($menus as $menu)
      <div class="col-md-3  mb-4">
        <div class="card shadow-sm bg-white" style="background-color: #fdc700 !important ">
          <div class="d-flex flex-column justify-content-between align-items-center rounded-4">
          <img src="{{asset('storage/' . $menu->gambar  ) }}" alt="" width="100%" height="100%">
            <h5 class="namaMenu">{{$menu->nama_menu}}</h5>
            <h5 class="harga">Rp. {{number_format($menu->harga) }}</h5>   
            <p class="keterangan">{{$menu->keterangan}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <a href="/order" class="btn btn-dark text-light btn-center">ORDER NOW</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      </div>
      
     
    

        </div>
      </div>
    </div>

    <div class="col d-flex p-5 justify-content-end">
      <button class="btn btn-dark text-light" data-bs-toggle="modal" data-bs-target="#ModalTambahDataMenu">Tambah Menu</button>
</div>
  </div>
</div>

<!-- Modal tambah data-->
<div class="modal fade" id="ModalTambahDataMenu" tabindex="-1" aria-labelledby="ModalTambahDataMenuLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataMenuLabel">Masukkan Data Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body lg-4">
      <form action="{{route('menu.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="nama_menu" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Harga</span>
          <input type="text" name="harga" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Keterangan</span>
          <input type="text" name="keterangan" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Gambar</span>
          <input type="file" name="gambar" class="form-control" placeholder="">
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-dark text-light" id="btnSimpan">Simpan</button>
      <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
      </div>
    </div>    
  </div>
</div>
</form>

@endsection
