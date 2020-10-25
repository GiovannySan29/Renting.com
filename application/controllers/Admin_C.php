<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("Admin_M.php");
	  	if (!$this->session->userdata("login")) {
	  		redirect(base_url());
	  	}

	}

	function index()
	{

			$this->load->view('Admin_V');
	}

	function guardar(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if ($this->input->is_ajax_request()) {
			$nombres = $this->input->post("nombres");
			$apellidos = $this->input->post("apellidos");
			$dni = $this->input->post("dni");
			$telefono = $this->input->post("telefono");
			$email = $this->input->post("email");

			$this->form_validation->set_rules('nombres','Nombres','required');
			$this->form_validation->set_rules('apellidos','Apellidos','required');
			$this->form_validation->set_rules('dni','DNI','required');
			$this->form_validation->set_rules('telefono','Telefono','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');

			

			if ($this->form_validation->run() === TRUE) {

				$config = [
					"upload_path" => "./assets/images/uploads",
					'allowed_types' => "png|jpg"
				];

				$this->load->library("upload",$config);

				if ($this->upload->do_upload('foto_empleado')) {
					$data = array("upload_data" => $this->upload->data());
					$datos = array(
						"nombres_empleado" => $nombres,
						"apellidos_empleado" => $apellidos,
						"dni_empleado" => $dni,
						"telefono_empleado" => $telefono,
						"email_empleado" => $email,
						"foto_empleado" => $data['upload_data']['file_name'],
						"id_usuario" => $this->session->userdata('id')
					);
					if($this->Empleados_model->guardar($datos)==true)
						echo "exito";
					else
						echo "error";
				}
				else{
					echo $this->upload->display_errors();
				}
				
			
			}
			else{
				echo validation_errors('<li>','</li>');
			}

			
		}
		else
		{
			show_404();
		}


	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->Empleados_model->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}

	function actualizar(){
		if ($this->input->is_ajax_request()) {
		
			$idsele = $this->input->post("idsele");
			$nombres = $this->input->post("nombressele");
			$apellidos = $this->input->post("apellidossele");
			$dni = $this->input->post("dnisele");
			$telefono = $this->input->post("telefonosele");
			$email = $this->input->post("emailsele");

			$config = [
				"upload_path" => "./assets/images/uploads",
				'allowed_types' => "png|jpg"
			];

			$this->load->library("upload",$config);

			if ($this->upload->do_upload('foto_nueva')) {
				$registro = $this->Empleados_model->capturarImagen($idsele);
				unlink("./assets/images/uploads/".$registro->foto_empleado);
				$data = array("upload_data" => $this->upload->data());
				$datos = array(
					"nombres_empleado" => $nombres,
					"apellidos_empleado" => $apellidos,
					"dni_empleado" => $dni,
					"telefono_empleado" => $telefono,
					"email_empleado" => $email,
					"foto_empleado" => $data['upload_data']['file_name']
				);

				if($this->Empleados_model->actualizar($idsele,$datos) == true)
				{
					echo "Registro Actualizado";
				}
				else{
					echo "No se pudo actualizar los datos";
				}
			}else{
				echo $this->upload->display_errors();
			}


			
			


			
			
		}
		else
		{
			show_404();
		}
	}

	function eliminar(){
		if ($this->input->is_ajax_request()) {
			$idsele = $this->input->post("id");
			$registro = $this->Empleados_model->capturarImagen($idsele);
			unlink("./assets/images/uploads/".$registro->foto_empleado);
			if($this->Empleados_model->eliminar($idsele) == true)
				echo "Registro Eliminado";
			else
				echo "No se pudo eliminar los datos";
			
		}
		else
		{
			show_404();
		}
	}

}