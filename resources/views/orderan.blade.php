@extends('layouts/main')

@section('container')

<div class="col-lg-9-center px-4  " style="margin-top: 100px;">
<div class="card">
  <div class="card-header">
    Data Anak
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col d-flex justify-content-end">
            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#ModalTambahDataAnak">Tambah Data</button>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Anak</th>
      <th scope="col">Nama Ortu</th>
      <th scope="col">Alamat</th>
      <th scope="col">Umur</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $order->nama_pemesan}}</td>
      <td>{{ $order->nama_pesanan }}</td>
      <td>{{ $order->nohp }}</td>
      <td>{{ $order->alamat }}</td>
      <td>
      <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><a href="{{ route('lihat') }}">View</a></button>
      <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit{{ $order->id }}">Edit</button>
        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"><a>Delete</a></button>
      </td>
    </tr>
    <!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $order->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $order->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $order->id }}Label">Edit Data Anak</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           
      
           </div>
       </div>
   </div>
</div>

@endforeach
  </tbody>
</table>


  </div>
  </div>
</div>
</div>


<!-- Modal edit data-->

<div class="modal fade" id="ModalEdit{{ $order->id }}" tabindex="-1" aria-labelledby="ModalEdit{{ $order->id }}Label" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="ModalEdit{{ $order->id }}Label">Edit Data order</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
               <form action="{{ route('order.update', $order->id) }}" method="POST">
                   @csrf
                   @method('PUT')

                   <div class="form-group">
                       <label for="nama">Nama</label>
                       <input type="text" class="form-control" id="nama" name="nama" value="{{ $order->nama }}">
                   </div>

                   <div class="form-group">
                       <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
                       <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $order->tempat_lahir }}">
                   </div>

                   <div class="form-group">
                       <label for="alamat">Alamat</label>
                       <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $order->alamat }}">
                   </div>

                   <div class="form-group">
                       <label for="nama_ortu">Nama Orang Tua</label>
                       <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value="{{ $order->nama_ortu }}">
                   </div>

                   <div class="form-group">
                       <label for="berat">Berat Badan</label>
                       <input type="text" class="form-control" id="berat" name="berat" value="{{ $order->berat }}">
                   </div>

                   <div class="form-group">
                       <label for="tinggi_badan">Tinggi Badan</label>
                       <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" value="{{ $order->tinggi_badan }}">
                   </div>

                   <div class="form-group">
                       <label for="umur">Umur</label>
                       <input type="text" class="form-control" id="umur" name="umur" value="{{ $order->umur }}">
                   </div>

                   <div class="form-group">
                       <label for="jenis_kelamin">Jenis Kelamin</label>
                       <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $order->jenis_kelamin }}">
                   </div>

                   <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
      
           </div>
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
      <form action="{{route('anak.store') }}" method="post">
    @csrf
        <div class="input-group mt-1">
        <span class="input-group-text">Nama</span>
          <input type="text" name="nama" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Tempat,Tanggal Lahir</span>
          <input type="text" name="tempat_lahir" class="form-control" placeholder="">
        </div>
      
        <div class="input-group mt-2">
        <span class="input-group-text">Alamat</span>
          <input type="text" name="alamat" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Nama Ortu</span>
          <input type="text" name="nama_ortu" class="form-control" placeholder="">
        </div>
        <div class="input-group mt-2">
        <span class="input-group-text">Berat</span>
          <input type="text" name="berat" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">Tinggi Badan</span>
          <input type="text" name="tinggi_badan" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">Umur</span>
          <input type="text" name="umur" class="form-control" placeholder="">
        </div>

        <div class="input-group mt-2">
        <span class="input-group-text">Jenis Kelamin</span>
          <input type="text" name="jenis_kelamin" class="form-control" placeholder="">
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