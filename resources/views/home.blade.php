{{-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebab D'Hasbi</title>
    <style>
      *{
        background-color: #fdc700;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg mt-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ URL::to('/asset/img/logoo.png') }}" alt="" width="50" height="50">
      </a>
      

    <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="order">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="#">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <img src="{{ URL::to('/asset/img/homee.png') }}" class="img-fluid" alt="...">

  <div class="row p-5">
    <div class="col-sm-6 mb-3 mb-sm-0">
          <h4 class="card-title">PROMO SPECIAL</h4>
        </br>
          <a href="#" class="btn btn-secondary">ORDER NOW</a>
    </div>
    <div class="col-sm-3">
      <a class="home" href="#">
        <img src="{{ URL::to('/asset/img/logoo.png') }}" alt="" width="50" height="50">
      </a>
    </div>
    <div class="col-sm-2">
      <a class="home" href="#">
        <img src="{{ URL::to('/asset/img/logoo.png') }}" alt="" width="50" height="50">
      </a>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html> --}}

@extends('layouts/main')

@section('container')
<img src="{{ URL::to('/asset/img/homeee.png') }}" class="img-fluid" alt="...">

<div class="row p-5">
  <div class="col-sm-2 mb-3 mb-sm-0">
        <h1 class="card-title">PROMO SPECIAL</h1>
      </br>
    </br>
  </br>
</br>
        <a href="/order" class="btn btn-secondary btn-center">ORDER NOW</a>
  </div>
  <div class="col-sm-3">
    <a class="home" href="#">
      <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
    </a>
  </div>
  <div class="col-sm-3">
    <a class="home" href="#">
      <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
    </a>
  </div>
  <div class="col-sm-3">
    <a class="home" href="#">
      <img src="{{ URL::to('/asset/img/menu.jpg') }}" alt="" width="100%" height="100%">
    </a>
  </div>
</div>
@endsection