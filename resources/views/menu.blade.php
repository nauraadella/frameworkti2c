@extends('layouts/main')

@section('container')
<div class="album py-5 text-center">
  <div class="container">
    <div class="card-body">
      
    <div class="row ">
      @foreach($menus as $menu)
      <div class="col-md-3  mb-4">
        <div class="card shadow-sm bg-white" style="background-color: white !important ">
          <div class="d-flex flex-column bg-white  justify-content-between align-items-center rounded-4">
          <img src="{{asset('storage/' . $menu->gambar  ) }}" alt="" width="100%" height="100%">
            <h5 class="bg-white">{{$menu->nama_menu}}</h5>
            <h4 class="bg-white">Rp. {{number_format($menu->harga) }}</h4>   
            <p class="bg-white ">{{$menu->keterangan}}</p>
            <div class="bg-white d-flex justify-content-between align-items-center">
              <div class="btn-group my-3">
                <button type="button" class="btn btn-sm btn-outline-secondary" href="/order">Order</button>
              </div>
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
      <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#ModalTambahDataAnak">Tambah Data</button>
</div>
  </div>
</div>

<!-- Modal tambah data-->
<div class="modal fade" id="ModalTambahDataAnak" tabindex="-1" aria-labelledby="ModalTambahDataAnakLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalTambahDataAnakLabel">Masukkan Data Anak</h5>
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
      <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
      <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
      </div>
    </div>    
  </div>
</div>
</form>

@endsection
