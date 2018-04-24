<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php";?>

 <?php
               if(!isset($_GET['id']) || $_GET['id']==NUll){
                echo "<script>window.location = 'index.php';</script>";
              }else{
                $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
              }
              ?>



<section id="inner-headline">
    
        <div class="row">
            <div class="col-lg-12">
                <img src="img/child.jpg" alt="no image" style="background-attachment: fixed; background-size: cover;">
            </div>
        
    </div>
    </section>
    

    
    
    
    <div class="container">
    <?php 
              $mod = new Module();
              $getcourse = $mod->getprogram($id);
              if ($getcourse) {
              while ($data = $getcourse->fetch_assoc()) {

          ?>
          <?php
            $cId = $data['c_Id'];
          ?>
                            <div class="col-md-4">

                                <!-- Heading and para -->
                                <div class="block-heading-two">
                                    <h3><span><?php echo $data['courseName'] ; ?></span></h3>
                                    <p>Course For <span><?php echo $data['levelName'] ; ?></span></p>
                                    
                                </div>
   <p><ul style="text-decoration: none; list-style: none;">
                                <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;">
                                <?php 
                                    $gettopic = $mod->getleveltopicby($id, $cId);
                                    if ($gettopic) {
                                        while ($value = $gettopic->fetch_assoc()) {?>
                                    <li>  <?php echo $value['topicName'] ; ?></li>
                            
                                <?php } } ?>
</ol>
                                </ul></p>
                                <!-- <p><ul style="text-decoration: none; list-style: none;"> -->

                                <!-- <ol style="padding-left:15px;list-style-type:circle; font-size: 15px;"> -->

                                
                                <!-- </ol> -->
                                <!-- <li><h3>Duration: 1 Day (8Hrs)</h3></li>
                                 <p>Course Fee: BDT 2,000</p>
                             <p>(Refundable)</p></li>  -->
                                <!-- </ul></p> -->
                            
                                <div class="course_fee">
                                    
        <?php 

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






<?php include "inc/footer.php";?>