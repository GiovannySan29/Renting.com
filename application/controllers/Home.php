<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('Layouts/header');
		$this->load->view('home');
        $this->load->view('Layouts/footer');
	}
	public function register()
	{
		$this->load->view('Layouts/header');
		$this->load->view('Sign_in_V');
        $this->load->view('Layouts/footer');
	}
	public function login()
	{
		$this->load->view('Layouts/header');
		$this->load->view('login');
        $this->load->view('Layouts/footer');
	}
	public function insertUser(){
		$response = $this->User_Model->insertUser();
		echo "<h1>$response</h1>";
	}
}
