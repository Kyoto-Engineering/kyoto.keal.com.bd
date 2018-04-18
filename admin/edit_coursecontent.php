<?php include "inc/header.php" ; ?>
        <!-- end navbar top -->

        <!-- navbar side -->
<?php include "inc/sidebar.php" ; ?> 
        <!-- end navbar side -->
        <!--  page-wrapper -->
          

<?php include "../classes/adminview.php"; ?>
 <?php
               if(!isset($_GET['id']) || $_GET['id']==NUll){
                echo "<script>window.location = 'index.php';</script>";
              }else{
                $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
              }
              ?>

<?php
	 $add = new Adminview();

	if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
		$updatecourse = $add->coursecontentUpdate($_POST, $_FILES , $id);
	}
?>
<div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br>
                                    <h1>Insert Course</h1>
                                    <?php
                                    if (isset($updatecourse)) {
                                    	echo $updatecourse;
                                    }
                                    ?>
                                    <h3></h3>
             <?php
                $editcourse = $add->editcoursecontent($id);
                if($editcourse){
                    while($data = $editcourse->fetch_assoc()){
                        
                  
            ?>
                                    <form class="col-md-8" action="" method="post" enctype="multipart/form-data" >
                                         

                                        <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Course Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="courseName" value ="<?php echo $data['courseName']?>"  >
                                        </div>
                                        </div>

                                    




                                        

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Quote</label>
                                            <div class="col-md-9">
                                      <input type="text" class="form-control" name="quote"  value ="<?php echo $data['quote']?>">
                                            </div>
                                           
                                        </div>

                                         <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Select Image:</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image"  class="form-control-file" id="">
                                    </div>
                                    <div>
                                    <img src="<?php echo $data['image']?>" height="auto" width="30%">
                                    </div>

                                  
                                        <div class="form-group row">
                                             <div class="col-md-3"></div>
                                             <div class="col-md-9">
                                            <button type="submit" class="submit" name="submit" id="submit"><h4>Submit</h4></button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <?php } } ?>
                                
                          
                       </div>
                  <?php include "inc/footer.php" ; ?>