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
       
          <div id="products" data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
   
            </div>
            
          <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":10,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
           <div class="table-responsive mx-n4  mx-lg-n6  bg-body-emphasis border-top border-bottom border-translucent position-relative mt-3">
               <table class="table table-hover table-striped table-bordered table-large align-middle text-center shadow-lg rounded-3 overflow-hidden fs-9 mb-0">
                  <thead class="table-primary text-dark">
                    
                    <tr>
    <th class="sort border-top border-translucent ps-3" data-sort="name">Sno</th>
                                <th class="sort border-top" data-sort="email">Customer name</th>
                                <th class="sort border-top" data-sort="age">Email</th>
                                   <th class="sort border-top" data-sort="age">Mobile</th>
                                    <th class="sort border-top" data-sort="age">Orders</th>
                                        <th class="sort border-top" data-sort="age">Total Spent</th>
                                         <th class="sort border-top" data-sort="age">City</th>
                                           <th class="sort border-top" data-sort="age">Last Order</th>     
                                            <th class="sort border-top" data-sort="age">Actions</th>              
                      
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
      
 <td> $count</td>
          <td>
            <a class='d-flex align-items-center' href='customer_details?id=".$row['id']."'>
              <p class='mb-0 ms-5 text-uppercase fw-bold'>".$row['name']."</p>
            </a>
          </td>
          

<td>".$row['email']."</td>
<td>".$row['mobile']."</td>
<td>".$row['orders']."</td>
<td>".$row['Total_spend']."</td>
<td>".$row['city']."</td>
<td>".$row['last_order']."</td>
     
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
         <?php include 'footer.php'; ?>
</div>
