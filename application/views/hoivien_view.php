<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý hội viên</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	 <link href="<?php echo base_url(); ?>/css/hoivien.css" rel="stylesheet">
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
    <div class="container mt-3 text-center">
         <a href="<?php echo base_url(); ?>manager/load_add_form/2" class="btn btn-info btn-lg ">Thêm hội viên mới  <i class="fas fa-plus fa-xs"> </i></a>
    </div>
   
</div>
	<div class="container mt-3">
    <div class="row">
        <?php foreach ($fulldata as $value): ?>
            
        
       <div class="col-xl-4 col-sm-6 col-md-4 mb-5">

                <div class="text-left">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?php echo $value['avatar_img']; ?>" alt="" width="300" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
               
                <h5 class="mb-0"><strong>Tên hội viên: </strong><?php echo $value['HoTen']; ?></h5>
                <h5 class="mb-0"><strong>Ngày tháng năm sinh:</strong> <?php echo $value['NgaySinh']; ?></h5>
                <h5 class="mb-0"><strong>Username:</strong> <?php echo $value['user']; ?></h5>
                <h5 class="mb-0"><strong>Password:</strong> <?php echo $value['pw']; ?></h5>
                <h5 class="mb-0"><strong>Số điện thoại:</strong> <?php echo $value['SDT']; ?></h5>
               
                    <h5 class="mb-0"><strong>Giới tính:</strong> <?php echo $value['GioiTinh']; ?></h5>
               
                <span class="small text-uppercase text-muted"><strong>Số lần sử dụng dịch vụ: </strong> <?php echo $value['SoLanSD'] ;?></span>
                <br>
                <br>
                <div class="text-center">
                <a href="<?php echo base_url() ?>index.php/supporter/edit_hoivien/<?php echo $value['ID'];  ?>" class="btn btn-success btn-md"><i class="fas fa-edit fa-md"></i> Chỉnh sửa</a>
                      <button onclick="delete_hoivien(<?php echo $value['ID'];  ?>)" type="button" class="btn btn-danger btn-md"><i class="far fa-trash-alt fa-md"></i> Xóa</button>
                </div>
               </div>
            </div>
        </div><!-- End -->

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

function delete_hoivien(id){
    
  
  if (confirm("Bạn có chắc chắn muốn xóa hội viên này")) {
          $.ajax({
            url : "<?php echo base_url(); ?>supporter/delete_hoivien/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {

               location.reload();
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