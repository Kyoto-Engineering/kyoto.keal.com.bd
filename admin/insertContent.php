<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include '../classes/adminEdit.php' ?>
<?php include '../classes/admin_assign.php' ?>
<?php
    if(isset($_GET['lId']) && !empty($_GET['lId']) AND isset($_GET['cId']) && !empty($_GET['cId'])){
        $lId = $_GET['lId'];
        $cId = $_GET['cId'];
      }

?>
<?php
    $adedit = new Adminedit();
    $assign = new Adminassign();
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){

        $content = $adedit->adminassigncontent($_POST, $lId, $cId);

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
         if(isset($content)){
       echo $content;
            }
        ?></h3>
<div class="container">
<form action="" method="post">

<div class="row">
<div class="col-md-5">
            
            <div class="form-group row">
          
            <label class="col-md-5 col-form-label">Content Name</label>
                <select name="t_Id" class="form-control">
                    <option value="">Select Your Content</option>
                     <?php
        
        $content = $assign->viewcontent();
         if ($content) {
        
      while ($data = $content->fetch_assoc()) {
        

             ?>
                    <option value="<?php echo $data['id']?>"><?php echo $data['topicName'] ?></option>
                    <?php } } ?>
                   
                </select>
            </div>
          

          
    </div>

 </div> 

<div class="form-group row">

  <div class="col-md-3">
      <button type="submit" class="submit" name="submit" id="submit"><h4>Submit</h4></button>
         </div>
          </div>
</form>
</div>
        <!-- end page-wrapper -->

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>
   


