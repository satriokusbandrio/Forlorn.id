<?php include("connect.php") ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/background.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Forlorn.ID-Table List</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="grey" data-image="assets/img/yy.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                    Forlorn.ID
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifikasi
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notifikasi 1</a></li>
                                <li><a href="#">Notifikasi 2</a></li>
                                <li><a href="#">Notifikasi 3</a></li>
                                <li><a href="#">Notifikasi 4</a></li>
                                <li><a href="#">Lainnya</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="https://forlorn-id.herokuapp.com/">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
					<div class="col-md-12">
                        <div class="card">
							<button class="btn btn-success add_button" data-toggle="modal" href="#product_add"><i class="fa fa-plus"></i>Add New</button>
                            <div class="header">
                                <h4 class="title">Product List</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Header</th>
                                    	<th>Subheader</th>
                                    	<th>Price</th>
										<th>Color</th>
										<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php 
									$number=1;
									$result = mysqli_query($mysqli, "select * from content"); 
									while ($row = $result->fetch_assoc()) {
										?>
                                        <tr>
                                        	<td><?php echo $number; ?></td>
                                        	<td><?php echo $row['heading']; ?></td>
											<td><?php echo $row['subheading']; ?></td>
											<td><?php echo $row['price']; ?></td>
                                        	<td><?php echo $row['color']; ?></td>
											<td><button class="btn btn-danger delete_button" data-id="<?php echo $row['id']; ?>" >Delete</button> <button class="btn btn-warning edit_button" data-toggle="modal" href="#product_add" data-id="<?php echo $row['id']; ?>" 
												data-heading="<?php echo $row['heading'];?>" data-subheading="<?php echo $row['subheading'];?>" data-price="<?php echo $row['price'];?>" 
												data-color="<?php echo $row['color'];?>" data-size="<?php echo $row['size'];?>">Edit</button></td>
                                        </tr>
									<?php $number+=1;} ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Investor</h4>
                                <p class="category">Instuisi / Perorangan</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Startup Capital</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dr. Hotman Paris Hutapea, S.H., LL.M., M.Hum.</td>
                                        	<td>Rp420.000.000,00</td>
                                        	<td>Indonesia</td>
                                        	<td>Jakarta</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>William Henry Gates III</td>
                                        	<td>Rp328.000.000,00</td>
                                        	<td>United States</td>
                                        	<td>Washington</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Nissa Sabyan</td>
                                        	<td>Rp115.000.000,00</td>
                                        	<td>United Arab Emirates</td>
                                        	<td>Abu Dabhi</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Daftar Pemegang Saham Perusahaan</h4>
                                <p class="category">Internal / Eksternal</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Percentage</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Satrio Kusbandrio</td>
                                        	<td>37%</td>
                                        	<td>Indonesia</td>
                                        	<td>Bandung</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Satyawira Adhyoga Er</td>
                                        	<td>32%</td>
                                        	<td>Indonesia</td>
                                        	<td>Blitar</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sachril Sofyan</td>
                                        	<td>31%</td>
                                        	<td>Indonesia</td>
                                        	<td>Malang</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Forlorn.ID
                </p>
            </div>
        </footer>
    </div>
</div>
<div class="modal fade" id="product_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add new Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="save_product.php" id="save_form" method="post" enctype="multipart/form-data">
      <div class="modal-body mx-3">
	  <input type="hidden" name="delete_id">
	  <input type="hidden" name="id">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Heading </label>
          <input type="text" id="defaultForm-email" class="form-control" name="heading">
          
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Subheading</label>
          <input type="text" id="defaultForm-pass" class="form-control" name="subheading">
          
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Color</label>
          <input type="text" id="defaultForm-pass" class="form-control" name="color">
          
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Size</label>
          <input type="text" id="defaultForm-pass" class="form-control" name="size">
          
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Price</label>
          <input type="text" id="defaultForm-pass" class="form-control" name="price">
          
        </div>
		<div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">url_pic</label>
          <input type="file" id="defaultForm-pass" class="form-control" name="pic">
          
        </div>
		
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-danger" data-dismiss="modal" type="button">
			<i class="fa fa-times"></i>
			Close
		</button>
		<button class="btn btn-primary" type="submit">
			<i class="fa fa-save"></i>
			Save
		</button>
      </div>
	  </form>
    </div>
  </div>
</div>




</body>

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="assets/js/demo.js"></script>

<script>
$(document).ready(function(){
	$(".add_button").click(function(){
		$("input[name='id']").val("");
		$("input[name='heading']").val("");
		$("input[name='subheading']").val("");
		$("input[name='color']").val("");
		$("input[name='size']").val("");
		$("input[name='price']").val("");
		$("input[name='pic']").val("");
		$("input[name='delete_id']").val("");
		
	});
	
	$(".delete_button").click(function(){
		var data_id=$(this).attr("data-id");
		$("input[name='delete_id']").val(data_id);
		$("#save_form").submit();
		
		
	});
	
	$(".edit_button").click(function(){
		var data_id=$(this).attr("data-id");
		var data_heading=$(this).attr("data-heading");
		var data_subheading=$(this).attr("data-subheading");
		var data_color=$(this).attr("data-color");
		var data_size=$(this).attr("data-size");
		var data_price=$(this).attr("data-price");
		$("input[name='id']").val(data_id);
		$("input[name='heading']").val(data_heading);
		$("input[name='subheading']").val(data_subheading);
		$("input[name='color']").val(data_color);
		$("input[name='size']").val(data_size);
		$("input[name='price']").val(data_price);
		$("input[name='pic']").val("");
		$("input[name='delete_id']").val("");
	});
});
</script>
</html>
