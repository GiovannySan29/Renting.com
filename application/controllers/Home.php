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
		$this->load->view('Login');
        $this->load->view('Layouts/footer');
	}
	
	public function insertUser(){
		$this->load->view('Layouts/header');
		$this->load->view('home');
        $this->load->view('Layouts/footer');
		if($this->input->post())
		{
			$user=$this->db->escape($_POST["user"]);
			$passw=$this->db->escape($_POST["passw"]);
			$name=$this->db->escape($_POST["name"]);
			$lastname=$this->db->escape($_POST["lastname"]);
			$email=$this->db->escape($_POST["email"]);
			$address=$this->db->escape($_POST["address"]);
			$cell=$this->db->escape($_POST["cell"]);
			$this->User_Model->insertUser($user,$passw,$name,$lastname,$email,$address,$cell);
     
		}
	}
	
}
