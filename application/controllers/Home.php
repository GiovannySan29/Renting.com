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
	public function Update()
	{
		$this->load->view('Layouts/header');
		$this->load->view('Update');
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
			$identification=$this->db->escape($_POST["identification"]);
			$typeIdentification=$this->db->escape($_POST["typeIdentification"]);
			$this->User_Model->insertUser($user,$passw,$name,$lastname,$email,$identification,$typeIdentification);
     	}
	}
	public function UpdateUser(){
		$this->load->view('Layouts/header');
		$this->load->view('UpdateUser');
        $this->load->view('Layouts/footer');
		$id =$this->input->get('id');
		$user =$this->input->post('user');
		$passw =$this->input->post('pasw');
		$name =$this->input->post('name');
		$lastname =$this->input->post('lastname');
		$email =$this->input->post('email');
		$identification =$this->input->post('identification');
		$typeIdentification =$this->input->post('TypeIdentification');
		$users = array(
			'user' =>$user,
			'passw' =>$passw,
			'name' =>$name,
			'lastname' =>$lastname,
			'email' =>$email,
			'identification' => $identification,
			'TypeIdentification' =>$typeIdentification
		);
		// $this->users->Update($users);
	}
}
