<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include "../classes/adminEdit.php"; ?>
<?php
     $adedit = new Adminedit();
   
?>
<?php
    if (isset($_GET['did'])) {
        $did = $_GET['did'];
    $deletePro = $adedit->delpriceduration($did);
    }
?>

        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h2 class="page-header">View Assign Level</h2>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Level Name</th>
      <th scope="col">Price</th>
      <th scope="col">Duration</th>
     
      
    </tr>
  </thead>
  <tbody>
  <?php
  $Course = $adedit->getPriceDuration();
  if ($Course) {
    $i = 0;
      while ($data = $Course->fetch_assoc()) {
        $i++;
        ?>

    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $data['courseName']?></td>
      <td><?php echo $data['levelName']?></td>
      <td><?php echo $data['price']?></td>
      <td><?php echo $data['duration']?></td>
       <td><a href="edit_price.php?id=<?php echo $data['id']?>">
          <span><img src="../img/img_386644.png" height="auto" width="15px"></span>
        </a> ||<a onclick="return confirm('Are you Sure Want to Delete!')" href="?did=<?php echo $data['id'] ?>">
          <span><span><img src="../img/627249-delete3-512.png" height="auto" width="15px"></span></span>
        </a></td>
      

    </tr>
<?php } } ?>
  </tbody>
</table>
                </div>
                <!--End Page Header -->
            </div>

            

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>