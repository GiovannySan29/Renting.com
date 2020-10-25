<?php
class Update_M extends CI_Model
{
    public function update($userData)
    {

        // $response =$this->Update_C->update($userData);
        $this->load->view('Layouts/header');
        $this->load->view('sign_in_V');
        $this->load->view('Layouts/footer');

        $this->db->query("UPDATE users SET id='{$userData['id']}',user='{$userData['user']}',passw='{$userData['passw']}',name='{$userData['name']}',lastname='{$userData['lastname']}',email='{$userData['email']}' WHERE identification='{$userData['identification']}',typeidentification='{$userData['typeidentification']}'");
    }
}
