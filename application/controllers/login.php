<?php 
session_start();
class login extends CI_Controller{
	function __construct(){
		
		parent::__construct();		
		$this->load->library('session');
		$this->load->model('m_login');
		$this->load->library('form_validation');
	}
	function index(){
		$this->load->view('login');
	}
	function aksi_login(){
		$email = $this->input->post('email');
		$sandi = $this->input->post('sandi');
		$where = array(
			'email' => $email,
			'sandi' => $sandi
		);
		
		$user = $this->m_login->cek_login("user", $where);
		
		if ($user) {
			$data_session = array(
				'email' => $email,
				'level' => $user['level'],
				'status' => "login"
			);
		
			$this->session->set_userdata($data_session);
		
			// Redirect sesuai level tanpa menampilkan level di URL
			if ($user['level'] == 'rt') {
				redirect(base_url('rt'));
			} else if ($user['level'] == 'warga') {
				redirect(base_url('warga'));
			} else {
				redirect(base_url('login'));
			}
		} else {
			$data['error_message'] = "Username dan Sandi salah!";
			$this->load->view('login', $data);
		}
	}
			
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}