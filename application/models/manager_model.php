<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manager_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function validate($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('login',1);
    return $result;
  }
  public function validateuser($username,$password){
    $this->db->where('user',$username);
    $this->db->where('pw',$password);
    $result = $this->db->get('hoivien',1);
    return $result;
  }
	public function Congviec()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('dichvu');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function hoivien()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('hoivien');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function CSKH()
		{
			// code...
			$this->db->select('*');
			$dulieu=$this->db->get('cskh');
			$dulieu = $dulieu->result_array();
			return $dulieu;
		}

	public function Nhansu()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('nhansu');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function Sanpham()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('sanpham');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function CSVC()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('cosovc');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function KinhDoanh()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('kinhdoanh');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function listdichvu()
	{
		// code...
		$this->db->select('*');
		$dulieu=$this->db->get('listdichvu');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}

	public function insert_nhansu($tennv,$dob,$sdt,$chucvu,$avatar_img)
	{
		$dulieu = array(
			'tennv'=> $tennv,
			'dob' => $dob,
			'sdt'=> $sdt,
			'chucvu'=> $chucvu,
			'avatar_img'=>$avatar_img
			
		);
		//$this->db->get('Table', limit, offset);
		$this->db->insert('nhansu', $dulieu);
		return $this->db->insert_id();
	}
	public function insert_phanhoi($name,$sdt,$msg)
	{
		$dulieu = array(
			'TenKhachHang'=> $name,
			
			'SDT'=> $sdt,
			'PhanHoi' => $msg,
			'TinhTrang'=>0
			
		);
		//$this->db->get('Table', limit, offset);
		$this->db->insert('cskh', $dulieu);
		return $this->db->insert_id();
	}
	public function insert_dichvu($tenkh,$sdt,$dichvu,$ca,$ngay,$role)
	{
		$dulieu = array(
			'tenkh'=> $tenkh,
			'dichvu' => $dichvu,
			'sdt'=> $sdt,
			'ca'=> $ca,
			'ngay'=> $ngay,
			'role'=> $role
						
		);
		//$this->db->get('Table', limit, offset);
		$this->db->insert('dichvu', $dulieu);
		return $this->db->insert_id();
	}
	public function insert_hoivien($tennv,$dob,$sdt,$gioitinh,$pw,$username,$avatar_img)
	{
		$dulieu = array(
			'HoTen'=> $tennv,
			'NgaySinh' => $dob,
			'SDT'=> $sdt,
			'GioiTinh'=> $gioitinh,
			'user'=> $username,
			'pw'=> $pw,
			'avatar_img'=>$avatar_img
			
		);
		//$this->db->get('Table', limit, offset);
		$this->db->insert('hoivien', $dulieu);
		return $this->db->insert_id();
	}
  public function update_day()
  {
  	// code...
  	$dulieu = array('ngay'=>'x');
  	
    	$this->db->where('ngay', 'kia');
    	$this->db->update('dichvu',$dulieu);


    	$dulieu1 = array('ngay'=>'kia');
    	$this->db->where('ngay', 'mai');
    	$this->db->update('dichvu',$dulieu1);


    	$dulieu2 = array('ngay'=>'mai');
    	$this->db->where('ngay', 'nay');
    	$this->db->update('dichvu',$dulieu2);

    	$dulieu3 = array('ngay'=>'nay');
    	$this->db->where('ngay', 'x');
    	$this->db->update('dichvu',$dulieu3);



  }
	 public function getdatabyid($value)
    {
    	$this->db->select('*');
    	$this->db->order_by('id', 'asc');
    	$this->db->where('id', $value);
    	$dulieu=$this->db->get('nhansu');
    	$dulieu = $dulieu->result_array();
    	return $dulieu;

    }
    public function getkhbyid($value)
    {
    	$this->db->select('*');
    	$this->db->order_by('id', 'asc');
    	$this->db->where('id', $value);
    	$dulieu=$this->db->get('dichvu');
    	$dulieu = $dulieu->result_array();
    	return $dulieu;

    }
    public function getspbyid($value)
    {
    	$this->db->select('*');
    	$this->db->order_by('id', 'asc');
    	$this->db->where('id', $value);
    	$dulieu=$this->db->get('sanpham');
    	$dulieu = $dulieu->result_array();
    	return $dulieu;

    }
    public function gethoivienbyid($value)
    {
    	$this->db->select('*');
    	$this->db->order_by('id', 'asc');
    	$this->db->where('id', $value);
    	$dulieu=$this->db->get('hoivien');
    	$dulieu = $dulieu->result_array();
    	return $dulieu;

    }
    public function getSDbyusername($value)
    {
    	$this->db->select('*');
    	
    	$this->db->where('user', $value);
    	$dulieu=$this->db->get('hoivien')->row()->SoLanSD;
    	
    	return $dulieu;

    }
    public function updatedata($id,$tennv,$dob,$sdt,$chucvu,$avatar_img)
    {
    	// code...
    	
    	
    	$dulieu = array(
    		'id'=>$id,
			'tennv'=> $tennv,
			'dob' => $dob,
			'sdt'=> $sdt,
			'chucvu'=> $chucvu,
			'avatar_img'=>$avatar_img
			
		);
    	$this->db->where('id', $id);
    	return $this->db->update('nhansu', $dulieu);

    }
    public function update_hoivien($id,$tennv,$dob,$sdt,$gioitinh,$username,$pw,$avatar_img)
    {
    	// code...
    	
    	
    	$dulieu = array(

			'HoTen'=> $tennv,
			'NgaySinh' => $dob,
			'SDT'=> $sdt,
			'GioiTinh'=> $gioitinh,
			'user'=> $username,
			'pw'=> $pw,
			'avatar_img'=>$avatar_img
			
		);
    	$this->db->where('id', $id);
    	return $this->db->update('hoivien', $dulieu);

    }
      public function update_csvc($id,$soluong,$dongia)
    {
    	// code...
    	
    	
    	$dulieu = array(

			'SoLuong'=> $soluong,
			'DonGia' => $dongia
		);
    	$this->db->where('MaVatChat', $id);
    	return $this->db->update('csvc', $dulieu);

    }
   public function add_ghichu($id,$reason)
    	{
    		$dulieu = array(
    		'id'=>$id,
			'ghichu'=> $reason
			
		);
    	$this->db->where('id', $id);
    	return $this->db->update('dichvu', $dulieu);
    	} 
    	public function phanhoi($id,$reason)
    	{
    		$dulieu = array(
    		'MaPhanHoi'=>$id,
			'NhanVien'=> $reason,
			'TinhTrang'=>'1'
		);
    	$this->db->where('MaPhanHoi', $id);
    	return $this->db->update('cskh', $dulieu);
    	}
    public function phancongnhanvien($id,$nhanvien)
    	{
    		$dulieu = array(
    		'id'=>$id,
			'nhanvien'=> $nhanvien,
			'role'=>'1'
		);
    	$this->db->where('id', $id);
    	return $this->db->update('dichvu', $dulieu);
    	} 

    public function insert_sp($tensp,$thuonghieu,$mota,$gia,$soluong)
    {
    	$dulieu = array(
			'tensp'=> $tensp,
			'thuonghieu' => $thuonghieu,
			'mota'=> $mota,
			'gia'=> $gia,
			'soluong'=>$soluong
			
		);
		//$this->db->get('Table', limit, offset);
		$this->db->insert('sanpham', $dulieu);
		return $this->db->insert_id(); 
	}
	public function edit_sp($id,$tensp,$thuonghieu,$mota,$gia,$soluong)
    {
    	// code...
    	
    	
    	$dulieu = array(
    		'id'=>$id,
			'tensp'=> $tensp,
			'thuonghieu' => $thuonghieu,
			'mota'=> $mota,
			'gia'=> $gia,
			'soluong'=> $soluong,
			
			
		);
    	$this->db->where('id', $id);
    	return $this->db->update('sanpham', $dulieu);

    }  
    public function chot_dichvu($id)
    {
    	// code...
    	$dulieu=array('role'=>"1");
        $this->db->where('id',$id);
        return $this->db->update('dichvu', $dulieu);
    }
    public function deletespbyid($id)
     {
     	$this->db->where('id', $id);
    	return $this->db->delete('sanpham');     
    } 
    public function deletehoivienbyid($id)
     {
     	$this->db->where('id', $id);
    	return $this->db->delete('hoivien');     
    } 
    public function delete_dichvu($id)
     {
     	$this->db->where('id', $id);
    	return $this->db->delete('dichvu');     
    }
    public function deletenhansubyid($id)
     {
     	$this->db->where('id', $id);
    	return $this->db->delete('nhansu');     
    } 
}

/* End of file manager_model.php */
/* Location: ./application/models/manager_model.php */