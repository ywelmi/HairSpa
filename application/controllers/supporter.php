<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class supporter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
  
  public function index()
  {
  	// code...
  	if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  	 $this->load->model('manager_model');
    $fulldata=$this->manager_model->Congviec();
    $data=$this->manager_model->listdichvu();
    $fulldata = array('fulldata' =>$fulldata,'listdichvu'=> $data );
      $this->load->view('supporter_view',$fulldata);
  }
	
	public function load_hoivien()
    {
    	// code...
    	if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->hoivien();
		$fulldata = array('fulldata'=> $fulldata);
    	$this->load->view('hoivien_view',$fulldata);
    
    }
    public function load_congviec()
    {
    	// code...
    	if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    	if($this->session->userdata('level')==='2'){
    	  $this->load->model('manager_model');
    $fulldata=$this->manager_model->Congviec();
    $data=$this->manager_model->listdichvu();
    $fulldata = array('fulldata' =>$fulldata,'listdichvu'=> $data );
      $this->load->view('supporter_view',$fulldata);
      }
    else{
			redirect('login');
		}
    }
    public function refresh()
	{

	
    	  $this->load->model('manager_model');
    $fulldata=$this->manager_model->Congviec();
    $data=$this->manager_model->listdichvu();
    $fulldata = array('fulldata' =>$fulldata,'listdichvu'=> $data );
      $this->load->view('supporter_view',$fulldata);
		
   

		
	}
    public function load_CSKH()
    {
    	// code...
    	if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    	  $this->load->model('manager_model');
    $fulldata=$this->manager_model->CSKH();
    $fulldata = array('fulldata' =>$fulldata );
      $this->load->view('CSKH_view',$fulldata);
    }
    public function add_hoivien($id)
    {
    	$target_dir = "img/";
		$target_file = $target_dir.basename($_FILES["avatar_img"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["avatar_img"]["tmp_name"]);
		  if($check !== false) {
		   
		    $uploadOk = 1;
		  } else {
		   
		    $uploadOk = 0;
		  }
		}

		
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		
		if ($_FILES["avatar_img"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		 
		  $uploadOk = 0;
		}

		
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		
		} else {
		  if (move_uploaded_file($_FILES["avatar_img"]["tmp_name"], $target_file)) {
		  
		  } else {
		   
		  }
		}	
		    
		    $avatar_img = base_url()."img/".basename( $_FILES["avatar_img"]["name"]);
		    $tennv= $this->input->post('tennv');
	    	$dob = $this->input->post('dob');
	    	$gioitinh = $this->input->post('gioitinh');
	    	$sdt = $this->input->post('sdt');
	    	$pw = $this->input->post('pw');
	    	$username = $this->input->post('username');
	    	
	    	

	    	$this->load->model('manager_model');
	    	if($id==1){
	     $data['url']='supporter/load_hoivien';}
	     else{
	     	$data['url']='homepage';
	     }
	    	if($this->manager_model->insert_hoivien($tennv,$dob,$sdt,$gioitinh,$pw,$username,$avatar_img)){
	    		 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
		}
		public function edit_hoivien($value)
		{
			// code...
			$this->load->model('manager_model');
			$data=$this->manager_model->gethoivienbyid($value);
			$data = array('data'=>$data);
			$this->load->view('edit_hoivien_view', $data);
		}
		public function update_hoivien()
		{
			// code...
			
		$target_dir = "img/";
		$target_file = $target_dir.basename($_FILES["avatar_img"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["avatar_img"]["tmp_name"]);
		  if($check !== false) {
		   
		    $uploadOk = 1;
		  } else {
		   
		    $uploadOk = 0;
		  }
		}

		
		if (file_exists($target_file)) {
		  //echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		
		if ($_FILES["avatar_img"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		 
		  $uploadOk = 0;
		}

		
	   $id=$this->input->post('id');
		 $tennv= $this->input->post('tennv');
	    	$dob = $this->input->post('dob');
	    	$gioitinh = $this->input->post('gioitinh');
	    	$sdt = $this->input->post('sdt');
	    	$pw = $this->input->post('pw');
	    	$username = $this->input->post('username');
	    	
		//$avatar_img = $this->input->post('change');
		 $avatar_img= basename( $_FILES["avatar_img"]["name"]);
		 if ($uploadOk == 0) {
		  		//echo "sai đầu";
		  		//$this->load->view('thong_bao_that_bai');
		
		} else {
		  if (move_uploaded_file($_FILES["avatar_img"]["tmp_name"], $target_file)) {
		    	
		}	
			else {
		  		$this->load->view('thong_bao_that_bai');
		  	}	
		}	
		if ($avatar_img) {
				$avatar_img= base_url()."img/".basename( $_FILES["avatar_img"]["name"]);
		   		
			}
		else{	
		  		$avatar_img = $this->input->post('change');
			}
               

               $this->load->model('manager_model');
               $data['url']= 'supporter/load_hoivien';
		   	 	if($this->manager_model->update_hoivien($id,$tennv,$dob,$sdt,$gioitinh,$username,$pw,$avatar_img)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
			
		   
		  
		
	}
		public function delete_hoivien($id)
    {	
    	$this->load->model('manager_model');
               $data['url']= 'supporter/load_hoivien';
		   	 	if($this->manager_model->deletehoivienbyid($id)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
         

        
    }
    public function insert_dichvu()
    {
    	// code...
    	$ca= $this->input->post('id1');
    	$ngay=$this->input->post('day1');
    	$tenkh=$this->input->post('tenkh');
    	$dichvu=$this->input->post('dichvu');
    	$sdt=$this->input->post('sdt');
    	$role="1";
    	$this->load->model('manager_model');
       
               $this->load->model('manager_model');
               $data['url']= 'supporter/load_congviec';
		   	 	if($this->manager_model->insert_dichvu($tenkh,$sdt,$dichvu,$ca,$ngay,$role)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}
    }
    public function reply()
    {
    	$id=$this->input->post('idreason');
    	$reason=$this->input->post('reason');
    	$this->load->model('manager_model');
    	$data['url']= 'supporter/load_CSKH';
    	if($this->manager_model->phanhoi($id,$reason)){
		    	 	$this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
    }
     public function chot_dichvu($id)
    {
    	$this->load->model('manager_model');
    	

        $data = $this->manager_model->chot_dichvu($id);

        echo json_encode($data);
    }
    public function delete_dichvu($id)
    {
    	$this->load->model('manager_model');
    	

        $data = $this->manager_model->delete_dichvu($id);

        echo json_encode($data);
    }
}

/* End of file supporter.php */
/* Location: ./application/controllers/supporter.php */