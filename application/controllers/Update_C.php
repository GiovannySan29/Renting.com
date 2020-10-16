<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_C extends CI_Controller {


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
		$this->users->Update($users);
	}
}