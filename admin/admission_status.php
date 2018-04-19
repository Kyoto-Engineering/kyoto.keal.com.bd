<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include "../classes/adminEdit.php"; ?>
<?php
     $adedit = new Adminedit();
?>

        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h2 class="page-header">Course Admission Status</h2>
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
      <th scope="col"> Admission Status</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $Course = $adedit->getcourseLevel();
  if ($Course) {
    $i = 0;
      while ($data = $Course->fetch_assoc()) {
        $i++;
        ?>

    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $data['courseName']?></td>
      <td><?php echo $data['levelName']?></td>
      <td><a href="see_admission_status.php?id=<?php echo $data['id'] ; ?>"><button type="button" name="button">See Admission Status</button></a></td>

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