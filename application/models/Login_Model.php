<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function login($user, $passw)
	{
        $this->db->where('user',$user);
        $this->db->where('passw',$passw);
        $r =  $this->db->get('users');
        if($r->num_rows()>0){
            return true;
        }
        else{
            return false;
        }
	}
    
}