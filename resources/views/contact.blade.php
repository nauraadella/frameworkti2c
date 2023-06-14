@extends('layouts/main')

@section('container')

  <div class="row p-5">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <h2 class="card-title p-sm-5">CONTACT INFO
    </br>
</br>
        <i class="bi bi-instagram" href="#">   mr.kbabburger</i>
    </br>
        <i class="bi bi-facebook" href="#">   kebabdhasbi</i>
    </br>
        <i class="bi bi-envelope" href="#">   kebabdhasbi@gmail.com</i>
    </br>
        <i class="bi bi-whatsapp" href="#">   082213681851</i>
    </br>
        <i class="bi bi-geo-alt" href="#">   jl Medan-Banda Aceh, Bayu</i>
    </h2>
    </div>
    <div class="col-sm-3 p-5">
      <a class="home" href="#">
        <img src="{{ URL::to('/asset/img/contactt.png') }}" alt="" width="400" height="400">
      </a>
    </div>
  </div>
  @endsection