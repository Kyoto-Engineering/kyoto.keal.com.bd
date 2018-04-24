<?php include "inc/header.php" ; ?>
        <!-- end navbar top -->
<?php include "../classes/adminview.php";?>

        <!-- navbar side -->
   <?php include "inc/sidebar.php" ; ?>
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Student Signup List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Course Name</th>
                                            <th>Date of Birth</th>
                                            <th>gender</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
          $adview = new Adminview();
          $getlist = $adview->getAllSignupList();
          if ($getlist) {
            while ($data = $getlist->fetch_assoc()) {
          ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['studentName'] ; ?></td>
                                            <td><?php echo $data['email'] ; ?></td>
                                            <td><?php echo $data['phone'] ; ?></td>
                                             
         
          
                                            <td><?php echo $data['courseName'] ; ?></td>
                                  
                                            <td><?php echo $data['dob'] ; ?></td>
                                            <td><?php echo $data['gender'] ; ?></td>
                                            <td><?php echo $data['level'] ; ?></td>
                                        </tr>
                                        <?php } } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
   <?php Include "inc/footer.php" ; ?>

