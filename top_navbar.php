<!-- navbar-top.php -->
<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
  <div class="collapse navbar-collapse justify-content-between">
    <!-- Logo -->
    <div class="navbar-logo">
      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
              type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse">
        <span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
      </button>
      <a class="navbar-brand me-1 me-sm-3" href="index.php">
        <div class="d-flex align-items-center">
          <img src="assets/img/icons/logo.png" alt="phoenix" width="27" />
          <h5 class="logo-text ms-2 d-none d-sm-block">Admin Dashboard</h5>
        </div>
      </a>
    </div>

    <!-- Search box -->
    <div class="search-box navbar-top-search-box d-none d-lg-block" style="width:25rem;">
      <form class="position-relative">
        <input class="form-control search-input rounded-pill form-control-sm"
               type="search" placeholder="Search..." />
        <span class="fas fa-search search-box-icon"></span>
      </form>
    </div>

    <!-- Right side icons -->
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item"><a class="nav-link" href="#"><span data-feather="bell"></span></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link lh-1 pe-0" href="#" data-bs-toggle="dropdown">
          <div class="avatar avatar-l">
            <img class="rounded-circle" src="assets/img/team/40x40/57.webp" alt="" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="#!">Profile</a>
          <a class="dropdown-item" href="#!">Dashboard</a>
          <a class="dropdown-item" href="#!">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#!">Sign out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
