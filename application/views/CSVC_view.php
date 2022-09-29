<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý cơ sở vật chất</title>
	 <link href="<?php echo base_url(); ?>/css/CSVC.css" rel="stylesheet">
</head>
<body>
	<?php include "navigation.php" ?>
   
   
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4 mt-3">
                    <h2 class="heading-section h1">QUẢN LÝ CƠ SỞ VẬT CHẤT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 
                     
                 
                   
                        <table class="table" border="5">
                          <thead class="thead-primary">
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th width="300">Tên vật chất</th>
                              <th width="250" >Đơn giá (VNĐ)</th>
                             
                              <th class="quantity">Số lượng</th>
                              <th width="250">Tổng</th>
                              <th width="300">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $x=0;?>
                            <?php foreach ($fulldata as $value): ?>
                                <form method="post" action="<?php echo base_url(); ?>manager/edit_vc" enctype="multipart/form-data">
                            <tr class="alert" role="alert">
                                <td>
                                    <label class="checkbox-wrap checkbox-primary" >
                                          <?php echo $value['MaVatChat']; ?>
                                        </label>
                                        <input type="hidden" name="id" style="border:none;text-align: center;" value="<?php echo $value['MaVatChat']; ?>">
                                </td>
                                <td>
                                    <div class="img" style="background-image: url(<?php echo $value['avatar_img']; ?>);"></div>
                                </td>
                              <td>
                                <div class="email">
                                    <?php echo $value['TenVatChat']; ?>  
                                    
                                </div>
                              </td>
                              <td class="text-center"><input type="number" id="DG<?php echo $value['MaVatChat']; ?>" class="quantity form-control input-number text-center" value="<?php echo $value['DonGia']; ?>" disabled> 
                              <input type="hidden" name="soluong" style="border:none;text-align: center;" value=""></td>
                              <input type="hidden" name="dongia1" style="border:none;text-align: center;" value=""></td>
                              
                              <td class="quantity">
                                <div class="input-group">
                                <input type="text"  id="<?php echo $value['MaVatChat']; ?>"  class="quantity form-control input-number text-center" style="width:30px;" value="<?php echo $value['SoLuong']; ?>" min="1" max="100" disabled>
                            </div>
                          </td> 
                          <td><?php echo $value['DonGia']*$value['SoLuong']; ?> VNĐ </td>
                              <td>
                        <button onclick="edit_vc( <?php echo $value['MaVatChat']; ?>)" id="edit<?php echo $value['MaVatChat']; ?>" class="btn btn-success btn-sm edit " type="button">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="save_vc(<?php echo $value['MaVatChat']; ?>)" id="save<?php echo $value['MaVatChat']; ?>" style="display: none;" class="btn btn-success btn-sm save" type="submit">Lưu  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_vc( <?php echo $value['MaVatChat']; ?>)" id="delete<?php echo $value['MaVatChat']; ?>" class="btn btn-danger btn-sm delete" style="display: none;" type="button">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                            </td>
                            </tr>
                            </form>
                            <?php $x=$x+$value['DonGia']*$value['SoLuong'];?>
                                <?php endforeach ?>
                         
                          </tbody>
                        </table>
                        <div class="col-md-12">
                        <label class="text-center h4">Tổng giá trị vật chất :  <input type="text" name="quantity" class=" input-number text-center " style="width:230px;" value="<?php echo $x;?>" min="1" max="100" disabled> VNĐ</label>
                        </div>
                         <br>
                <br>
                    </div>
               
            </div>
        </div>
    

  
    
</body>
<script type="text/javascript">
  function edit_vc(id) {
     
    $("#"+id).prop("disabled", false);
    $("#DG"+id).prop("disabled", false);
    $("#save"+id).show();
    $("#edit"+id).hide();
    $("#delete"+id).show();

};
function save_vc(id) {
     
    $("#"+id).prop("disabled", true);
    $("#DG"+id).prop("disabled", true);
    $("#save"+id).hide();
    $("#edit"+id).show();
    $("#delete"+id).hide();
    var x=$("#"+id).val();
    var y=$("#DG"+id).val();

    $('[name="soluong"]').val(x);
    $('[name="dongia1"]').val(y);

};
</script>
</html>