<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');
class Api extends REST_Controller
{
       public function __construct() {
               parent::__construct();
               $this->load->model('user_model');
       }    
       public function user_get(){
           $r = $this->user_model->read();
           $this->response($r); 
       }
       public function user_put(){
           $id = $this->uri->segment(3);
		 // parse_str(file_get_contents("php://input"),$data);
           $data = array('name' => $this->put('name'),
		   'email' => $this->put('email'),
           'phoneno' => $this->put('phoneno'),
           'password' => $this->put('password'),
		   'course' => $this->put('course')
           );
            $r = $this->user_model->update($id,$data);
               $this->response($r); 
       }
       public function user_post(){
           $data = array('name' => $this->input->post('name'),
		   'email' => $this->input->post('email'),
           'phoneno' => $this->input->post('phoneno'),
           'password' => $this->input->post('password'),
		   'course' => $this->input->post('course')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       public function user_delete(){
           $id = $this->uri->segment(3);
           $r = $this->user_model->delete($id);
           $this->response($r); 
       }
    
}