<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include '../classes/admin_assign.php' ?>
<?php include '../classes/adminEdit.php' ?>

<?php
    if(isset($_GET['id']) && !empty($_GET['id']) ){
        $id = $_GET['id'];
        
      }

?>

<?php
    $adedit = new Adminedit();
    $assign = new Adminassign();
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])){

        $adminassign = $adedit->updateAssignLevel($_POST, $id);

    }


?>
        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
        <br/>
        <h1 >Assign Level</h1>
        <br/>
        <h3><?php
         if(isset($adminassign)){
       echo $adminassign;
            }
        ?></h3>

<div class="container">
<form action="" method="post">
<?php
 $viewassign = $adedit->viewassigncourselevel($id);
         if ($viewassign) {
        
      while ($value = $viewassign->fetch_assoc()) {
?>
<div class="row">
<div class="col-md-6">
            

            
            <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Course Name</label>
           
                <select name="c_Id" class="form-control">
                
                <option>Select Your Option</option>

                    
 <?php
        
        $Course = $assign->viewCourse();
         if ($Course) {
        
      while ($data = $Course->fetch_assoc()) {
        

             ?>


                 <option
                   <?php 
                                    if ($value['c_Id'] == $data['id']) {?>
                                        selected = "selected";
                                 <?php } ?>



                  value="<?php echo $data['id'] ?>"><?php echo $data['courseName'] ?>
                   
                     </option>
                     <?php } } ?>
                </select>
                
            </div>
            
          

          



  








           
            <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Level Name</label>
                <select name="l_Id" class="form-control">



                <option>Select Your Level</option>



                <?php
        
        $Level = $assign->viewlevel();
         if ($Level) {
        
      while ($data = $Level->fetch_assoc()) {
        

             ?>
                    <option 
                     <?php 
                                    if ($value['l_Id'] == $data['id']) {?>
                                        selected = "selected";
                                 <?php } ?>

                    value="<?php echo $data['id'] ?>"><?php echo $data['levelName'] ?></option> <?php } }  ?>
                    
                </select>
            </div>
          

            
</div>


  
 
</div> 
<?php } } ?>














<div class="form-group row">

  <div class="col-md-3">
      <button type="submit" class="submit" name="submit" id="submit"><h4>Submit</h4></button>
         </div>
         </div>
         </form>
          </div>




        </div>
        <!-- end page-wrapper -->

    
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>
   


