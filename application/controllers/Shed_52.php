<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Shed_52 extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["shed_52"]=$this->Chook_model->shed_52();
       
        $this->load->view('templates/header');
        $this->load->view('shed_52/index',$data);
        $this->load->view('templates/footer');
    }
}
?>