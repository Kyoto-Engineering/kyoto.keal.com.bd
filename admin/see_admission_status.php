<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include "../classes/adminEdit.php"; ?>

<?php
               if(!isset($_GET['id']) || $_GET['id']==NUll){
                echo "<script>window.location = 'index.php';</script>";
              }else{
                $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
              }
              ?>
<?php
     $adedit = new Adminedit();
      if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['open'])) {
      $addstatus = $adedit->admissionStatusopen($_POST, $id);
  }
?>
<?php

      if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['closed'])) {
      $addedited = $adedit->admissionStatusclosed($_POST, $id);
  }
?>
        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h2 class="page-header">Course Admission Status</h2>
                    <?php
                      if (isset($addstatus)) {
                        echo $addstatus;
                      }
                    ?>
                    <?php
                      if (isset($addedited)) {
                        echo $addedited;
                      }
                    ?>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <!-- Page Header -->
                <div class="col-md-8">
                <div class="thumbnail" style="border: 1px solid #adb4c2;margin: 0 auto;box-shadow: 1px 1px 0px;">
                <?php
                $Course = $adedit->getcourseLevelBy($id);
               if ($Course) {
              
                 while ($data = $Course->fetch_assoc()) {?> 
            <tr>
               <h4 style="margin:10px;">
               <td> Course Name: </td> 
               <td><?php echo $data['courseName'] ;?> </td></h4>
               </tr>
               <tr>
                <h4 style="margin:10px;">
                <td>Level Name:  </td>
                <td><?php echo $data['levelName'] ;?></td>
                </h4>
                </tr>
                <tr>
               
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 20px;">Admission Status:</label></td>  
                 <td>
                 <form action="" method="post">
                    <input type="hidden" name="status" value="1">
                    <button type="submit" name="open" >Admission Going On</button>
                 </form>
                 </td>
                 <td>
                <form action="" method="post">
                   <input type="hidden" name="status" value="0">
                   <button type="submit" name="closed">Admission Closed</button>    
                </form>
                 </td>
                
                    
                 </tr>


                <?php  } } ?>
                </div>
     
                </div>
                <!--End Page Header -->
            </div>

            

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>