<?php
class Update_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	function form_update($data,$data1){
		$this->load->helper('url');
		if (!isset($_POST['logout'])) {
			# code...
			
			
			//$sql=Select * From 'users' where
			$email=$_POST['eid'];

			$this->db->where('email',$email);
			$this->db->update('users', $data);
			$email=$_POST['eid'];

			$this->db->where('email',$email);
			$this->db->update('contact', $data1);
			//redirect(member_area);
			if(!isset($_POST['logout'])){
				$email=$_POST['eid'];
		//var $query1,$query2;
				$query = $this->db->get_where('users', array('email' => $email));
				$query1 = $this->db->get_where('contact', array('email' => $email));
				$query2 = $this->db->get_where('preferences', array('email' => $email));
				$row=$query->row_array();		
				if ($query->num_rows()>0) {
					$row = $query->row_array();	$row1 = $query1->row_array();
					if($row['password']==$_POST['pass']){
						$this->load->view('users', $row );
					}
					else header('Location:index/?err=pass');

				}
				else header('Location:index/?err=user');
				

			}
		}
		else header('Location:index');

	}
	
}
?>
