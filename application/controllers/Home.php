<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('Layouts/header');
		$this->load->view('home');
        $this->load->view('Layouts/footer');
	}
	public function house()
	{	
		$this->load->view('Layouts/header');
		$this->load->view('house');
        $this->load->view('Layouts/footer');
	}
	public function cabins()
	{	$this->load->view('Layouts/header');
		$this->load->view('cabins');
        $this->load->view('Layouts/footer');
	}
	public function hotels()
	{	
		$this->load->view('Layouts/header');
		$this->load->view('hotels');
        $this->load->view('Layouts/footer');
	}
	public function register()
	{
		$this->load->view('Layouts/header');
		$this->load->view('sign_in_V');
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
		$this->load->view('Update_V');
        $this->load->view('Layouts/footer');
	}
	public function delete()
	{
		$this->load->view('Layouts/header');
		$this->load->view('delete_V');
        $this->load->view('Layouts/footer');
	}
	public function crud(){
		// $this->load->view('Layouts/header');
		$this->load->view('crud_V');
		$this->load->view('Layouts/footer');
	}
	public function admin(){
		$this->load->view('Layouts/header');
		$this->load->view('Admin_V');
		$this->load->view('Layouts/footer');
	}
	public function guardar()
	{
		$this->load->view('Layouts/header');
		$this->load->view('home');
		$this->load->view('Layouts/footer');
	}
	
}
