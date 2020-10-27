<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model {

	public	function insert(){
		parent::__construct();
		$this->load->model("Admin_M");

		}
		public function guardar( $title, $type, $addess,  $rooms,  $area, $price,$foto_accommodation) 
		{ 
		
		  return $type=$this->db->query("INSERT INTO accommodation(title, type, addess,  rooms,  area, price,foto_accommodation ) values 
		  ({$title}, {$type}, {$addess}, {$rooms},   {$area} ,{$price},{$foto_accommodation }");
		 

		 if ($this->db->affected_rows() > 0) {
		 	return true;
		 }
		 else{
		 	return false;
		 }
	}
	public	function mostrar($valor,$indice = FALSE, $cantidad = FALSE){
	 	
	 	$this->db->select('*');
	 	$this->db->from('accommodation');
	 	$this->db->join(  'accommodation.id_usuario');
	 	$this->db->like('accommodation.title',$valor,$indice,$cantidad);
	 	$this->db->or_like('accommodation.type', $valor,$indice,$cantidad); 
	 	$consulta = $this->db->get();
	 	return $consulta->result();
	 }
	 public	function actualizar($id,$data){
 		$this->db->where('id_accommodation', $id);
 		$this->db->update('accommodation', $data); 
 		if ($this->db->affected_rows() > 0) {
 			return true;
 		}
 		else{
 			return false;
 		}
	}
     public	function eliminar($id){
 		$this->db->where('id_accommodation', $id);
 		$this->db->delete('accommodation'); 
 		if ($this->db->affected_rows() > 0) {
 			return true;
 		}
 		else{
 			return false;
 		}
	}
	public	function capturarImagen($id){
 		$this->db->select("foto_accommodation");
 		$this->db->where("id_accommodation", $id);
 		$this->db->from("accommodation");
 		$resultado = $this->db->get();
 		return $resultado->row();
 		

	}

}
?>