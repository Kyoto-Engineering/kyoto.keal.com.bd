<?php include_once "../lib/Database.php"; ?>
<?php include_once "../lib/Session.php"; 

?>
<?php include_once "../helpers/Format.php"; ?>
<?php
class Adminedit{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}





public function editTopic($id){
		    $query  = "SELECT * FROM  tbl_topic WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}



public function updateTopic($data , $id){
		$topicName  = $this->fm->validation($data['topicName']);
		
		
		$topicName	 =mysqli_real_escape_string($this->db->link , $topicName);
		

		

		    if ($topicName == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	} else {
			    	 
			    	 $query = "UPDATE tbl_topic
			    	           SET topicName = '$topicName' WHERE id='$id'";
			    	 $result = $this->db->update($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Topic Updated</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Topic Not Updated</span>";
			    	 	return $msg;
			    	 }
			    	}
	}
	public function editLevel($id){
		    $query  = "SELECT * FROM  tbl_level WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}

	public function levelUpdate($data, $file, $id){
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

		    	}else{
		    			if (!empty($file_name)) {
			    		if ($file_size >1048567) {
				    		 echo "<span>Image Size should be less then 1MB!</span>";

	   			 		} elseif (in_array($file_ext, $permited) === false) {

			     			echo "<span>You can upload only:-".implode(', ', $permited)."</span>";

	    			} else{
	    				 move_uploaded_file($file_temp, $image);
	    				 $query = "UPDATE tbl_level
	    				 	SET 
	    				 	levelName= '$levelName',
	    				 	
	    				 	
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

	    				$query = "UPDATE tbl_level
	    				 	SET 
	    				 	levelName= '$levelName'
	    				 	
	    				 	
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

	public function getcourseLevel(){
		    $query  = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_detail as p, tbl_coursename as c, tbl_level as l
				WHERE p.c_Id = c.id  AND p.l_id =l.id
				ORDER BY p.id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function getcourseLevelBy($id){
		    $query  = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_detail as p, tbl_coursename as c, tbl_level as l
				WHERE p.c_Id = c.id  AND p.l_id =l.id AND p.id = '$id'
				ORDER BY p.id DESC" ;
			$result = $this->db->select($query);
			return $result;
		}

		public function admissionStatusopen($data, $id){
		$status = $this->fm->validation($data['status']);
		$status	 =mysqli_real_escape_string($this->db->link , $status);

		 $query = "UPDATE tbl_detail SET status= '$status' WHERE id = '$id'";
		 $update_stat = $this->db->update($query);
		 if ($update_stat) {
		 	$msg = "Admission Open";
		 	return $msg; 
		 }else{
			$msg = "Admission not Open";
		 	return $msg;	 	
		 }
	    
	     }
		
		public function admissionStatusclosed($data, $id){
		$status = $this->fm->validation($data['status']);
		$status	 =mysqli_real_escape_string($this->db->link , $status);

		 $query = "UPDATE tbl_detail SET status= '$status' WHERE id = '$id'";
		 $update_stat = $this->db->update($query);
		 if ($update_stat) {
		 	$msg = "Admission Closed";
		 	return $msg; 
		 }else{
			$msg = "Admission not Closed";
		 	return $msg;	 	
		 }
		}

		public function selectcoursename(){
			$query  = "SELECT * FROM  tbl_coursename ORDER BY id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function selectlevelname(){
			$query  = "SELECT * FROM  tbl_level ORDER BY id DESC";
			$result = $this->db->select($query);
			return $result;
		}
		public function selectcourselevel(){
			$query  = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_detail as p, tbl_coursename as c, tbl_level as l
				WHERE p.c_Id = c.id  AND p.l_id =l.id
				ORDER BY p.id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function adminassigncontent($data,$lId, $cId){
		
		$tId = $this->fm->validation($data['t_Id']);

	
		$tId = mysqli_real_escape_string($this->db->link, $tId);



		if (empty($tId)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_topiccontent(c_Id, l_Id, t_Id) VALUES('$cId', '$lId', '$tId')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'> Topic Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Topic Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}


	
}//main


