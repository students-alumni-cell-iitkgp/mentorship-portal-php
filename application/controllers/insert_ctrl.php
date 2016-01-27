<?php
class Insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}
function index() {

$data = array(
'name' => $this->input->post('name'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password'),
'department' => $this->input->post('department')
);/**
 * @utsav add field here and also make proper connection
 */
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('welcome_message', $data);
}
}

}
?>