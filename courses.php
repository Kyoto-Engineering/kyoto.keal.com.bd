<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php";?>
<?php 
    $mod = new Module();
?>
<?php 
    $login = Session::get("login");
    if ($login != "true") {
    	echo "<script>window.location = 'index.php'</script>";
    	}?>


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
                <a href="coursedetails.php?id=<?php echo $value['id'] ; ?>" style="text-decoration: none; color: #656565;">
                <span class="icons c2"><img src="admin/<?php echo $value['image']?>" alt="no image"/></span>
        <div class="box-area">
        <h3 class="text-center"><?php echo $value['courseName']?></h3>
         <!-- <p><h5 class="text-center">Trained Up Yourself As an IT Professional.</h5> We provide best training that helps you to build up yourself as a professional IT person.</p> --></div>
         </a>
        </div>
       <?php } } ?>

</div>
</div>
</div> 
</div>
</section>


</section>
<?php include "inc/footer.php";?>