<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'top_navbar.php'; ?>
<div class="content">
          <?php
          $id = $_GET ['id'];
// Query users
$sql = "SELECT * FROM users  where id = $id ORDER BY id DESC  ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="mb-9">
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Customer details</h2>
            </div>
            <div class="col-auto">
              <div class="row g-3">
                <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fa-solid fa-trash-can me-2"></span>Delete customer</button></div>
                <div class="col-auto"><button class="btn btn-phoenix-secondary"><span class="fas fa-key me-2"></span>Reset password</button></div>
              </div>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xxl-4">
              <div class="row g-3 h-100">
                <div class="col-12 col-md-7 col-xxl-12">
                  <div class="card h-100 h-xxl-auto">
                    <div class="card-body d-flex flex-column justify-content-between pb-3">
                      <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                        <div class="col-12 col-sm-auto mb-sm-2">
                          <div class="avatar avatar-5xl"><img class="rounded-circle" src="assets/img/team/avatar.webp" alt="" /></div>
                        </div>
                        <div class="col-12 col-sm-auto flex-1">
                          <h3><?php echo $row['name']; ?></h3>
                          <p class="text-body-secondary">Joined 3 months ago</p>
                          <div><a class="me-2" href="#!"><span class="fab fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a class="me-2" href="#!"><span class="fab fa-facebook text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a href="#!"><span class="fab fa-twitter text-body-quaternary text-opacity-75 text-primary-hover"></span></a></div>
                        </div>
                      </div>

                      <!-- <div class="d-flex flex-between-center border-top border-dashed pt-4">
                        <div>
                          <h6>Following</h6>
                          <p class="fs-7 text-body-secondary mb-0">297</p>
                        </div>
                        <div>
                          <h6>Projects</h6>
                          <p class="fs-7 text-body-secondary mb-0">56</p>
                        </div>
                        <div>
                          <h6>Completion</h6>
                          <p class="fs-7 text-body-secondary mb-0">97</p>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-xxl-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <h3 class="me-1">Customer Address</h3><button class="btn btn-link p-0">
<a href="#" class="text-white mx-1 fas fa-pen fs-8 ms-3 text-body-quaternary"
      style="cursor:pointer;"
      data-bs-toggle="modal"
      data-bs-target="#modal-default"></a>

                      </div>
                      <h5 class="text-body-secondary">Address</h5>
                      <p class="text-body-secondary"><?php echo $row['address']; ?><br /><?php echo $row['city']; ?><br /><?php echo $row['State']; ?></p>
                      <div class="mb-3">
                        <h5 class="text-body-secondary">Email</h5><a href="mailto:shatinon@jeemail.com"><?php echo $row['email']; ?></a>
                      </div>
                      <h5 class="text-body-secondary">Mobile</h5><a class="text-body-secondary" href="tel:+1234567890"><?php echo $row['mobile']; ?></a>
                    </div>
                  </div>
                </div>
<?php
    }
}
?>
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Customer Details </h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              </button>
            </div>
            <div class="modal-body">
          <!-- <h4 style="color:rgb(1, 12, 6);" >Add New Services </h4> -->
        
            <form id="appointment_form" >
            <div class="form-group">
            <div id="message"></div>
         
                        <label for="mobile" class="custom-label" >Mobile</label>
                        <input type="tel" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile number" pattern="[0-9]{10}"
       maxlength="10"
       minlength="10" required>
                      
                    </div>

          <span id="error-message" style="color: red; display: block; font-weight:600; margin-bottom: 15px; text-align: justify; padding-left: 50px;"></span>

          <div class="mb-3">
            <label for="name" class="custom-label">Name</label>
            <input type="text" name="name" pattern="[A-Za-z\s]+" class="form-control" id="name" placeholder="Enter Name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="custom-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
          </div>

          <div class="mb-3">
            <label for="address" class="custom-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required>
          </div>
                    <br>
                    <div class="modal-footer justify-content-between">
           <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="background-color: rgba(255, 0, 0);">Close</button>

              <button type="submit" name="submit" id="submitBtn1" class="btn btn-primary" style=" background-color: rgba(54, 168, 206, 1);">Add</button>
            </div>
                </form>
                <div id="message"></div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <div class="col-12">
  <div class="card">
    <div class="card-body">
      <h3 class="mb-4">Notes on Customer</h3>
