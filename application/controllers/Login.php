<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
		

		public function login(){
		if (!isset($_POST['typeUsers'],($_POST['user']),($_POST['passw']))){
			$this->load->model('Login_Model');
		}
		if ($this->Login_Model->login_validation($_POST['user'], $_POST['passw'], $_POST['typeUsers'])) {
			if ($r=$typeUsers = 'Client' && $typeUsers ='admin' && $user= 'user' && $passw= 'passw') {

				$this->load->view('Layouts/header');
				$this->load->view('register');
				$this->load->view('Layouts/footer');
			} else {
				return $r; 
				
				
			}
		} else {
			$this->load->view('Layouts/header');
			$this->load->view('register');
			$this->load->view('Layouts/footer');
		}
	}



	


		/*public function login_validation()
	{
		$this->load->model('Login_Model');
		if(!isset($_POST['typeUsers'],$_POST['user'], $_POST['passw']))
		   {     
			$this->load->view('Layouts/header');
			$this->load->view('register');
			$this->load->view('Layouts/footer');
		        
	  	}
	   	else{                       
		  $this->form_validation->set_rules('typeUsers','required');     
		  $this->form_validation->set_rules('user','required');
		  $this->form_validation->set_rules('passw','required');
		   
		  if(($this->form_validation->run()==FALSE)){           
			
			$this->load->view('Layouts/header');
			$this->load->view('register');
			$this->load->view('Layouts/footer');                    
		   }
		   else{          

					$this->load->model('Login_Model');
		   }
					$ExisteUsuarioyPassoword=$this->Login_Model->login_validation( $_POST['typeUsers'],$_POST['user'], $_POST['passw']);   
					if($ExisteUsuarioyPassoword){  
					   echo "Validacion Ok<br><br>";  
					}
					   else{   
						$data['error']="user o password incorrecta, por favor vuelva a intentar";
						$this->load->view('Login',$data);   
						
					}
				}
			}*/
}
	

