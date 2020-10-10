<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

	
   public function insertUser() { 
       $user = array(
         "user" => "gasa",
         "password"=> "12345",
         "name" => "Giovanny",
         "lastname" => "Sanchez",
         "email" => "djjho@gmaiol.com",
         "cell" => "12345",
         "address" => "12345 avav"
       );
       $this->db->insert("users",$user);
       return 'user added S';
   } 
   public function updateUser() { 
        
   } 
   public function listUser() { 
        
   } 
   public function deleteUser() { 
        
   } 
}