<form id="noteForm">
  <textarea name="note" id="note" class="form-control mb-3" rows="4" required></textarea>
  <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $id; ?>">
  <button type="submit" class="btn btn-phoenix-primary  w-100 mb-4" style=" background-color: rgba(95, 97, 230); color: white; font-size: 15px;" >Add Note</button>
</form>
<!-- Where new notes will appear -->
<div id="notes-container" data-userid="<?php echo $id; ?>"></div>
<div id="notesList"></div>
  
      
    </div>
  </div>
</div>
            <div class="col-12 col-xxl-8">
              <div class="mb-6">
                <h3 class="mb-4">Orders <span class="text-body-tertiary fw-normal">


                </span></h3>
                <div class="border-top border-bottom border-translucent" id="customerOrdersTable" data-list='{"valueNames":["order","total","payment_status","fulfilment_status","delivery_type","date"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table table-sm fs-9 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle ps-0 pe-3" scope="col" data-sort="order" style="width:10%;">Sno.</th>
                           <th class="sort white-space-nowrap align-middle ps-0 pe-3" scope="col" data-sort="order" style="width:10%;">ORDER</th>
                          <th class="sort align-middle text-end pe-7" scope="col" data-sort="total" style="width:10%;">TOTAL</th>
                           <th class="sort align-middle text-end pe-7" scope="col" data-sort="total" style="width:10%;">DISCOUNT</th>
                           <th class="sort align-middle white-space-nowrap pe-3" scope="col" data-sort="total" style="width:10%;">TOTAL AFTER DISCOUNT</th>
                          <th class="sort align-middle white-space-nowrap pe-3" scope="col" data-sort="payment_status" style="width:15%;">PAYMENT STATUS</th>
                            <th class="sort align-middle white-space-nowrap text-start" scope="col" data-sort="delivery_type" style="width:30%;">PAYMENT TYPE</th>
                          <th class="sort align-middle white-space-nowrap text-end pe-3" scope="col" data-sort="fulfilment_status" style="width:50%;">STATUS</th>
                          <th class="sort align-middle text-center white-space-nowrap pe-3" scope="col" data-sort="date" style="width:50%;">DATE AND TIME</th>
                          <th class="sort text-end align-middle pe-0 ps-5" scope="col"></th>
                        </tr>
                      </thead>
                     
                      <tbody class="list" id="customer-order-table-body">
                                              <?php
                      $sql = "SELECT * FROM orders where customer_id = $id order BY id DESC";
$result = mysqli_query($conn, $sql);
$count = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        ?>
         

         
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semibold" href="#!"><?php echo $count; ?></a></td>
                          <td class="total align-middle text-center fw-semibold pe-7 text-body-highlight"><?php echo $row['billing_number']; ?></td>
                          <td class="total align-middle text-center fw-semibold pe-7 text-body-highlight"><?php echo $row['totalPrice']; ?></td>
                           <td class="total align-middle text-center fw-semibold pe-7 text-body-highlight"><?php echo $row['discount']; ?></td>
                          <td class="payment_status align-middle white-space-nowrap text-center text- fw-bold text-body-tertiary"><?php echo $row['totalAfterDiscount']; ?><span class="ms-1"  style="height:12.8px;width:12.8px;"></span></td>
                           <td class="payment_status align-middle white-space-nowrap text-center text- fw-bold text-body-tertiary"><?php echo $row['totalAfterDiscount']; ?><span class="ms-1"  style="height:12.8px;width:12.8px;"></span></td>
                            <td class="payment_status align-middle white-space-nowrap text-center text- fw-bold text-body-tertiary"><?php echo $row['payment_status']; ?><span class="ms-1"  style="height:12.8px;width:12.8px;"></span></td>
                          <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start fw-bold text-body-tertiary"><?php echo $row['payment_type']; ?></td>
                         <td class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start fw-bold text-body-tertiary"><?php echo date("d M Y, h:i A", strtotime($row['created_at'])); ?></td>
                
                          <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                            </div>
                          </td>
                        </tr>
                        <?php } } ?>
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
              <div class="mb-6">
                <h3 class="mb-4">Wishlist <span class="text-body-tertiary fw-normal"></span></h3>
                <div class="border-translucent border-top border-bottom" id="customerWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs-9 mb-0">
                      <thead>
                         
                        <tr>
                          <th class="sort  align-middle fs-10 " scope="col" style="width:5%;"></th>
                          <th class="sort  align-middle" scope="col" style="width:10%; min-width:200px;" data-sort="products">PRODUCTS</th>
                          <th class="sort align-middle" scope="col" data-sort="color" style="width:15%; min-width:200px;">COLOR</th>
                          <th class="sort align-middle" scope="col" data-sort="size" style="width:10%; min-width:200px;">SIZE</th>
                          <th class="sort align-middle " scope="col" data-sort="price" style="width:15%; min-width:200px;">PRICE (RS)</th>
                          <!-- <th class="sort align-middle text-middle" scope="col" data-sort="total" style="width:15%;">TOTAL</th> -->
                        </tr>
                        <?php
                      $sql = "SELECT * FROM users_wishlist where customer_id = $id order BY id DESC";
