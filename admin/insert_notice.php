<?php include "inc/header.php" ; ?>
        <!-- end navbar top -->

        <!-- navbar side -->
<?php include "inc/sidebar.php" ; ?> 
        <!-- end navbar side -->
        <!--  page-wrapper -->
          
<?php include "../classes/adminview.php"; ?>

<?php
    $add = new Adminview();
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){

        $adnotice = $add->adnotice($_POST);

    }


?>









          <div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br/>
                                    <h1>Input Groups</h1>
                                    <h3><?php
                                    if(isset($adnotice)){
                                        echo $adnotice;
                                    }

                                    ?></h3>










                                    <div class="row">
                    
                       
                            <form action="" method="post" class="col-lg-8">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Notice</label>
                                    <div class="col-md-9">
                                        <textarea name="notice" class="form-control" id="" cols="30" rows="5" placeholder="Enter Notice"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Date</label>
                                    <div class="col-md-9">
                                     <input type="date" name="pdate" class="form-control" placeholder="Enter posted date">
                                    </div>
                                </div>
                                

                                <div class="form-group row">
                                    <label  class="col-md-3 col-form-label">Posted by</label>
                                    <div class="col-md-9">
                                        <input type="text" name="postedby" class="form-control" placeholder="Enter Posted by">
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
<? php include "inc/footer.php" ; ?>