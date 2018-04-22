<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php"; ?>
<?php 
  $login = Session::get("login");
  if ($login == false) {
    echo "<script>window.location = 'index.php'</script>";
  }
?>
 <?php
               if(!isset($_GET['id']) || $_GET['id']==NUll){
                echo "<script>window.location = 'index.php';</script>";
              }else{
                $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
              }
              ?>
    <?php 
  $login = Session::get("login");
  if ($login == false) {
    echo "<script>window.location = 'index.php'</script>";
  }
?>
	<section id="inner-headline">
	
		<div class="row">
			<div class="col-lg-12">
				<img src="img/cbanner.png" alt="no image" style="background-attachment: fixed; background-size: cover;">
			</div>
		
	</div>
	</section>
	
	
	<section id="inner-headline">
		<div class="row">
		<?php 
              $mod = new Module();
              $getcourse = $mod->getCourseDetailLimit($id);
              if ($getcourse) {
              while ($data = $getcourse->fetch_assoc()) {

          ?>
			<div class="col-lg-12">
			<!-- <img src=""/> -->
				<h2 class="pageTitle"><?php echo $data['courseName'] ; ?></h2>
				
		
		</div>
		<?php } } ?>
	</div>
	</section>
	
<div class="container">


		<?php 
              $mod = new Module();
              $getcourse = $mod->getCourseDetail($id);
              if ($getcourse) {
              while ($data = $getcourse->fetch_assoc()) {

          ?>
          <?php
          	$lId = $data['l_Id'];
          ?>
							<div class="col-md-4">

								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span><?php echo $data['courseName'] ; ?></span></h3>
									<p>Course For <span><?php echo $data['levelName'] ; ?></span></p>
									
								</div>

            					<?php 
									$gettopic = $mod->gettopicby($id, $lId);
									if ($gettopic) {
										while ($value = $gettopic->fetch_assoc()) {?>

								<p>  <?php echo $value['topicName'] ; ?></p>
								<?php } } ?>

								<!-- <p><ul style="text-decoration: none; list-style: none;"> -->

								<!-- <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;"> -->

								
								<!-- </ol> -->
								<!-- <li><h3>Duration: 1 Day (8Hrs)</h3></li>
								 <p>Course Fee: BDT 2,000</p>
							 <p>(Refundable)</p></li>  -->
								<!-- </ul></p> -->
							
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
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php?level=<?php echo urlencode($lId);?>;&amp;cId=<?php echo urlencode($id);?>"><button type="button" class="btn btn-success">Go For Details</button></a>
								
							</div>

							<?php  } } ?>	
							
						</div> 

						
						
						 						
						 
						<br>

					  
						
					</div>
									
				</div>
	</section>
	
	<?php include "inc/footer.php";?>