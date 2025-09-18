<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'top_navbar.php'; ?>
 <div class="content">
        <div class="mb-9">
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Orders</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All </span><span class="text-body-tertiary fw-semibold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>Pending payment </span><span class="text-body-tertiary fw-semibold">(6)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>Unfulfilled </span><span class="text-body-tertiary fw-semibold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>Completed</span><span class="text-body-tertiary fw-semibold">(6,810)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>Refunded</span><span class="text-body-tertiary fw-semibold">(8)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><span>Failed</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
          </ul>
          <div id="orderTable" data-list='{"valueNames":["order","total","customer","payment_status","fulfilment_status","delivery_type","date"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
                <div class="col-auto">
                  <div class="search-box">
                    <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search orders" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                  <div class="btn-group position-static" role="group">
                    <div class="btn-group position-static text-nowrap" role="group">
                      <!-- <button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Payment status<span class="fas fa-angle-down ms-2"></span>
                    </button> -->
                      <!-- <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul> -->
                    </div>
                    <div class="btn-group position-static text-nowrap" role="group">
                      <!-- <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Fulfilment status<span class="fas fa-angle-down ms-2"></span></button> -->
                      <!-- <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul> -->
                    </div>
                    <!-- <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters </button> -->
                  </div>
                </div>
                <!-- <div class="col-auto"><button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
               
              </div> -->
            </div>
           
  <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
  <div class="table-responsive mx-n4  mx-lg-n6  bg-body-emphasis border-top border-bottom border-translucent position-relative mt-3">
  <table class="table table-hover table-striped table-bordered table-large align-middle text-center shadow-lg rounded-3 overflow-hidden fs-9 mb-0">
  <thead class="table-primary text-dark">
    <tr>
      <th class="sort border-top" data-sort="name">S no.</th>
      <th class="sort border-top border-translucent ps-3" data-sort="name">Orders</th>
      <th class="sort border-top" data-sort="email">Total Price (Rs)</th>
      <th class="sort border-top" data-sort="name">Customer</th>
      <th class="sort border-top" data-sort="payment status">Payment Status</th>
      <th class="sort border-top" data-sort="age">Fulfilment Status</th>
      <th class="sort border-top" data-sort="age">Delivery Type</th>
      <th class="sort border-top" data-sort="age">Date</th>
    </tr>
  </thead>
  <tbody class="list">
    <?php
      $sql = "SELECT * FROM orders ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);
      $count = 0;
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $count++;
    ?>
<tr >
  <td class="fw-bold"><?php echo $count ?></td>
  <td class="ps-3 text-uppercase"><?php echo $row['billing_number'] ?></td>
  <td class=" fw-semibold">90</td>
  <td>Carry Anna</td>
  <td>
  <?php echo $row["payment_status"] ?>
  </td>
  <td>
    <span class=" text-dark fw-bold"><?php echo $row["delivery_status"] ?></span>
  </td>
  <td>
    <span class="  text-dark"><?php echo $row["payment_status"] ?></span>
  </td>
  <td class="text-muted"><?php echo $row["created_at"] ?></td>
</tr>


    <?php } } ?>
  </tbody>
</table>

  </div>
  <div class="d-flex justify-content-center mt-3"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
  </div>
</div>
          </div>
        </div>
    <?php include 'footer.php'; ?>
      </div>
