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
          <img src="assets/img/icons/tvs_logo.png" alt="phoenix" width="75" />
          <h5 class="logo-text ms-2 d-none d-sm-block">Welcome Admin</h5>
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
   <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
            </li>
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
