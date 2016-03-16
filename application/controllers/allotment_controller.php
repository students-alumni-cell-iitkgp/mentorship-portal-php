<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Allotment_controller extends CI_Controller
{
	
	
	public function allot()
	{
		$a= array();
		$b= array();
		$c= array();
		$this->load->database();
		$query = $this->db->query('SELECT * FROM preferences ');
		$row=$query->row_array();
		$a = $row;
		$query = $this->db->query('SELECT * FROM users INNER JOIN preferences ON users.email=preferences.email WHERE cgpa !="" ORDER BY current_acad_year DESC,cgpa DESC  ');
		$row=$query->row_array();
		$b = $row;
		$query = $this->db->query('SELECT * FROM users INNER JOIN preferences ON users.email=preferences.email WHERE passout_year!="" ORDER BY passout_year DESC ');
		$row=$query->row_array();
		$c = $row;

 


	}



}

?>