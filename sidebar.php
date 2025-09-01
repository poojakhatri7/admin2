<style>
/* Sidebar text size */
.nav-link-text {
  font-size: 14.5px;   /* increase text size */
  font-weight: 600;  /* optional: slightly bold */
}

/* Feather icon size inside sidebar */
.nav-link-icon svg {
  width: 18px;   /* bigger icon */
  height: 18px;
  stroke-width: 2;  /* thickness of lines */
  margin-right: 6px; /* little space between icon & text */
}
.submenu-text {
  font-size: 15px;   /* bigger submenu */
  font-weight: 600;
  margin-left: 1px;
  white-space: normal;  /* allow wrapping */
  word-wrap: break-word;
  line-height: 1.3;   /* little space after icon */
}

</style>
<!-- navbar-vertical.php -->
<nav class="navbar navbar-vertical navbar-expand-lg">
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content">

   <ul class="navbar-nav flex-column" id="navbarVerticalNav">

  <!-- Dashboard -->
  <div class="nav-item-wrapper">
    <a class="nav-link dropdown-indicator label-1" href="#nv-dashboard" role="button">
      <div class="d-flex align-items-center">
        <div class="dropdown-indicator-icon-wrapper"></div>
        <span class="nav-link-icon">
          <span data-feather="bar-chart-2"></span>
        </span>
        <span class="nav-link-text">Dashboard</span>
      </div>
    </a>
  </div>

<!-- Enquiry Message -->
<div class="nav-item-wrapper">
  <a class="nav-link dropdown-indicator label-1" href="#nv-enquiry" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-enquiry">
    <div class="d-flex align-items-center">
        <span class="fas fa-caret-right dropdown-indicator-icon"> </span>
      <div class="dropdown-indicator-icon-wrapper"></div>
      <span class="nav-link-icon">
          
        <span data-feather="mail"></span>
      </span>
    
      <span class="nav-link-text">Enquiry Message</span>
    
    </div>
  </a>

  <!-- Dropdown menu -->
  <div class="collapse" id="nv-enquiry" data-bs-parent="#navbarVerticalNav">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="admin_enquiry_message.php">
          <span data-feather="list"></span>
          <span class="submenu-text">All Enquiry</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="complete-enquiry.php">
          <span data-feather="check-circle"></span>
          <span class="submenu-text">Complete Enquiry</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pending-enquiry.php">
          <span data-feather="clock"></span>
          <span class="submenu-text">Pending Enquiry</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rejected-enquiry.php">
          <span data-feather="x-circle"></span>
          <span class="submenu-text">Rejected Enquiry</span>
        </a>
      </li>
    </ul>
  </div>
</div>


<!-- Products -->
<div class="nav-item-wrapper">
  <a class="nav-link dropdown-indicator label-1" href="#nv-products" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-products">
    <div class="d-flex align-items-center">
        <span class="fas fa-caret-right dropdown-indicator-icon"> </span>
      <div class="dropdown-indicator-icon-wrapper"></div>
      <span class="nav-link-icon">
        <span data-feather="box"></span>
      </span>
      <span class="nav-link-text">Products</span>
    </div>
  </a>

  <!-- Dropdown menu -->
  <div class="collapse" id="nv-products" data-bs-parent="#navbarVerticalNav">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="add-product.php">
          <span data-feather="plus-square"></span>
          <span class="submenu-text">Add Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="available-product.php">
          <span data-feather="archive"></span>
          <span class="submenu-text">Available Product</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add-category.php">
          <span data-feather="layers"></span>
          <span class="submenu-text">Add Category & Sub Category</span>
        </a>
      </li>
    </ul>
  </div>
</div>


  <!-- Orders -->
  <div class="nav-item-wrapper">
    <a class="nav-link dropdown-indicator label-1" href="#nv-orders" role="button">
      <div class="d-flex align-items-center">
        <div class="dropdown-indicator-icon-wrapper"></div>
        <span class="nav-link-icon">
          <span data-feather="shopping-cart"></span>
        </span>
        <span class="nav-link-text">Orders</span>
      </div>
    </a>
  </div>

  <!-- Total Customers -->
  <div class="nav-item-wrapper">
    <a class="nav-link dropdown-indicator label-1" href="#nv-customers" role="button">
      <div class="d-flex align-items-center">
        <div class="dropdown-indicator-icon-wrapper"></div>
        <span class="nav-link-icon">
          <span data-feather="users"></span>
        </span>
        <span class="nav-link-text">Total Customers</span>
      </div>
    </a>
  </div>
<!-- Website Manage -->
<div class="nav-item-wrapper">
  <a class="nav-link dropdown-indicator label-1" href="#nv-website" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-website">
    <div class="d-flex align-items-center">
      <span class="fas fa-caret-right dropdown-indicator-icon"> </span>
      <div class="dropdown-indicator-icon-wrapper"></div>
      <span class="nav-link-icon">
        <span data-feather="globe"></span>
      </span>
      <span class="nav-link-text">Website Manage</span>
    </div>
  </a>

  <!-- Dropdown menu -->
  <div class="collapse" id="nv-website" data-bs-parent="#navbarVerticalNav">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="top-slider.php">
          <span data-feather="image"></span>
          <span class="submenu-text">Top Slider</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.php">
          <span data-feather="info"></span>
          <span class="submenu-text">About Us</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">
          <span data-feather="phone"></span>
          <span class="submenu-text">Contact Us</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="update-gallery.php">
          <span data-feather="image"></span>
          <span class="submenu-text">Update Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="comment-review.php">
          <span data-feather="message-square"></span>
          <span class="submenu-text">Comment & Review</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="staff-gallery.php">
          <span data-feather="users"></span>
          <span class="submenu-text">Staff Gallery</span>
        </a>
      </li>
    </ul>
  </div>
</div>


<!-- Profile Settings -->
<div class="nav-item-wrapper">
  <a class="nav-link dropdown-indicator label-1" href="#nv-profile" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-profile">
    <div class="d-flex align-items-center">
       <span class="fas fa-caret-right dropdown-indicator-icon"> </span>
      <div class="dropdown-indicator-icon-wrapper"></div>
      <span class="nav-link-icon">
        <span data-feather="edit"></span>
      </span>
      <span class="nav-link-text">Profile Settings</span>
    </div>
  </a>

  <!-- Dropdown menu -->
  <div class="collapse" id="nv-profile" data-bs-parent="#navbarVerticalNav">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="update-profile.php">
          <span data-feather="user"></span>
          <span class="submenu-text">Update Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="change-password.php">
          <span data-feather="lock"></span>
          <span class="submenu-text">Change Password</span>
        </a>
      </li>
    </ul>
  </div>
</div>

  <!-- Logout -->
<div class="nav-item-wrapper">
  <a class="nav-link dropdown-indicator label-1" href="logout.php" role="button">
    <div class="d-flex align-items-center">
      <div class="dropdown-indicator-icon-wrapper"></div>
      <span class="nav-link-icon">
        <span data-feather="log-out"></span>
      </span>
      <span class="nav-link-text">Logout</span>
    </div>
  </a>
</div>

</ul>
                    
        <li class="nav-item">
          <div class="nav-item-wrapper">
            <a class="nav-link dropdown-indicator label-1" href="#nv-home"
               data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
            </a>
            <div class="parent-wrapper label-1">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- <div class="navbar-vertical-footer">
    <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 d-flex align-items-center">
      <span class="uil uil-left-arrow-to-left fs-8"></span>
      <span class="uil uil-arrow-from-right fs-8"></span>
      <span class="navbar-vertical-footer-text ms-3"></span>
    </button>
  </div> -->
</nav>
