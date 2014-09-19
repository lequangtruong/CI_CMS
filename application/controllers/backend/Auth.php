<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){
	   $data['template'] = 'backend/auth/login';
	   $this->load->view('backend/layout/login',isset($data)?$data:NULL);
	}
	   
}
