<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		// $this->load->helper(array('auth/login_rules_helper'));
	}
	public function index()
	{	
		$this->load->view('Layouts/header');
		$this->load->view('Login');
		$this->load->view('Layouts/footer');
	
		if(isset($_POST['passw']))
		$this->load->model('Login_Model');
		if($this->Login_Model->login($_POST['user'], $_POST['passw'])){
			redirect('Login');
		}else{
			redirect('welcome');
		}
	}	
		
		
}
	