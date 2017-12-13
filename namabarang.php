<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
						if(isset($_POST['tambahNamaBarang'])){
							if(!empty($_POST['inputjenisbarang2'])){
								$namaJenisBarang = $_POST['inputjenisbarang2'];
								$query = mysqli_query($db,"INSERT INTO jenis_barang (nama_jenis_barang) VALUES ('$namaJenisBarang')");
								if($query){
									$query = mysqli_query($db,"SELECT LAST_INSERT_ID()");
									if($query){
										while($data = mysqli_fetch_array($query)){
											$jenisBarang = $data[0];
										}
									}
								}
							} else {
								$jenisBarang = $_POST['pilihjenisbarang'];
							}
							$namaBarang = $_POST['inputNamaBarang'];
							$query = mysqli_query($db,"INSERT INTO barang (nama_barang,jns_id) VALUES ('$namaBarang','$jenisBarang')");
							if($query){
								echo "<script type=\"text/javascript\">alert('Berhasil menambahkan barang baru');</script>";
								echo "<script type=\"text/javascript\">window.location ='".ROOT_URL."/namabarang.php';</script>";
							}
						}
						if(isset($_POST['editNamaBarang'])){
							if(!empty($_POST['editinputjenisbarang2'])){
								$namaJenisBarang = $_POST['editinputjenisbarang2'];
								$query = mysqli_query($db,"INSERT INTO jenis_barang (nama_jenis_barang) VALUES ('$namaJenisBarang')");
								if($query){
									$query = mysqli_query($db,"SELECT LAST_INSERT_ID()");
									if($query){
										while($data = mysqli_fetch_array($query)){
											$jenisBarang = $data[0];
										}
									}
								}
							} else {
								$jenisBarang = $_POST['editpilihjenisbarang'];
							}
							$namaBarang = $_POST['editinputNamaBarang'];
							$idBarang = $_POST['editNamaBarang'];
							$query = mysqli_query($db,"UPDATE barang SET nama_barang = '$namaBarang', jns_id = '$jenisBarang' WHERE id_barang = '$idBarang'");
							if($query){
								echo "<script type=\"text/javascript\">alert('Berhasil mengedit barang');</script>";
								echo "<script type=\"text/javascript\">window.location ='".ROOT_URL."/namabarang.php';</script>";
							}
						}
					}
					if(!empty($_GET)){
						if(isset($_GET['delete'])){
							$id_barang = $_GET['id'];
							$query = mysqli_query($db,"DELETE FROM barang WHERE id_barang = '$id_barang'");
							if($query){
								echo "<script type=\"text/javascript\">window.location ='".ROOT_URL."/namabarang.php';</script>";
							}
						}
					}
				?>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Nama Barang</li>
            </ol>
<div class="grid-form1">
	<h3 id="forms-horizontal">Form Tambah Nama Barang</h3>
	<form class="form-horizontal" action="" method="post">
		<input type="hidden" name="tambahNamaBarang" value="submit" />
		<div class="form-group">
			<label for="pilihjenisbarang" class="col-sm-2 control-label">Jenis Barang</label>
			<div class="col-sm-8"><select name="pilihjenisbarang" id="pilihjenisbarang" class="form-control1">
				<?php
					$query = mysqli_query($db,"SELECT * FROM jenis_barang");
					while($data = mysqli_fetch_array($query)){
				?>
					<option value="<?php echo $data[0];?>"><?php echo $data[1];?></option>
				<?php
					}
				?>
			</select></div>
		</div>
		<div class="form-group">
			<label for="inputjenisbarang2" class="col-sm-2 control-label hor-form">Jika tidak ada di list</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="inputjenisbarang2" id="inputjenisbarang2" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label for="inputNamaBarang" class="col-sm-2 control-label hor-form">Nama Barang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="inputNamaBarang" id="inputNamaBarang" placeholder="">
			</div>
		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn-primary btn" type="Submit">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn" type="Reset">Reset</button>
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
								<th>No</th>
								<th>Nama</th>
								<th>Edit</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								$query = mysqli_query($db, "select * from barang");
								if ($query === FALSE) {
									die(mysql_error());	
								}
				 
							   $no = 1;
							   while ($data = mysqli_fetch_array($query)){
							   		$namaBarang = $data['nama_barang'];
							   		$idJenis = $data['jns_id'];
							   		$idbarang = $data['id_barang'];
							?>
								<tr style="font-size:12">
										<td><?php echo $no; ?></td>
										<td><?php echo $namaBarang; ?></td>
										<td><a style="cursor: pointer;" data-toggle="modal" data-target="#editNamaBarang" onclick="edit('<?php echo $namaBarang; ?>','<?php echo $idJenis; ?>','<?php echo $idbarang; ?>')">Edit</a></td>
										<td><a href="?delete=1&id=<?php echo $idbarang; ?>">Delete</a></td>
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
	<div id="editNamaBarang" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Edit Nama Barang</h4>
      			</div>
      			<div class="modal-body">
        			<div class="grid-form1">
						<form class="form-horizontal" action="" method="post">
							<input type="hidden" name="editNamaBarang" id="editIdBarang" value="" />
							<div class="form-group">
								<label for="editpilihjenisbarang" class="col-sm-4 control-label">Jenis Barang</label>
								<div class="col-sm-7"><select name="editpilihjenisbarang" id="editpilihjenisbarang" class="form-control1">
									<?php
										$query = mysqli_query($db,"SELECT * FROM jenis_barang");
										while($data = mysqli_fetch_array($query)){
									?>
										<option value="<?php echo $data[0];?>"><?php echo $data[1];?></option>
									<?php
										}
									?>
								</select></div>
							</div>
							<div class="form-group">
								<label for="editinputjenisbarang2" class="col-sm-4 control-label hor-form">Jika tidak ada di list</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="editinputjenisbarang2" id="editinputjenisbarang2" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="editinputNamaBarang" class="col-sm-4 control-label hor-form">Nama Barang</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="editinputNamaBarang" id="editinputNamaBarang" placeholder="">
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-4">
										<button class="btn-primary btn" type="Submit">Submit</button>
										<button class="btn-inverse btn" type="Reset">Reset</button>
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
		function edit(nama,idjenis, idbarang){
			document.getElementById("editpilihjenisbarang").value = idjenis;
			document.getElementById("editinputNamaBarang").value = nama;
			document.getElementById("editIdBarang").value = idbarang;
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