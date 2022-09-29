<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý kinh doanh</title>
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
    <?php include "navigation.php" ?>
	<div class="container mt-3">
    <div class="row">
    	<div class="col-md-6">
    		<p class="text-center">Quản lý kinh doanh theo ngày</p>	
    			<table class="table" cellspacing="0" align="center" border="5">
						  <thead>
						    <tr align="center" class="align-items-center">
						    	
						    	<th width="330" class="title font-weight-bold align-items-center"><p>Ngày kinh doanh</p></th>
						      <th width="350" class="title font-weight-bold align-items-center"><p>Tổng tiền dịch vụ</p></th>
						      <th width="350" class="title font-weight-bold align-items-center"><p>Tổng tiền vật chất hao mòn</p></th>
						      <th width="250" class="title font-weight-bold align-items-center"><p>Tổng thu nhập trong ngày</p></th>
						     
						      
						    </tr>
						  </thead>
						  <tbody >
						  	 <?php foreach ($fulldata as $value): ?>
						    <tr class="alert" role="alert" align="center">
						    	
						      <td  width="250">
						      	
						      	<div class="m-auto pl-1 ">
						      		<span><?php echo $value['MaNgayKinhDoanh'];?></span>
						      		
						      		
						      	</div>
						      
						      </td>
						      <td width="400">
						      	<p><?php echo $value['TongTienDichVu'];?></p>
						      		
						      	</td>
						      <td>
						      	<p><?php echo $value['TongTienVatChat'];?></p>
						      	
						      </td>
						      
						      <td class="">
						      	<p><?php echo $value['TongThuNhap'];?></p>
						      </td>
						     
						      	
				        	
						    </tr>
						   <?php endforeach ?>
						    
						  </tbody>
						</table>
    	</div>
    	<div class="col-md-6">
    		<p class="text-center">Quản lý vật chất hao mòn theo ngày</p>	
    		<?php foreach ($fulldata as $value): ?>
        	
       		 <?php endforeach ?>
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