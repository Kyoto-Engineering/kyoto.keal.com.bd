<?php include_once "classes/log.php";?>

<?php
      $user = new SignUp(); 
?>
<?php
    // if (!isset($_GET['level']) || $_GET['level'] == NULL ) {
    //     //echo "<script>window.location = 'training_info.php'</script>";
    //   }else{
    //     $level = $_GET['level'];
    //   }

?>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $studentName = $_POST['studentName'];
        $email = $_POST['email'];
        
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $level = $_POST['level'];
        // $courseId = $_POST['courseId'];
        $userlog = $user->userLogin($studentName, $email,$phone,$dob,$gender,$level);
    }

?>  


 <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Website CSS style -->
    <link href="css/css1/bootstrap.min.css" rel="stylesheet">

    <!-- Website Font style -->
    <!--   <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/css1/style.css">
    <!-- Google Fonts -->
    <link href='css/css1/google-font1.css' rel='stylesheet' type='text/css'>
    <link href='css/css1/google-fonts2.css' rel='stylesheet' type='text/css'>
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <title>Kyoto IT & Automation Training</title>
    <link rel="shortcut icon" href="img/icon2.png" />
  </head>

<body>
  <div class="container">
      <div class="row main">
        <div class="main-login main-center" style="
    width: 498px; margin-bottom:40px;">
    
    
      	<h1 style="text-align: center;">Sign up</h1>
          <h3><?php 
            if (isset($userlog)) {
              echo $userlog;
            }
            ?></h3>
	    <form method="post" action="">

          <div class="form-group">
              <label for="studentName" class="cols-sm-2 control-label">Your Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="studentName" id="studentName"  placeholder="Enter your Name"/>
                </div>
              </div>
            </div>

          <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Your Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                </div>
              </div>
            </div>

          <div class="form-group">
              <label for="phone" class="cols-sm-2 control-label">Phone</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fas fa-phone" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone"/>
                </div>
              </div>
            </div>

           <div class="form-group">
              <label for="dob" class="cols-sm-2 control-label">Date Of Birth</label>
              <div class="cols-sm-10">
                
                  <input type="date" class="form-control" name="dob" id="dob" />
            
              </div>
            </div>
	     
<!-- <div class="form-group">
  <label for="sel1">Select Training On:</label>
  <select class="form-control" id="sel1" name="courseId"> -->
              <?php
                // $getsp =  $user->getCourse();
                //   if ($getsp) {
                //   while ($data = $getsp->fetch_assoc()) {
                     ?>
     <option value="<?php //echo $data['id'];?>" ><?php //echo $data['name']; ?> </option>
      <?php //} } ?>   
   
  <!-- </select>
</div> -->

<div class="form-group">
  <label for="sel1">Select Training Level:</label>
  <select class="form-control" id="sel1" name="level">
      
     <option value="1" >Beginner Level</option>
     <option value="2" >Elementary Level </option>
     <option value="3" >Intermediate Level</option>
    
   
  </select>
</div>

               <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Gender</label>
              <div class="cols-sm-10">
               
                  <label class="radio-inline"><input type="radio" checked="checked" id="gender" name="gender" value="Male">Male</label>
                   <label class="radio-inline"><input type="radio" checked="checked" id="gender" name="gender" value="Female">Female </label>
               
              </div>
            </div>

		      

          
          <input type="submit" name="submit" value="Sign Up">
       
		    
	
          
            
	   
	      

      </form>
    </section>

  </div>
</div>
</div>



</body>
