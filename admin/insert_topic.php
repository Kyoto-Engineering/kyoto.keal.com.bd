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
		$addtopic = $add->InsertTopic($_POST);
	}
?>
<?php
    if (isset($_GET['delpro'])) {
        $id = $_GET['delpro'];
        $deletePro = $add->deltopic($id);
    }
?>
<div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br>
                                    <h1>Insert Topic</h1>
                                    <?php
                                    if (isset($addtopic)) {
                                    	echo $addtopic;
                                    }
                                    ?>
                                    <h3></h3>
                    <div class="row">
                    <div class="col-md-6">
                                    <form action="" method="post" enctype="multipart/form-data" >
                                        

                                        <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Topic Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="topicName" placeholder="Enter Topic Name" /> 
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
                              <div class="col-md-6">
                              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course COntent</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $content = $add->getContent();
  if ($content) {
    $i = 0;
      while ($data = $content->fetch_assoc()) {
        $i++;
        ?>

    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $data['topicName']?></td>
      <td><a href="#">
          <span><img src="../img/img_386644.png" height="auto" width="15px"></span>
        </a> ||<a style="text-decoration: none;" onclick="return confirm('Are you Sure Want to Delete!')" 
                    href="?delpro=<?php echo $data['id'];?>">
          <span><span><img src="../img/627249-delete3-512.png" height="auto" width="15px"></span></span>
        </a></td>

    </tr>
<?php } } ?>
  </tbody>
</table>
                              </div>
 
                          </div>      
                          
                       </div>
                  <?php include "inc/footer.php" ; ?>