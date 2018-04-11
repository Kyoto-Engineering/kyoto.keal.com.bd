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
           
                                    <br>
                                    <h1>Input Groups</h1>
                                    <h3><?php
                                    if(isset($adnotice)){
                                        echo $adnotice;
                                    }

                                    ?></h3>
                                    <form class="col-md-8" action="" method="post" >
                                    <form class="col-md-8" >
                                        <div class="form-group input-group">
                                            <label>Notice</label>
                                                <textarea name="notice" class="form-control"  id="" cols="30" rows="5" placeholder="Enter Notice"></textarea>
                                        </div>
                                        <div class="form-group input-group">
                                            <label>Date</label>
                                                <input type="date" class="form-control" name="pdate" placeholder="Posted Date" >
                                        </div>



                                        <div class="form-group input-group">
                                            <label>Posted by</label>
                                            <input type="text" name="postedby"class="form-control" placeholder="Enter Posted by">
                                        </div>
                                        <button type="submit" class="submit" name="submit" id="submit"><h4>Submit</h4></button>
                                        
                                    </form>
                                
                          
                       
                  
                     <!-- End Form Elements -->
               
         
        
        <!-- end page-wrapper -->


    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
<? php include "inc/footer.php" ; ?>