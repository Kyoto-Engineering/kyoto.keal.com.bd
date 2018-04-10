<?php include_once "lib/Database.php"; ?>
<?php include_once "lib/Session.php"; 
Session::checkLogin();
?>
<?php include_once "helpers/Format.php"; ?>
<?php
class SignUp
{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}



public function userLogin($studentName, $email,$phone, $dob ,$gender, $courseId, $level){
	
		$studentName     = mysqli_real_escape_string($this->db->link,$studentName);
		$email     		 = mysqli_real_escape_string($this->db->link,$email);
		$phone    		 = mysqli_real_escape_string($this->db->link,$phone);
		$dob      		 = mysqli_real_escape_string($this->db->link,$dob);
		$gender    	  	 = mysqli_real_escape_string($this->db->link,$gender);
		$courseId      	 = mysqli_real_escape_string($this->db->link,$courseId);

		if ($studentName == "" || $email == "" || $phone == "" || $phone == "" || $dob == "" || $gender == "" || $courseId =="") {
			
			$msg = "<span style='color:#fff'>Field Must Not Be Empty!!</span>";
			return $msg;
		}
		
		//email field must be uniqe so for doing uniqe need to do
		$query = "SELECT * FROM tbl_stud_reg WHERE email = '$email' OR phone= '$phone'  LIMIT 1";
		$mailchk   = $this->db->select($query);
		if ($mailchk != false) {
			$msg = "<span style='color:#fff'>Email Or Phone Number Already exist!!</span>";
			return $msg;
			//email unique has done

		}else{
			
					
				
						$query = "INSERT INTO tbl_stud_reg(studentName, email, phone, dob, gender, courseId, level) VALUES('$studentName', '$email', '$phone', '$dob', '$gender', '$courseId', '$level')";
	    	 			$inserted_row = $this->db->insert($query);
	    	 			//<!--Email generator-->
	    	 			if($inserted_row){?>
	    	 			<script>
	    	 				window.location = 'view.php?level=<?php echo $level;?>'
	    	 			</script>
	    	 			<?php } else{

	    	 			}
			}


}



public function getCourse(){
		$query = "SELECT * FROM tbl_course ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}

public function usersignin($data){
	$email = $this->fm->validation($data['email']);
	$pass = $this->fm->validation($data['pass']);

	$email = mysqli_real_escape_string($this->db->link, $email);
	$pass = mysqli_real_escape_string($this->db->link, $pass);

	if ($email == "") {
		$msg = "Your Email Is Empty!!";
		return $msg;
	}elseif ($pass == "") {
		$msg = "Your Password Is Empty!!";
		return $msg;
	}else{
			$query = "SELECT * FROM tbl_stud_reg WHERE email = '$email' AND phone = '$pass'";
			$result = $this->db->select($query);
			if ($result !=false) {
				$value = $result->fetch_assoc();
				Session::set("login", true);
				Session::set("userId",   $value['id']);
				Session::set("userName", $value['studentName']);
				Session::set("courseId",   $value['courseId']);
				
				header("Location:index.php");
			}else{
				$logmsg = "Username Or Password Not Match!!";
			    return $logmsg;
			}
	}

}




}//main


