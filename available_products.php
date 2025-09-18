<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'top_navbar.php'; ?>

<div class="content">
      
        <div class="mb-9">
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0"> Available Products</h2>
            </div>
          </div>
      
          <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="d-flex flex-wrap gap-3">
                <div class="search-box">
                  <form class="position-relative"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
                
             
            </div>
             <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":10,"pagination":{"innerWindow":2,"left":1,"right":1}}'>
  <div class="table-responsive mx-n4  mx-lg-n6  bg-body-emphasis border-top border-bottom border-translucent position-relative mt-3">
  <table class="table table-hover table-striped table-bordered table-large align-middle text-center shadow-lg rounded-3 overflow-hidden fs-9 mb-0">
  <thead class="table-primary text-dark">
    <tr>
      <th class="sort border-top" data-sort="name">S no.</th>
       <th class="sort border-top border-translucent ps-3" data-sort="name">Images</th>
      <th class="sort border-top border-translucent ps-3" data-sort="name">Product Name</th>

    <th class="sort border-top" data-sort="email">Price (Rs)</th>
       <th class="sort border-top" data-sort="email">Discount (%)</th>
        <th class="sort border-top" data-sort="email">Offer Price (Rs)</th>
          <th class="sort border-top" data-sort="email">Description</th>
      <th class="sort border-top" data-sort="name">Category</th>
       <th class="sort border-top" data-sort="age">Sub-Category</th>
      <th class="sort border-top" data-sort="payment status">Published on</th>
     
    </tr>
  </thead>
  <tbody class="list">
    <?php
      $sql = "SELECT * FROM all_products ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);
      $count = 0;
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              $count++;
               $imagePath = "../admin2/" .$row['file'];
    ?>
<tr >
  <td class="fw-bold"><?php echo $count ?></td>
  
     <td><img src="<?php echo $imagePath; ?>" alt="Image" style="width: 50px; height: 50px; object-fit: cover;"></td>
  <td class="ps-3 text-uppercase fw-semibold"><?php echo $row['product'] ?></td>

  <td><?php echo $row['price'] ?></td>
  <td>
  <?php echo $row["discount_percentage"] ?>
  </td>
  <td>
    <span class=" text-dark fw-bold"><?php echo $row["offer_price"] ?></span>
  </td>
    <td class=" fw-semibold"><?php echo $row['description'] ?></td>
  <td>
    <span class="  text-dark"><?php echo $row["c_id"] ?></span>
  </td>
  <td class="text-muted"><?php echo $row["s_id"] ?>
</td>
 <td ><?php echo $row["created_at"] ?>
</td>
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

       
            
            </div>
          </div>
        </div>
      </div>