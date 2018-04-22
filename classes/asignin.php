<?php
	  include_once ('../lib/Session.php');
     Session::checkLogin();

	 include_once ('../lib/database.php');
	 include_once ('../helpers/format.php');


?>

<?php
/**
* Adminlogin class
*/
class Adminuserlogin
{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function HumanResource($email, $pass){

		$adminUser = $this->fm->validation($email);
		$adminPass = $this->fm->validation($pass);

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
				Session::set("adminName", $value['nameame']);
				// Session::set("adminUser", $value['adminUser']);
				header("Location:index.php");
			}else{
				$logmsg = "Username Or Password Not Match!!";
			    return $logmsg;
			}
		}
	}
}
?>