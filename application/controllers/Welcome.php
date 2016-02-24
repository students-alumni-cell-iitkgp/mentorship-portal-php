<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');	
	}
	
	public function users() {
		$this->load->database();
		$this->load->model('insert_model');
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'department' => $this->input->post('department'),
			'hall' => $this->input->post('hall'),
			'roll' => $this->input->post('roll'),
			'cgpa' => $this->input->post('cgpa'),
			'current_acad_year' => $this->input->post('current'),
			'join_year' => $this->input->post('join'),
			'passout_year' => $this->input->post('pout'),
			'no_of_mentees' => $this->input->post('mentee') 
			);
		$data1 = array(
			'phone' => $this->input->post('phone'),
			'organisation' => $this->input->post('firm'),
			'designation' => $this->input->post('des'),
			'email' => $this->input->post('email') );
		$data2 = array(
			'pref1' => $this->input->post('pref1'),
			'pref2' => $this->input->post('pref2'),
			'pref3' => $this->input->post('pref3'),
			'email' => $this->input->post('email') );


		if($this->input->post('pref1')==''){
			$data2 = array(
				'pref1' => $this->input->post('pref11'),
				'pref2' => $this->input->post('pref22'),
				'pref3' => $this->input->post('pref33'),
				'email' => $this->input->post('email') );

		}
		else{
			$data2 = array(
				'pref1' => $this->input->post('pref1'),
				'pref2' => $this->input->post('pref2'),
				'pref3' => $this->input->post('pref3'),
				'email' => $this->input->post('email') );

		}





		$this->insert_model->form_insert($data,$data1,$data2);




		$this->load->view('home', $_POST);

	}

	
public function member_area()
{
	session_destroy();
	$this->load->database();
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
	else header('Location:index');

	$this->load->model('member_area');
	//$this->load->view('member_area',$_POST);
}



public function validate_credentials()
{			
	$this->load->database();
	//$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]');
	$this->load->model('member_area');
	$query=$this->membership_model->validate();

	if($query)
	{

		$data=array(
			'email'=>$this->input->post('eid'),
			'is_logged_in'=>true
			);
		$this->session->set_userdata($data);
						//$this->load->view('member_area');
		redirect(member_area);
	}
	else
	{
		$this->index();
	}

}

}
