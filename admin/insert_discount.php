<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include '../classes/admin_discount.php' ?>


<?php 
  $dateTime = date_default_timezone_set('Asia/Dhaka');
  $serverIP = $_SERVER["REMOTE_ADDR"];
  $timestamp = time();
  $date = date("Y-m-d");
  $day = date("(D)");
  $time = date("H:i:s",$timestamp);
  $month = date('M');
?>
<?php 

    $insertdiscount = new Adminassign();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){


        $insertdis = $insertdiscount->insertdiscount($_POST,$serverIP,$date,$time);
    }



?>


        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
        <br/>
        <h1 >Insert Discount</h1>
        <br/>
     <?php
      if(isset($insertdis)){
        echo  $insertdis;
     }
     ?>
<div class="container">
<form action="" method="post">
<div class="row">
<div class="col-md-5">
            
           <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Course Name</label>
           
                <select name="c_Id" class="form-control">
                
                <option>Select Your Option</option>

                    
 <?php
        
        $Course = $insertdiscount->viewCourse();
         if ($Course) {
        
      while ($data = $Course->fetch_assoc()) {
        

             ?>


                 <option value="<?php echo $data['id'] ?>"><?php echo $data['courseName'] ?>
                   
                     </option>
                     <?php } } ?>
                </select>
                
            </div>
            
          

          

          
       
</div>
</div>
<div class="row">
<div class="col-md-5">
   <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Level Name</label>
                <select name="l_Id" class="form-control">



                <option>Select Your Level</option>



                <?php
        
        $Level = $insertdiscount->viewlevel();
         if ($Level) {
        
      while ($data = $Level->fetch_assoc()) {
        

             ?>
                    <option value="<?php echo $data['id'] ?>"><?php echo $data['levelName'] ?></option> <?php } }  ?>
                    
                </select>
            </div>
            </div>
            </div>
   
<div class="row">
<div class="col-md-5">
            
            <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Expire date</label>
                <input type="date" name="edate"/>
            </div>
         
  </div> 
</div>

<div class="row">
<div class="col-md-5">
            
            <div class="form-group row">
          
            <label class="col-md-3 col-form-label">Discount value</label>
                <input type="text" name="discount" />
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

    <!-- end wrapper --        

            
</div>


  
 
>

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>
   


