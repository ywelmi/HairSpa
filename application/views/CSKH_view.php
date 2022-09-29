<!doctype html>
<html lang="en">
  <head>
  		<title>Chăm sóc khách hàng</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>/css/CSKH.css">

	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-branch" href="<?php echo base_url(); ?>homepage_ctrl" style="color: #ffff;">
      <img id="logo" src="<?php echo base_url(); ?>/img/logo.png" height="60" style="background-color: whitesmoke;">  MT Hair Spa
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url(); ?>supporter/load_congviec">Công việc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>supporter/load_hoivien">Hội viên</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>supporter/load_CSKH">CSKH</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="" id="role">
      <i class="fa fa-user" aria-hidden="true"></i>  Hỗ trợ </a>
    </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>login" class="btn btn-info btn-sm logout">Đăng xuất  <img src="<?php echo base_url(); ?>/img/l_o.png" height="30px"></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

	<section class="ftco-section" >
		<div class="row justify-content-center">
				<div class="col-md-12 text-center mb-5">
					<div class="heading-section title" style="font-size: 55px;">CHĂM SÓC KHÁCH HÀNG</div>
				</div>
			</div>
		<div class="container-fluid align-items-start">
			
			     <div class="col-md-8 offset-md-2 mt-5">
				
					<div class="table-wrap">
						<table class="table" cellspacing="0" align="center" border="5">
						  <thead>
						    <tr align="center">
						    	
						    	<th width="330" class="title font-weight-bold">Thông tin khách hàng</th>
						      <th width="350" class="title font-weight-bold">Câu hỏi</th>
						      <th width="350" class="title font-weight-bold">Phản hồi</th>
						      <th width="250" class="title font-weight-bold">Trạng thái</th>
						     
						      
						    </tr>
						  </thead>
						  <tbody >
						  	 <?php foreach ($fulldata as $value): ?>
						    <tr class="alert" role="alert" align="center">
						    	
						      <td  width="250">
						      	
						      	<div class="m-auto pl-1 ">
						      		<span><strong>Tên khách hàng: </strong><?php echo $value['TenKhachHang'];?></span>
						      		<br>
						      		<span ><strong>Số điện thoại: </strong><?php echo $value['SDT'];?></span>
						      		
						      	</div>
						      
						      </td>
						      <td width="400">
						      	<p><?php echo $value['CauHoi'];?></p>
						      		
						      	</td>
						      <td>
						      	<p><?php echo $value['PhanHoi'];?></p>
						      	 <?php if($value['SDT']!=""):?>
						    			  	
						    		  <?php endif;?>
						      	    <?php if($value['TinhTrang']=="0"):?>
						      <button onclick="add(<?php echo $value['MaPhanHoi'];?>)" class="btn btn-info btn-sm  w-40">Phản hồi <i class="fas fa-phone fa-xs"> </i></button>
						      <?php else: ?>
						      
						      <?php endif;?>
						      </td>
						      <?php if($value['TinhTrang']=="1"):?>
						      <td class="status"><span class="active">Đã phản hồi</span></td>
						      <?php else: ?>
						      <td class="status border-bottom-0"><span class="waiting">Đang chờ phản hồi</span></td>
						      <?php endif;?>
						      	
				        	
						    </tr>
						   <?php endforeach ?>
						    
						  </tbody>
						</table>
					</div>
					</div>
				
				
			</div>
		</div>
	</section>
<div id="reason" class="modal">
    <div class="modal-content animate-top ">

        <div class="modal-header">
          <div class="text-center">
            <h5 class="modal-title" style="justify-content: center;">Phản hồi cho khách hàng</h5></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        <form method="post" id="contactFrm" action="<?php echo base_url();  ?>supporter/reply">
        <div class="modal-body">
            <!-- Form submission status -->
            <input type="hidden" name="idreason"> 
      
            <!-- Contact form -->
        
        
      <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Lí do</span>
  </div>
  <textarea rows="7" id="reason1" name="reason" class="form-control" aria-label="With textarea"></textarea>
</div>
      <div class="col-md-12 text-center">
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;margin-top: 20px;" class="btn btn-info btn-lg" id="submit2" type="submit" value="Xác nhận ">
            </div>
   </form>
    </div>
</div>

	<script type="text/javascript">
		var span = $(".close");

$(document).ready(function(){
    // When the user clicks the button, open the modal 
    
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.hide();
        document.getElementById("reason").value = "";
    });
});
function add(id){
    $('[name="idreason"]').val(id);
        $('#reason1').val("");
        $('#reason').modal('show');
}

	</script>
	</body>
</html>

