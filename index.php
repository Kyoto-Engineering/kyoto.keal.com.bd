<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php";?>
<?php 
    $mod = new Module();
?>
<?php 
    $login = Session::get("login");
    if ($login == "true") {?>
<section class="">
<div class="container">
    <div class="row">
   <?php 
$getdata = $mod->getSinglestudent($uId);
    if ($getdata) {
        while($data = $getdata->fetch_assoc()){
   ?>
        <div class="col-md-4">
            <img src="img/e3.png" alt="" height="auto" width="80px" />
        </div>
        <div class="col-md-8">
            <p style="font-family: 'Montserrat', sans-serif; font-weight: bold;">Name:&nbsp;<?php echo $data['studentName']?></p>
            <p style="font-family: 'Montserrat', sans-serif;">Email:&nbsp;<?php echo $data['email']?></p>
            <p style="font-family: 'Montserrat', sans-serif;">Phone:&nbsp;<?php echo $data['phone']?></p>
            <p style="font-family: 'Montserrat', sans-serif;"><p style="font-family: 'Montserrat', sans-serif;">Date Of Birth:&nbsp;<?php echo $data['dob']?></p>
            <p style="font-family: 'Montserrat', sans-serif;">Gender:&nbsp;<?php echo $data['gender']?></p>
            <p style="font-family: 'Montserrat', sans-serif;">Select Course:&nbsp;<?php echo $data['name']?></p>
        </div>
    
    </div>

    <div class="row">
    <h3>Your Preffered Course Details</h3>
    <?php 
    if($data['level']=="1"){?>
             <div class="col-md-6">
                                <p>1) Basic php fundamentals<ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                <li>Turn pc ac local server</li>
                                <li>php documentation</li>
                                <li>php myadmin</li>
                                <li>Php variables</li>
                                <li>Print data</li>
                                <li>Types of data</li>
                                <li>Strings, operator, constants</li>
                                <li>php statements</li>
                                <li>Loops, function, condition</li>
                                <li>Form validation</li>
                                <li>Required</li>
                                <li>Methods</li>
                                </ol>
                                </ul>
                                <span style="color:red; font-weight: bold;">Class Test</span></p>
        </div> 
   <?php } elseif($data['level']=="2"){?>
             <div class="col-md-6">
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
                                </ul></p>
        </div> 
   <?php }elseif($data['level']=="3"){?>
                 <div class="col-md-6">
                                <p><ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                <li> Concept of system Design</li>
                                <li>Working with database MySQL</li>
                                <li>MySQL queries</li>
                                <li>Work with CRUD</li>
                                <li>Working with Forms</li>
                                
                                </ol>
                                
                                
                                </ul></p>
        </div> 
   <?php }else{
    echo "No Level Selected to Show";
   }
    ?>
  
        <div class="col-md-6">
                                  <!--           <p><ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                <li>PHP Array Functions</li>
                                <li>PHP Calendar Functions</li>
                                <li>PHP Mail Functions</li>
                                <li>OOP Basic Discussion</li>
                                <li>Class Property method/Magic Methods</li>
                                <li>Polymorphism</li>
                                <li>Inheritance</li>
                                <li>Abstraction</li>
                                <li>Encapsulation</li>
                                <li>Access Modifier</li>
                                <li>Design pattern</li>
                                <li> Database connect with OOP way</li>
                                </ol>
                                </ul></p> -->
        </div>
    </div>
    <?php } } ?>
</div>
</section>
    <?php } else{ ?>
    <section id="banner">
     
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/3.jpg" alt="" />
                <div class="flex-caption container">
                    <h3>Success Oriented</h3> 
                    <p>The most important part of education is proper training...</p> 
                    <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/1.jpg" alt="" />
                <div class="flex-caption container">
                    <h3>Success Oriented</h3> 
                    <p>The most important part of education is proper training...</p> 
                    <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/2.jpg" alt="" />
                <div class="flex-caption container">
                    <h3>Education First</h3> 
                    <p>Teaching brings out innate powers, <br/> and proper training braces the intellect.</p> 
                    <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </li>
            </ul>
        </div>
    <!-- end slider -->
 
    </section>


    <section class="callaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter"><h1 class="aligncenter">OUR OFFERs</h1></div>
                <h2 class="text-center"><span style="color:rgb(99, 174, 222)"><i>INSTITUTE OF  </span><span style="color:rgb(233, 39, 39)">   PROFESSIONALS  IT </i></span>&nbsp; TRAININGS</h2>
            </div>
        </div>
    </div>
    </section>
    
   
    <section id="content">
    
    
    <div class="container">
            <div class="row">
        <div class="skill-home"> <div class="skill-home-solid clearfix"> 
       <div class="col-md-4 text-center">
         <a href="training_info.php" style="text-decoration: none; color: #656565;">
        <span class="icons c1">
        <i class="fa fa-trophy"></i></span>

         <div class="box-area">
        <h3 class="text-center">IT Training</h3>
         <p><h5 class="text-center">Trained Up Yourself As an IT Professional.</h5> We provide best training that helps you to build up yourself as a professional IT person.</p></div>
         </a>
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
        <a href="http://www.bdskills.com/" style="text-decoration: none; color: #656565;">
        <span class="icons c3"><img src="img/bdskill.png" alt="img" style="margin-top: -30px;
height: 154px;" /></span> <div class="box-area">
        <h3 class="text-center">BD-skills</h3>
         <p><h5 class="text-center">Enroll Yourself in BD Skills</h5> We registered ourselves in BD skills. You Also can enroll yourself for get job update in IT field.</p></div>
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
    <?php } ?>
<?php include "inc/footer.php";?>