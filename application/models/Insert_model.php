<?php
class Insert_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function form_insert($data,$data1,$data2){
		if (!isset($_POST['logout'])){
			# code...
			
			$this->db->insert('users', $data);
			$this->db->insert('contact', $data1);
			$this->db->insert('preferences', $data2);
		}
	}
	
}
?>
