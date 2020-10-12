<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	// public function login($user, $passw)
	// {
    //     $this->db->where('user',$user);
    //     $this->db->where('passw',$passw);
    //     $r = $this->db->post('users');
    //     if($r->num_rows()>0){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
	// }
    function ValidarUsuario($user,$passw){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
        $query = $this->db->where('user',$user);   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $query = $this->db->where('Passw',$passw);
        $query = $this->db->get('users');
        return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
     }
}