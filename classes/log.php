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



public function userLogin($studentName, $email,$phone, $dob ,$gender, $courseId){
	
	$studentName     = mysqli_real_escape_string($this->db->link,$studentName );
		$email     = mysqli_real_escape_string($this->db->link,$email);
		$phone     = mysqli_real_escape_string($this->db->link,$phone);
		$dob       = mysqli_real_escape_string($this->db->link,$dob);
		$gender       = mysqli_real_escape_string($this->db->link,$gender);
		$courseId       = mysqli_real_escape_string($this->db->link,$courseId);

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
			
					
				
						$query = "INSERT INTO tbl_stud_reg(studentName, email, phone, dob, gender, courseId) VALUES('$studentName', '$email', '$phone', '$dob', '$gender', '$courseId')";
	    	 			$inserted_row = $this->db->insert($query);
	    	 			//<!--Email generator-->
	    	 			if ($inserted_row) {
						
												?>
                                <script>
                                alert('Please wait untill HR Approve You');
                                window.location.href='training_info.php';
                                </script>
                            <?php


							$headers = 'From: '.$email."\r\n".
							 
							'Reply-To: '.$email."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_to = "recruitment@keal.com.bd";
							$email_subject= "Request for HR approval";
							$email_message= "
Dear $userName,
Your Profile has been created please wait for HR approval. After HR approval you will get Registration panel.
								 
Recruitment Office
Kyoto Engineering & Automation Ltd
B2 House 64 Block B Road 3
Niketon Gulshan Dhaka 1212
								 
Emergency Contact Numbers:
01844046621
01844046666
01844046677";

							


							$headers1 = 'From: '.$email_to."\r\n".
							 
							'Reply-To: '.$email_to."\r\n" .
							 
							'X-Mailer: PHP/' . phpversion();

							$email_subject1= "Request for HR approval";
							$email_message1= "
Dear $userName,
https://career.keal.com.bd/LoginRegistrationForm/admin/activateuser.php?eId=$userId
								 
Recruitment Office
Kyoto Engineering & Automation Ltd
B2 House 64 Block B Road 3
Niketon Gulshan Dhaka 1212
								 
Emergency Contact Numbers:
01844046621
01844046666
01844046677";

							 
							$email_message2= 'Date'.$date."\r\n";
							mail("<$email_to>","$email_subject","$email_message","$headers");

							mail("<$email>","$email_subject1","$email_message1","$headers1");
						
				}else{
					$msg = "<span style='color:red;'>Your Profile Not created Successfully</span>";
					return $msg;
				}
			}


}



public function getCourse(){



		$query = "SELECT * FROM tbl_course ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;
	}




		}

// public function getCourse()
// {
// 	$name = $this->fm->validation('name');
// 	$price = $this->fm->validation('price');

// 	$name     = mysqli_real_escape_string($this->db->link, $name);

// 	f($name == "" || $price == "")
// }
// 	// public function getAllclientfile($uId){
// 	// 	$query = "SELECT * FROM tbl_files WHERE client = '$uId'";
// 	// 	$result = $this->db->select($query);
// 	// 	return $result;
// 	// }

// 	}
