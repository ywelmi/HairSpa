<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nhân sự</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>/css/nhansu.css" rel="stylesheet">
</head>
<body>
	<?php include "navigation.php";  ?>
	<div class="text-center">
	<h1 class="text-center">Nhân sự MT Hair Spa</h1>
	<br>
	<a href="<?php echo base_url() ?>manager/load_add_form/1" class="btn btn-info btn-md "><i class="fas fa-plus fa-md"></i> Thêm nhân viên mới</a>
	</div>
	<div class="container">
		<div class="row">
			
			
			<br>
			<br>
			<br>
			<div class="card-deck">
			<?php foreach ($fulldata as $value): ?>
				
			 <div class="col-xl-4 col-sm-6 col-md-4 mb-5">

			 	<div class="text-left">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?php echo $value['avatar_img'] ?>" alt="" width="300" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
               
                <h5 class="mb-0">Tên nhân viên: <?php echo $value['tennv']; ?></h5>
                <h5 class="mb-0">Ngày tháng năm sinh: <?php echo $value['dob']; ?></h5>
                <h5 class="mb-0">Chức vụ: <?php echo $value['chucvu']; ?></h5>
                <span class="small text-uppercase text-muted">SĐT: <?php echo $value['sdt'] ;?></span>
                <br>
                <br>
                <div class="text-center">
                <a href="<?php echo base_url() ?>index.php/manager/edit_nhansu/<?php echo $value['id'];  ?>" class="btn btn-success btn-md"><i class="fas fa-edit fa-md"></i> Chỉnh sửa</a>
                      <button onclick="delete_nhansu(<?php echo $value['id'];  ?>)" type="button" class="btn btn-danger btn-md"><i class="far fa-trash-alt fa-md"></i> Xóa</button>
                </div>
               </div>
            </div>
        </div><!-- End -->
			<?php endforeach ?>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function delete_nhansu(id){
    
  if (confirm("Bạn có chắc chắn muốn xóa nhân viên này")) {
          $.ajax({
            url : "<?php echo base_url(); ?>manager/delete_nhansu/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {

               location.reload();
            }
            
        });
  } else {
    location.reload();
  }


}
</script>
</html>