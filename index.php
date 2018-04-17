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

        </div>
    
    </div>

    <div class="row">
    <h3>Your Preffered Course Details</h3>
    <?php 
    if($data['courseId']=="1"){?>
             <div class="col-md-6">
                                <p> <span style="color:black; font-weight: bold;">1) Complete Web Design</span><ul style="text-decoration: none; list-style: none;">
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
                                </ul>
                                <span style="color:red; font-weight: bold;">Class Test in Every week</span></p>

                                
        </div> 
   
    <?php } elseif($data['courseId']=="2"){?>
             <div class="col-md-6">
                                <h2>System development with PHP and MySQL</h2>
                                <p> <span style="color:black; font-weight: bold;">1) Basic php fundamentals</span><ul style="text-decoration: none; list-style: none;">
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

                                <p> <span style="color:black; font-weight: bold;">2) Describe about array functions</span><ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                
                                </ol>
                                </ul>
                                <span style="color:red; font-weight: bold;">Class Test</span></p>
                                <p> <span style="color:black; font-weight: bold;">3) OOP Basics</span><ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                <li>oop Basic discussion</li>
                                <li>class Property method/magic methods</li>
                                <li>Polymorphism/Inheritance/abstract/Encapsulation</li>
                                <li>Access Modifier</li>
                                <li>Design pattern</li>
                                <li>Database connect with oop  way</li>
                                </ol>
                                </ul>
                                <span style="color:red; font-weight: bold;">Class Test</span></p>
        </div> 
   
   
   
   <?php } elseif($data['courseId']=="3"){?>
                 <div class="col-md-6">
                                <p> <span style="color:black; font-weight: bold;">System development with DOT NET and SQL </span><ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                <li>Introduction to Programming</li>
                                <li>List and collection(array, array list,stack,queue)</li>
                                <li>Conditions and loop(for loop, for each, while each, do while each, conditional logic)</li>
                                <li>Object oriented programming(Class, inheritance, polymorphism, encapsulation)</li>
                                <li>Introduction to MS visual studio</li>
                                <li>Introduction to windows application</li>
                                <li>Introduction to MS SQL</li>
                                <li>Advance SQL Programming(trigger, sql joining,)</li>
                                <li>A simple windows application</li>
                                <li>SQL DB backup SQL DB restore</li>
                                <li>Advance windows Application(create, delete, insert, update table data)</li>
                                <li>Introduction to HTML</li>
                                <li>Introduction to css-3</li>
                                <li>Introduction java script and J-Query</li>
                                <li>Introduction to MVC</li>
                                <li>More about MVC</li>
                                <li>Project with asp.net and MVC</li>
                                <li>Advance level web application</li>
                                
                                </ol>
                                
                                
                                </ul></p>
        </div> 
   <?php }else{
    echo "No course Selected to Show";
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
                    <h3>Success Oriented</h3> 
                    <p>The most important part of education is proper training...</p> 
                    <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </li>
              <li>
                <img src="img/slides/3.jpg" alt="" />
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
<section class="course" style="background-color: #eee;/*! padding: 10px; */">
    <section class="callaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter"><h1 class="aligncenter">Choose Your Course</h1></div>
            </div>
        </div>
    </div>
    </section>
    <section id="contentone">
    
    
    <div class="container">
    <div class="row">
        <div class="skill-home">
         <div class="skill-home-solid clearfix"> 
<?php 
    $course = $mod->getCourses();
    if ($course) {
        while($value = $course->fetch_assoc()){?>

         <div class="col-md-4 text-center">
                <a href="program.php?id=<?php echo $value['id'] ; ?>" style="text-decoration: none; color: #656565;">
                <span class="icons c2"><img src="admin/<?php echo $value['image']?>" alt="no image"/></span>

         </a>
        </div>
       <?php }
    }
?>

</div>
</div>
</div> 
</div>
</section>


</section>

<section id="secondclass">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="training_info.php">
                <button class="button btn btn-lg btn-warning"> Find All Courses</button>
            </a>
            </div>
        </div>
    </div>

</section>

<section  style='background-image: url("img/job.jpg");background-attachment: fixed;background-size: cover;background-position: center;background-repeat: no-repeat;height: auto;width: 100%;'>
<div class="thiredclass"></div>
       <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 151px; margin-bottom: 150px;">
            <center><a href="https://recruitment.keal.com.bd" style="text-decoration: none;">
                <h1  style="color:#eee; font-size: 50px;"> Job Opportunity Guaranteed </h1>
                <span><h2 style="color: #fff;">Start Your Career With IT</h2> <h4 style="color: #fff;">Only we are offering <span style="color: #0bf2a0;">Internship/Job</span> in IT field after you've successfully completed your IT training.</h4></span>
            </a></center>

            </div>
        </div>
    </div>

</section>
<section class="course" style="background-color: #eee;/*! padding: 10px; */">
    <section class="callaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter"><h1 class="aligncenter">Select Your Category</h1>
                <p>I Belong To </p></div>

            </div>
        </div>
    </div>
    </section>
    <section id="contentone">
    
    
    <div class="container">
            
    <div class="row">
        <div class="skill-home"> <div class="skill-home-solid clearfix"> 

       <div class="col-md-4 text-center">
         <a href="training_info.php" style="text-decoration: none; color: #656565;">
        <span class="icons c1">
            <img src="img/bdskill.png" alt="no image"/>
        </span>

         </a>
        </div>
        <div class="col-md-4 text-center">
        <a href="https://recruitment.keal.com.bd" style="text-decoration: none; color: #656565;">
        <span class="icons c2">

    <img src="img/bdskill.png" alt="no image"/>
</span> 

         </a> 
        </div>
        <div class="col-md-4 text-center">
        <a href="https://recruitment.keal.com.bd" style="text-decoration: none; color: #656565;">
        <span class="icons c2">
        
        <img src="img/bdskill.png" alt="no image"/>

         </a> 
        </div>

        </div></div>
        </div> 
     

    </div>

    </section>


</section>
<section  style='background-image: url("img/bdskill.jpg");background-attachment: fixed;background-size: cover;background-position: center;background-repeat: no-repeat;height: auto;width: 100%;'>
<div class="thiredclass"></div>
       <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 151px; margin-bottom: 150px;">
            <center><a href="https://recruitment.keal.com.bd" style="text-decoration: none;">
                <h1  style="color:#eee; font-size: 50px;"> Enroll Yourself In BdSkills </h1>
                <span><h2 style="color: #fff;">Enroll Yourself in BD Skills</h2> <h4 style="color: #fff;"> We registered ourselves in BD skills. You Also can enroll yourself for get job update in IT field.</h4></span>
            </a></center>

            </div>
        </div>
    </div>

</section>   
<!--     <section id="content">
    
    
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
</span> <div class="box-area">
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

        </div></div>
        </div> 
     

    </div>
    </section> -->
    

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