				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
					<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                        <div class="menu">
							<ul id="menu" >
								<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
								<li><a href="stokbarang.php"><i class="fa fa-table"></i>  <span>Stok Barang</span><div class="clearfix"></div></a></li>
								<li><a href="tambahstokbarang.php"><i class="fa fa-table"></i>  <span>Tambah Stok Barang</span><div class="clearfix"></div></a></li>
								<li><a href="jenisbarang.php"><i class="fa fa-table"></i>  <span>Jenis Barang</span><div class="clearfix"></div></a></li>
								<li><a href="namabarang.php"><i class="fa fa-table"></i>  <span>Nama Barang</span><div class="clearfix"></div></a></li>
								<li><a href="barangrusak.php"><i class="fa fa-table"></i>  <span>Data Barang Rusak</span><div class="clearfix"></div></a></li>
								<li><a href="notifikasi.php"><i class="fa fa-table"></i>  <span>Notifikasi</span><div class="clearfix"></div></a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>		
				</div>
					<script>
					var toggle = true;			
					$(".sidebar-icon").click(function() {                
						if (toggle){
							$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
							$("#menu span").css({"position":"absolute"});
						} else {
							$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
							setTimeout(function() {
								$("#menu span").css({"position":"relative"});
							}, 400);
						}
					toggle = !toggle;
					});
					</script>