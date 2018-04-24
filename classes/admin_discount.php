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



	public function insertdiscount($data,$serverIP,$date,$time,$adminId){
		$c_Id = $this->fm->validation($data['c_Id']);
		$l_Id = $this->fm->validation($data['l_Id']);
		$discount = $this->fm->validation($data['discount']);
		$edate = $this->fm->validation($data['edate']);

		$c_Id = mysqli_real_escape_string($this->db->link, $c_Id);
		$l_Id = mysqli_real_escape_string($this->db->link, $l_Id);
		$discount = mysqli_real_escape_string($this->db->link, $discount);
		$edate = mysqli_real_escape_string($this->db->link, $edate);

		$Squery = "SELECT * FROM tbl_price WHERE cId = '$c_Id' AND lid = '$l_Id'";
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
    				 
			 		$query = "INSERT INTO   tbl_price_discount(cid, lid, price, discount, ddate,edate,adminid) VALUES('$c_Id', '$l_Id', '$price', '$discount','$date', '$edate','$adminId')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green'>Adding Course, level and discount is completed</span>";
			    	 	return $msg;
			    	 }else{
			    	 $msg = "<span style='color:red'>Adding Course, level and discount is not Completed</span>";
			    	 	return $msg;
			    	 }
		}

}
public function getdiscount(){
		$query = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_price_discount as p, tbl_coursename as c, tbl_level as l WHERE p.cid = c.id AND p.lid = l.id";
		$result = $this->db->select($query);
		return $result;
}
}