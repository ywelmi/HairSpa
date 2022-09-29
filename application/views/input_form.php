<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </script>
  <title>Quản lý</title>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<section class="get-in-touch">
   
   
      <div class="form-field  col-md-12">
         <label class="label" for="name">Tên khách hàng</label>
         <input style="margin-left: 73px;width: 400px;height: 40px;" id="name" name="tenkh" class="input-text js-input" type="text" required>
         
      </div>
      <div class="form-field  col-md-12 ">
         <label  class="label" for="email">E-mail</label>
         <input style="margin-left: 170px;width: 500px;height: 40px;" id="email" name="email" class="input-text js-input" type="email" required>
         
      </div>
      <div class="form-field  col-md-12">
         <label class="label" for="company">Số điện thoại</label>
         <input style="margin-left: 102px;width: 200px;height: 40px;" id="company" name="sdt" class="input-text js-input" type="text"  required>
         
      </div>
       <div class="form-field  col-md-12">
         <div class="input-group mb-3">
            
             <label class="label" for="inputGroupSelect02">Loại dịch vụ</label>
           
           <select style="margin-left: 120px;height: 40px;font-size: 13px;" class="custom-select" name="dichvu" id="inputGroupSelect02">
              <option  value="" disabled selected hidden>Chọn dịch vụ</option>
             <?php foreach ($listdichvu as $value): ?>
               <option value="<?php echo $value['tendichvu'];  ?>"><?php echo $value['tendichvu']; ?> - <?php echo $value['giatien']; ?></option>
             <?php endforeach ?>
           </select>
           
            </div>
      </div>
   
</section>




</body>
</html>
