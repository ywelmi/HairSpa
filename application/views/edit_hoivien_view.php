<!DOCTYPE html>
<html>
<head>
	<title>Thêm nhân sự</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Dosis&display=swap');
html,body{
    font-family: 'Dosis';
    
 }
.navbar {
  font-size: 20px;
  color: #222;
  
  background-color: rgba(82,64,120,0.9) !important;
}

.navbar li a {
    color: white !important;
    font-size: 20px;
    margin-right: 40px;

}
.navbar li a:hover {
    color: black !important;
}

#logout{
    margin-top: 2px;
    margin-right: 10px;
}
#role {
    margin-right: 10px;
    margin-top: 8px;
    color: red;
    font-size: 15px;
    margin-left: 200px;
    line-height: 5px;
    height: 25px;
}
.get-in-touch {
  width: 100%;
  height: 100%;
  font-family: 'Dosis';
  font-size: 20px;
  
}
.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  
  letter-spacing: 3px;
  font-size: 55px;
  line-height: 68px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .label1 {
  position: absolute;
  left: 20px;
  bottom: 30px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .label2 {
  position: absolute;
  left: 20px;
  bottom: 40px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
#avt {
  bottom: 90px;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}
</style>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->
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
<section class="get-in-touch">
   <h1 class="title">THÔNG TIN HỘI VIÊN</h1>
   <?php foreach ($data as $value): ?>
   <form class="contact-form row" action="<?php echo base_url() ?>supporter/update_hoivien" method="post" enctype="multipart/form-data">
      <div class="form-field col-lg-8">
         <input name="tennv" class="input-text js-input" value="<?php echo $value['HoTen'];  ?>" type="text" >
         <label class="label1" for="name">Họ và tên</label>
      </div>      
      <div class="form-field col-lg-6 ">
         <input name="dob" class="input-text js-input" value="<?php echo $value['NgaySinh'];  ?>" type="date" >
         <label class="label1" for="dob">Ngày tháng năm sinh</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input name="sdt" class="input-text js-input" value="<?php echo $value['SDT'];  ?>" type="text" >
         <label class="label1" for="phone">Số điện thoại</label>
      </div>
      <div class="form-field col-lg-12">
         <input name="username" class="input-text js-input" value="<?php echo $value['user'];  ?>" type="text" >
         <label class="label1" for="message">Username</label>
      </div>
      <div class="form-field col-lg-12">
         <input name="pw" class="input-text js-input" value="<?php echo $value['pw'];  ?>" type="text">
         <label class="label1" for="message">Password</label>
      </div>
       <div class="form-field col-lg-12">
          
          <select style="height: 40px;font-size: 15px;" class="input-text" name="gioitinh" >
             
             <option  value="<?php echo $value['GioiTinh'];  ?>" ><?php echo $value['GioiTinh'];  ?></option>
             
               <option value="Nam">Nam</option>
               <option value="Nữ">Nữ</option>
           </select>
           <label class="label2" for="message">Giới tính</label> 
         </div>
      <div class="form-field col-lg-6">
         <label id="avt" class="label1" for="message">Ảnh đại diện</label>
         <input type="file" class="form-field" style="height: 52px;" id="avatar_img" name="avatar_img" placeholder="Upload image">
         <input type="hidden" name="change" id="change" value="<?php echo $value['avatar_img'];  ?>">
          <input type="hidden" name="id" value="<?php echo $value['ID'];  ?>">
      </div>
      <div class="form-field col-lg-6">
         <img class="img-fluid" width="150" height="225" src="<?php echo $value['avatar_img']  ?>">
        
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Lưu thay đổi">
      </div>

   </form>
     <?php endforeach ?>
</section>


</body>
</html>
