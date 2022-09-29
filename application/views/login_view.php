<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng nhập</title>
  <!-- Import Boostrap css, js, font awesome here -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>/css/login_view.css" rel="stylesheet">
</head>
<body>
	  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-xs-12 row-container">
        <form action="<?php echo base_url(); ?>login/auth" method="post">
          <h1>MT Hair Spa Management </h1>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username" required autofocus>
           
          </div>
          <div class="form-group">
            <label for="password" class="label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>            
            
          </div>
          <button class="btn btn-lg btn-success btn-block" type="submit">Đăng nhập</button>
          	
          
          	
        </form>
        <div class="row">
             <div class="col-md-6">
              <br>
              <a href="" style="color: whitesmoke;">Quên mật khẩu ?</a>
           </div>
            <div class="col-md-6">
            <a type="button" class="btn btn-primary btn-block my-3" href="<?php echo base_url(); ?>homepage">Quay lại trang chủ</a>
          </div>
          </div>
      </div>
    </div>
  </div>
</body>
</html>