
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>/css/manager.css" rel="stylesheet">
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
          <a class="nav-link" href="" id="role">
      <i class="fa fa-user" aria-hidden="true"></i>  Thu ngân</a>
    </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>login/logout" class="btn btn-info btn-sm logout">Đăng xuất  <img src="<?php echo base_url(); ?>/img/l_o.png" height="30px"></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
    <a href="<?php echo base_url(); ?>cashier" class="btn btn-warning btn-lg float-right mr-1 mt-4" style="  position: -webkit-sticky;
  position: sticky; top: 100px;right: 0;">Làm mới  <i class="fa fa-refresh fa-spin ml-1"> </i></a>
  <h1 class="text-center">DỊCH VỤ</h1>
    <table border="5" cellspacing="0" align="center" class="bg-light">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="50" 
                width="200">
                <b>Ngày/Ca</b></br>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>I<br>8:30-9:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>II<br>9:30-10:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>III<br>10:30-11:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>IV<br>11:30-12:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>V<br>12:30-13:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>VI<br>13:30-14:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>VII<br>14:30-15:30</b>
            </td>
            
        </tr>
       
          
        
        <tr>
                <td align="center" height="50">
                <b>Hôm nay</b></td>
                  <?php for($i=1;$i<8;$i++) {?>
                    <td align="center" height="50"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']==''): ?>
                         <?php if ($value['role']== '1'): ?>
                            
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Số điện thoại :</strong> <?php echo $value['sdt'] ?></small></div>

                        <div class="text-left"><small><strong>Nhân viên :</strong> <?php echo $value['nhanvien'] ?></small></div>
                         <br>
                       
                             <button class="btn btn-info btn-sm">Đã thanh toán <i class="fa fa-credit-card fa-md" aria-hidden="true" style="margin-left: 5px;"></i></button>   
                               
                                <?php endif ?>
                                
                                <?php if ($value['role']== '0'): ?>
                    
                            <?php endif ?>
                            <?php $x=1;?>
                      <?php endif ?>
                    
                       <?php $x=1?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        
                         <div class="text-center"><small>Trống</small></div>
                         <button type="button" onclick="show(<?php echo $i;?>,'nay')" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i></button>
                       <?php endif ?>
                       <br>
        <br>
                       </td>
                     <?php };?>
        </tr>
        <tr>
                <td align="center" height="50">
                <b>Ngày mai</b></td>
            <?php for($i=1;$i<8;$i++) {?>
                    <td align="center" height="50"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='mai'&&$value['ghichu']==''): ?>
                         <?php if ($value['role']== '1'): ?>
                            
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Số điện thoại :</strong> <?php echo $value['sdt'] ?></small></div>

                        <div class="text-left"><small><strong>Nhân viên :</strong> <?php echo $value['nhanvien'] ?></small></div>
                         <br>
                       
                             <button class="btn btn-info btn-sm">Đã thanh toán <i class="fa fa-credit-card fa-md" aria-hidden="true" style="margin-left: 5px;"></i></button>   
                               
                                <?php endif ?>
                                
                                <?php if ($value['role']== '0'): ?>
                    
                            <?php endif ?>
                            <?php $x=1;?>
                      <?php endif ?>
                    
                       <?php $x=1?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        
                         <div class="text-center"><small>Trống</small></div>
                         <button type="button" onclick="show(<?php echo $i;?>,'nay')" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i></button>
                       <?php endif ?>
                       <br>
        <br>
                       </td>
                     <?php };?>
        </tr>
        <tr>
                <td align="center" height="50">
                <b>Ngày kia</b></td>
              <?php for($i=1;$i<8;$i++) {?>
                   <td align="center" height="50"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='kia'&&$value['ghichu']==''): ?>
                         <?php if ($value['role']== '1'): ?>
                            
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Số điện thoại :</strong> <?php echo $value['sdt'] ?></small></div>

                        <div class="text-left"><small><strong>Nhân viên :</strong> <?php echo $value['nhanvien'] ?></small></div>
                         <br>
                       
                             <button class="btn btn-info btn-sm">Đã thanh toán <i class="fa fa-credit-card fa-md" aria-hidden="true" style="margin-left: 5px;"></i></button>   
                               
                                <?php endif ?>
                                
                                <?php if ($value['role']== '0'): ?>
                    
                            <?php endif ?>
                            <?php $x=1;?>
                      <?php endif ?>
                    
                       <?php $x=1?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        
                         <div class="text-center"><small>Trống</small></div>
                         <button type="button" onclick="show(<?php echo $i;?>,'nay')" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i></button>
                       <?php endif ?>
                       <br>
        <br>
                       </td>
                     <?php };?>
        </tr>
        
        
    </table>

    <!---Afternoon--->
    <br>
    <br>
    <br>
    
    <table border="5" cellspacing="0" align="center" class="bg-light">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="50" 
                width="200">
                <b>Ngày/Ca</b></br>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>VIII<br>15:30-16:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>IX<br>16:30-17:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>X<br>17:30-18:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XI<br>18:30-19:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XII<br>19:30-20:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XIII<br>20:30-21:30</b>
            </td>
            <td align="center" height="50" 
                width="200">
                <b>XIV<br>21:30-22:30</b>
            </td>
             </td>
        </tr>
        <tr>
                <td align="center" height="50">
                <b>Hôm nay</b></td>
                  <?php for($i=8;$i<15;$i++) {?>
                   <td align="center" height="50"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']==''): ?>
                         <?php if ($value['role']== '1'): ?>
                            
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Số điện thoại :</strong> <?php echo $value['sdt'] ?></small></div>

                        <div class="text-left"><small><strong>Nhân viên :</strong> <?php echo $value['nhanvien'] ?></small></div>
                         <br>
                       
                             <button class="btn btn-info btn-sm">Đã thanh toán <i class="fa fa-credit-card fa-md" aria-hidden="true" style="margin-left: 5px;"></i></button>   
                               
                                <?php endif ?>
                                
                                <?php if ($value['role']== '0'): ?>
                    
                            <?php endif ?>
                            <?php $x=1;?>
                      <?php endif ?>
                    
                       <?php $x=1?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        
                         <div class="text-center"><small>Trống</small></div>
                         <button type="button" onclick="show(<?php echo $i;?>,'nay')" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i></button>
                       <?php endif ?>
                       <br>
        <br>
                       </td>
                     <?php };?>
        </tr>
        <tr>
                <td align="center" height="50">
                <b>Ngày mai</b></td>
                  <?php for($i=8;$i<15;$i++) {?>
                   <td align="center" height="50"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='mai'&&$value['ghichu']==''): ?>
                         <?php if ($value['role']== '1'): ?>
                            
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Số điện thoại :</strong> <?php echo $value['sdt'] ?></small></div>

                        <div class="text-left"><small><strong>Nhân viên :</strong> <?php echo $value['nhanvien'] ?></small></div>
                         <br>
                       
                             <button class="btn btn-info btn-sm">Đã thanh toán <i class="fa fa-credit-card fa-md" aria-hidden="true" style="margin-left: 5px;"></i></button>   
                               
                                <?php endif ?>
                                
                                <?php if ($value['role']== '0'): ?>
                    
                            <?php endif ?>
                            <?php $x=1;?>
                      <?php endif ?>
                    
                       <?php $x=1?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        
                         <div class="text-center"><small>Trống</small></div>
                         <button type="button" onclick="show(<?php echo $i;?>,'nay')" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i></button>
                       <?php endif ?>
                       <br>
        <br>
                       </td>
                     <?php };?>
        </tr>
        <tr>
                <td align="center" height="50">
                <b>Ngày kia</b></td>
                
                <?php for($i=8;$i<15;$i++) {?>
                   <td align="center" height="50"> 
                      <?php $x=0?>
                      <?php foreach ($fulldata as  $value): ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='kia'&&$value['ghichu']==''): ?>
                         <?php if ($value['role']== '1'): ?>
                            
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Số điện thoại :</strong> <?php echo $value['sdt'] ?></small></div>

                        <div class="text-left"><small><strong>Nhân viên :</strong> <?php echo $value['nhanvien'] ?></small></div>
                         <br>
                       
                             <button class="btn btn-info btn-sm">Đã thanh toán <i class="fa fa-credit-card fa-md" aria-hidden="true" style="margin-left: 5px;"></i></button>   
                               
                                <?php endif ?>
                                
                                <?php if ($value['role']== '0'): ?>
                    
                            <?php endif ?>
                            <?php $x=1;?>
                      <?php endif ?>
                    
                       <?php $x=1?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                        
                         <div class="text-center"><small>Trống</small></div>
                         <button type="button" onclick="show(<?php echo $i;?>,'nay')" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-xs"></i></button>
                       <?php endif ?>
                       <br>
        <br>
                       </td>
                     <?php };?>
        </tr>
        
    </table>
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</div>

