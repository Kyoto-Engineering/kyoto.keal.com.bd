<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php";?>
<?php
     //  if (!isset($_GET['level']) || $_GET['level'] == NULL ) {
     // //    echo "<script>window.location = 'courses.php'</script>";
     //    }else{
     //      $level = $_GET['level'];
     //   }

?>
<?php
    if(isset($_GET['level']) && !empty($_GET['level']) AND isset($_GET['cId']) && !empty($_GET['cId'])){
        $level = $_GET['level'];
        $cId = $_GET['cId'];
      }

?>
<?php
     // if(isset($_GET['level']) && !empty($_GET['level']) AND isset($_GET['uId']) && !empty($_GET['uId'])){
     //    $level = $_GET['level'];
     //    $uId = $_GET['uId'];
     //   }

?> 

<?php 
  $dateTime = date_default_timezone_set('Asia/Dhaka');
  $serverIP = $_SERVER["REMOTE_ADDR"];
  $timestamp = time();
  $date = date("Y-m-d");
  $day = date("(D)");
  $time = date("H:i:s",$timestamp);
  $month = date('M');
?>
<body>
<?php 
    $mod = new Module();
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['enroll'])) {
       $enrolled = $mod->getEnrolled($level,$cId,$uId,$date,$time,$serverIP);
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">

            </div>
            <div class="enrollwrap" style="{
">
                <p class="form-title">
                    You'r Going To Enroll For</p>
                    <?php 
                        $getC = $mod->getCoursePriceDetail($cId, $level);
                        if ($getC) {
                            while($data = $getC->fetch_assoc()){?>
                <form action="" method="post" class="login">
        

                <p>Course Name : <?php echo $data['courseName']?></p>
                 <?php } } ?>


                     <?php 
                        $getp = $mod->getprices($cId);
                        if ($getp) {
                            while($value = $getp->fetch_assoc()){?>               
                <p>Duration    : <?php echo $value['duration']?></p>
                <p>Course Fee  : BDT <?php echo $value['price']?></p>
                        <?php } } ?>

   
         <input type="submit" name="enroll" value="Confirm Enrollment" class="btn btn-success btn-sm" />
                          
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php";?>