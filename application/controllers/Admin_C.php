<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_C extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->model("Admin_M");
	  	if ($this->session->userdata("Login")) {
	  		redirect(base_url());
	  	}

	}

	function index()
	{
		$this->load->view('Layouts/header');	
		$this->load->view('Admin_V');
        $this->load->view('Layouts/footer');
	}
	public function guardar(){
		$this->load->view('Layouts/header');
		$this->load->view('Admin_V');
		$this->load->view('Layouts/footer');
		$this->load->model('Admin_M');
		if($this->input->is_ajax_request()) {
			$title = $this->input->post("title");
			$type = $this->iinput->post("type");
			$addess= $this->input->post("addess");
			$rooms = $this->input->post("rooms");
			$area = $this->input->post("area");
			$price = $this->input->post("price");
			$foto_accommodation = $this->input->post($_POST["foto_accommodation"]);
			
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('type','Type','required');
			$this->form_validation->set_rules('addess','Addess','required');
			$this->form_validation->set_rules('rooms','Rooms','required');
			$this->form_validation->set_rules('area','Area','required');
			$this->form_validation->set_rules('price','Price','required');
			$this->form_validation->set_rules('foto_accommodation','Foto_accommodation','required');

			$this->Admin_M->insert($title,$type,$addess,$rooms,$area,$price,$foto_accommodation);
		
			if ($this->form_validation->run() === TRUE) {

				$config = [
					"upload_path" => "./assets/images/uploads",
					'allowed_types' => "png|jpg"
				];

				$this->load->library("upload",$config);

				if ($this->upload->do_upload('foto_accommodation')) {
					$data = array("upload_data" => $this->upload->data());
					$datos = array(
						"title" => $title,
						"type" => $type,
						"addess" => $addess,
						"rooms" => $rooms,
						"area" => $area,
						"price" => $price,
						"foto_accommodation" => $data['upload_data']['file_name'],
						
					);
					if($this->Admin_M->insert($datos)==true)
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
			$title = $this->input->post("titlesele");
			$type = $this->input->post("typessele");
			$addess= $this->input->post("addesssele");
			$rooms = $this->input->post("roomssele");
			$area = $this->input->post("areasele");
			$price = $this->input->post("pricesele");

			$config = [
				"upload_path" => "./assets/images/uploads",
				'allowed_types' => "png||jpg"
			];

			$this->load->library("upload",$config);

			if ($this->upload->do_upload('foto_nueva')) {
				$registro = $this->Admin_M->capturarImagen($idsele);
				unlink("./assets/images/uploads/".$registro->foto_accommodation);
				$data = array("upload_data" => $this->upload->data());
				$datos = array(
					"title" => $title,
					"type" => $type,
					"addess" => $addess,
					"rooms" => $rooms,
					"area" => $area,
					"price" => $price,
					"foto_accommodation" => $data['upload_data']['file_name']
				);

				if($this->Admin_M->actualizar($idsele,$datos) == true)
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
			$registro = $this->Admin_M->capturarImagen($idsele);
			unlink("./assets/images/uploads/".$registro->foto_accommodation);
			if($this->Admin_M->eliminar($idsele) == true)
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
?>