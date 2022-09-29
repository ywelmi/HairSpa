<!DOCTYPE html>
<html>
<head>
	<title>Thêm nhân sự</title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Dosis&display=swap');
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php include "navigation.php" ?>
<section class="get-in-touch">
   <h1 class="title">THÔNG TIN NHÂN VIÊN</h1>
   <form class="contact-form row" action="<?php echo base_url() ?>/manager/add_nhansu" method="post" enctype="multipart/form-data">
      <div class="form-field col-lg-8">
         <input name="tennv" class="input-text js-input" type="text" required>
         <label class="label" for="name">Họ và tên</label>
      </div>      
      <div class="form-field col-lg-6 ">
         <input name="dob" class="input-text js-input" type="date" required>
         <label class="label1" for="dob">Ngày tháng năm sinh</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input name="sdt" class="input-text js-input" type="text" required>
         <label class="label" for="phone">Số điện thoại</label>
      </div>
      <div class="form-field col-lg-12">
         <input name="chucvu" class="input-text js-input" type="text" required>
         <label class="label" for="message">Lĩnh vực công việc</label>
      </div>
      <div class="form-field col-lg-12">
         <label id="avt" class="label1" for="message">Ảnh đại diện</label>
         <input type="file" class="form-field" style="height: 52px;" id="avatar_img" name="avatar_img" placeholder="Upload image">
        
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Thêm nhân sự">
      </div>
   </form>
</section>


</body>
</html>
