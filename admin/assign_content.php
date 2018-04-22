<?php include 'inc/header.php'  ?>
        <!-- end navbar top -->
<?php include 'inc/sidebar.php'  ?>
<?php include "../classes/adminEdit.php"; ?>
<?php
     $adedit = new Adminedit();
   
?>

        <!-- navbar side -->
     
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
        <br/>
        <h1 >Assign Content</h1>
        <br/>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Level Name</th>
      
    </tr>
  </thead>
  <tbody>
   <?php
        
        $Coursecontent = $adedit->selectcourselevel();
         if ($Coursecontent) {
          $i=0;
         while ($data = $Coursecontent->fetch_assoc()) {
            $i++;
          ?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $data['courseName'];?></td>
       <td><?php echo $data['levelName'];?></td>
   
      <td><a href="insertContent.php?cId=<?php echo $data['c_Id'];?>&amp;lId=<?php echo $data['l_Id'];?>"><input type="button" name="assign" value="Assign Content"></a></td>
     
    </tr>
  <?php } } ?> 
  </tbody>
</table>
</div>
        <!-- end page-wrapper -->

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php include 'inc/footer.php'  ?>
   


