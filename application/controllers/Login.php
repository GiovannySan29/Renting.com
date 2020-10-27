<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function login()
	{
		if (!isset($_POST['typeUsers'], ($_POST['user']), ($_POST['passw']))) {
			$this->load->model('Login_Model');
		}
		if ($this->Login_Model->login_validation($_POST['user'], $_POST['passw'], $_POST['typeUsers'])) {
			if ($r = $typeUsers = 'Client' && $typeUsers = 'admin' && $user = 'user' && $passw = 'passw') {

				$this->load->view('Layouts/header');
				$this->load->view('crud_V');
				$this->load->view('Layouts/footer');
			} else {
				return $r;
			}
		} else {
			$this->load->view('Layouts/header');
			$this->load->view('home');
			$this->load->view('Layouts/footer');
		}
	}
}
