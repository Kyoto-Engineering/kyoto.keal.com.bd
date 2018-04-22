<?php include_once "libadmin/Session.php"; 
 Session::checkLogin();
?>
<?php include_once "../lib/Database.php"; ?>
<?php include_once "../helpers/Format.php"; ?>
<?php
class Adminlogin
{
	
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}


	public function adminsignIn($adminuser,$admipass){

		$adminUser = $this->fm->validation($adminuser);
		$adminPass = $this->fm->validation($admipass);

		$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
		$adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

		if (empty($adminUser) || empty($adminPass)) {
			$logmsg = "Username Or Password Must Not be Empty!!";
			return $logmsg;
		}else{
			$query = "SELECT * FROM tbl_admin WHERE email = '$adminUser' AND pass = '$adminPass'";
			$result = $this->db->select($query);
			if ($result !=false) {
				$value = $result->fetch_assoc();
				Session::set("login", true);
				Session::set("adminId",   $value['id']);
				Session::set("adminName", $value['name']);
				Session::set("adminUser", $value['email']);
				//header("Location:index.php");
				echo "<script>window.location='index.php'</script>";
			}else{
				$logmsg = "Username Or Password Not Match!!";
			    return $logmsg;
			}
		}
	}

// public function adminlogin($data){
// 	$email = $this->fm->validation($data['email']);
// 	$pass = $this->fm->validation($data['pass']);

// 	$email = mysqli_real_escape_string($this->db->link, $email);
// 	$pass = mysqli_real_escape_string($this->db->link, md5($pass));
	
    
// 	if ($email == "") {
// 		$msg = "Your Email Is Empty!!";
// 		return $msg;
// 	}elseif ($pass == "") {
// 		$msg = "Your Password Is Empty!!";
// 		return $msg;
// 	}else{
// 			$query = "SELECT * FROM tbl_admin WHERE email = '$email' AND pass = '$pass'";
// 			$result = $this->db->select($query);
// 			if ($result !=false) {
				
				
// 				header("Location:index.php");
// 			}else{
// 				$logmsg = "Username Or Password Not Match!!";
// 			    return $logmsg;
// 			}
// 	}

// }




}//main


