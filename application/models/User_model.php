<?php  
 class User_model extends CI_Model{

	 function authUser($username,$password) {
	 	 $query = $this->db->get_where('customer',array('username'=> $username,'password' => $password));
	 	 return $query ->row();
	 }

	 public function createUser($firstname,$lastname,$username,$email,$phone,$password,$conf_password) {
	 	if ($password === $conf_password){
	 		$pass = $conf_password;
			return $this->db->insert('customer', array('first_name'=>$firstname,'last_name'=>$lastname,'username'=>$username,'email'=>$email,'phone_number'=>$phone,'password'=>$pass));
		} else {
	 		echo "Passwords do not match!<br>";
		}
	 }
 }  
