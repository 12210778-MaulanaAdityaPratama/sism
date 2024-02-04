<?php 
class register extends CI_Controller{
	function __construct(){
		parent::__construct();	
        $this->load->model('user_model');	
        $this->load->library('form_validation');

	}
	function index(){
        
		$this->load->view('register');

}
public function add()
{
    $register = $this->user_model;
    $validation = $this->form_validation;
    $validation->set_rules($register->rules());
       if ($validation->run()) {
        $register->save();
        $this->session->set_flashdata('success', 'Pendaftaran Berhasil');
    }
    $this->load->view("register");
}
}