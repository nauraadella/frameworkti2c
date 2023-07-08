<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kebab D'Hasbi</title>
    <style>
        .btn-group {
            position: relative;
            top: 50vh;
            transform: translateY(-50%);
            text-align: center;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">
</head>

<body>
<div class="container-fluid"
     style="background-image: url('/asset/img/landingg.png'); background-size: cover; background-position: center; height: 100vh;">
    <ul class="btn-bottom-2">
        @guest
        <div class="d-flex gap-2 justify-content-center">
            @if (Route::has('login'))
                <li class="btn-group col-md-1">
                    <a class="btn bg-dark text-light text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            
              
            @if (Route::has('register'))
                <li class="btn-group col-md-1">
                    <a class="btn bg-dark text-light text-center" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        </div>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown"
                   class="nav-link dropdown-toggle"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false"
                   v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
</body>

</html>
