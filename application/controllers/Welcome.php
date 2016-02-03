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
			'firm' => $this->input->post('firm'),
			'designation' => $this->input->post('des'),
			'field_of_work' => $this->input->post('work'),
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




		$this->load->view('dashboard', $_POST);

	}

	public function member_area() {
		$email=$_POST['eid'];
		$query = $this->db->query("SELECT * FROM users WHERE email=$email");
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			if($row['password']==$_POST['pass']){
				session_start();
				$_SESSION['name']=$row['name'];
				$_SESSION['email']=$_POST['eid'];
				$this->load->view('home', $row);
			}

		}
	}
}
