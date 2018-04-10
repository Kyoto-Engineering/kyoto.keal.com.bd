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
		$query = "SELECT p.*, c.name FROM tbl_stud_reg as p , tbl_course as c WHERE p.courseId = c.id AND p.id = '$uId'";
		$result = $this->db->select($query);
		return $result;
	}

}
?>