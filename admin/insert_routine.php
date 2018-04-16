<?php include "inc/header.php" ; ?>
        <!-- end navbar top -->

        <!-- navbar side -->
<?php include "inc/sidebar.php" ; ?> 
        <!-- end navbar side -->
        <!--  page-wrapper -->
          

<?php include "../classes/adminview.php"; ?>

<?php
    $ad = new Adminview();
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){

        $adroutine = $ad->adroutine($_POST);

    }


?>






          <div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br>
                                    <h1>Input Routine</h1>
                                    <h3><?php
                                    if(isset($adroutine)){
                                        echo $adroutine;
                                    }

                                    ?></h3>
                                    <form class="col-md-8" action="" method="post" >
                                        <div class="form-group row">
                                         <label class="col-md-3 col-form-label">Topic</label>
                                         <div class="col-md-9">
                                                <textarea name="topic" class="form-control" id="" cols="30" rows="5" placeholder="Enter Topic name"></textarea>
                                                </div>
                                                </div>

                                        <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Day</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="day" placeholder="Enter Day" >
                                        </div>
                                        </div>

                                    



                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Time</label>
                                            <div class="col-md-9">
                                            <input type="time" class="form-control" name="ctime" placeholder="Enter Class Time">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Venue</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="venue" placeholder="Enter venue name">
                                            </div>
                                           
                                        </div>




                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Course</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="course" placeholder="Enter Course name">
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                             <div class="col-md-3"></div>
                                             <div class="col-md-9">
                                            <button type="submit" class="submit" name="submit" id="submit"><h4>Submit</h4></button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                
                          
                       </div>
                  
                     <!-- End Form Elements -->
               
         
        
        <!-- end page-wrapper -->


    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
<?php include "inc/footer.php" ; ?>