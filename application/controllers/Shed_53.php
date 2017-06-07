<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';
// use namespace
use Restserver\Libraries\REST_Controller;
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */

class Shed_53 extends REST_Controller{
      function __construct($config = 'rest'){
            parent::__construct($config);
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    
    
    public function index_get() {
        
        //$r = $this->User_model->read();
           //$this->response($r); 
        
        
 $user = json_decode(
    file_get_contents('http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/index_get')
);
 
//echo $user->name;
//$data['show_table'] = $this->view_table();
$this->load->view('shed_53/index',$user);                  
        //$this->response($data); 
         }
      public function index_post() {
$user = json_decode(
    file_get_contents('http://turing.une.edu.au/~srallaba/CodeIgniter5/index.php/api/Api_53/index_get')
);
 
//echo $user->name;
//$data['show_table'] = $this->view_table();
$this->load->view('shed_53/index',$user);                  
        //$this->response($data); 
         }
    /*
        public function reader_report() {
$date = $this->input->post('date');
if ($date != "") {
$result2 = $this->Chook_model->show_reader_data_by_date($date);

if ($result2 != false) {
$data['result_display2'] = $result2;
} else {
$data['result_display2'] = "No record found !";
}
} else {
$data['date_error_message2'] = "Date field is required";
}
$data['show_table'] = $this->view_table();
$this->load->view('shed_53/index', $data);
}
    public function reader_report_post() {
$date = $this->input->post('date');
if ($date != "") {
$result2 = $this->Chook_model->show_reader_data_by_date($date);

if ($result2 != false) {
$data['result_display2'] = $result2;
} else {
$data['result_display2'] = "No record found !";
}
} else {
$data['date_error_message2'] = "Date field is required";
}
$data['show_table'] = $this->view_table();
$this->load->view('shed_53/index', $data);
}
    
     public function epc_get() {

$data['show_table'] = $this->view_table();
$this->load->view('shed_53/index', $data);
}

    */
public function view_table(){
$result = $this->Chook_model->show_epc_data();
if ($result != false) {
return $result;
} else {
return 'Database is empty !';
}
}    /* 
    public function epc_post() {

$data['show_table'] = $this->view_table();
$this->load->view('shed_53/index', $data);
}
*/
    }
     
   
       