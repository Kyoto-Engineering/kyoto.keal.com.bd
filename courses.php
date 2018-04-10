<?php include "inc/header.php";?>
<?php 
	$login = Session::get("login");
	if ($login == false) {
		echo "<script>window.location = 'index.php'</script>";
	}
?>
								<section id="inner-headline">
	<section id="content">
	<div class="container">
					

						
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
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Complete Web Design</span></h3>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
								<li> HTML5 introduction, Markup, layout, Tag </li>
								<li> HTML5 Image, Link, Style, Color </li>
								<li> Formatting, List, Block, Table, Comments</li>
								<li> CSS3 introduction, Color, Background, height-width</li>
								<li> CSS3 Border, Margin, Padding</li>
								<li> Text, Align, Dropdown, Forms</li>
								<li> Id, Class, iframe, Responsive</li>
								<li> Header nav, toolbar </li>
								<li> Bootstrap introduction, Grid, Table</li>
								<li> Image, navbar, Dropdown, button</li>
								<li> Input group, Breadcrumbs, Pagination</li>
								<li> Jumpbotron, thumbnails, Responsive with bootstrap</li>
								<li> JavaScript, functions, variable scope</li>
								<li> Data Types, Operator, Scope, String, Date</li>
								<li> Array, Condition, Loop</li>
								<li> JavaScript effects, like dropdown menus, tabs</li>
								<li> Image carousel </li>
								<li> Object, Function </li>	
								

								
								</ol>
								<!-- <li><h3>Duration: 1 Day (8Hrs)</h3></li>
								 <p>Course Fee: BDT 2,000</p>
							 <p>(Refundable)</p></li>  -->
								</ul></p>
								<div class="course_fee">
									<h3>Duration: 3 month</h3>
								 <p>Course Fee: BDT 7,000</p>
							 
								</div>
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo '1';?>"><button type="button" class="btn btn-success">Enroll Here</button></a>
								
							</div>
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
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo '2';?>" target="_blank"><button type="button" class="btn btn-success">Enroll Here</button></a>
							</div>
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
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo '3';?>" target="_blank"><button type="button" class="btn btn-success">Enroll Here</button></a>
							</div>
						</div> 
						
						 						
						 
						<br>

					  
						
					</div>
									
				</div>
	</section>
<?php include "inc/footer.php";?>