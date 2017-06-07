<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php');
class Api_53 extends REST_Controller
{
 
       public function __construct() {
               parent::__construct();
               $this->load->model('User_model');
 
       }   
    
    
     ////// public function index_get(){
          // $date = $this->input->post('date');
          // $r = $this->User_model->show_antenna_data_by_date($date);
        //   $this->response($r); 
       //}
    
    public function index_get(){
    
          // $r = $this->User_model->read();
           //$this->response($r); 
           //$date = $this->input->post('yymmdd');

$date = $this->input->get('date');
if ($date != "") {
$result = $this->Chook_model->show_antenna_data_by_date($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data['date_error_message'] = "Date field is required";
}    
      $this->response($data); 
    }
    
    public function reader_get(){
    
          // $r = $this->User_model->read();
           //$this->response($r); 
           //$date = $this->input->post('yymmdd');

$date = $this->input->get('date');
if ($date != "") {
$result = $this->Chook_model->show_reader_data_by_date($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data['date_error_message'] = "Date field is required";
}    
      $this->response($data); 
    }
    
    public function epc_get(){
    
          // $r = $this->User_model->read();
           //$this->response($r); 
           //$date = $this->input->post('yymmdd');

//$date = $this->input->get('date');
//if ($date != "") {
$result = $this->Chook_model->show_epc_data();

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
   
      $this->response($data); 
    }
    
    }
      /*
       public function user_put(){
           $id = $this->uri->segment(3);
 
           $data = array('' => $this->input->get('antenna_name'),
           'reader_name' => $this->input->get('reader_name'),
           'epc' => $this->input->get('epc')
           );
 
            $r = $this->user_model->update($id,$data);
               $this->response($r); 
       }
 
       public function user_post(){
           $data = array($this->input->post('antenna_name'),
           'reader_name' => $this->input->post('reader_name'),
           'epc' => $this->input->post('epc')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       public function user_delete(){
           $id = $this->uri->segment(3);
           $r = $this->user_model->delete($id);
           $this->response($r); 
       }
    
 public function view_table(){
$result = $this->Chook_model->show_antenna_data_by_date($date);
if ($result != false) {
return $result;
} else {
return 'Database is empty !';
}
} 
*/

