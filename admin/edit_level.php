<?php include "inc/header.php" ; ?>
        <!-- end navbar top -->

        <!-- navbar side -->
<?php include "inc/sidebar.php" ; ?> 
        <!-- end navbar side -->
        <!--  page-wrapper -->
          

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

  if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    $updateLevel = $adedit->levelUpdate($_POST, $_FILES, $id);
  }
?>

<div id="page-wrapper">
           
                <!--end page header -->
           
                                    <br>
                                    <h1>Update Level</h1>
                                    <?php
                                    if (isset($updateLevel)) {
                                      echo $updateLevel;
                                    }
                                    ?>
                                    <h3></h3>
                            <div class="row">
                                    <div class="col-md-6">
                                       <?php
                $editLevel = $adedit->editLevel($id);
                if($editLevel){
                    while($data = $editLevel->fetch_assoc()){
                        
                  
            ?>
                                    <form action="" method="post" enctype="multipart/form-data" >
                                        

                                        <div class="form-group row">
                                           <label class="col-md-3 col-form-label">Level Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="levelName" value=<?php echo $data['levelName'] ;?> >
                                        </div>
                                        </div>

                                        <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-3 col-form-label">Select Image:</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file" id="">
                                    </div>
                                    <div>
                                    <img src="<?php echo $data['image']?>" height="auto" width="30%">
                                    </div>
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
      
                    </div>
                  <?php include "inc/footer.php" ; ?>