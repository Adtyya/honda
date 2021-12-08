@include('resources.style')
@include('resources.js')
<div class="containers">
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed" style="background-color: #FF2626;">
            @auth       
            <a href="" class="navbar-brand">
              <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Honda.svg" width="80" height="60" alt="logo">
            </a>
            @else
            <a href="/login" class="navbar-brand">
              <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Honda.svg" width="80" height="60" alt="logo">
            </a>
            @endauth
          <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link ms-3 fw-bold {{Request::is('/#home')? 'active' : ''}}" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-3 fw-bold {{Request::is('/#')? 'active' : ''}}" aria-current="page" href="#produk">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ms-3 fw-bold {{Request::is('/#')? 'active' : ''}}" aria-current="page" href="#contact">Contact</a>
              </li>
            </div>
            
            @auth
            <div class="dropdown me-5 mt-2 d-flex justify-content-end">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: white">
                {{ auth()->user()->name }}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="background-color: white">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <form action="/logout" method="POST">
                  @csrf
                <button class="btn text-dark dropdown-item" type="submit">Log Out</button></form>
              </ul>
            </div>
            @endauth
          </ul>
    </nav>
</div>