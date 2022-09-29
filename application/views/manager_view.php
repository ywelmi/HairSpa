
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>/css/manager.css" rel="stylesheet">
</head>
<body>
  <?php include "navigation.php" ?>
  <div>
    <a href="<?php echo base_url(); ?>manager/update_day" class="btn btn-success btn-md float-right mt-2">Thống kê trong ngày  <i class="fa fa-calculator"> </i></button>
    <a href="<?php echo base_url(); ?>manager/refresh" class="btn btn-info btn-md float-right mr-1 mt-2"  >Làm mới  <i class="fa fa-refresh fa-spin ml-1"> </i></a>
    </div>
<div class="container-fluid">
    
  <div>
  <h1 class="text-center mt-2">QUẢN LÝ DỊCH VỤ</h1>
  </div>
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
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']==''&&$value['role']==1): ?>
                       <?php if ($value['nhanvien']=='') :?>
                           
                       
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Phân công  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_kh(<?php echo $value['id'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                     
                     <?php else : ?>
                         <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                     <?php endif ?>
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']!=''): ?>
                            
                         
                        <div class="text-center"><small>Phản hồi :<br> 
                            <strong><?php echo $value['ghichu'] ?></strong>
                        </small></div>
                       
                    
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                          <div  class="text-center" style="font-size:25px;color: red;"><small>Trống</small></div>
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
                      <?php if ($value['ca']== $i&&$value['ngay']=='mai'&&$value['ghichu']==''&&$value['role']==1): ?>
                       
                      <?php if ($value['nhanvien']=='') :?>
                           
                       
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Phân công  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_kh(<?php echo $value['id'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                     
                     <?php else : ?>
                         <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                     <?php endif ?>
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='mai'&&$value['ghichu']!=''): ?>
                            
                         
                        <div class="text-center"><small>Phản hồi :<br> 
                            <strong><?php echo $value['ghichu'] ?></strong>
                        </small></div>
                       
                    
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                          <div  class="text-center" style="font-size:25px;color: red;"><small>Trống</small></div>
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
                      <?php if ($value['ca']== $i&&$value['ngay']=='kia'&&$value['ghichu']==''&&$value['role']==1): ?>
                    <?php if ($value['nhanvien']=='') :?>
                           
                       
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Phân công  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_kh(<?php echo $value['id'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                     
                     <?php else : ?>
                         <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                     <?php endif ?>
                      <?php $x=1?>
                      <?php endif ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='kia'&&$value['ghichu']!=''): ?>
                            
                         
                        <div class="text-center"><small>Phản hồi :<br> 
                            <strong><?php echo $value['ghichu'] ?></strong>
                        </small></div>
                       
                    
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                          <div  class="text-center" style="font-size:25px;color: red;"><small>Trống</small></div>
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
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']==''&&$value['role']==1): ?>
                       
                    <?php if ($value['nhanvien']=='') :?>
                           
                       
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Phân công  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_kh(<?php echo $value['id'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                     
                     <?php else : ?>
                         <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                     <?php endif ?>
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']!=''): ?>
                            
                         
                        <div class="text-center"><small>Phản hồi :<br> 
                            <strong><?php echo $value['ghichu'] ?></strong>
                        </small></div>
                       
                    
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                          <div  class="text-center" style="font-size:25px;color: red;"><small>Trống</small></div>
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
                <?php if ($value['ca']== $i&&$value['ngay']=='mai'&&$value['ghichu']==''&&$value['role']==1): ?>
                       
                <?php if ($value['nhanvien']=='') :?>
                           
                       
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Phân công  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_kh(<?php echo $value['id'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                     
                     <?php else : ?>
                         <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                     <?php endif ?>
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']!=''): ?>
                            
                         
                        <div class="text-center"><small>Phản hồi :<br> 
                            <strong><?php echo $value['ghichu'] ?></strong>
                        </small></div>
                       
                    
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                          <div  class="text-center" style="font-size:25px;color: red;"><small>Trống</small></div>
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
                      <?php if ($value['ca']== $i&&$value['ngay']=='kia'&&$value['ghichu']==''&&$value['role']==1): ?>
                       
                <?php if ($value['nhanvien']=='') :?>
                           
                       
                        <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Phân công  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_kh(<?php echo $value['id'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                     
                     <?php else : ?>
                         <div  class="text-left"><small><strong>Khách hàng :</strong><?php echo $value['tenkh'] ?></small></div>
                        <div  class="text-left"><small><strong>Dịch vụ :</strong><?php echo $value['dichvu'] ?></small></div>
                        <div class="text-left"><small><strong>Nhân viên phục vụ :</strong><?php echo $value['nhanvien'] ?></small></div>
                         <br>

                        <button onclick="edit_kh(<?php echo $value['id'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                     <?php endif ?>
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php if ($value['ca']== $i&&$value['ngay']=='nay'&&$value['ghichu']!=''): ?>
                            
                         
                        <div class="text-center"><small>Phản hồi :<br> 
                            <strong><?php echo $value['ghichu'] ?></strong>
                        </small></div>
                       
                    
                      
                      <?php $x=1?>
                      <?php endif ?>
                      <?php endforeach ?>
                      <?php if ($x==0): ?>
                         <br>
                          <div  class="text-center" style="font-size:25px;color: red;"><small>Trống</small></div>
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
<div id="modalDialog" class="modal">
    <div class="modal-content animate-top ">

        <div class="modal-header">
          <div class="text-center">
            <h5 class="modal-title" style="justify-content: center;">Đặt lịch sử dụng dịch vụ</h5></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
      
            <!-- Contact form -->
        
        <form class="contact-form row" action="<?php echo base_url();  ?>manager/phancongnhanvien" method="post">
            <input type="hidden" name="idphancong">
      <div class="form-field  col-md-12">
         <label class="label" for="name">Tên khách hàng</label>
         <input style="margin-left: 72px;width: 400px;font-weight: 3rem;" name="name"  type="text" disabled >
         
      </div>
      <div class="form-field  col-md-12 ">
         <label  class="label" for="email">Dịch vụ</label>
         <input style="margin-left: 135px;width: 500px;" name="dichvu"  type="text" disabled>
         
      </div>
      <div class="form-field  col-md-12">
         <label class="label" for="company">Số điện thoại</label>
         <input style="margin-left: 92px;width: 200px;" name="sdt"   type="number"  disabled>
         
      </div>
       <div class="form-field  col-md-12">
         <div class="input-group mb-3">
            
             <label class="label" for="inputGroupSelect02">Nhân viên</label>
           
           <select style="margin-left: 118px;height: 40px;font-size: 15px;" class="custom-select" name="nhanvien" required>
             <option  value="" disabled selected hidden>Chọn nhân viên</option>
             <?php foreach ($nhansu as $value): ?>
               <option value="<?php echo $value['tennv'];  ?>"><?php echo $value['tennv']; ?> - <?php echo $value['chucvu']; ?></option>
             <?php endforeach ?>
           </select>
           
            </div>
      </div>
      <div class="col-md-12 text-center">
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;" class="btn btn-info btn-lg" id="submit2" type="submit" value="Xác nhận " >
            </div>
   </form>
    </div>
</div>
</div>
<div id="reason" class="modal">
    <div class="modal-content animate-top ">

        <div class="modal-header">
          <div class="text-center">
            <h5 class="modal-title" style="justify-content: center;">Lí do hủy dịch vụ</h5></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        <form method="post" id="contactFrm" action="<?php echo base_url();  ?>manager/reason">
        <div class="modal-body">
            <!-- Form submission status -->
            <input type="hidden" name="idreason"> 
      
            <!-- Contact form -->
        
        
      <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Lí do</span>
  </div>
  <textarea  id="reason1" name="reason" class="form-control" aria-label="With textarea"></textarea>
</div>
      <div class="col-md-12 text-center">
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;margin-top: 20px;" class="btn btn-info btn-lg" id="submit2" type="submit" value="Xác nhận ">
            </div>
   </form>
    </div>
</div>
</div>
</body>
<script type="text/javascript">
 

// Get the <span> element that closes the modal
var span = $(".close");

$(document).ready(function(){
    // When the user clicks the button, open the modal 
    
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.hide();
        document.getElementById("reason").value = "";
    });
});
function edit_kh(id)
    {
      
      
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo base_url(); ?>manager/ajax_edit_kh/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            console.log(data);
           
             
            $('[name="name"]').val(data[0].tenkh);
            $('[name="sdt"]').val(data[0].sdt);
            $('[name="dichvu"]').val(data[0].dichvu); 
            
            $('[name="idphancong"]').val(id);

            $('#modalDialog').modal('show'); // show bootstrap modal when complete loaded
            

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log(jqXHR);
            alert('Error get data from ajax');
        }
    });
    }
function delete_kh(id){
    $('[name="idreason"]').val(id);
        $('#reason1').val("");
        $('#reason').modal('show');
}


</script>
</html>