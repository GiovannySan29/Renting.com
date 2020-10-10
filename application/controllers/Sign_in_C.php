<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in_C extends CI_Controller {


	public function index()
	{
		$this->load->view('Layouts/header');
		$this->load->view('sign_in_V');
        $this->load->view('Layouts/footer');
	}
	
}
