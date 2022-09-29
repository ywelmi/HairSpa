<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	 function index(){
    $this->load->view('login_view');
  }
 
  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $password1 = $this->input->post('password');
    $this->load->model('manager_model');
    $validate = $this->manager_model->validate($username,$password);
    $validateuser = $this->manager_model->validateuser($username,$password1);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['username'];
        
        $level = $data['role'];
        $sesdata = array(
            'username'  => $name,
            
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
           
            redirect('manager/load_congviec');
 
        // access login for staff
        }elseif($level === '2'){
            redirect('supporter/load_congviec');
 
        // access login for author
        }
        elseif($level === '3'){
            redirect('cashier');
 
        // access login for author
        }

    }
    elseif($validateuser->num_rows() > 0){
        $data  = $validateuser->row_array();
        $name  = $data['user'];
        
        $level = $data['SoLanSD'];
        $sesdata = array(
            'user'  => $name,
            
            'level'=>$level,
            'logged_in' => TRUE
            
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
       
         // echo $data['user']; 
        // $str = "đang ăn tối";
          //      echo "homepage/user/ $name "; 
          //$this->load->view('homepage_view', $data);
                redirect('homepage/user');
        // access login for staff
     
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
   
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */