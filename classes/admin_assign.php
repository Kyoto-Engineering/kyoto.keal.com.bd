<?php include_once "../lib/Database.php"; ?>
<?php include_once "../lib/Session.php"; 

?>
<?php include_once "../helpers/Format.php"; ?>
<?php
class Adminassign
{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function viewCourse(){

		$query = "SELECT * FROM tbl_coursename ORDER BY id DESC";

		$result= $this->db->select($query);

		return $result;

}


	public function viewlevel(){

		$query = "SELECT * FROM tbl_level ORDER BY id DESC";

		$result = $this->db->select($query);
		return $result;

	}
	public function viewcontent(){
		$query = "SELECT * FROM tbl_topic ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}


	public function adminassign($data){
		$c_Id = $this->fm->validation($data['c_Id']);
		$l_Id = $this->fm->validation($data['l_Id']);

		$c_Id = mysqli_real_escape_string($this->db->link, $c_Id);
		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);



		if (empty($c_Id) || empty($l_Id)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_detail(c_Id, l_Id) VALUES('$c_Id', '$l_Id')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Adding course and level  Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Adding course and level Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}

public function assignAge($data){
		
		$l_Id = $this->fm->validation($data['l_Id']);
		$ageF = $this->fm->validation($data['ageF']);
		$ageT = $this->fm->validation($data['ageT']);

		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);
		$ageF = mysqli_real_escape_string($this->db->link, $ageF);
		$ageT = mysqli_real_escape_string($this->db->link, $ageT);




		if (empty($l_Id) || empty($ageF) || empty($ageT)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_age(l_Id, ageF , ageT) VALUES('$l_Id', '$ageF', '$ageT')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Assign Age Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Assign Age Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}

public function viewprogram(){

		$query = "SELECT * FROM tbl_program ORDER BY id DESC";

		$result = $this->db->select($query);
		return $result;

	}
public function assignby($data){
		$c_Id = $this->fm->validation($data['c_Id']);
		$l_Id = $this->fm->validation($data['l_Id']);
		$p_Id = $this->fm->validation($data['p_Id']);

		$c_Id = mysqli_real_escape_string($this->db->link, $c_Id);
		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);
		$p_Id = mysqli_real_escape_string($this->db->link, $p_Id);



		if (empty($c_Id) || empty($l_Id) || empty($p_Id)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "INSERT INTO  tbl_subdetail(c_Id, l_Id, p_Id) VALUES('$c_Id', '$l_Id', '$p_Id')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Assign Program by level Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Assign Program by level Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}
      public function getprogramLevel(){
		    $query  = "SELECT p.*, c.courseName, l.levelName, s.step
				FROM tbl_subdetail as p, tbl_coursename as c, tbl_level as l, tbl_program as s
				WHERE p.c_Id = c.id  AND p.l_id =l.id AND p.p_Id=s.id
				ORDER BY p.id DESC";
			$result = $this->db->select($query);
			return $result;
		}

    
       public function delprogramlevel($did){
		$query = "DELETE FROM tbl_subdetail WHERE id = '$did'";
		$result = $this->db->delete($query);		
	}

	public function viewlevelby($id){

		$query = "SELECT * FROM tbl_subdetail WHERE id='$id'";

		$result = $this->db->select($query);
		return $result;

	}

	public function updateassignby($data, $id){
		$c_Id = $this->fm->validation($data['c_Id']);
		$l_Id = $this->fm->validation($data['l_Id']);
		$p_Id = $this->fm->validation($data['p_Id']);

		$c_Id = mysqli_real_escape_string($this->db->link, $c_Id);
		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);
		$p_Id = mysqli_real_escape_string($this->db->link, $p_Id);



		if (empty($c_Id) || empty($l_Id) || empty($p_Id)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}
		


		    
    			else{
    				 
			 		$query = "UPDATE  tbl_subdetail
			 		SET c_Id= '$c_Id',
			 		    l_Id = '$l_Id',
			 		    p_Id = '$p_Id' WHERE id ='$id'" ;
                     $result = $this->db->update($query);


			 		

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Assign Program by level Updated</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Assign Program by level Not not Updated</span>";
			    	 	return $msg;
			    	 }
		}

}

     public function createBatch($data){
		$batch  = $this->fm->validation($data['batch']);
		
		
		$batch	 =mysqli_real_escape_string($this->db->link , $batch);
		

		

		    if ($batch == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	} else {
			    	 
			    	 $query = "INSERT INTO tbl_batch(batch) VALUES('$batch')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Batch Created</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Batch Not Created</span>";
			    	 	return $msg;
			    	 }
			    	}
	}

	public function getBatch(){

		$query = "SELECT * FROM tbl_batch";

		$result = $this->db->select($query);
		return $result;

	}

	 public function delbatch($id){
		$query = "DELETE FROM tbl_batch WHERE id = '$id'";
		$result = $this->db->delete($query);		
	}

public function createLocation($data){
		$location  = $this->fm->validation($data['location']);
		
		
		$location	 =mysqli_real_escape_string($this->db->link , $location);
		

		

		    if ($location == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	} else {
			    	 
			    	 $query = "INSERT INTO tbl_location(location) VALUES('$location')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Location Created</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Location Not Created</span>";
			    	 	return $msg;
			    	 }
			    	}
	}

	public function getLocation(){

		$query = "SELECT * FROM tbl_location";

		$result = $this->db->select($query);
		return $result;

	}

	 public function delLocation($id){
		$query = "DELETE FROM tbl_location WHERE id = '$id'";
		$result = $this->db->delete($query);		
	}
	public function createTrainer($data){
		$trainerName  = $this->fm->validation($data['trainerName']);
		$email  = $this->fm->validation($data['email']);
		$phone  = $this->fm->validation($data['phone']);
		$assignDate  = $this->fm->validation($data['assignDate']);
	
		
		
		
		$trainerName	 =mysqli_real_escape_string($this->db->link , $trainerName);
		$email	 =mysqli_real_escape_string($this->db->link , $email);
		$phone	 =mysqli_real_escape_string($this->db->link , $phone);
		$assignDate	 =mysqli_real_escape_string($this->db->link , $assignDate);


		

		

		    if ($trainerName == "" ||$email=="" || $phone ==""  ) {
		    	 
		    	 $errmsg = "<span style='color:red'>Field Must Not be Empty</span>";
		    	 return $errmsg;

		    	} else {
			    	 
			    	 $query = "INSERT INTO tbl_trainer(trainerName, email, phone, assignDate) VALUES('$trainerName', '$email', '$phone', '$assignDate')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Trainer Created</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Trainer Not Created</span>";
			    	 	return $msg;
			    	 }
			    	}
	}






	
}//main