$result = mysqli_query($conn, $sql);
$count = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        ?>
                      </thead>
                      <tbody class="list" id="customer-wishlist-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap py-1"><a class="border border-translucent rounded-2 d-inline-block" href="../landing/product-details.html"><img src="assets/img/products/1.png" alt="" width="40" height="40" /></a></td>
                          <td class="products align-middle "><a class="fw-semibold mb-0" href="../landing/product-details.html"><?php echo $row['Products']; ?></a></td>
                        <td class="color align-middle white-space-nowrap fs-9 text-body">
    <strong><?php echo $row['color']; ?></strong>
</td>
                          <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold"><strong><?php echo $row['size']; ?></strong></td>
                          <td class="price align-middle text-body fs-9 fw-semibold text-left"><strong><?php echo $row['price']; ?></strong></td>
                          <!-- <td class="total align-middle fw-bold text-body-highlight text-left">$57</td> -->
                        </tr>
                          <?php } } ?>
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
              <div>
                <!-- <h3 class="mb-4">Ratings & reviews <span class="text-body-tertiary fw-normal">(43)</span></h3> -->
                <!-- <div class="border-top border-bottom border-translucent" id="customerRatingsTable" data-list='{"valueNames":["product","rating","review","status","date"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs-9 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle ps-0" scope="col" style="width:20%;" data-sort="product">PRODUCT</th>
                          <th class="sort align-middle" scope="col" data-sort="rating" style="width:10%;">RATING</th>
                          <th class="sort align-middle" scope="col" style="width:50%;" data-sort="review">REVIEW</th>
                          <th class="sort text-end align-middle" scope="col" style="width:10%;" data-sort="status">STATUS</th>
                          <th class="sort text-end align-middle" scope="col" style="width:10%;" data-sort="date">DATE</th>
                          <th class="sort text-end pe-0 align-middle" scope="col"></th>
                        </tr>
                      </thead>
                      <tbody class="list" id="customer-rating-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">Apple Magic Mouse (Wireless, Rech...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">It's lovely, works right out of the box (as you'd expect from an Apple device), and has a number of useful functions.</p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Just now</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">Fitbit Sense Advanced Smartwatch ...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">This is an exceptional smartwatch, featuring a wealth of useful functions at an affordable price. The watch is small ...<a href='#!'>See more</a></p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Dec 9, 2:28PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">HORI Racing Wheel Apex for PlaySt...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">This steering wheel is a great buy! It works well and feels good, however I wish it had a wider diameter like a real ...<a href='#!'>See more</a></p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Dec 4, 12:56 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surro...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">My son says these are the greatest he's ever tasted.</p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Nov 28, 7:28 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">iPhone 13 pro max-Pacific Blue-12...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">I chose wisely. The phone is in excellent condition, with no scratches or dents, excellent battery life, and flawless...<a href='#!'>See more</a></p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Nov 24, 10:16 AM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/25...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">It's lovely, works right out of the box (as you'd expect from an Apple device), and has a number of useful functions.</p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Just now</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">Apple iMac 24&quot; 4K Retina Display ...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpas...<a href='#!'>See more</a></p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Nov 09, 3:23 AM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">PlayStation 5 DualSense Wireless ...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">My son says these are the greatest he's ever tasted.</p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Success</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Nov 08, 8:53 AM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Nov 07, 9:00 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product white-space-nowrap"><a class="fw-semibold" href="../landing/product-details.html">Amazon Basics Matte Black Wired K...</a></td>
                          <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                          <td class="align-middle review" style="min-width:350px;">
                            <p class="fw-semibold text-body-highlight mb-0">I chose wisely. The phone is in excellent condition, with no scratches or dents, excellent battery life, and flawless...<a href='#!'>See more</a></p>
                          </td>
                          <td class="align-middle text-end status"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="alert-octagon" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-body-tertiary mb-0">Nov 07, 11:20 AM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
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
                </div> -->
              </div>
            </div>
          </div>
        </div>


<script>
function loadNotes(userId) {
  console.log(userId)
  fetch("retrieve_notefetch.php?id=" + userId)
    .then(response => response.json())
    .then(notes => {
      let container = document.getElementById("notes-container");
      container.innerHTML = ""; // clear old notes

      if (notes.length === 0) {
        container.innerHTML = "<p>No notes found.</p>";
        return;
      }

      for (let note of notes) {  
        container.innerHTML += `
          <div class="fs-9 fw-semibold pb-4 mb-4 border-bottom border-dashed">
            <p class="text-body-highlight mb-1">${note.note}</p>
            <div class="text-end">
              <p class="text-body-tertiary text-opacity-85 mb-0">${note.created_at}</p>
              <span class="delete-note" data-id="${note.id}" style="cursor:pointer;">
                <i class="fa fa-trash text-danger ms-2"></i>
              </span>
            </div>
          </div>
        `;
      }
    })
    .catch(err => {
      console.error("Error loading notes:", err);
    });
}

// Example: call with a userId (replace with actual)
let container = document.getElementById("notes-container");
let userId = container.dataset.userid;   // <-- here
loadNotes(userId);
</script>



<script>
document.getElementById("noteForm").addEventListener("submit", function(e) {
  e.preventDefault();

  let formData = new FormData(this);
// Loop through all key/value pairs
for (let [key, value] of formData.entries()) {
  console.log(key, value);
}
  fetch("add_notefetch.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text()) // you can use .json() if backend returns JSON 
  .then(data => {
    // Show success message
    alert("Note added successfully!");

    // Optionally append note to the list without reloading
    document.getElementById("notesList").innerHTML = data + document.getElementById("notesList").innerHTML;

    // Clear textarea
    document.getElementById("note").value = "";
  })
  .catch(err => console.error("Error:", err));
});
</script>

<!-- <script>
document.querySelectorAll(".delete-note").forEach(btn => {
  btn.addEventListener("click", function() {
    let noteId = this.getAttribute("data-id");
    console.log(noteId);

    if (confirm("Are you sure you want to delete this note?")) {
      fetch("delete_note.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "id=" + encodeURIComponent(noteId)
      })
      .then(res => res.text())
      .then(data => {
        if (data.trim() === "success") {
          // Remove note from DOM
          document.getElementById("note-" + noteId).remove();
        } else {
          alert("Failed to delete note: " + data);
        }
      })
      .catch(err => console.error("Error:", err));
    }
  });
});
</script> -->
<script>
// document.querySelectorAll(".delete-note").forEach(btn => {
//   btn.addEventListener("click", function() {
//     let noteId = this.getAttribute("data-id");

//     if (confirm("Are you sure you want to delete this note?")) {
//       fetch("delete_note.php", {
//         method: "POST",
//         headers: {
//           "Content-Type": "application/x-www-form-urlencoded"
//         },
//         body: "id=" + encodeURIComponent(noteId)
//       })
//       .then(res => res.text())
//       .then(data => {
//         if (data.trim() === "success") {
//           // ✅ Immediately remove the note card from DOM
//           let noteElement = document.getElementById("note-" + noteId);
//           if (noteElement) {
//             noteElement.remove();
//           }
//         } else {
//           alert("Failed to delete note: " + data);
//         }
//       })
//       .catch(err => console.error("Error:", err));
//     }
//   });
// });
document.addEventListener("click", function(e) {
  if (e.target.closest(".delete-note")) {
    let noteId = e.target.closest(".delete-note").dataset.id;

    if (confirm("Are you sure you want to delete this note?")) {
      fetch("delete_note.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "id=" + noteId
      })
      .then(res => res.text())
      .then(result => {
        if (result === "success") {
          e.target.closest(".fs-9").remove(); // remove note div from DOM
        } else {
          alert("Failed to delete note.");
        }
      })
      .catch(err => console.error("Error deleting note:", err));
    }
  }
});


</script>
<?php include 'footer.php'; ?>
      </div>