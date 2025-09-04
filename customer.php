<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'top_navbar.php'; ?>

<div class="content">
         <div class="mb-9">
          <div class="row g-2 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Customers</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span> All </span><span class="text-body-tertiary fw-semibold">(68817)</span></a></li>
            
          </ul>
          <div id="products" data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
                <div class="col-auto">
                  <div class="search-box">
                    <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search customers" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                  <div class="btn-group position-static" role="group">
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Country<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">US</a></li>
                        <li><a class="dropdown-item" href="#">Uk</a></li>
                        <li><a class="dropdown-item" href="#">Australia</a></li>
                      </ul>
                    </div>
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> VIP<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">VIP 1</a></li>
                        <li><a class="dropdown-item" href="#">VIP 2</a></li>
                        <li><a class="dropdown-item" href="#">VIP 3</a></li>
                        <li></li>
                      </ul>
                    </div><button class="btn btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
                  </div>
                </div>
                <div class="col-auto"><button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add customer</button></div>
              </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
              <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                <table class="table table-sm fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs-9 align-middle ps-0">
                        <div class="form-check mb-0 fs-8"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"customers-table-body"}' /></div>
                      </th>
                      
                     <th class="sort align-middle text-center" scope="col" data-sort="customer" style="width:10%;">CUSTOMER NAME</th>
<th class="sort align-middle text-center" scope="col" data-sort="email" style="width:20%;">EMAIL</th>
<th class="sort align-middle text-center" scope="col" data-sort="total-orders" style="width:10%">MOBILE</th>
<th class="sort align-middle text-center" scope="col" data-sort="total-orders" style="width:10%">ORDERS</th>
<th class="sort align-middle text-center" scope="col" data-sort="total-spent" style="width:30%">TOTAL SPENT</th>
<th class="sort align-middle text-center" scope="col" data-sort="city" style="width:25%;">CITY</th>
<th class="sort align-middle text-center" scope="col" data-sort="last-seen" style="width:15%;">LAST ORDER</th>
<th class="sort align-middle text-center" scope="col" data-sort="last-order" style="width:10%;">ACTION</th>

                    </tr>
                  </thead>
                  <tbody class="list" id="customers-table-body">
                 
    <?php
    $sql = "SELECT * FROM users ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $count = 0;

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        echo "
        <tr class='hover-actions-trigger btn-reveal-trigger position-static'>
          <td class='fs-9 align-middle ps-0 py-3'>
            <div class='form-check mb-0 fs-8'>
              <input class='form-check-input' type='checkbox' 
                data-bulk-select-row='{\"customer\":{\"name\":\"".$row['name']."\"},\"email\":\"".$row['email']."\",\"mobile\":\"".$row['mobile']."\",\"address\":\"".$row['address']."\"}' />
            </div>
          </td>

          <td class='customer align-middle white-space-nowrap pe-5'>
            <a class='d-flex align-items-center' href='customer_details?id=".$row['id']."'>
              <p class='mb-0 ms-5  fw-bold'>".$row['name']."</p>
            </a>
          </td>
          <td class='email align-middle white-space-nowrap pe-5'>
              <p class='mb-0 ms-5  fw-bold'>".$row['email']."</p>
          </td>
   
              <td class='customer align-middle white-space-nowrap pe-5'>
              <p class='mb-0 ms-5  fw-bold'>".$row['mobile']."</p>
          </td>
                <td class='customer align-middle white-space-nowrap pe-5'>
              <p class='mb-0 ms-5  fw-bold'>".$row['orders']."</p>
          </td>
                 <td class='customer align-middle white-space-nowrap pe-5'>
              <p class='mb-0 ms-5  fw-bold'>".$row['Total_spend']."</p>
          </td>
                 <td class='customer align-middle white-space-nowrap pe-5'>
              <p class='mb-0 ms-5  fw-bold'>".$row['city']."</p>
          </td>
           <td class='customer align-middle white-space-nowrap pe-5'>
              <p class='mb-0 ms-5  fw-bold'>".$row['last_order']."</p>
          </td>
  <td class='customer align-middle white-space-nowrap pe-5'>
            <a class='d-flex align-items-center' href='customer_details?id=".$row['id']."'>
             <p class='mb-0 ms-3 text-primary fw-bold fs-9'>VIEW DETAILS</p>
            </a>
          </td>
        </tr>";
      }
    } else {
      echo "<tr><td colspan='5'>No Customer found.</td></tr>";
    }
    ?>
  </tbody>
                 
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>