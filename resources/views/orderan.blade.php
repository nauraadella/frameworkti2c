@extends('layouts/main')

@section('container')
<table class="table">
  <thead>
    <tr>
      <th style=background-color:#fdc700; scope="col">No</th>
      <th style=background-color:#fdc700; scope="col">Nama Pelanggan</th>
      <th style=background-color:#fdc700; scope="col">Menu Pesanan</th>
      <th style=background-color:#fdc700; scope="col">No HP</th>
      <th style=background-color:#fdc700; scope="col">Alamat</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td style=background-color:#fdc700;>{{ $loop->iteration }}</td>
      <td style=background-color:#fdc700;>{{ $order->nama_pemesan}}</td>
      <td style=background-color:#fdc700;>{{ $order->nama_pesanan }}</td>
      <td style=background-color:#fdc700;>{{ $order->nohp }}</td>
      <td style=background-color:#fdc700;>{{ $order->alamat }}</td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection