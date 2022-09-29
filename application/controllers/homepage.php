<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('manager_model');
		$fulldata=$this->manager_model->Congviec();
		$dichvu=$this->manager_model->listdichvu();
		$fulldata = array('fulldata'=> $fulldata,'listdichvu'=>$dichvu,'user'=>"",'solansd'=>"0");
		$this->load->view('homepage_view',$fulldata);
	
		 
	}
	public function user()
	{
		if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    	$id= $this->session->userdata('user');
		//$id=$this->session->userdata('username');
		$this->load->model('manager_model');
		$fulldata=$this->manager_model->Congviec();
		$dichvu=$this->manager_model->listdichvu();
		$dulieu = $this->manager_model->getSDbyusername($id);
		$fulldata = array('fulldata'=> $fulldata,'listdichvu'=>$dichvu,'user'=>$id);
		$fulldata['solansd']=$dulieu[0];
		$this->load->view('homepage_view',$fulldata);
	
		 
	}
	
	public function input()
	{
		// code...
		$this->load->view('input_form');
		
	}
	public function register()
	{
		// code...
		$data['id']='2';
		$this->load->view('add_hoivien_form',$data);
		
	}
	 public function load_sanpham()
    {
    	// code...
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->Sanpham();
		$fulldata = array('fulldata'=> $fulldata);
		$fulldata['username']="";
    	$this->load->view('sanpham_view',$fulldata);
    } 
    public function load_sanpham_user()
    {
    	// code...
    	$username=$this->input->post('url');
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->Sanpham();
		$dulieu = $this->manager_model->getSDbyusername($username);
		$fulldata = array('fulldata'=> $fulldata);
		$fulldata['username']=$username;
		$fulldata['solansd']=$dulieu[0];
		
    	$this->load->view('sanpham_view',$fulldata);
    }
		
	

}

/* End of file homepage_ctrl.php */
/* Location: ./application/controllers/homepage_ctrl.php */