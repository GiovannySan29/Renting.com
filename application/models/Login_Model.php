<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public  function login_validation($user, $passw, $typeUsers)
	{
        $this->db->where('user',$user);
        $this->db->where('passw',$passw);
        $this->db->where('typeUsers',$typeUsers);
        $r =  $this->db->get('users');
        if($r->num_rows()>0){
            return true;
        }
        else{
            return false;
        }
	}
   
}
