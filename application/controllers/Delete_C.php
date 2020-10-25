<?php

class Delete_C extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
        $this->load->helper("url"); 
        $this->load->model("Delete_M");
    }
    
    public function delete()
	{
    $identification=$this->input->post('identification');
    $typeIdentification=$this->input->post('typeIdentification');
	$r =$this->Delete_M->delete($identification,$typeIdentification);
    if($identification ==true && $typeIdentification ==true){
        if($r==true){
            $this->load->view('Layouts/header');
            $this->load->view('home');
            $this->load->view('Layouts/footer');
            return $r;
        }else{
            $this->load->view('Layouts/header');
            $this->load->view('sign_in_V');
            $this->load->view('Layouts/footer');
        }
       
        
      

    }
}
}