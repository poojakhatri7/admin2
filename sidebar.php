<!-- navbar-vertical.php -->
<nav class="navbar navbar-vertical navbar-expand-lg">
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content">
      <ul class="navbar-nav flex-column" id="navbarVerticalNav">
        <li class="nav-item">
          <div class="nav-item-wrapper">
            <a class="nav-link dropdown-indicator label-1" href="#nv-home"
               data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon-wrapper">
                  <span class="fas fa-caret-right dropdown-indicator-icon"></span>
                </div>
                <span class="nav-link-icon"><span data-feather="pie-chart"></span></span>
                <span class="nav-link-text">Home</span>
              </div>
            </a>
            <div class="parent-wrapper label-1">
              <ul class="nav collapse parent show" id="nv-home">
                <li class="nav-item"><a class="nav-link active" href="index.php">E-commerce</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard/project-management.php">Project management</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard/crm.php">CRM</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard/travel-agency.php">Travel agency</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard/stock.php">Stock 
                  <span class="badge ms-2 badge badge-phoenix badge-phoenix-warning">new</span></a></li>
                <li class="nav-item"><a class="nav-link" href="apps/social/feed.php">Social feed</a></li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-vertical-footer">
    <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 d-flex align-items-center">
      <span class="uil uil-left-arrow-to-left fs-8"></span>
      <span class="uil uil-arrow-from-right fs-8"></span>
      <span class="navbar-vertical-footer-text ms-3">Logout</span>
    </button>
  </div>
</nav>
