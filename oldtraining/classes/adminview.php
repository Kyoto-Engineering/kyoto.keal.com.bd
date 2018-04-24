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

}//main


