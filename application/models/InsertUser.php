<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertUser extends CI_Model {

	public function index()
	{
		$this->load->view('Layouts/header');
		$this->load->view('register');
		$this->load->view('Layouts/footer');
    }
    function __construct() { 
        parent::__construct(); 
     } 
  
     public function insert($data) { 
        if ($this->db->insert("users", $data)) { 
           return true; 
        } 
     } 
    
	
}