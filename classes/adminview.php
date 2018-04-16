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

            public function courseInsert($data, $file){
		$name  = $this->fm->validation($data['name']);
		$price    = $this->fm->validation($data['price']);
		$quote = $this->fm->validation($data['quote']);
		$status = $this->fm->validation($data['status']);
		
		$name	 =mysqli_real_escape_string($this->db->link , $name);
		$price   		 = mysqli_real_escape_string($this->db->link, $price );
		$quote   = mysqli_real_escape_string($this->db->link, $quote);
		$status  = mysqli_real_escape_string($this->db->link, $status);
		
// 		if($picName == "" || $body == "" || $quatetion == ""){
//  			$errmsg = "<span style='color:red'>Field Must Not Be Empty !!</span>";
// 		    return $errmsg;
// 		}

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		 $file_name = $file['image']['name'];
		 $file_size = $file['image']['size'];
		 $file_temp = $file['image']['tmp_name'];

		      $div            = explode('.', $file_name);
		      $file_ext       = strtolower(end($div));
		      $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
		      $image = "uploads/".$unique_image;


		    if ($image == "") {
		    	 
		    	 $errmsg = "<span style='color:red'>Browse Your Picture First And Submit</span>";
		    	 return $errmsg;

		    	}elseif (in_array($file_ext, $permited) === false) {

		     	echo "<span style='color:red'>You can upload only:-".implode(', ', $permited)."</span>";

    			} else {
			    	 move_uploaded_file($file_temp, $image);
			    	 $query = "INSERT INTO tbl_course(name, price, quote, image, status) VALUES('$name','$price', '$quote' ,'$image' , '$status')";
			    	 $result = $this->db->insert($query);

			    	 if ($result) {
			    	 	$msg = "<span style='color:green;'>Image Upload complete</span>";
			    	 	return $msg;
			    	 }else{
			    	 	$msg = "<span style='color:red;'>Image Upload Not complete</span>";
			    	 	return $msg;
			    	 }
			    	}
	}
}//main


