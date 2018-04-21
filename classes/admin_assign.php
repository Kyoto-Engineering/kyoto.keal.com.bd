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

		$query = "SELECT * FROM tbl_coursename ORDER BY ID DESC";

		$result= $this->db->select($query);

		return $result;

}


	public function viewlevel(){

		$query = "SELECT * FROM tbl_level ORDER BY ID DESC";

		$result = $this->db->select($query);
		return $result;

	}
	public function viewcontent(){
		$query = "SELECT * FROM tbl_topic ORDER BY ID DESC";
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




	
}//main


