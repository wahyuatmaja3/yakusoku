<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="credit-card"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" aria-current="page" href="/dashboard/products">
            <span data-feather="home"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" aria-current="page" href="/dashboard/products">
            <span data-feather="home"></span>
            Transaksi
          </a>
        </li>
      </ul>

      @can('admin')
          
      <h6 class="sidebar-heading d-flex justify-content-beetween align-items-center px-4 mt-4 mb-1 text-muted ">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
            Categories
          </a>
        </li>
      </ul>

      @endcan
    </div>
  </nav>