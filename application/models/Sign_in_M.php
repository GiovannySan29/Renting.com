<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in_M extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Sign_in_M");
	}
      public function insertUser( $user, $passw, $name,  $lastname,  $email, $identification, $typeIdentification ) 
      { 
      
        return $name=$this->db->query("INSERT INTO users(user, passw, name, lastname, email ,identification, typeIdentification ) values 
        ({$user}, {$passw}, {$name}, {$lastname},   {$email} ,{$identification},{$typeIdentification })");
      } 
}
     
  
    
