<?php

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
		$this->load->library('session');
  	}


	public function proses_login() {
		$this->load->library('session');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model('User_model','proses_login');
		$data['log'] = $this->proses_login->login($email,$password);
		$cek = count($data['log']);
		if($cek > 0) {
			$newdata = array(
				'id_user'=> $data['log'][0]['id_user'],
				'email' => $data['log'][0]['email'],
				'password' => $data['log'][0]['password'],
				'full_name' => $data['log'][0]['full_name'],
				'access' => $data['log'][0]['access']
			);
			$this->session->set_userdata($newdata);
			redirect(base_url().'user/dashboard');
		} else {
			$this->session->set_flashdata('msg', 'Username/Password Not Match!');
			redirect(base_url());
		}
  
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function forgotpassword()
	{
		$this->load->view('forgotpassword');
	}
	
	
public function proses_register(){
	if($this->input->post('password') == $this->input->post('password2')){
		$this->load->model('User_model','foto');
		$this->foto->proses_registrasi();
		$this->session->set_flashdata('success', 'Success Registered!');
		redirect(base_url('register'));
	}else{
		$this->session->set_flashdata('failed', 'Failed Registered!');
		redirect(base_url('register'));
	}

}


	
}
