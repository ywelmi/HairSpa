<?php
class page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
         $this->load->model('manager_model');
    $fulldata=$this->manager_model->Congviec();
    $fulldata = array('fulldata' =>$fulldata );
    // echo "<pre>";
    // var_dump ($fulldata);
    // echo "</pre>";
    $this->load->view('manager_view',$fulldata);
      }else{
          echo "Access Denied";
      }
 
  }
 
  function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
         $this->load->model('manager_model');
    $fulldata=$this->manager_model->Congviec();
    $fulldata = array('fulldata' =>$fulldata );
      $this->load->view('supporter_view',$fulldata);
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){

        echo $this->session->userdata('username');
    }else{
        echo "Access Denied";
    }
  }
 
}