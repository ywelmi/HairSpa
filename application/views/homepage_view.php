<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MT Hair Spa</title>
  <!-- Import Boostrap css, js, font awesome here -->
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet">
    
</head>
<body>
  <div class="container-fuild">
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-branch" href="#" style="color: #ffff;">
      <img src="<?php echo base_url(); ?>/img/logo.png" height="50" style="background-color: whitesmoke;">  MT Hair Spa
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#slides">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#dichvu">Dịch vụ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sanpham">Sản phẩm & Ưu đãi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#hoivien">Hội viên</a>
        </li>
        <?php if($user == ""): ?>
        <li class="nav-item">
          <form action="login" method="post">
          <button type="submit" class="btn btn-secondary btn-sm" id="login">Đăng nhập</button>
          </form>
        </li>
        <li class="nav-item">
          <form action="homepage/register" method="post">
          <button type="submit" class="btn btn-light btn-sm" id="register">Đăng ký</button>
          </form>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="" id="role" style="margin-left:200px">
      <i class="fa fa-user" aria-hidden="true"></i> <?php echo $user ?></a>
    </li>
    <li>
          <a href="<?php echo base_url(); ?>login/logout" class="btn btn-info btn-sm logout" id="logout">Đăng xuất  <img src="<?php echo base_url(); ?>/img/l_o.png" height="20px"></a>
        </li>
        
      <?php endif;?>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img src="<?php echo base_url(); ?>/img/salon.jpg">
      <div class="carousel-caption">
        <h1 class="display-2">MT Hair Spa</h1>
        <h3>Hair Salon với những dịch vụ tốt nhất Việt Nam</h3>
        
        <button id="mbtn" class="btn btn-primary btn-md">Đặt lịch ngay</button>
        
      
      </div>
    </div>

    
  </div>
</div>
<!-- jumbotron -->

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-md-9 offset-2">
      <blockquote class="blockquote">
                  <h2 class="ml-5 font-italic">
                  "Yêu cái đẹp là thưởng thức. Tạo ra cái đẹp là nghệ thuật."
                  </h2>
                  <cite id="alo" class="text-white ml-3 text-right">
                    CEO của MT Hair Spa
                  </cite>
      </blockquote>
    </div>
    <!-- Horizontal Rule -->
  
    <div class="col-12" id="dichvu">
      <p>MT Hair Spa với đội ngũ nhân viên nhiều năm kinh nghiệm, chắc chắn sẽ đem lại cho khách hàng những mẫu tóc hoàn hảo nhất</p>
    </div>
  </div>
</div>
<div class="row">
 <div class="col-xs-4 col-sm-3 col-md-3 text-center">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <p>Danh sách dịch vụ hiện tại của spa</p>
      <button id="nbtn" class="btn btn-primary btn-md">Đặt lịch ngay</button>
    </div>  
    <div class="col-md-9">
    <div class="row">  
<?php foreach ($listdichvu as  $value): ?>

      <div class="col-xs-8 col-sm-4 col-md-4 " onmouseover="hover(<?php echo $value['id']; ?>)" onmouseout="out(<?php echo $value['id']; ?>)">     
              <img src="<?php echo $value['avatar_img']; ?>" class="img" alt="cattoc" height="300" width="300"> 

                <p class="ml-5 mb-0 font-weight-bold"><?php echo $value['tendichvu']; ?></p>
                
                <?php if ($solansd < $value['dieukien']): ?>
                  <p style="margin-left: 0px;font-size: 18px" class="text-left"><?php echo $value['giatien']; ?>
                   <i class="fa fa-star" style="color: yellow;margin-left: 150px;"></i>
                <i class="fa fa-star" style="color: yellow"></i>          
                <i class="fa fa-star" style="color: yellow"></i>   
                <i class="fa fa-star" style="color: yellow"></i>   
                </p>
                  <?php else :?>
                    <p style="margin-right: 10px;font-size: 18px;text-decoration: line-through;" class="text-left float-left"><?php echo $value['giatien']; ?> 

                  </p>
                     <p style="margin-left: 30px;font-size: 18px;" class="text-left"><?php echo $value['giauudai']; ?>
                     <i class="fa fa-star" style="color: yellow;margin-left: 100px;"></i>
                <i class="fa fa-star" style="color: yellow"></i>          
                <i class="fa fa-star" style="color: yellow"></i>   
                <i class="fa fa-star" style="color: yellow"></i>   
                </p>
                <?php endif ?>
              
               
        <div class="panel-body text-left" style="display: none;border:none; font-size:18px; padding-right:160px; margin:20px 0px; letter-spacing: 2px;"  id="x<?php echo $value['id']; ?>">
          
            <p><?php echo $value['mota']; ?></p>           
        </div>
    


