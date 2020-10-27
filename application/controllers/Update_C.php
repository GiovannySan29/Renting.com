<?php

class Update_C extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
    
        $this->load->database();
        $this->load->helper("url"); 
        $this->load->model("Update_M");
    }
    public function update($userData){
        $id= $this->input->get('id');
        $user=$this->input->post('user');
        $passw=$this->input->post('passw');
        $name=$this->input->post('name');
        $lastname=$this->input->post('lastname');
        $email=$this->input->post('email');
        $identification=$this->input->post('identification');
        $typeidentification=$this->input->post('typeidentification');
        $typeUsers=$this->input->post('typeUsers');
            $userData =array(
            'id' =>$id,
            'user'=>$user,
            'passw'=>$passw,
            'name'=>$name,
            'lastname'=>$lastname,
            'email'=>$email,
            'identification'=>$identification,
            'typeidentification'=>$typeidentification,
            'typeUsers'=>$typeUsers
            );
            $response= $this->Update_M->update($userData);
                $redirect = base_url()."/home";
                header("location: $redirect");
                echo $response;
    }
       
    
}
