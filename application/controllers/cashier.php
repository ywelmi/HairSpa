<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cashier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
				if($this->session->userdata('level')==='3'){
			$this->load->model('manager_model');
		$fulldata=$this->manager_model->Congviec();
		
		$data=$this->manager_model->Nhansu();
		$fulldata = array('fulldata' =>$fulldata,'nhansu'=>$data);
		// echo "<pre>";
		// var_dump ($fulldata);
		// echo "</pre>";
		$this->load->view('cashier_view',$fulldata);
		}
		else{
			redirect('login');
		}		
	}
	

}

/* End of file cashier.php */
/* Location: ./application/controllers/cashier.php */