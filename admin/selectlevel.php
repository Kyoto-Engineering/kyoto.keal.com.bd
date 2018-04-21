<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include '../classes/admin_assign.php' ?>
 <?php
               if(!isset($_GET['cId']) || $_GET['cId']==NUll){
                echo "<script>window.location = 'index.php';</script>";
              }else{
                $cId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['cId']);
              }
              ?>
<?php
    $assign = new Adminassign();
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){
          $lId = $_POST['l_Id'];
        //$content = $assign->adminassigncontent($_POST);

    }


?>
        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
        <br/>
        <h1 >Assign Content</h1>
        <br/>
        <h3><?php
       //   if(isset($content)){
       // echo $content;
            //}
        ?></h3>
<div class="container">
<form action="" method="post">

<div class="row">
<div class="col-md-5">
            
            <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Level Name</label>
                <select name="l_Id" class="form-control">
                    <option value="">Select your Level</option>
                    <?php
        
        $level = $assign->viewlevel();
         if ($level) {
        
      while ($data = $level->fetch_assoc()) {?>

                    <option value="<?php echo $data['id']?>"><?php echo $data['levelName'] ?></option>
                    <?php } }  ?>
                    
                </select>
            </div>
         
  </div> 
</div> 



<div class="form-group row">

  <div class="col-md-3">
  <a href="content_level.php?level=<?php echo urlencode($lId);?>;&amp;cId=<?php echo urlencode($cId);?>">
      <button type="submit" class="submit" name="submit" id="submit"><h4>Go For Content</h4></button></a>
         </div>
          </div>
</form>
</div>
        <!-- end page-wrapper -->

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>
   


