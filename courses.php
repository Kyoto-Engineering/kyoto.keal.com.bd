<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php"; ?>
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
<?php 
$mod = new Module();
  $getutopic = $mod->getallcourse();
    if ($getutopic) {
    while ($value = $getutopic->fetch_assoc()) {?>
    <?php 
      $courses = $value['id'];
      $level = $value['l_Id'];
    ?>
    <?php } } ?>

    		<?php 
				$getutopic = $mod->getallcourseby($courses);
				if ($getutopic) {
				while ($value = $getutopic->fetch_assoc()) {?>
							<div class="col-md-4">
								<!-- Heading and para -->

								<div class="block-heading-two">
									<h3><span><?php echo $value['courseName'] ; ?></span></h3>
									<p>Course For <span><?php echo $value['levelName'] ; ?></span></p>
								</div>
								<p><ul style="text-decoration: none; list-style: none;">
								<ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
    		<?php 
				$getutopic = $mod->getallcoursetopic($courses, $level);
				if ($getutopic) {
				while ($value = $getutopic->fetch_assoc()) {?>

								<li> <?php echo $value['topicName'] ; ?> </li>
			<?php } } ?>
								</ol>
								<!-- <li><h3>Duration: 1 Day (8Hrs)</h3></li>
								 <p>Course Fee: BDT 2,000</p>
							 <p>(Refundable)</p></li>  -->
								</ul></p>
								<div class="course_fee">
									
		<?php 
              // $getprice = $mod->getallCourseprice($courses);
              // if ($getprice) {
              // while ($value = $getprice->fetch_assoc()) {

         ?>
								 <h3>Course Fee:<br/>BDT:- <?php// echo $value['price']?>Tk/-</h3>
									<h3> Duration : Total <?php //echo $value['duration']?> Hours</h3>
					<?php //} } ?>	
							</div>
								<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="enrollment.php?level=<?php echo '1';?>"><button type="button" class="btn btn-success">Enroll Here</button></a>
								
							</div>
				 <?php } } ?>

							
						</div>
						
						 						
						 
						<br>

					  
						
					</div>
									
				</div>
	</section>
<?php include "inc/footer.php";?>