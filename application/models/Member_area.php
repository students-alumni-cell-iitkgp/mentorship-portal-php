<?php
class Member_area extends CI_Model{
	function __construct() {
		parent::__construct();
	}

	function validate()
	{
		# code...
		$this->db->where('email',$this->input->post('email1'));
		$this->db->where('password',$this->input->post('pwd'));
		$query=$this->db->get('users');
		
		if($query->num_rows()==1)
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
