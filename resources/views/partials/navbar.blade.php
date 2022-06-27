<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-light navbar-light">
  <div class="container-fluid">
      <a href="/" class="navbar-brand"> SMP Kr.YBPK
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
              <a href="/profil" class="nav-item nav-link {{ Request::is('profil') ? 'active' : '' }}">Profil</a>
            </li>
            <li class="nav-item">
              <a href="/galeri" class="nav-item nav-link {{ Request::is('galeri') ? 'active' : '' }}">Galeri</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link {{ Request::is('staff') || Request::is('siswa') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SDM
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/staff">Data Guru & Staf</a></li>
                  <li><a class="dropdown-item" href="/siswa">Data Siswa</a></li>
                </ul>
              </li>
            <li class="nav-item">
              <a href="/posts" class="nav-item nav-link {{ Request::is('posts*') ? 'active' : '' }}">Berita</a>
            </li>
            <li class="nav-item">
              <a href="#footer" class="nav-item nav-link">Kontak</a>
            </li>
          </ul>

          <ul class="navbar-nav">
            {{-- auth untuk menampilkan tampilan kalau sudah login, kalau guest belum login --}}
                @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- UNTUK MENGETAHUI USER YANG SEDANG LOGIN --}}
                    {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-columns"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                  </ul>
                </li>
                  @else
                <li class="nav-item">
                  <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
              </ul>
      </div>
  </div>
</div>
<!-- Nav Bar End -->