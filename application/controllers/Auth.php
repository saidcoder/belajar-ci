<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/template/auth_header');
		$this->load->view('auth/login');
		$this->load->view('auth/template/auth_footer');

	}
}
