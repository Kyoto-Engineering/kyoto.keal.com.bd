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

	public function getEnrolled($level,$cId,$uId,$date,$time,$serverIP){
		$level = mysqli_real_escape_string($this->db->link, $level);
		$uId   = mysqli_real_escape_string($this->db->link, $uId); 
		$cId   = mysqli_real_escape_string($this->db->link, $cId); 

		$Mquery = "SELECT * FROM tbl_stud_reg WHERE id = '$uId'";
		$select_data = $this->db->select($Mquery);
		if($select_data){
			while($value = $select_data->fetch_assoc()){
				$email = $value['email'];
				$studentName = $value['studentName'];
				
			}
		}
		$query = "INSERT INTO tbl_newenrolled(userId, cId, lId, edate, etime, ip) VALUES('$uId', '$cId', '$level', '$date', '$time', '$serverIP')";
		$update_data = $this->db->insert($query);
						if($update_data){

							?>
                                 <script>
                                alert('Congratulation!! You are Successfully enrolled on your preffered course!');
                                window.location.href='index.php?success';
                                </script>
                            <?php


							$headers = 'From: '.$email."\r\n".
							 
							'Reply-To: '.$email."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_to = "recruitment@keal.com.bd";
							$email_subject= "Enrollment Confirmation";
							$email_message= "
This person has been registered and sent for email verification:
Name : $studentName,
Email : $email";
							
							


							$headers1 = 'From: '.$email_to."\r\n".
							 
							'Reply-To: '.$email_to."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_subject1= "Enrollment Confirmation";
		  $email_message1= "
Dear $studentName,

Welcome Aboard!!
 
Thank you for signing up in our recruitment program.
 

 
Good Luck!!";

	                    mail("<$email_to>","$email_subject","$email_message","$headers");

							mail("<$email>","$email_subject1","$email_message1","$headers1");

						}else{
			echo "Not Enrolled";
		}
	}

	public function getCourses(){
		$query = "SELECT * FROM tbl_coursename ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

public function getCourseDetail($id){
		$query = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_detail as p, tbl_coursename as c, tbl_level as l WHERE p.c_Id = c.id AND p.l_Id = l.id AND p.c_Id='$id'";
		$result = $this->db->select($query);
		return $result;
	}
	public function getCourseDetailLimit($id){
		$query = "SELECT * FROM tbl_coursename WHERE id='$id' LIMIT 1";
		$result = $this->db->select($query);
		return $result;
	}
		public function getLevelDetailLimit($id){
		$query = "SELECT * FROM tbl_level WHERE id='$id' LIMIT 1";
		$result = $this->db->select($query);
		return $result;
	}

	public function getCourseprice($id){
		$query = "SELECT * FROM tbl_price WHERE cId = '$id'";
		$result = $this->db->select($query);
		return $result;
	}

	public function getlevel(){
		$query = "SELECT * FROM tbl_level";
		$result = $this->db->select($query);
		return $result;		
	}

	public function getprogramDetail($id){
		$query = "SELECT p.*, c.courseName, l.levelName, t.topicName 
				FROM tbl_topiccontent as p, tbl_coursename as c, tbl_level as l, tbl_topic as t WHERE p.c_Id = c.id AND p.t_Id = t.id AND p.l_Id = l.id AND p.l_Id='$id'";
		$result = $this->db->select($query);
		return $result;		
	}

	public function gettopicby($id, $lId){
		$query = "SELECT p.t_Id, t.topicName 
				FROM tbl_topiccontent as p, tbl_topic as t  WHERE p.t_Id = t.id  AND  p.c_Id='$id' AND p.l_Id='$lId' LIMIT 6";
		$result = $this->db->select($query);
		return $result;
	}

	public function getusertopicby($courseId, $levelId){
		$query = "SELECT p.*, t.topicName 
				FROM tbl_topiccontent as p, tbl_topic as t  WHERE p.t_Id = t.id  AND  p.c_Id='$courseId' AND p.l_Id='$levelId'";
		$result = $this->db->select($query);
		return $result;	
	}
	// start
	public function getprogram($id){
		$query = "SELECT p.*, c.courseName, l.levelName 
				FROM tbl_detail as p, tbl_coursename as c, tbl_level as l WHERE p.c_Id = c.id AND p.l_Id = l.id AND p.l_Id='$id'";
		$result = $this->db->select($query);
		return $result;		
	}

	public function getleveltopicby($id, $cId){
		$query = "SELECT p.t_Id, t.topicName 
				FROM tbl_topiccontent as p, tbl_topic as t  WHERE p.t_Id = t.id  AND  p.c_Id='$cId' AND p.l_Id='$id' LIMIT 5";
		$result = $this->db->select($query);
		return $result;		
	}
// end
	public function getcoursenameby($courseId){
		$query = "SELECT * FROM tbl_coursename";
		$result = $this->db->select($query);
		return $result;	
	}
	public function getlevelby($levelId){
		$query = "SELECT * FROM tbl_level WHERE id = '$levelId'";
		$result = $this->db->select($query);
		return $result;
	}

	public function getallcourse(){
		$query = "SELECT * FROM tbl_detail";
		$result = $this->db->select($query);
		return $result;		
	}

	public function getallcourseby($courses){
		$query = "SELECT p.*, c.courseName, l.levelName
				FROM tbl_detail as p, tbl_coursename as c, tbl_level as l  WHERE p.c_Id = c.id AND p.l_Id = l.id AND p.c_Id='$courses'";
		$result = $this->db->select($query);
		return $result;
	}

	public function getallCourseprice($courses){
		$query = "SELECT * FROM tbl_coursename";
		$result = $this->db->select($query);
		return $result;	
	}

	public function getallcoursetopic($courses, $level){
		$query = "SELECT p.*, t.topicName FROM tbl_topiccontent as p, tbl_topic as t  WHERE p.t_Id = t.id  AND p.c_Id='$level' AND p.c_Id='$courses'";
		$result = $this->db->select($query);
		return $result;	
	}

	public function getCoursePriceDetail($cId, $level){
		$query = "SELECT p.*, c.courseName 
					FROM tbl_detail as p, tbl_coursename as c WHERE p.c_Id= c.id AND p.c_Id='$cId' AND p.l_Id = '$level'";
		$result = $this->db->select($query);
		return $result;	
	}

		public function getprices($cId){
		$query = "SELECT * FROM tbl_price WHERE cId = '$cId'";
		$result = $this->db->select($query);
		return $result;	
	}
	public function getyoungstar(){
		$query = "SELECT * FROM tbl_level WHERE levelName = 'YOUNGSTAR'";
		$result = $this->db->select($query);
		return $result;		    
	}
}
?>