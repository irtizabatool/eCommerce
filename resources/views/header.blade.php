<?php
    use App\Http\Controllers\ProductController;
    $total = 0;
    if(Session::has('user'))
    {
        $total = ProductController::cartItem();
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="navbar-nav d-flex">
            <li class="nav-item">
                <a class="nav-link" href="/cart_list">Cart({{$total}})</a>
              </li>
              @if(Session::has('user'))
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('user')['name']}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </li>
              @else
              <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
              @endif
        </ul>
      </div>
    </div>
  </nav>