<br>
</div>

<?php endforeach ?>
</div>
</div>
</div>

   
    
  
  
  <div id="modalDialog" class="modal">
    <div class="modal-content animate-top ">

        <div class="modal-header">
          <div class="text-center">
            <h3 class="linear mt-1" style="justify-content: center;">ĐẶT LỊCH SỬ DỤNG DỊCH VỤ</h3></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
      
            <!-- Contact form -->
            <?php include  "input_form.php"; ?>
             
            <div class="col-md-12 text-center">
              <br>
              <br>
              <br>
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;" onclick="add_dichvu()" class="btn btn-info btn-lg" id="submit" type="submit" value="Chọn lịch sử dụng dịch vụ" >
            </div>
            
        </div>
        
    </div>
</div>
<div id="timetable" class="modal">
    <div class="modal-content animate-top ">

        <div class="modal-header">
          <div class="text-center">
            <h5 class="linear" style="justify-content: center;font-size: 30px;">ĐẶT LỊCH SỬ DỤNG DỊCH VỤ</h5></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:red;">X</span>
            </button>
        </div>
        
        <div class="modal-body">
            <!-- Form submission status -->
            <div class="response"></div>
            <form action="<?php echo base_url();?>manager/insert_dichvu_hp" method="post" enctype="multipart/form-data">
           <input type="hidden"  name="tenkh1">
           <input type="hidden"  name="dichvu1">
           <input type="hidden"  name="sdt1">
           <input type="hidden"  name="ca1">
           <input type="hidden"  name="ngay1">
            <!-- Contact form -->
            <?php include  "time_table.php"; ?> 
            <br>
            <div class="col-md-12 text-center">
            <input style="width: 500px;height: auto; font-size: 17px;letter-spacing: 2px;" class="btn btn-info btn-lg" id="submit2" type="submit" value="Xác nhận" >
            </div>
            </form>
        </div>
        
    </div>
</div> 

