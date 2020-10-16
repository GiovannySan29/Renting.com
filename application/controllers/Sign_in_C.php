<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in_C extends CI_Controller {


	public function insertUser(){
		$this->load->view('Layouts/header');
		$this->load->view('login');
		$this->load->view('Layouts/footer');
		$this->load->model('Sign_in_M');
		if($this->input->post())
		{
			$user=$this->db->escape($_POST["user"]);
			$passw=$this->db->escape($_POST["passw"]);
			$name=$this->db->escape($_POST["name"]);
			$lastname=$this->db->escape($_POST["lastname"]);
			$email=$this->db->escape($_POST["email"]);
			$identification=$this->db->escape($_POST["identification"]);
			$typeIdentification=$this->db->escape($_POST["typeIdentification"]);
			$this->Sign_in_M->insertUser($user,$passw,$name,$lastname,$email,$identification,$typeIdentification);
     
		}
		
	}


}
