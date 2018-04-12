<?php 
     include 'lib/Session.php';
     Session::init();
     include 'helpers/Format.php';
?>
<?php 
$fm = new Format();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Kyoto Training</title>
 <link rel="shortcut icon" href="img/icon2.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.html" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.html" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <style>
  @-webkit-keyframes argh-my-eyes {
    0%   { background-color: #fff; }
    49% { background-color: #fff; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #ff0000; }
  }
  @-moz-keyframes argh-my-eyes {
    0%   { background-color: #ff0000; }
    49% { background-color: #ff0000; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #ff0000; }
  }
  @keyframes argh-my-eyes {
    0%   { background-color: #ff0000; }
    49% { background-color: #ff0000; }
    50% { background-color: #000; }
    99% { background-color: #000; }
    100% { background-color: #ff0000; }
  }
  .flashing {
  -webkit-animation: argh-my-eyes 0.5s infinite;
  -moz-animation:    argh-my-eyes 0.5s infinite;
  animation:         argh-my-eyes 0.5s infinite;
}
</style>
</head>
<?php 

$uId = Session::get('userId');
$courseId = Session::get('courseId');

?>
<body>
<div id="wrapper" class="home-page">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/kLogol.png" alt="logo" style="height: auto;
width: 225px;
margin-top: -26px;" /></a>
                </div>  
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
						
						 
                        <!-- <li><a href="training_info.php">Training Info</a></li> -->
                        <!-- <li><a href="pricing.html">Pricing</a></li> -->
                        <!-- <li><a href="contact.php">Contact</a></li> -->

                         <?php
                             if (isset($_GET['action']) && $_GET['action'] == "logout") {
                                     Session::destroy();                               
                                     }
                             $log = Session::get("login");
                            if($log == "true"){?>
                            <li><a href="notice_board.php">Notice Board</a></li> 
                            <li><a href="courses.php">Courses</a></li> 
                            <li><a href="">Result</a></li> 
                                 <li><a href="?action=logout">Sign Out</a></li> 
                            <?php } else { ?>
                                <li><a href="login.php">Sign In or Sign Up</a></li> 
                                <?php } ?>
                         
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->