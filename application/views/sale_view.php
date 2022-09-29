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
</head>
<body>
	<?php include "navigation.php" ?>
    <div class="container mt-3 text-center">
         <button onclick="add_sp()" class="btn btn-info btn-lg ">Thêm sản phẩm mới  <i class="fas fa-plus fa-xs"> </i></button>
    </div>
   
</div>
	<div class="container mt-3">
    <div class="d-flex align-items-center justify-content-between py-4 results">
        <div>Showing 1-40 of 350</div>
        <div> <span>Price: </span> <select name="price" id="price">
                <option value="l2h" selected>low to high</option>
                <option value="l2h">high to low</option>
            </select> </div>
    </div>
    
    <div class="row">
        <?php foreach ($fulldata as $value): ?>
            
        
        <div class="col-lg-3 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2" onmouseover="hover(<?php echo $value['ID'];  ?>)" onmouseleave="leave(<?php echo $value['ID'];  ?>)" >
            <div class="card test"> <img class="card-img-top " src="<?php echo $value['Anh'] ; ?>" style="width: 150px;
    height: 220px;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="h6 font-weight-bold name" id="<?php echo $value['ID'] ; ?>"  ><?php echo $value['TenSP']  ?></div>
                            <div class="text-muted"><strong>Thương hiệu:</strong> <?php echo $value['ThuongHieu']  ?></div>
                            <div class="text-muted"><strong>Giá tiền:</strong> <?php echo $value['Gia']  ?></div>
                            <div class="text-muted"><strong>Số lượng:</strong> <?php echo $value['SoLuong']  ?></div>
                            
                        </div>
                        <div class="btn"  id="heart"><span class="far fa-heart"></span></div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button onclick="edit_sp(<?php echo $value['ID'];?>)" class="btn btn-success btn-sm edit ">Chỉnh sửa  <i class="fas fa-edit fa-xs"> </i></button>
                        <button onclick="delete_sp(<?php echo $value['ID'];?>)" class="btn btn-danger btn-sm delete">Xóa  <i class="far fa-trash-alt fa-xs"> </i></button>
                </div>
            </div>
            <br>       
        <br>       
        <br>
        </div>

         <?php endforeach ?>
</div>
</div>
<div id="modalDialog" class="modal">
    <div class="modal-content animate-top ">

        <div class="modal-header">
          <div class="text-center">
            <h5 class="modal-title" style="justify-content: center;">Sản phẩm</h5></div>
            <button type="button" onclick="hide()" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
      
            <!-- Contact form -->
        
        <form class="contact-form row" action="<?php echo base_url(); ?>/manager/edit_sp" method="post">
            <input type="hidden" name="id">
      <div class="form-field  col-md-12">
         <label class="label" for="name">Tên sản phẩm</label>
         <input style="margin-left: 72px;width: 400px;font-weight: 3rem;" name="tensp" id="tensp" type="text"  >
         
      </div>
      <div class="form-field  col-md-12 ">
         <label  class="label" for="email">Thương Hiệu</label>
         <input style="margin-left: 79px;width: 200px;" name="thuonghieu" id="thuonghieu" type="text" >
         
      </div>
      <div class="form-field  col-md-12">
         <label class="label" for="company">Giá tiền</label>
         <input style="margin-left: 111px;width: 200px;" name="gia" id="gia"  type="number"  >
         
      </div>
      <div class="form-field  col-md-12">
         <label class="label" for="company">Số lượng</label>
         <input style="margin-left: 104px;width: 100px;" name="soluong" id="soluong"   type="number"  >
         
      </div>
       <div class="form-field  col-md-12 text-center">
            <div class="btn btn-info btn-sm" id="show" onclick="show()">Hiện mô tả</div>
            <div class="btn btn-info btn-sm" id="hide" onclick="hide()" style="display: none;">Ẩn mô tả</div>
            <textarea class="mt-2 mb-2" name="mota" id="mota" style="display: none;height: 300px;width: 760px;"></textarea>
            
      </div>
      <br>
      <br>
      <br>
      <div class="col-md-12 text-center">
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;" class="btn btn-info btn-lg" id="edit" type="submit" value="Chỉnh sửa sản phẩm " >
            <div class="btn btn-info btn-md"  id="add" onclick="add_sp_ajax()" style="display:none;">Thêm sản phẩm </div>
            </div>
   </form>
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
            
            $('[name="mota"]').val(data[0].MoTa);
            $('[name="id"]').val(data[0].ID);

            $('#modalDialog').modal('show'); // show bootstrap modal when complete loaded
            

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log(jqXHR);
            alert('Error get data from ajax');
        }
    });
    }

function delete_sp(id){
    
  
  if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này")) {
          $.ajax({
            url : "<?php echo base_url(); ?>manager/delete_sp/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {

               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
  } else {
    location.reload();
  }


}
function add_sp() {
     $('[name="tensp"]').val("");
            $('[name="gia"]').val("");
            $('[name="thuonghieu"]').val(""); 
            $('[name="soluong"]').val(""); 
            
            $('[name="mota"]').val("");
       $('#modalDialog').modal('show');
       document.getElementById("edit").style.display="none";
       document.getElementById("add").style.display="inline-block";
       document.getElementById("mota").style.display="block";
       document.getElementById("modalDialog").style.height="700px";
       document.getElementById("show").style.display="none";
   }


function add_sp_ajax(){
  
        /* Act on the event */
        $.ajax({
        url: 'ajax_add_sp',
        type: 'POST',
        dataType: 'json',
        data: {
            TenSP:$('#tensp').val(),
            ThuongHieu: $('#thuonghieu').val(),
            Gia: $('#gia').val(),
            MoTa: $('#mota').val(),
            SoLuong: $('#soluong').val(),
        },
    })
    .done(function() {
        //console.log("success");
    })
    .fail(function() {
        //console.log("error");
    })
    .always(function() {
        //console.log("complete");
         location.reload();

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