</div>

<div id="modalDialog" class="modal">
    <div class="modal-content animate-top " style="height:450px;">

        <div class="modal-header">
          <div class="text-center">
            <h3 class="linear" style="justify-content: center;">THÔNG TIN DỊCH VỤ</h3></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        <form method="post" id="contactFrm" action="<?php echo base_url();?>manager/insert_dichvu">
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
            <input type="hidden" name="day1" value="">
            <input type="hidden" name="id1" value="">
            <!-- Contact form -->
            
      <div class="form-field  col-md-12">
         <label class="label" for="name">Tên khách hàng</label>
         <input style="margin-left: 73px;width: 400px;" id="name" name="tenkh" class="input-text js-input" type="text" required>
         
      </div>
      <div class="form-field  col-md-12 ">
         <label  class="label" for="email">E-mail</label>
         <input style="margin-left: 142px;width: 500px;" id="email" name="email" class="input-text js-input" type="email">
         
      </div>
       <div class="form-field  col-md-12 ">
         <label  class="label" for="email">Địa chỉ</label>
         <input style="margin-left: 142px;width: 500px;" id="diachi" name="diachi" class="input-text js-input" type="text">
         
      </div>
      <div class="form-field  col-md-12">
         <label class="label" for="company">Số điện thoại</label>
         <input style="margin-left: 94px;width: 200px;" id="company" name="sdt" class="input-text js-input" type="text"  required>
         
      </div>
       <div class="form-field  col-md-12">
         <div class="input-group mb-3">
            
             <label class="label" for="inputGroupSelect02">Loại dịch vụ</label>
           
           <select style="margin-left: 107px;height: 40px;font-size: 18px;" class="custom-select" name="dichvu" id="inputGroupSelect02">
             <option  value="" disabled selected hidden>Chọn dịch vụ</option>
             <?php foreach ($listdichvu as $value): ?>
               <option value="<?php echo $value['tendichvu'];  ?>"><?php echo $value['tendichvu']; ?> - <?php echo $value['giatien']; ?></option>
             <?php endforeach ?>
           </select>
           
            </div>
      </div>
   
            <div class="col-md-12 text-center">
              <br>
              
              
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;" class="submit-btn btn-info btn-lg" id="submit" type="submit" value="Đặt lịch cho khách hàng" >
            </div>
        </div>
        </form>
    </div>
