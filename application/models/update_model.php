<?php
class Update_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function form_update($data){
		$this->load->helper('url');
		if (!isset($_POST['logout'])) {
			# code...
			
			$this->db->update('users', $data);
			//redirect(member_area);
			$query = $this->db->get_where('users', array('email' => $email));
			$row=$query->row_array();		
			$this->load->view('users',$row);
		}
	}
	
}
?>
