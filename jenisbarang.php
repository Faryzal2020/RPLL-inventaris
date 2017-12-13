<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--?php
	include("config.php");
?-->
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
				<?php
					if(!empty($_POST)){
						if(isset($_POST['tambahJenisBarang'])){
							$namaJenisBarang = $_POST['inputJenisBarang'];
							$query = mysqli_query($db,"INSERT INTO jenis_barang (nama_jenis_barang) VALUES ('$namaJenisBarang')");
							if($query){
								echo "<script type=\"text/javascript\">alert('Berhasil menambahkan jenis barang baru');</script>";
								echo "<script type=\"text/javascript\">window.location ='".ROOT_URL."/jenisbarang.php';</script>";
							}
						}
						if(isset($_POST['editJenisBarang'])){
							$namaJenisBarang = $_POST['editinputJenisBarang'];
							$idJenisBarang = $_POST['editJenisBarang'];
							$query = mysqli_query($db,"UPDATE jenis_barang SET nama_jenis_barang = '$namaJenisBarang' WHERE id_jns_barang = '$idJenisBarang'");
							if($query){
								echo "<script type=\"text/javascript\">alert('Berhasil mengedit jenis barang');</script>";
								echo "<script type=\"text/javascript\">window.location ='".ROOT_URL."/jenisbarang.php';</script>";
							}
						}
					}
					if(!empty($_GET)){
						if(isset($_GET['delete'])){
							$id_barang = $_GET['id'];
							$query = mysqli_query($db,"DELETE FROM jenis_barang WHERE id_jns_barang = '$id_barang'");
							if($query){
								echo "<script type=\"text/javascript\">window.location ='".ROOT_URL."/jenisbarang.php';</script>";
							}
						}
					}
				?>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Jenis Barang</li>
            </ol>
<div class="grid-form1">
	<h3 id="forms-horizontal">Form Tambah Jenis Barang</h3>
	<form class="form-horizontal" action="" method="post">
		<input type="hidden" name="tambahJenisBarang" value="submit" />
		<div class="form-group" >
			<label for="inputJenisBarang" class="col-sm-2 control-label hor-form">Nama Barang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="inputJenisBarang" id="inputJenisBarang" placeholder="">
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn-primary btn" type="Submit">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn" type="Reset">Reset
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					    <table id="table">
						<thead>
							<tr>
								<th>NO</th>
								<th>Nama</th>
								<th>Edit</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								$query = mysqli_query($db, "select * from jenis_barang");
								if ($query === FALSE) {
									die(mysql_error());	
								}
				 
							   $no = 1;
							   while ($data = mysqli_fetch_array($query)){
							   		$namaJenisBarang = $data['nama_jenis_barang'];
							   		$idJenisBarang = $data['id_jns_barang'];
							?>
								<tr style="font-size:12">
										<td><?php echo $no; ?></td>
										<td><?php echo $namaJenisBarang; ?></td>
										<td><a style="cursor: pointer;" data-toggle="modal" data-target="#editJenisBarang" onclick="edit('<?php echo $namaJenisBarang; ?>','<?php echo $idJenisBarang; ?>')">Edit</a></td>
										<td><a href="?delete=1&id=<?php echo $idJenisBarang; ?>">Delete</a></td>
								</tr>
								<?php
									$no++;
								}
								?>
								
							</tr>
						</tbody>
					  </table>
					</div>
				</div>
				<!-- //tables -->
			</div>
	<div id="editJenisBarang" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Edit Jenis Barang</h4>
      			</div>
      			<div class="modal-body">
        			<div class="grid-form1">
						<form class="form-horizontal" action="" method="post">
							<input type="hidden" name="editJenisBarang" id="idJenisBarang" value="" />
							<div class="form-group" >
								<label for="editinputJenisBarang" class="col-sm-4 control-label hor-form">Nama Barang</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="editinputJenisBarang" id="editinputJenisBarang" placeholder="">
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-4">
										<button class="btn-primary btn" type="Submit">Submit</button>
										<button class="btn-inverse btn" type="Reset">Reset
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			</div>
    		</div>
  		</div>
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
		function edit(nama,idjenis){
			document.getElementById("idJenisBarang").value = idjenis;
			document.getElementById("editinputJenisBarang").value = nama;
		}
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