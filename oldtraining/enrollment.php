<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php";?>
<?php
      if (!isset($_GET['level']) || $_GET['level'] == NULL ) {
     //    echo "<script>window.location = 'courses.php'</script>";
        }else{
          $level = $_GET['level'];
       }

?>
<?php
     // if(isset($_GET['level']) && !empty($_GET['level']) AND isset($_GET['uId']) && !empty($_GET['uId'])){
     //    $level = $_GET['level'];
     //    $uId = $_GET['uId'];
     //   }

?> 


<body>
<?php 
    $mod = new Module();
?>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['enroll'])) {
       $enrolled = $mod->getEnrolled($level,$uId);
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
                <form action="" method="post" class="login">
        <?php
            if($level == "1"){?>
                <p>Course Name : Complete Web Design</p>
                <p>Duration    : 3 months</p>
                <p>Course Fee  : BDT 7,000</p>
           <?php }elseif($level == "2"){?>
                <p>Course Name : System development with PHP and MySQL</p>
                <p>Duration    : 4 months</p>
                <p>Course Fee  : BDT 12,000</p>
          <?php }elseif ($level == "3") {?>
                <p>Course Name : System Development with Dot net and MySQL</p>
                <p>Duration    : 4 months</p>
                <p>Course Fee  : BDT 12,000</p>
          <?php }else{?>

         <?php } ?>
         <input type="submit" name="enroll" value="Confirm Enrollment" class="btn btn-success btn-sm" />
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php";?>