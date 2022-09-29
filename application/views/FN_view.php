<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý tài chính</title>
	 <link href="<?php echo base_url(); ?>/css/sale.css" rel="stylesheet">
</head>
<body>
	<?php include "navigation.php" ?>
	<div class="container mt-3">
    <div class="d-flex align-items-center justify-content-between py-4 results">
        <div>Showing 1-40 of 350</div>
        <div> <span>Price: </span> <select name="price" id="price">
                <option value="l2h" selected>low to high</option>
                <option value="l2h">high to low</option>
            </select> </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2">
            <div class="card test"> <img class="card-img-top " src="https://www.freepnglogos.com/uploads/jewellery-png/jewellery-png-images-download-wedding-bangle-ring-9.png" style="width: 150px;
    height: 220px;">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="h6 font-weight-bold">Pearl earrings</div>
                            <div class="text-muted">$140</div>
                        </div>
                        <div class="btn"><span class="far fa-heart"></span></div>
                    </div>
                </div>
            </div>
        </div>       
         
</div>
</div>
</body>
</html>