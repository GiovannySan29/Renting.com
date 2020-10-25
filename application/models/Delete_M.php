<?php

class Delete_M extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function delete($identification, $typeIdentification)
    {
        $this->db->query("DELETE  FROM users WHERE identification='" . $identification . "' AND typeIdentification='" . $typeIdentification . "'");
    }
}
