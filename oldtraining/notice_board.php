<?php include "inc/header.php";?>
<?php include "classes/moduleclass.php";?>
<?php 
  $login = Session::get("login");
  if ($login == false) {
    echo "<script>window.location = 'index.php'</script>";
  }
?>
<?php 
    $mod = new Module();
?>
<div class="container">
<marquee behavior="scroll" direction="left"><span style="background-color:green; color:#fff; font-size:20px; font-style:ittalic; padding:15px; margin-top:20px;">***Admission Going On...***</span></marquee>

	<div class="row">

		<div class="col-md-8">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">sL</th>
      <th scope="col">Topic</th>
      <th scope="col">Day</th>
      <th scope="col">class Time</th>
      <th scope="col">Venue</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $schedule = $mod->classSchedule($courseId);
    if ($schedule) {
      $i = 0;
      while($data = $schedule->fetch_assoc()){
        $i++;
        ?>
      
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $data['topic'];?></td>
      <td><?php echo $data['day'];?></td>
      <td><?php echo $data['ctime'];?></td>
      <td><?php echo $data['venue'];?></td>
    </tr>
  <?php  } } ?>
  </tbody>
</table>

			
		</div>

		<div class="col-md-4" style="text-align: center;">
		<h2>Recent Updates</h2>
      <?php 
    $news = $mod->recentUpdates();
    if ($news) {
      $i = 0;
      while($value = $news->fetch_assoc()){
        $i++;
        ?>
		 <p><?php echo $fm->textShorten($value['notice'],20)?></p>
		<?php } } ?>
			
		</div>

	</div>
</div>

<?php include "inc/footer.php";?>