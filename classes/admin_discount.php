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



	public function insertdiscount($data,$serverIP,$date,$time){
		$c_Id = $this->fm->validation($data['c_Id']);
		$l_Id = $this->fm->validation($data['l_Id']);
		$discount = $this->fm->validation($data['discount']);
		$edate = $this->fm->validation($data['edate']);

		$c_Id = mysqli_real_escape_string($this->db->link, $c_Id);
		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);
		$discount = mysqli_real_escape_string($this->db->link, $discount);
		$edate = mysqli_real_escape_string($this->db->link, $edate);

		$Squery = "SELECT * FROM tbl_price WHERE id = '$c_Id'";
		$result = $this->db->select($Squery);
		if ($result) {
			while($data = $result->fetch_assoc()){
				$price = $data['price'];
			}
		}


		if (empty($c_Id) || empty($l_Id) || empty($discount)) {
			$logmsg = "<span style='color:red'>Field Must Not be Empty!!</span>";
			return $logmsg;
		}else{
    				 
			 		$query = "INSERT INTO   tbl_price_discount(cid, lid, discount, ddate,edate) VALUES('$c_Id', '$l_Id', '$discount','$date', '$edate')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Adding Course, level and discount Complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Adding Course, level and discount Not Complete</span>";
			    	 	return $msg;
			    	 }
		}

}
}