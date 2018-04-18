<?php include_once "../lib/Database.php"; ?>
<?php include_once "../lib/Session.php"; 

?>
<?php include_once "../helpers/Format.php"; ?>
<?php
class Adminview
{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}





public function getAllSignupList(){
	$query="SELECT p.*, c.name
				FROM tbl_stud_reg as p, tbl_course as c
				WHERE p.courseId = c.id 
				ORDER BY p.id DESC" ;
	$result= $this->db->select($query);
	return $result;

}
public function adroutine($data){
		$topic = $this->fm->validation($data['topic']);
		$day = $this->fm->validation($data['day']);
        $ctime = $this->fm->validation($data['ctime']);
        $venue = $this->fm->validation($data['venue']);
        $course = $this->fm->validation($data['course']);
       
       


		$topic = mysqli_real_escape_string($this->db->link, $topic);
		$day = mysqli_real_escape_string($this->db->link, $day);
		$ctime = mysqli_real_escape_string($this->db->link, $ctime);
		$venue = mysqli_real_escape_string($this->db->link, $venue);
		$course = mysqli_real_escape_string($this->db->link, $course);

		if (empty($topic) || empty($day) || empty($ctime)  || empty($venue) || empty($course)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_schedule(topic, day, ctime, venue, course) VALUES('$topic', '$day', '$ctime', '$venue', '$course')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Add Schedule Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Add Schedule Not Complete</span>";
			    	 	return $msg;
			    	 }
		}
}

