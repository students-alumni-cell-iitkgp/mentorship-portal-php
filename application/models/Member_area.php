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
		//$email=$this->input->post('email1');
		//$q=$this->db->query("SELECT * FROM users WHERE email=$email1");
		//$row = $q->row_array();
		if($query->num_rows == 1)
		{
			//echo "1";
			return true;
		}
		else
		{
			return false;
		}

	}
	
}
?>
