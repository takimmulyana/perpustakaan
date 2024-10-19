<nav class="navbar navbar-expand-lg navbar-dark bg-primary position-sticky top-0 left-0 py-3" style="z-index: 999" >
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Perpustakaan SMK Pustek Serpong</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-bold {{ Request::is('/') ? 'active' : '' }} " href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ Request::is('posts*') ? 'active' : '' }}"   href="/posts">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ Request::is('categories*') ? 'active' : '' }}"   href="/categories">Kategori</a>
          </li>
          
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              @can('admin')
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              @endcan
              <li>

                <form action="/logout" method="post">
                  @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>

              </li>
            </ul>
          </li>
          @else 
          <li class="nav-item">
            <a href="/login" class="btn bg-white text-info px-3 py-2 fw-semibold {{ Request::is('login*') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>