public function adnotice($data){
		$notice = $this->fm->validation($data['notice']);
		$pdate = $this->fm->validation($data['pdate']);
        $postedby = $this->fm->validation($data['postedby']);
        
        $notice = mysqli_real_escape_string($this->db->link, $notice);
		$pdate = mysqli_real_escape_string($this->db->link, $pdate);
		$postedby = mysqli_real_escape_string($this->db->link, $postedby);
		

		if (empty($notice) || empty($pdate) || empty($postedby)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_notice(notice, pdate, postedby) VALUES('$notice', '$pdate', '$postedby')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Add Notice Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Add Notice Not Complete</span>";
			    	 	return $msg;
			    	 }

			    	}
            }

            public function courseInsert($data, $file){
		$name  = $this->fm->validation($data['name']);
		$price    = $this->fm->validation($data['price']);
		$quote = $this->fm->validation($data['quote']);
		$status = $this->fm->validation($data['status']);
		
		$name	 =mysqli_real_escape_string($this->db->link , $name);
		$price   		 = mysqli_real_escape_string($this->db->link, $price );
		$quote   = mysqli_real_escape_string($this->db->link, $quote);
		$status  = mysqli_real_escape_string($this->db->link, $status);
		
// 		if($picName == "" || $body == "" || $quatetion == ""){
//  			$errmsg = "<span style='color:red'>Field Must Not Be Empty !!</span>";
// 		    return $errmsg;
// 		}

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		 $file_name = $file['image']['name'];
		 $file_size = $file['image']['size'];
		 $file_temp = $file['image']['tmp_name'];

		      $div            = explode('.', $file_name);
		      $file_ext       = strtolower(end($div));
		      $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
		      $image = "uploads/".$unique_image;


		    if ($image == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Browse Your Picture First And Submit</span>";
		    	 return $errmsg;

		    	}elseif (in_array($file_ext, $permited) === false) {

		     	echo "<span style='color:red'>You can upload only:-".implode(', ', $permited)."</span>";

    			} else {
			    	 move_uploaded_file($file_temp, $image);
			    	 $query = "INSERT INTO tbl_course(name, price, quote, image, status) VALUES('$name','$price', '$quote' ,'$image' , '$status')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Image Upload complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Image Upload Not complete</span>";
			    	 	return $msg;
			    	 }
			    	}
	}



	public function coursecontentInsert($data, $file){
		$courseName  = $this->fm->validation($data['courseName']);
		
		$quote = $this->fm->validation($data['quote']);
		// $t1Id = $this->fm->validation($data['topic']);
		// $t2Id = $this->fm->validation($data['topic']);
		// $t3Id = $this->fm->validation($data['topic']);
		// $t4Id = $this->fm->validation($data['topic']);
		// $t5Id = $this->fm->validation($data['topic']);
		
		
		$courseName	 =mysqli_real_escape_string($this->db->link , $courseName);
		
		$quote   = mysqli_real_escape_string($this->db->link, $quote);
		// $t1Id   = mysqli_real_escape_string($this->db->link, $t1Id);
		// $t2Id   = mysqli_real_escape_string($this->db->link, $t2Id);
		// $t3Id   = mysqli_real_escape_string($this->db->link, $t3Id);
		// $t4Id   = mysqli_real_escape_string($this->db->link, $t4Id);
		// $t5Id   = mysqli_real_escape_string($this->db->link, $t5Id);
		
		
// 		if($picName == "" || $body == "" || $quatetion == ""){
//  			$errmsg = "<span style='color:red'>Field Must Not Be Empty !!</span>";
// 		    return $errmsg;
// 		}

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		 $file_name = $file['image']['name'];
		 $file_size = $file['image']['size'];
		 $file_temp = $file['image']['tmp_name'];

		      $div            = explode('.', $file_name);
		      $file_ext       = strtolower(end($div));
		      $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
		      $image = "uploads/".$unique_image;


		    if ($courseName == "" || $image == "" ) {
		    	 
		    	 $errmsg = "<span style='color:red'>Browse Your Picture First And Submit</span>";
		    	 return $errmsg;

		    	}elseif (in_array($file_ext, $permited) === false) {

		     	echo "<span style='color:red'>You can upload only:-".implode(', ', $permited)."</span>";

    			} else {
			    	 move_uploaded_file($file_temp, $image);
			    	 $query = "INSERT INTO tbl_courseName(courseName, quote, image) VALUES('$courseName', '$quote' ,'$image')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Course Upload complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Course Upload Not complete</span>";
			    	 	return $msg;
			    	 }
			    	}
	}

	public function InsertTopic($data){
		$topicName  = $this->fm->validation($data['topicName']);
		
		
		$topicName	 =mysqli_real_escape_string($this->db->link , $topicName);
		

		

		    if ($topicName == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	} else {
			    	 
			    	 $query = "INSERT INTO tbl_topic(topicName) VALUES('$topicName')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Topic Upload Inserted</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Topic Not Inserted</span>";
			    	 	return $msg;
			    	 }
			    	}
	}

	public function getTopic(){
		$query = "SELECT * FROM tbl_topic ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function getLevel(){
		$query = "SELECT * FROM tbl_level ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

	public function levelInsert($data, $file){
		$levelName  = $this->fm->validation($data['levelName']);
		
		
		$levelName	 =mysqli_real_escape_string($this->db->link , $levelName);
		
        $permited  = array('jpg', 'jpeg', 'png', 'gif');
		 $file_name = $file['image']['name'];
		 $file_size = $file['image']['size'];
		 $file_temp = $file['image']['tmp_name'];

		      $div            = explode('.', $file_name);
		      $file_ext       = strtolower(end($div));
		      $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
		      $image = "upload/".$unique_image;

		

		    if ($levelName == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	}elseif (in_array($file_ext, $permited) === false) {

		     	echo "<span style='color:red'>You can upload only:-".implode(', ', $permited)."</span>";

    			} else {
			    	 move_uploaded_file($file_temp, $image);
			    	 $query = "INSERT INTO tbl_level(levelName,image) VALUES('$levelName', '$image')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Level Inserted</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Level Not Inserted</span>";
			    	 	return $msg;
			    	 }
			    	}
	}

	public function getcourseName(){
		$query = "SELECT * FROM tbl_courseName";
		$result = $this->db->select($query);
		return $result;
	}

	public function editcoursecontent($id){
		    $query  = "SELECT * FROM  tbl_courseName WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}



	public function coursecontentUpdate($data, $file , $id){
		$courseName  = $this->fm->validation($data['courseName']);
		
		$quote = $this->fm->validation($data['quote']);
		// $t1Id = $this->fm->validation($data['topic']);
		// $t2Id = $this->fm->validation($data['topic']);
		// $t3Id = $this->fm->validation($data['topic']);
		// $t4Id = $this->fm->validation($data['topic']);
		// $t5Id = $this->fm->validation($data['topic']);
		
		
		$courseName	 =mysqli_real_escape_string($this->db->link , $courseName);
		
		$quote   = mysqli_real_escape_string($this->db->link, $quote);
		// $t1Id   = mysqli_real_escape_string($this->db->link, $t1Id);
		// $t2Id   = mysqli_real_escape_string($this->db->link, $t2Id);
		// $t3Id   = mysqli_real_escape_string($this->db->link, $t3Id);
		// $t4Id   = mysqli_real_escape_string($this->db->link, $t4Id);
		// $t5Id   = mysqli_real_escape_string($this->db->link, $t5Id);
		
		
// 		if($picName == "" || $body == "" || $quatetion == ""){
//  			$errmsg = "<span style='color:red'>Field Must Not Be Empty !!</span>";
// 		    return $errmsg;
// 		}

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		 $file_name = $file['image']['name'];
		 $file_size = $file['image']['size'];
		 $file_temp = $file['image']['tmp_name'];

		      $div            = explode('.', $file_name);
		      $file_ext       = strtolower(end($div));
		      $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
		      $image = "uploads/".$unique_image;


		    if ($courseName == "" ) {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	}else{
		    			if (!empty($file_name)) {
			    		if ($file_size >1048567) {
				    		 echo "<span>Image Size should be less then 1MB!</span>";

	   			 		} elseif (in_array($file_ext, $permited) === false) {

			     			echo "<span>You can upload only:-".implode(', ', $permited)."</span>";

	    			} else{
	    				 move_uploaded_file($file_temp, $image);
	    				 $query = "UPDATE tbl_courseName
	    				 	SET 
	    				 	courseName= '$courseName',
	    				 	quote 		= '$quote',
	    				 	
	    				 	image 		= '$image'
	    				 	
	    				 	WHERE id = '$id'";

	    				 $update = $this->db->update($query);
	    				 if ($update) {
	    				 	$msg = "Course Updated!!";
	    				 	return $msg;
	    				 }else{
	    				 	$msg = "Course Not Updated!!";
	    				 	return $msg;
	    				 }
	    			}
	    		} else{

	    				$query = "UPDATE tbl_courseName
	    				 	SET 
	    				 	courseName= '$courseName',
	    				 	quote 		= '$quote'
	    				 	
	    				 	WHERE id = '$id'";

	    				 $update = $this->db->update($query);
	    				 if ($update) {
	    				 	$msg = "Course Updated!!";
	    				 	return $msg;
	    				 }else{
	    				 	$msg = "Course Not Updated!!";
	    				 	return $msg;
	    				 }

	    		}

    	}
	}

	
}//main


