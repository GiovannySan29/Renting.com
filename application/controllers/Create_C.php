<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_C extends CI_Controller {


	public function index()
	{
		$this->load->view('Layouts/header');
		$this->load->view('home');
        $this->load->view('Layouts/footer');
	}
	 
}
