<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Kelola Berita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : '' }}" href="/dashboard/category">
            <span data-feather="align-justify"></span>
            Kelola Kategori
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/staff*') ? 'active' : '' }}" href="/dashboard/staff">
            <span data-feather="briefcase"></span>
            Kelola Staff
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/siswa*') ? 'active' : '' }}" href="/dashboard/siswa">
            <span data-feather="book"></span>
            Kelola Siswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/galeri*') ? 'active' : '' }}" href="/dashboard/galeri">
            <span data-feather="camera"></span>
            Kelola Galeri
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Ubah Profil</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/editProfil') ? 'active' : '' }}" aria-current="grid" href="/dashboard/editProfil">
            <span data-feather="user"></span>
            Profil
          </a>
        </li>
      </ul>

      {{-- can nama gate --}}
      @can('admin')  
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/user') ? 'active' : '' }}" aria-current="grid" href="/dashboard/user">
            <span data-feather="user"></span>
            Kelola Admin
          </a>
        </li>
      </ul>
      @endcan
    </div>
  </nav>