<div class="product" id="sanpham" style="background-image: url(<?php echo base_url(); ?>/img/banner.jpg);">
         <div class="container ">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2><span class="blue whitebg">Sản phẩm </span></h2>
                    <blockquote class="quote-card">
              <p class="ml-2">
                Hạnh phúc là bí mật làm nên mọi nét đẹp. Không nhan sắc nào có thể thu hút mà không song hành cùng hạnh phúc 
              </p>
        
              <cite class="text-white ml-3 text-right">
                Ẩn danh
              </cite>
            </blockquote>
                  </div>
               </div>
            </div>
            <div class="row ">
               <div class="col-md-4">
                  <div class="product-box">
                     <figure><img src="<?php echo base_url(); ?>/img/sp1.png" alt="#" height="378"/></figure>
                     <div class="pro_text">
                        <h3>Kem ủ làm dày tóc Watsons</h3>
                        <small><strong>Giá tiền : </strong>110k </small>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="product-box">
                     <figure><img src="<?php echo base_url(); ?>/img/sp13.png" alt="#"/></figure>
                     <div class="pro_text">
                        <h3>Serum Dưỡng tóc bóng mượt TRESemmé Keratin Smooth</h3>
                        <small><strong>Giá tiền : </strong>110k </small>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="product-box">
                     <figure><img src="<?php echo base_url(); ?>/img/sp21.png" alt="#"/></figure>
                     <div class="pro_text">
                        <h3>Bộ dầu gội xả Tigi Bed Head phục hồi cấp độ 3</h3>
                       <small><strong>Giá tiền : </strong>110k </small>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center">
               <?php if($user == ""): ?>
                   <a href="<?php echo base_url();?>homepage/load_sanpham"  class="btn btn-outline-light btn-md ">Xem chi tiết các sản phẩm</a>
               <?php else: ?>
                      <form action="<?php echo base_url();?>homepage/load_sanpham_user" method="post">
                   <input name="url" type="hidden" class="btn btn-outline-light btn-md" value="<?php echo $user; ?>">
                   <input name="url1" type="submit" class="btn btn-outline-light btn-md" value="Xem chi tiết sản phẩm">
                   <input name="id" type="hidden" class="btn btn-outline-light btn-md" value="">
                     </form>
                <?php endif;?>
           
            </div>
         </div>
      </div>
      <section class="hoivien" id="hoivien" style="background-image:url(<?php echo base_url(); ?>/img/bground.jpg);">
       
    <div class="row justify-content-md-center  mb-lg-5 ">
          <div class="col-md-8  w-md-50 mx-auto mb-0 ">
            <div class="title mb-md-2 text-right mr-5 ">Trở thành hội viên</div>
            
            <div class="col-md-5 offset-5">
              <br>
              <br>
              
              <ul>
                <li class="ml-4">  
       <p class="font-italic"> Đặt lịch sử dụng dịch vụ nhanh hơn</p></li>
       <li class="ml-4"><p class="font-italic">Ưu đãi dịch vụ hấp dẫn đối với hội viên</p></li>
       <li class="ml-4"><p class="font-italic">Cung cấp một số dịch vụ miễn phí</p></li> 
       <li class="ml-4"><p class="font-italic">Giảm giá khi mua sản phẩm </p></li> 
       </ul>
       <br>
       <br>
       
        <?php if($user == ""): ?>
          <a href="<?php echo base_url();?>homepage/register"  class="btn btn-dark btn-md float-right">Đăng ký ngay</a>
               <?php else: ?>

                <?php endif;?>
      
     </div>
          </div>
          <div class="col-md-4">
       <img src="<?php echo base_url(); ?>/img/400.jpg" alt="" class="ml-1" width="600" height="800">
     </div>

    </div>
      </section>
      <br>
      
<div class="container-fluid padding"> 
  <div class="row text-center padding">
    <div class="col-12">
      <h2>Liên hệ với chúng tôi</h2>
    </div>
    <div class="col-12 social padding">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-google-plus-g"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
<div class="container-fluid padding">
<div class="fixed-bottom"> 
  <div class="chat-popup text-center" id="myForm" >
  <form action="<?php echo base_url();?>manager/insert_phanhoi" method="post" enctype="multipart/form-data" class="form-container"  >
    <h3 class="linear" style="font-size:25px">CHĂM SÓC KHÁCH HÀNG</h3>
    <button type="button" class="close" onclick="closeForm()" aria-label="Close">
                <a aria-hidden="true" style="color:red;top:0;">X</a>
            </button>
     <label class="linear text-left" for="name" style="font-size: 18px;">Tên khách hàng</label>
    <input style="margin-left: 35px;width: 250px;height: 40px;" name="name" class="input-text js-input" type="text" required>
    <label class="linear text-left" for="name" style="font-size: 18px;">Số điện thoại</label>
    <input style="margin-left: 60px;width: 250px;height: 40px;" name="sdt" class="input-text js-input" type="text" required>
    <textarea placeholder="Nhập tin nhắn ...." name="msg" required></textarea>

    <button type="submit" class="btn btn-info">Gửi</button>
    <button type="button" class="btn btn-danger cancel" onclick="closeForm()">Hủy</button>
  </form>
