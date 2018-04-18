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
		$addlevel = $add->levelInsert($_POST, $_FILES);
	}
?>
<?php
    if (isset($_GET['delpro'])) {
        $id = $_GET['delpro'];
    $deletePro = $add->delproByid($id);
    }
?>
<div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br>
                                    <h1>Insert Course</h1>
                                    <?php
                                    if (isset($addlevel)) {
                                    	echo $addlevel;
                                    }
                                    ?>
                                    <h3></h3>
                            <div class="row">
                                    <div class="col-md-6">
                                    <form action="" method="post" enctype="multipart/form-data" >
                                        

                                        <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Level Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="levelName" placeholder="Enter Level Name" >
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Select Image:</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file" id="">
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
      <th scope="col">Level Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $level = $add->getlevelName();
  if ($level) {
    $i = 0;
      while ($data = $level->fetch_assoc()) {
        $i++;
        ?>

    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $data['levelName']?></td>
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
                  <?php include "inc/footer.php" ; ?>