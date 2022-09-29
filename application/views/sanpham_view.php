<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sản phẩm & Ưu đãi</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	 <link href="<?php echo base_url(); ?>/css/sale.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>/css/navigation.css" rel="stylesheet">
</head>
<body>
	
    
   
 <div class="text-center">
      <br>
      <?php if($username == ""): ?>
          <a href="<?php echo base_url(); ?>homepage" class="btn btn-info btn-lg logout">Quay lại <i class="fas fa-arrow-alt-circle-left"></i>  </a>
               <?php else: ?>
        
          <a href="<?php echo base_url(); ?>homepage/user" class="btn btn-info btn-lg logout">Quay lại <i class="fas fa-arrow-alt-circle-left"></i>  </a>

                <?php endif;?>
           
        </div>
	<div class="container mt-3">
    <div class="d-flex align-items-center justify-content-between py-4 results">
        <div></div>
        <div> <span>Price: </span> <select name="price" id="price">
                <option value="l2h" selected>low to high</option>
                <option value="l2h">high to low</option>
            </select> </div>
    </div>
    
    <div class="row">
        <?php foreach ($fulldata as $value): ?>
            
        
        <div class="col-lg-3 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2" onmouseover="hover(<?php echo $value['ID'];  ?>)" onmouseleave="leave(<?php echo $value['ID'];  ?>)" >
            <div class="card test"> <img class="card-img-top " src="<?php echo $value['Anh'] ; ?>" style="width: 250px;
    height: 270px;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="h6 font-weight-bold name" id="<?php echo $value['ID'] ; ?>"  ><?php echo $value['TenSP'] ; ?></div>
                            <div class="text-muted"><strong>Thương hiệu:</strong> <?php echo $value['ThuongHieu'] ; ?></div>
                            <div class="text-muted"><strong>Giá tiền:</strong> <?php echo $value['Gia'];  ?> VNĐ</div>
                          
                            <?php if ($value['SoLuong']!='0') :?>
                           
                       
                    <div class="text-muted"><strong>Tình trạng:</strong> <div class="text-success float-right">Còn hàng</div> </div>
                     <?php else : ?>
                        <div class="text-muted"><strong>Tình trạng:</strong> <div class="text-danger float-right ml-0">Hết hàng</div> </div>
                     <?php endif ?>
                        </div>
                        <div class="btn"  id="heart"><span class="far fa-heart"></span></div>
                    </div>

                </div>
                <div class="card-footer text-center">
                   <div class="text-left">
                   <button type="button" onclick="edit_sp(<?php echo $value['ID'];?>)" class="btn btn-info openmodal btn-sm" data-toggle="modal" data-target="#modal1"> Xem mô tả sản phẩm </button>
                   <a href="#" type="button" class="btn btn-primary btn-sm float-right">Mua hàng</a>
                    </div>
                </div>
            </div>
            <br>       
        <br>       
        <br>
        </div>
        
         <?php endforeach ?>
         <div class="modal fade" id="modal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="text-center">
                    <input name="tensp" type="text" style="border:none;width: 400px;font-size: 30px" class="text-center mt-1"></input> <button type="button" class="close text-danger mr-2" data-dismiss="modal">&times;</button>
                </div> <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <h6><strong>Chi tiết sản phẩm</strong></h6>
                        <div class="row">
                            <div class="col-xs-6"> <img class="ml-3" height="150" width="150" id="anh" src=""> </div>
                            <div class="col-xs-6" style="padding-top: 2vh;">
                                <ul type="none">
                                    <li ><strong class="mr-1">Thương hiệu : </strong><input name="thuonghieu" type="text" style="border:none;width: 100px;margin-left: 30px;" class="text-left mt-1"></li>
                                     
                                  <li> <div ><strong>Tình trạng :</strong> <input name="tinhtrang" type="text" style="border:none;width: 100px;" class="text-left mt-1 ml-5"> </div> </li>
                     
                
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-6 mt-5">
                                <ul type="none">
                                    <li class="left"><strong>Mã sản phẩm:</strong></li>
                                    <li class="left"><strong>Hạn sử dụng:</strong></li>
                                    <li class="left"><strong>Giá sản phẩm:</strong></li>
                                    <li class="left"><strong>Chi phí vận chuyển:</strong></li>
                                    <li class="left"><strong>Tổng:</strong></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 mt-5">
                                <ul class="right" type="none">
                                    <li class="right">#BBRT-3456981</li>
                                    <li class="right">19-03-2020</li>
                                    <li class="right" ><input name="gia" type="text" style="border:none;width: 60px;" class="text-left"> VNĐ</li>
                                    <li class="right">30.000 VNĐ</li>
                                    <li class="right"><input name="tong" type="text" style="border:none;width: 60px;" class="text-left"> VNĐ</li>
                                </ul>
                            </div>
                        </div>
                        <h6><strong>Vận chuyển và thanh toán</strong></h6>
                        <div class="row" style="border-bottom: none">
                            <div class="col-xs-6">
                                <ul type="none">
                                    <li class="left"><strong>Ngày nhận hàng:</strong></li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul type="none">
                                    <li class="right">Sau khi đặt hàng 7 ngày</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <h6 ><strong>Mô tả:</strong><textarea name="mota" type="text" rows="15" cols="60" style="border:none;" class="form-control text-left mt-1"></textarea></h6>
                        </div>
                    </div>
                </div> <!-- Modal footer -->
                <div class="modal-footer"> <a href="#" type="button" class="btn btn-primary">Liên hệ mua hàng</a> </div>
            </div>
        </div>
    </div>
</div>
</div>

    </div>
</div>
</div>
</body>
<script type="text/javascript">
   
 function  hover(id) {
   
    $("#"+id).css("overflow","visible");
    $("#"+id).css("display","-webkit-box");
    $("#"+id).css("-webkit-line-clamp","3");
  }; 
  function leave(id) {
     $("#"+id).css("overflow","hidden");
    $("#"+id).css("display","-webkit-box");
    $("#"+id).css("-webkit-line-clamp","2");
  };
  function edit_sp(id)
    {
      
      
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo base_url(); ?>manager/get_sp/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            console.log(data);
           
             
            $('[name="tensp"]').val(data[0].TenSP);
            $('[name="gia"]').val(data[0].Gia);
            $('[name="thuonghieu"]').val(data[0].ThuongHieu); 
            $('[name="soluong"]').val(data[0].SoLuong); 
            $('[name="tong"]').val(parseInt(data[0].Gia)+30000); 
            if(data[0].SoLuong != 0)
                $('[name="tinhtrang"]').val('Còn hàng'); 
                 
            else
                $('[name="tinhtrang"]').val('Hết hàng'); 
            
            $('[name="mota"]').val(data[0].MoTa);
            $('[name="id"]').val(data[0].ID);
            
            document.getElementById("anh").src=data[0].Anh;

            $('#modalDialog').modal('show'); // show bootstrap modal when complete loaded
            

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log(jqXHR);
            alert('Error get data from ajax');
        }
    });
    }


function show() {
    // body...
    document.getElementById("mota").style.display="block";
    document.getElementById("modalDialog").style.height="700px";
    document.getElementById("show").style.display="none";
    document.getElementById("hide").style.display="inline-block";

}
function hide() {
    // body...
    document.getElementById("mota").style.display="none";
    document.getElementById("show").style.display="inline-block";
    document.getElementById("hide").style.display="none";
    document.getElementById("modalDialog").style.height="400px";
}

</script>
</html>