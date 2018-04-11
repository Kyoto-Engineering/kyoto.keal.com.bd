<?php include_once "lib/Database.php"; ?>
<?php include_once "helpers/Format.php"; ?>
<?php
/**
* 
*/
class Module
{
	
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function getSinglestudent($uId){
		$query = "SELECT * FROM tbl_stud_reg  WHERE id = '$uId'";
		$result = $this->db->select($query);
		return $result;
	}

	public function classSchedule($courseId){
		$query = "SELECT * FROM tbl_schedule WHERE course = '$courseId'";
		$result = $this->db->select($query);
		return $result;
	}

	public function recentUpdates(){
		$query = "SELECT * FROM tbl_notice ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;		
	}

}
?>