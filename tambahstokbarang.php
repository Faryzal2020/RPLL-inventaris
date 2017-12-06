<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include("config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Tabels :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include_once("header.php"); ?>
<!--heder end here-->
				<ol class="breadcrumb">
                	<li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Tambah Stok Barang</li>
            	</ol>
            	<div class="grid-form1">
  	       			<h3>Form Tambah Stok Barang</h3>
  	         		<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="pilihbarang" class="col-sm-2 control-label">Barang</label>
									<div class="col-sm-8"><select name="selector1" id="pilihbarang" class="form-control1">
										<option>--pilih barang--</option>
										<option>Barang 1</option>
										<option>Barang 2</option>
										<option>Barang 3</option>
									</select></div>
								</div>
								<div class="form-group">
									<label for="jumlahBarang" class="col-sm-2 control-label">Jumlah</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="jumlahBarang" placeholder="Default Input">
									</div>
								</div>
								<div class="form-group">
									<label for="pilihvendor" class="col-sm-2 control-label">Vendor</label>
									<div class="col-sm-8"><select name="selector1" id="pilihvendor" class="form-control1">
										<option>--pilih barang--</option>
										<option>Barang 1</option>
										<option>Barang 2</option>
										<option>Barang 3</option>
									</select></div>
								</div>
								<div class="form-group">
									<label for="pilihvendor2" class="col-sm-2 control-label">Jika tidak ada di list</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="pilihvendor2" placeholder="Default Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputGaransi" class="col-sm-2 control-label">Garansi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="inputGaransi" placeholder="Default Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDari" class="col-sm-2 control-label">Dari</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="inputDari" placeholder="Default Input">
									</div>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-primary btn">Submit</button>
											<button class="btn-default btn">Cancel</button>
											<button class="btn-inverse btn">Reset</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="agile-grids">	
				<!-- tables -->
					<div class="agile-tables">
						<div class="w3l-table-info">
							<table id="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Jumlah</th>
										<th>Dari</th>
										<th>Edit</th>
										<th>Hapus</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				<!-- //tables -->
				</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<?php include_once("sidebar.php");?>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>