<?php include "inc/header.php";?>
<?php include "classes/log.php";?>
<?php 
$std = new userProfile();
?>
<section class="callaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table" style="max-width: 75%;">
  <thead class="thead-dark">
   <h1>
        Trainee List Panel  
      </h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col"Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gerder</th>
      

    </tr>
  </thead>
  <tbody>
  <?php 
    $getapply = $std->allStudentprofile();
    if ($getapply) {
      $i = '0';
    while ($data = $getapply->fetch_assoc()) {
      $i++;
  ?>
    <tr>
    <?php 
      $sId = $data['id'];
    ?>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $data['id']; echo $data['studentName'];?></td>
      <td><?php echo $data['email'];?></td>
      <td><?php echo $data['phone'];?></td>
      <td><?php echo $data['dob'];?></td>
      <td><?php echo $data['gender'];?></td>
     
     

    </tr>
<?php } } ?>
  </tbody>
</table>
        </div>
    </div>
    </section>
    
    
    <section id="content">
    
    
    <div class="container">
            <div class="row">
        <div class="skill-home"> <div class="skill-home-solid clearfix"> 
        <div class="col-md-4 text-center">
        <span class="icons c1"><i class="fa fa-trophy"></i></span> <div class="box-area">
        <h3 class="text-center">IT Training</h3>
         <p><h5 class="text-center">Trained Up Yourself As an IT Professional.</h5> We provide best training that helps you to build up yourself as a professional IT person.</p></div>
        </div>
        <div class="col-md-4 text-center">
        <a href="https://recruitment.keal.com.bd" style="text-decoration: none; color: #656565;">
        <span class="icons c2"><i class="fa fa-briefcase" aria-hidden="true"></i>
<!-- <i class="fa fa-picture-o"></i> --></span> <div class="box-area">
        <h3 class="text-center">Internship Opportunity</h3>
         <p><h5 class="text-center">Start Your Career With IT</h5> Only we are offering Internship in IT field after you've successfully completed your IT training.</p></div>
         </a> 
        </div>
        <div class="col-md-4 text-center"> 
        <a href="traineeDashboard.php" style="text-decoration: none; color: #656565;">
        <span class="icons c3"><img src="img/bdskill.png" alt="img" style="margin-top: -30px;
height: 154px;" /></span> <div class="box-area">
        <h3 class="text-center">LICT BD-skills</h3>
         <p><h5 class="text-center">Enroll Yourself in BD Skills</h5> We registered ourselves in LICT BD skills. You Also can enroll yourself for get job update in IT field.</p></div>
         </a>
        </div>
<!--        <div class="col-md-3 text-center"> 
        <span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
        <h3>User Experience</h3>
         <p></p>
        </div></div> -->
        </div></div>
        </div> 
     

    </div>
    </section>
    

    <section class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p>A creative man is motivated by the desire to achieve, not by the desire to beat others.</p>
                        <p>
                            <b>- Ayn Rand -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>The best way to find yourself is to lose yourself in the service of others.</p>
                        <p>
                            <b>- Mahatma Gandhi -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p>The soldier above all others prays for peace, for it is the soldier who must suffer and bear the deepest wounds and scars of war.</p>
                        <p>
                            <b>- Douglas MacArthur -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Nobody Sets The Rules But You. You Can Design Your Own Life</p>
                        <p>
                            <b>- Carrie -Anne Moss -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<?php include "inc/footer.php";?>