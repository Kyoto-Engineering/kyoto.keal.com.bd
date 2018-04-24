<?php include_once "../lib/Database.php"; ?>
<?php include_once "../lib/Session.php"; 

?>
<?php include_once "../helpers/Format.php"; ?>
<?php
class Admin
{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}




public function adminlogin($data){
	$email = $this->fm->validation($data['email']);
	$pass = $this->fm->validation($data['pass']);

	$email = mysqli_real_escape_string($this->db->link, $email);
	$pass = mysqli_real_escape_string($this->db->link, md5($pass));
	
    
	if ($email == "") {
		$msg = "Your Email Is Empty!!";
		return $msg;
	}elseif ($pass == "") {
		$msg = "Your Password Is Empty!!";
		return $msg;
	}else{
			$query = "SELECT * FROM tbl_admin WHERE email = '$email' AND pass = '$pass'";
			$result = $this->db->select($query);
			if ($result !=false) {
				
				
				header("Location:index.php");
			}else{
				$logmsg = "Username Or Password Not Match!!";
			    return $logmsg;
			}
	}

}




}//main


