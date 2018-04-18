<?php include "classes/moduleclass.php"; ?>

 <?php
               if(!isset($_GET['id']) || $_GET['id']==NUll){
                echo "<script>window.location = 'index.php';</script>";
              }else{
                $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
              }
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
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.html" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.html" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
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
                        <li><a href="#">About Us</a></li>
                         <li><a href="training_info.php">Training Info</a></li>
                       <!--  <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="pricing.html">Pricing</a></li> -->
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

	<section id="inner-headline">
	
		<div class="row">
			<div class="col-lg-12">
				<img src="img/pic2.jpg" alt="no image" style="background-attachment: fixed; background-size: cover;">
			</div>
		
	</div>
	</section>
	
	
	<section id="inner-headline">
		<div class="row">
			<div class="col-lg-12">
			<!-- <img src=""/> -->
				<h2 class="pageTitle">Program name...</h2>
				
		
		</div>
	</div>
	</section>

<div class="container">


							 <?php 
              $mod = new Module();
              $getcourse = $mod->getprogramDetail($id);
              if ($getcourse) {
              while ($data = $getcourse->fetch_assoc()) {

          ?>
							<div class="col-md-4">

								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span><?php echo $data['courseName'] ; ?></span></h3>
									<p>Course For <span><?php echo $data['levelName'] ; ?></span></p>
								</div>

                  

								<p><ul style="text-decoration: none; list-style: none;">
								<ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
								
								<li> <?php echo $data['topicName'] ; ?> </li>
								
								
								</ol>
								<!-- <li><h3>Duration: 1 Day (8Hrs)</h3></li>
								 <p>Course Fee: BDT 2,000</p>
							 <p>(Refundable)</p></li>  -->
								</ul></p>
							
								<div class="course_fee">
									
		<?php 
              $mod = new Module();
              $getprice = $mod->getCourseprice($id);
              if ($getprice) {
              while ($value = $getprice->fetch_assoc()) {

         ?>
								 <h3>Course Fee:<br/>BDT:- <?php echo $value['price']?>Tk/-</h3>
									<h3> Duration : Total <?php echo $value['duration']?> Hours</h3>
					<?php } } ?>	
							</div>
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php?level=<?php echo '1';?>"><button type="button" class="btn btn-success">Go For Details</button></a>
								
							</div>

							<?php  } } ?>	
							
						</div> 

						
						
						 						
						 
						<br>

					  
						
					</div>
									
				</div>
	</section>
	
	<?php include "inc/footer.php";?>