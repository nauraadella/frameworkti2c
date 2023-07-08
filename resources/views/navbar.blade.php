<nav class="navbar navbar-expand-lg mt-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ URL::to('/asset/img/logoo.png') }}" alt="" width="50" height="50"> KEBAB D'HASBI
      </a>
      

    <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="beranda">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="order">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="orderan">Order Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="contact">Contact</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link  text-dark" href="#">logout</a>
          </li> --}}
          <li class="nav-item dropdown">
            @guest
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </li>
        </ul>
      </div>
    </div>
  </nav>