</div>
  <button class="btn-md " onclick="showForm()" id="chat">Liên hệ với chúng tôi   <i style="margin-left:5px" class="fa fa-phone" aria-hidden="true"></i></button>
  
  </div>
</div>

<footer>
  <div class="container-fluid padding"> 
    <div class="row text-center">
      <div class="col-md-4">
        <img src="<?php echo base_url(); ?>/img/logo.png" height="80" style="background-color: whitesmoke;margin-top: 20px;">
        <hr class="light">
        <p>0332281426-09810648</p>
        <p>mymail@gmail.com</p>
        
      </div>
      <div class="col-md-4">        
        <hr class="light">
        <h5>Giờ làm việc</h5>
        <hr class="light">
        <p>Trong tuần: 8am - 22pm</p>
        <p>Cuối tuần: 8.30am - 22pm</p>
      </div>
      <div class="col-md-4">        
        <hr class="light">
        <h5>Cơ sở</h5>
        <hr class="light">
        <p>236 Hoàng Quốc Việt, Cổ Nhuế 1, Bắc Từ Liêm, Hà Nội</p>
        <p>236 Hoàng Quốc Việt, Cổ Nhuế 1, Bắc Từ Liêm, Hà Nội</p>
        <p>236 Hoàng Quốc Việt, Cổ Nhuế 1, Bắc Từ Liêm, Hà Nội</p>

      </div>
      <div class="col-12">
        <hr class="light-100">
        <h5>&copy; MT Hair Spa</h5>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
</body>
</html>
<script>
// Get the modal

var modal = $('#modalDialog');
var modal2 = $('#timetable');
// Get the button that opens the modal
var btn = $("#mbtn");
var btn2=$("#nbtn");

var submit = $("#submit")
// Get the <span> element that closes the modal
var span = $(".close");

$(document).ready(function(){
    // When the user clicks the button, open the modal 
    btn.on('click', function() {
        modal.show();
        $('[name="sdt"]').val("");
    $('[name="tenkh"]').val("");
    $('[name="email"]').val("");
    $('[name="dichvu"]').val("0");
    });
    
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.hide();
    });
});
$(document).ready(function(){
    // When the user clicks the button, open the modal 
    btn2.on('click', function() {
        modal.show();
    });
   
    
    // When the user clicks on <span> (x), close the modal
    span.on('click', function() {
        modal.hide();
    });
});
$(document).ready(function(){
    // When the user clicks the button, open the modal 
   submit.on('click', function() {
        //
    });

     span.on('click', function() {
        modal2.hide();
    });
    // When the user clicks on <span> (x), close the modal
   
});

// When the user clicks anywhere outside of the modal, close it
$('body').bind('click', function(e){
    if($(e.target).hasClass("modal")){
        modal.hide();
    }
});

function hover(id) {
  // body...
  document.getElementById("x"+id).style.display="block";
}
function out(id) {
  // body...
  document.getElementById("x"+id).style.display="none";
}

function showForm() {
  document.getElementById("myForm").style.display="block";
}
function closeForm(){
  document.getElementById("myForm").style.display="none";
}

function add_dichvu() {
  // body...
    var sdt= $('[name="sdt"]').val();
    var tenkh= $('[name="tenkh"]').val();
    var dichvu= $('[name="dichvu"]').val();
    
     $('[name="sdt1"]').val(sdt);
     $('[name="tenkh1"]').val(tenkh);
     $('[name="dichvu1"]').val(dichvu);
     if(sdt!=""&&tenkh!=""&&dichvu!=""){
      
        modal.hide();
         $("#nay").hide();
             $("#mai").hide();
             $("#kia").hide();
             $("#cnay").hide();
             $("#cmai").hide();
             $("#ckia").hide();
      modal2.show();
     }
     
  }    
  function run(id,name) {
    // body...
   $('[name="ca1"]').val(id);
     $('[name="ngay1"]').val(name);
  }

</script>
</body>  
</html> 












