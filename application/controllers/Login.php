<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->library('form_validation');
		
	}
	public function login()
	{	$this->load->model('Login_Model');
		
	
		if(isset($_POST['passw']))
		$this->load->model('Login_Model');
		if($this->Login_Model->login($_POST['user'], $_POST['passw'])){
			$this->load->view('Layouts/header');
			$this->load->view('home');
			$this->load->view('Layouts/footer');
		}else{
			$this->load->view('Layouts/header');
			$this->load->view('sign_in_V');
			$this->load->view('Layouts/footer');
		}
		
	}	
	
}