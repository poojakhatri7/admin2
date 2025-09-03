    <?php include 'db_connection.php'; ?>
  <?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
  <?php include 'top_navbar.php'; ?>
     <div class="content">
                      <div id="tableExample3" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="search-box mb-3 mx-auto">
                          <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                          </form>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped fs-8 mb-2">
                            <thead>
                              <tr>
                                <th class="sort border-top border-translucent ps-3" data-sort="name">Sno</th>
                                <th class="sort border-top" data-sort="email">Name</th>
                                <th class="sort border-top" data-sort="age">Email</th>
                                   <th class="sort border-top" data-sort="age">Mobile</th>
                                    <th class="sort border-top" data-sort="age">Message</th>
                                        <th class="sort border-top" data-sort="age">Date and Time</th>
                                         <th class="sort border-top" data-sort="age">Status</th>
                                             <th class="sort border-top" data-sort="age">Action</th>
                                         
                             
                              </tr>
                            </thead>
                            <tbody class="list">
                      <?php
$sql = "SELECT * FROM enquiry_message where status ='Completed' order BY id DESC";
$result = mysqli_query($conn, $sql);
$count = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        ?>
        <tr>
            <th scope='row'><?php echo $count; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['message']; ?></td>
          
  <td><?php echo date("d-m-Y h:i", strtotime($row['created_at'])); ?></td>
 <td id="status-text-<?php echo $row['id']; ?>"><?php echo $row['status']; ?></td>
        <td> 

  <div style="display: inline-block;">
        <a href='delete_data?id=<?php echo $row["id"]; ?>&table=enquiry_message'
         onclick="return confirm('Are you sure you want to delete this?')">
            
            <i class='fa fa-trash' style='color: red;'></i> <!-- Trash icon -->
        </a>
    </div>
</td> 

        </tr>
        <?php
    }
} 
 else {
    echo "No Enquiry message found";
}
?>
                       
                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block" data-list-info="data-list-info"> Showing 0 entries <span class="text-body-tertiary"></span></span>
                          <div class="d-flex"><button class="page-link" data-list-pagination="prev"><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                            <ul class="mb-0 pagination"><li><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li><li><button class="page" type="button" data-i="4" data-page="5">4</button></li><li class="disabled"><button class="page" type="button">...</button></li></ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                          </div>
                        </div>
                      </div>
                            </div>
                              </div>
                   
  