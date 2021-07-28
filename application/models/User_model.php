<?php

class User_model extends CI_Model {


public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
}


public function login($email,$password)
	{
		$sql = $this->db->query("select * from user where email='".$email."' and password='".$password."'");
		$data = $sql->result_array();
		return $data;
	}

public function proses_registrasi(){
	$data = array(
		'email'=>$this->input->post('email'),
		'password'=>md5($this->input->post('password')),
		'full_name'=>$this->input->post('full_name'),
		'access'=>'siswa'
	);
	$this->db->insert('user',$data);
}
} ?>
