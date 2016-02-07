<?php
class Member_area extends CI_Model{
	function __construct() {
		parent::__construct();
	}

	function validate()
	{
		# code...
		$this->db->where('email',$this->input->post('eid'));
		$this->db->where('password',$this->input->post('pass'));
		$query=$this->db->get('users');
<<<<<<< HEAD
		$email=$this->input->post('email1');
		$q=$this->db->query("SELECT * FROM users WHERE email=$email");
		$row = $q->row_array();
		if($query->num_rows()>=1)
=======
		//$email=$this->input->post('email1');
		//$q=$this->db->query("SELECT * FROM users WHERE email=$email1");
		//$row = $q->row_array();
		if($query->num_rows == 1)
>>>>>>> 0f42444c8afa6505c426a3eb0a37c5034bf1182b
		{
			//echo "1";
			return $row;
		}
		else
		{
			return false;
		}

	}
	
}
?>
