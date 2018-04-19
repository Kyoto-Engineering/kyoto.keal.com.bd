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
		    $query  = "SELECT p.*, c.name, l.levelName
				FROM tbl_detail as p, tbl_course as c, tbl_level as l
				WHERE p.c_Id = c.id  AND p.l_id =l.id
				ORDER BY p.id DESC";
			$result = $this->db->select($query);
			return $result;
		}



	
}//main


