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
    <link href="<?php echo base_url(); ?>/css/navigation.css" rel="stylesheet">
  

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
          <a class="nav-link active" href="<?php echo base_url(); ?>manager/load_congviec">Công việc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>manager/load_nhansu">Nhân sự</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>manager/load_sale">Sản phẩm & Ưu đãi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>manager/load_CSVC">Cơ sở vật chất</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="" id="role">
      <i class="fa fa-user" aria-hidden="true"></i>  Admin</a>
    </li>
    <li>
          <a href="<?php echo base_url(); ?>login/logout" class="btn btn-info btn-sm logout" id="logout">Đăng xuất  <img src="<?php echo base_url(); ?>/img/l_o.png" height="20px"></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>