</div>
 
</div>
</body>
<script type="text/javascript">
  var modal = $('#modalDialog');
var modal2 = $('#timetable');
// Get the button that opens the modal
var btn = $("#mbtn");
var submit = $("#submit")
// Get the <span> element that closes the modal
var span = $(".close");

$(document).ready(function(){
    // When the user clicks the button, open the modal 
    btn.on('click', function() {
        modal.show();
    });
    
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.hide();
    });
});
function show(id,day) {
  

   $('[name="day1"]').val(day);
   $('[name="id1"]').val(id);
   $('[name="tenkh"]').val("");
   $('[name="sdt"]').val("");
   $('[name="email"]').val("");
   $('[name="dichvu"]').val("");

    modal.show();
}
function chot_dichvu(id)
    {
      
      
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo base_url(); ?>supporter/chot_dichvu/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            location.reload();
            

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log(jqXHR);
            alert('Error get data from ajax');
        }
    });
    }
function delete_dichvu(id)
    {
      
      if (confirm("Bạn có chắc chắn muốn xóa dịch vụ này ?")) {
            $.ajax({
        url : "<?php echo base_url(); ?>supporter/delete_dichvu/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            location.reload();
            

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log(jqXHR);
            alert('Error get data from ajax');
        }
    });
    
  } else {
    location.reload();
  }
}
      //Ajax Load data from ajax
    


</script>
</html>