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

         public function assignPrice($data){
		$cId = $this->fm->validation($data['cId']);
		$lid = $this->fm->validation($data['lid']);
		$price = $this->fm->validation($data['price']);
		$duration = $this->fm->validation($data['duration']);

		$c_Id = mysqli_real_escape_string($this->db->link, $cId);
		$l_Id = mysqli_real_escape_string($this->db->link, $lid);
		$price = mysqli_real_escape_string($this->db->link, $price);
		$duration = mysqli_real_escape_string($this->db->link, $duration);



		if (empty($c_Id) || empty($l_Id) || empty($price) || empty($duration)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_price(cId, lid, price , duration) VALUES('$cId', '$lid', '$price', '$duration')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Assign Price & Duration Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Assign Price & Duration Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}

     public function viewassigncourselevel($id){
		    $query  = "SELECT * FROM  tbl_detail WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}

		public function updateAssignLevel($data, $id){
		$c_Id = $this->fm->validation($data['c_Id']);
		$l_Id = $this->fm->validation($data['l_Id']);

		$c_Id = mysqli_real_escape_string($this->db->link, $c_Id);
		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);



		if (empty($c_Id) || empty($l_Id)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "UPDATE tbl_detail

			 		         SET  c_Id='$c_Id',
			 		              l_Id='$l_Id'
			 		           WHERE id='$id'";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Updated course and level  Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Updated course and level Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}

       public function delassignlevel($did){
		$query = "DELETE FROM tbl_detail WHERE id = '$did'";
		$result = $this->db->delete($query);		
	}

	  public function getPriceDuration(){
			$query  = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_price as p, tbl_coursename as c, tbl_level as l
				WHERE p.cId = c.id  AND p.lid =l.id
				ORDER BY p.id DESC";
			$result = $this->db->select($query);
			return $result;
		}

		public function delpriceduration($did){
		$query = "DELETE FROM tbl_price WHERE id = '$did'";
		$result = $this->db->delete($query);		
	}

	 public function getpriceby($id){
		    $query  = "SELECT * FROM  tbl_price WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}



	 public function updatePrice($data, $id){
		$cId = $this->fm->validation($data['cId']);
		$lid = $this->fm->validation($data['lid']);
		$price = $this->fm->validation($data['price']);
		$duration = $this->fm->validation($data['duration']);

		$c_Id = mysqli_real_escape_string($this->db->link, $cId);
		$l_Id = mysqli_real_escape_string($this->db->link, $lid);
		$price = mysqli_real_escape_string($this->db->link, $price);
		$duration = mysqli_real_escape_string($this->db->link, $duration);



		if (empty($c_Id) || empty($l_Id) || empty($price) || empty($duration)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "UPDATE tbl_price
			 		          SET cId ='$cId',
			 		           lid ='$lid' ,
			 		           price ='$price' ,
			 		           duration = '$duration' WHERE id ='$id'";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Assign Price & Duration Updated</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Assign Price & Duration Not Not Updated</span>";
			    	 	return $msg;
			    	 }
		}

}






	
}//main


