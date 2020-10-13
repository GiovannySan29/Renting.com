<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->library('form_validation');
		// $this->load->helper(array('auth/login_rules_helper'));
	}
	// public function index()
	// {	
	// 	$this->load->view('Layouts/header');
	// 	$this->load->view('Login');
	// 	$this->load->view('Layouts/footer');
	
	// 	if(isset($_POST['passw']))
	// 	$this->load->model('Login_Model');
	// 	if($this->Login_Model->login($_POST['user'], $_POST['passw'])){
	// 		redirect('Login');
	// 	}else{
	// 		redirect('welcome');
	// 	}
	// }	
	public	function ValidarUsuario()
	{
		  
	   //   $this->config->set_item('language', 'spanish');      //   Setear dinámicamente el idioma que deseamos que ejecute nuestra aplicación
	   if(!isset($_POST['userlogin']))
		   {   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
			$this->load->view('Layouts/header');
			$this->load->view('Sign_in_V');
			$this->load->view('Layouts/footer');     //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
	  	}
	   	else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
		  $this->form_validation->set_rules('user','required');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
		  $this->form_validation->set_rules('passw','required');
			if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
				$this->load->view('Layouts/header');
				$this->load->view('home');
				$this->load->view('Layouts/footer');                    //   En caso que no, volvemos a presentar la pantalla de login
			}
			else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
			 		$this->load->model('Login_Model');
			 		$ExisteUsuarioyPassoword=$this->Login_Model->ValidarUsuario($_POST['user'], $_POST['passw']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
			 	if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
					echo "Validacion Ok<br><br><a href=''>Volver</a>";   //   Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
				}
			 	else{   //   Si no logró validar
					$data['error']="user o password incorrecta, por favor vuelva a intentar";
					$this->load->view('login',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
				}
			}
	    }
	}
}
		

	