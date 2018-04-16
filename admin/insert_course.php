<?php include "inc/header.php" ; ?>
        <!-- end navbar top -->

        <!-- navbar side -->
<?php include "inc/sidebar.php" ; ?> 
        <!-- end navbar side -->
        <!--  page-wrapper -->
          

<?php include "../classes/adminview.php"; ?>


<?php
	 $add = new Adminview();

	if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
		$addcourse = $add->courseInsert($_POST, $_FILES);
	}
?>
<div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br>
                                    <h1>Insert Course</h1>
                                    <?php
                                    if (isset($addcourse)) {
                                    	echo $addcourse;
                                    }
                                    ?>
                                    <h3></h3>
                                    <form class="col-md-8" action="" method="post" enctype="multipart/form-data" >
                                        

                                        <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Course Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" placeholder="Enter Course Name" >
                                        </div>
                                        </div>

                                    



                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Course Fee</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="price" placeholder="Enter Class Time">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Quote</label>
                                            <div class="col-md-9">
                                      <input type="text" class="form-control" name="quote" placeholder="Enter Quote Name">
                                            </div>
                                           
                                        </div>




                                        <div class="form-group row">
									<label for="inputEmail3" class="col-md-3 col-form-label">Select Image:</label>
									<div class="col-md-9">
										<input type="file" name="image" class="form-control-file" id="">
									</div>
								    </div>
								     <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Status</label>
                                            <div class="col-md-9">
								    <input type="radio" name="status" value="Admission Going On"> Adminssion Going On<br>
                                    <input type="radio" name="status" value="No Admission Available Right Now"> No Admission Available Right Now<br>
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
                  <?php include "inc/footer.php" ; ?>