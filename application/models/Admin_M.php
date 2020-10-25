<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados_model extends CI_Model {

	function guardar($data){
		$this->db->insert("prueba/empleados",$data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	function mostrar($valor,$indice = FALSE, $cantidad = FALSE){
		/*$this->db->like("nombres_empleado",$valor);
		$this->db->or_like('apellidos_empleado', $valor); 
		$consulta = $this->db->get("empleados");
		return $consulta->result();*/
		
		$this->db->select('*');
		$this->db->from('prueba');
		$this->db->join('usuarios', 'usuarios.id_usuario = empleados.id_usuario');
		$this->db->like("empleados.nombres_empleado",$valor);
		$this->db->or_like('empleados.apellidos_empleado', $valor); 
		$consulta = $this->db->get();
		return $consulta->result();
	}

	function actualizar($id,$data){
		$this->db->where('id_empleado', $id);
		$this->db->update('empleados', $data); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function eliminar($id){
		$this->db->where('id_empleado', $id);
		$this->db->delete('empleados'); 
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function capturarImagen($id){
		$this->db->select("foto_empleado");
		$this->db->where("id_empleado", $id);
		$this->db->from("empleados");
		$resultado = $this->db->get();
		return $resultado->row();
	}

	

	

}