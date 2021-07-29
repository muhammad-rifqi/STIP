<?php

class User extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
		$this->load->library('session');
  }



	public function dashboard() {
	  $t['info'] = $this->session->userdata('full_name');
      if($t['info'] == TRUE){
	  $a['header'] =  $this->load->view('layout/header',null, true);
	  $a['footer'] =  $this->load->view('layout/footer',null, true);
	  $a['content'] =  $this->load->view('dashboard/content',$t, true);
	  $page = $this->load->view('layout',$a);
	  return $page;
      }else{
          redirect(base_url());
      }
  }

  
	public function ruangkelas() {
	  $t['info'] = $this->session->userdata('full_name');
    if($t['info'] == TRUE){
	  $a['header'] =  $this->load->view('layout/header',null, true);
	  $a['footer'] =  $this->load->view('layout/footer',null, true);
	  $a['content'] =  $this->load->view('ruangkelas/content',$t, true);
	  $page = $this->load->view('layout',$a);
	  return $page;
      }else{
          redirect(base_url());
      }
  }

  
	public function obrolan() {
	  $t['info'] = $this->session->userdata('full_name');
    if($t['info'] == TRUE){
	  $a['header'] =  $this->load->view('layout/header',null, true);
	  $a['footer'] =  $this->load->view('layout/footer',null, true);
	  $a['content'] =  $this->load->view('obrolan/content',$t, true);
	  $page = $this->load->view('layout',$a);
	  return $page;
      }else{
          redirect(base_url());
      }
  }

  
	public function jelajah() {
	  $t['info'] = $this->session->userdata('full_name');
    if($t['info'] == TRUE){
	  $a['header'] =  $this->load->view('layout/header',null, true);
	  $a['footer'] =  $this->load->view('layout/footer',null, true);
	  $a['content'] =  $this->load->view('jelajah/content',$t, true);
	  $page = $this->load->view('layout',$a);
	  return $page;
      }else{
          redirect(base_url());
      }
  }


  public function profile() {
	$t['info'] = $this->session->userdata('full_name');
  	if($t['info'] == TRUE){
	$a['header'] =  $this->load->view('layout/header',null, true);
	$a['footer'] =  $this->load->view('layout/footer',null, true);
	$a['content'] =  $this->load->view('profile/content',$t, true);
	$page = $this->load->view('layout',$a);
	return $page;
	}else{
		redirect(base_url());
	}
}

  public function logout ()
  {
      $this->session->sess_destroy();
      redirect(base_url());
  }

	
}
