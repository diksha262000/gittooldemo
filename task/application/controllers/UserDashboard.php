<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class UserDashboard extends CI_Controller {
    public function __construct() {
        parent::__construct(); 
  
      $this->load->library('session');
      if(!$this->session->userdata('userid')){
      redirect(base_url('AuthController'));
      }

    }

 public function dashboard()
 {
    if($this->session->userdata('userid') !=""){
    $this->load->view('dashboard');  
     }else{
    redirect(base_url('AuthController'));
  }
}
}
  ?>