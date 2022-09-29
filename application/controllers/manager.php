<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manager extends CI_Controller {

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
		if($this->session->userdata('level')==='1'){
		$this->load_congviec();
		}
		else{
			redirect('login');
		}
	}

	public function load_congviec()
	{
		if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
	if($this->session->userdata('level')==='1'){
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->Congviec();
		
		$data=$this->manager_model->Nhansu();
		$fulldata = array('fulldata' =>$fulldata,'nhansu'=>$data);
		// echo "<pre>";
		// var_dump ($fulldata);
		// echo "</pre>";
		$this->load->view('manager_view',$fulldata);
		
    }
    else{
			redirect('login');
		}


		
	}
	public function refresh()
	{

	
    	$this->load_congviec();
		
   

		
	}
    public function load_nhansu()
    {
    	if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->Nhansu();
		$fulldata = array('fulldata'=> $fulldata);
		$this->load->view('nhansu_view',$fulldata);
    }
    public function load_kinhdoanh()
    {
    	if($this->session->userdata('logged_in') !== TRUE){
      	redirect('login');
    }
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->KinhDoanh();
		$fulldata = array('fulldata'=> $fulldata);
		$this->load->view('kinhdoanh_view',$fulldata);
    }
    public function load_sale()
    {
    	// code...
    	if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->Sanpham();
		$fulldata = array('fulldata'=> $fulldata);
		
    	$this->load->view('sale_view',$fulldata);
    }
   
    
    public function load_timetable()
    {
    	// code...
    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->Congviec();
		$fulldata = array('fulldata'=> $fulldata);
		$this->load->view('time_table',$fulldata);
    }



    public function load_add_form($id)
    {
    	if ($id==1) {
    		$this->load->view('add_nhansu_form');
    	}
    	else{
    		$fulldata['id']='1';
    		$this->load->view('add_hoivien_form',$fulldata);
    	}
    	//$this->load->view('add_nhansu_form');
    }
    public function add_nhansu()
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
	    	$sdt = $this->input->post('sdt');
	    	$chucvu = $this->input->post('chucvu');
	    	

	    	$this->load->model('manager_model');
	     $data['url']='manager/load_nhansu';
	    	if($this->manager_model->insert_nhansu($tennv,$dob,$sdt,$chucvu,$avatar_img)){
	    		 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
		}
		public function edit_nhansu($value)
		{
			// code...
			$this->load->model('manager_model');
			$data=$this->manager_model->getdatabyid($value);
			$data = array('data'=>$data);
			$this->load->view('edit_nhansu_view', $data);
		}	
		public function update_day()
		{
			// code...
			$this->load->model('manager_model');
			$data=$this->manager_model->update_day();
			$this->load->model('manager_model');
		$fulldata=$this->manager_model->Congviec();
		
		$data=$this->manager_model->Nhansu();
		$fulldata = array('fulldata' =>$fulldata,'nhansu'=>$data);
		// echo "<pre>";
		// var_dump ($fulldata);
		// echo "</pre>";
		$this->load->view('manager_view',$fulldata);
			
		}
		public function update_nhansu()
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

		
	
		$tennv = $this->input->post('tennv');
		$id = $this->input->post('id');
		$dob = $this->input->post('dob');
		$sdt = $this->input->post('sdt');
		$chucvu = $this->input->post('chucvu');
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
               $data['url']= 'manager/load_nhansu';
		   	 	if($this->manager_model->updatedata($id,$tennv,$dob,$sdt,$chucvu,$avatar_img)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
			
		   
		  
		
	}
    
    public function ajax_edit_kh($id)
    {
    	$this->load->model('manager_model');
    	

        $data = $this->manager_model->getkhbyid($id);

        echo json_encode($data);
    }
    
     public function insert_dichvu_hp()
    {
    	// code...
    	 $ca= $this->input->post('ca1');
    	 
    	 $ngay=$this->input->post('ngay1');
    	$tenkh=$this->input->post('tenkh1');
    	$dichvu=$this->input->post('dichvu1');
    	$sdt=$this->input->post('sdt1');
    	$role="0";
    	$this->load->model('manager_model');
       
               $this->load->model('manager_model');
               $data['url']= 'homepage';
		   	 	if($this->manager_model->insert_dichvu($tenkh,$sdt,$dichvu,$ca,$ngay,$role)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}
    }
    public function get_sp($id)
    {
    	$this->load->model('manager_model');
    	

        $data = $this->manager_model->getspbyid($id);

        echo json_encode($data);
    }
    public function edit_sp()
    {
    	$id=$this->input->post('id');
    	$gia=$this->input->post('gia');
    	$thuonghieu=$this->input->post('thuonghieu');
    	$mota=$this->input->post('mota');
    	$tensp=$this->input->post('tensp');
    	$soluong=$this->input->post('soluong');

    	$this->load->model('manager_model');
       
               $this->load->model('manager_model');
               $data['url']= 'manager/load_sale';
		   	 	if($this->manager_model->edit_sp($id,$tensp,$thuonghieu,$mota,$gia,$soluong)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
    }
    public function delete_sp($id)
    {	
    	$this->load->model('manager_model');
               $data['url']= 'manager/load_sale';
		   	 	if($this->manager_model->deletespbyid($id)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
         

        
    }
    public function delete_nhansu($id)
    {	
    	$this->load->model('manager_model');
               $data['url']= 'manager/load_nhansu';
		   	 	if($this->manager_model->deletenhansubyid($id)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
         

        
    }
    public function load_CSVC()
    {

    	$this->load->model('manager_model');
		$fulldata=$this->manager_model->CSVC();
		$fulldata = array('fulldata'=> $fulldata);
		$this->load->view('CSVC_view',$fulldata);
    }
    public function load_FN()
    {
    	$this->load->view('FN_view');
    }
    public function reason()
    {
    	$id=$this->input->post('idreason');
    	$reason=$this->input->post('reason');
    	$this->load->model('manager_model');
    	$data['url']= 'manager/load_congviec';
    	if($this->manager_model->add_ghichu($id,$reason)){
		    	 	$this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
    }

    public function phancongnhanvien(){
         $id=$this->input->post('idphancong');
         $nhanvien=$this->input->post('nhanvien');

         $this->load->model('manager_model');
         
         $data['url'] =  "manager/load_congviec";
    	if($this->manager_model->phancongnhanvien($id,$nhanvien)){
		    	 	$this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
    }
    public function ajax_add_sp()
    	{
    		$tensp=$this->input->post('TenSP');
    		$gia=$this->input->post('Gia');
    		$soluong=$this->input->post('SoLuong');
    		$thuonghieu=$this->input->post('ThuongHieu');
    		$mota=$this->input->post('MoTa');
    		$this->load->model('manager_model');
               $data['url']= 'manager/load_sale';
		   	 	if($this->manager_model->insert_sp($tensp,$thuonghieu,$mota,$gia,$soluong)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}
    	}	
    	public function edit_vc()
    	{
    		// code...
    		$id=$this->input->post('id');
         $soluong=$this->input->post('soluong');
         $dongia=$this->input->post('dongia1');
         	
         	

         $this->load->model('manager_model');
          $data['url']= 'manager/load_CSVC';
		   	 	if($this->manager_model->update_csvc($id,$soluong,$dongia)){
		    	 $this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}
    	}
    	public function insert_phanhoi()
    {
    	$name=$this->input->post('name');
    	$sdt=$this->input->post('sdt');
    	$msg=$this->input->post('msg');
    	$this->load->model('manager_model');
    	$data['url']= 'homepage';
    	if($this->manager_model->insert_phanhoi($name,$sdt,$msg)){
		    	 	$this->load->view('thong_bao_thanh_cong',$data);
		  		  }
				else {
					//echo "sai giữa";
				 $this->load->view('thong_bao_that_bai',$data);
				}  
    }
}

/* End of file manger.php */
/* Location: ./application/controllers/manger.php */