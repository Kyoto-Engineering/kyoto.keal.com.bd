<?php include "../classes/adminEdit.php"; ?>
<?php
 $adedit = new Adminedit();
$getl = $adedit->getadminlevelby($adminId);
if ($getl) {
    while($data = $getl->fetch_assoc()){
       $role = $data['level'];
    }
}
?>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div> <strong>Admin</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <!--  <li class="sidebar-search"> -->
                        <!-- search section-->
                       <!--  <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div> -->
                        <!--end search section-->
                   <!--  </li>  -->
                    <li class="selected">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
<?php 
if($role == "0"){?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Insert Panel<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="insert_topic.php"><?php echo $role; ?></a>
                            </li>
                            <li>
                                <a href="insert_topic.php">Insert Topic</a>
                            </li>
                            <li>
                                <a href="insert_coursecontent.php">Insert courses</a>
                            </li>
                            <li>
                                <a href="insert_level.php">Insert Level</a>
                            </li>
                             <li>
                                <a href="assign.php">Assign Program</a>
                            </li>
                            <li>
                                <a href="assignby.php">Assign Program by Level</a>
                            </li>
                            <li>
                                <a href="assign_content.php">Assign Course Content</a>
                            </li>
                            <li>
                                <a href="assign_price.php">Assign Price & Duration</a>
                            </li>
                            <li>
                                <a href="create_batch.php">Create Batch</a>
                            </li>
                             <li>
                                <a href="create_location.php">Create Location</a>
                            </li>
                            <li>
                                <a href="create_trainer.php">Create Trainer</a>
                            </li>
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    
<?php } ?>
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>View Panel<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="signup_list.php">Sign Up List</a>
                            </li>
                              <li>
                                <a href="coursename.php">View Course Name</a>
                            </li>

                             <li>
                                <a href="view_assign_level.php">View Assign Program</a>
                            </li> 
                            <li>
                                <a href="view_assign_levelby.php">View Assign Program by Level</a>
                            </li>   
                            <li>
                                <a href="view_price.php">View Price & Duration</a>
                            </li>                        
                                                          
                        </ul>
                        <!-- second-level-items -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Admission Status<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="admission_status.php">See Admission Status</a>
                            </li>
                                                    
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>