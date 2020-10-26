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
	 	/*$this->db->like("nombres_empleado",$valor);
	 	$this->db->or_like('apellidos_empleado', $valor); 
	 	$consulta = $this->db->get("empleados");
	 	return $consulta->result();*/	
	 	$this->db->select('*');
	 	$this->db->from('accommodation');
	 	$this->db->join('usuarios', 'usuarios.id_usuario = empleados.id_usuario');
	 	$this->db->like("empleados.nombres_empleado",$valor,$indice,$cantidad);
	 	$this->db->or_like('empleados.apellidos_empleado', $valor,$indice,$cantidad); 
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