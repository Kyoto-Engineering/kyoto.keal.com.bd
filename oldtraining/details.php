
<?php
    if (!isset($_GET['level']) || $_GET['level'] == NULL ) {
        //echo "<script>window.location = 'training_info.php'</script>";
      }else{
        $level = $_GET['level'];
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
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<img src="img/pic2.jpg" alt="no image" style="background-attachment: fixed; background-size: cover;">
			</div>
		</div>
	</div>
	</section>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">TRAINING ON<br/>INFORMATION TECHNOLOGY</h2>
				<!-- <img src="img/pic2.jpg" alt="no image" style="background-attachment: fixed; background-size: cover;"> -->
			</div>
		</div>
	</div>
	</section>

	<section id="content">
	<div class="container">
					
					<div class="about">
					
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">

				<div class="navbar-collapse collapse" style="background-color:#A5D6A7"; >
						<ul class="nav navbar-nav navbar-right">
								
				<ul class="nav navbar-nav">
                    <li class="active">
	                    <a href="training_info.php">
	                    <b style="color:#2E7D32;font-size: 20px;">IT Training</b></a>
                    </li> 
						<li><a href="automation_info.php">
						<b style="color:#2E7D32;font-size: 20px;">Automation Training</b>
						</a></li>
</ul>
									  </div>
									<h3>We are awesome <span class="color">TEAM</span></h3>
									<p>As a part of our <b>Corporate Social Responsibility</b> we have organized a training program on <em>"Industrial Automation".</em> This endeavor will transfer valuable knowledge of Industrial Automation among the youngstars of our country</p>
                                    	<p>This Training is ideal for engineers or engineering students especially in the fields of EEE/IPE. This is also suitable for working professionals who are the end users of industrial automation.</p>
								</div>
								<!-- <a href="#" class="btn btn-color">Read more</a>   -->
							</div>
						</div>
						
						<hr>
						<br>
						
						<div class="row">
							<!-- <div class="col-md-4"> -->
								<!-- Heading and para -->
								<!-- <div class="block-heading-two">
									<h3><span>Why Industrial Automation ?</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<li>- Low operating cost</li>
								<li>- High Productivity</li>
								<li>- High Quality</li>
								<li>- Flexibility</li>
								<li>- Perfect Data accuracy</li>
								<li>- High safty & Security</li>
								
								</ul></p>
							</div> -->
								<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Certificate On...</h2>
				<!-- <img src="img/pic2.jpg" alt="no image" style="background-attachment: fixed; background-size: cover;"> -->
			</div>
		</div>
	</div>
	</section>
<?php 
if($level == "1"){?>
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Beginner Level (Basic php fundamentals)</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
								<li> Turn PC AC local server</li>
								<li> PHP Documentation</li>
								<li>PHP MyAdmin</li>
								<li>PHP Variables</li>
								<li>Print Data</li>
								<li>Types of data </li>
								<li>Strings, Operator, Constants</li>
								<li>PHP Statements</li>
								
								</ol>
								<!-- <li><h3>Duration: 1 Day (8Hrs)</h3></li>
								 <p>Course Fee: BDT 2,000</p>
							 <p>(Refundable)</p></li>  -->
								</ul></p>
								<div class="course_fee">
									<h3>Duration: 12 Day (24Hrs)</h3>
								 <p>Course Fee: BDT 4,000</p>
							 <p>(Refundable)</p>
								</div>
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo '1';?>"><button type="button" class="btn btn-success">Go For Details</button></a>
								
							</div>	
<?php }elseif($level == "2"){?>
								<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Elementary Level (Array functions & OOP Basics)</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
								<li>PHP Array Functions</li>
								<li>PHP Calendar Functions</li>
								<li>PHP Mail Functions</li>
								<li>OOP Basic Discussion</li>
								<li>Class Property method/Magic Methods</li>
								<li>Polymorphism</li>

								</ol>
								</ul></p>
								<div class="course_fee">
									<h3>Duration: 12 Day (24Hrs)</h3>
								 <p>Course Fee: BDT 4,000</p>
							 <p>(Refundable)</p>
								</div>
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo '2';?>" target="_blank"><button type="button" class="btn btn-success">Go For Details</button></a>
							</div>
<?php }elseif($level == "3"){?>
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Intermediate Level<br/>(MySQL & A COMPLETE PROJECT on WEB)</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
								<li> Concept of system Design</li>
								<li>Working with database MySQL</li>
								<li>MySQL queries</li>
								<li>Work with CRUD</li>
								<li>Working with Forms</li>
								
								</ol>
								
								
								</ul></p>
								<div class="course_fee">
								<h3>Duration: 15 Days (30Hrs)</h3>
								 <p>Course Fee: BDT 6,000</p>
								<p>(Refundable)</p> 
								</div>
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo '3';?>" target="_blank"><button type="button" class="btn btn-success">Go For Details</button></a>
							</div>
<?php } else{
echo "No Course level Selected";
}?>



						</div> 
						
						 						
						 
						<br>

					  
						
					</div>
									
				</div>
	</section>
		<section id="content">
	<div class="container">
					
					<div class="about">
					

						
						<hr>
						<br>
						
						<div class="row">
							
						
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Advanced Level<br/> A COMPLETE PROJECT on WEB</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<li>Front End Work with Bootstrap</li>
								<li>Concepts of Html5 & CSS3</li>
								<li>Basic template Design with Bootstrap</li>
								<li>4. Right Hardware for Right Application.</li>
								<li>5. Effective Implementation skill required for automation, controll and monitoring of Industrial Process.</li>
								<li>6.Implementation of Industrial process including descrete manufactureing, control of sequences, batch processing, and process controll</li>
								<li>7. Good Design, Drafting & Mapping Practices </li>
								<li>7. Installation & commissioning PLC </li>
								
								<li><h3>Duration: 3 Days (24Hrs)</h3>
								<p>Course Fee: BDT 25,000</p><p>(Refundable)</p></li>
								
								</ul></p>

								
							</div>
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Industrial Automation ?</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<li>- Low operating cost</li>
								<li>- High Productivity</li>
								<li>- High Quality</li>
								<li>- Flexibility</li>
								<li>- Perfect Data accuracy</li>
								<li>- High safty & Security</li>
								
								</ul></p>
							</div>
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>How to Apply !!</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<li>1. Send us filled out Registration Form. You will find the Form in<p> <a href="www.training@keal.com.bd">training@keal.com.bd</a></p></li>
								<li><img src="img/trainng.jpeg" alt="no image" style="height: auto; width: 80px;"></li>
								<li>2. Call Us for any assistance required:
								<p><span style="color:red;">01844046636, 01844046666</span></p></li>
								</ul></p>

								
							</div>
						</div> 
						
						 						
						 
						<br>

					  
						
					</div>
									
				</div>
	</section>
	<?php include "inc/footer.php";?>