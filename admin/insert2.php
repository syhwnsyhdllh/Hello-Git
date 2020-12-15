<?php  
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
  header('location:login.php');
}

if(isset($_POST['submit'])){
	include 'koneksi.php';
	$kd_brg = $_POST['kd_brg'];
	$harga	= $_POST['harga'];
		
		$query	= "insert into stok_brg values('$kd_brg','$harga')";

		$execute= mysqli_query($koneksi, $query);
		if ($execute){
			echo '<script> alert("Berhasil menginput stok!");
			window.location = "penjualan.php";
			</script>';
		}
	}

	?>
	<html lang="en">
	<head>
		<title>Penjualan Barang</title>
		<!-- Custom styles for this template -->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<!-- Custom styles for this page -->
		<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	</head>
	<body id="page-top">

		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
				<br>
				<br>
				<br>
				<br>
				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center">
					<div class="sidebar-brand-icon rotate-n-15">

					</div>
					<div class="sidebar-brand-text mx-3" style="color: white;">Admin Kedai</div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0">

				<!-- Nav Item - Dashboard -->
				<li class="nav-item ">
					<a class="nav-link" href="home.php">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Home</span></a>
					</li>
					<!-- Divider -->
					<hr class="sidebar-divider">
					<div class="sidebar-heading">
						Katagori
					</div>
					<!-- Nav Item - Pages Collapse Menu -->
					<li class="nav-item">
						<a class="nav-link collapsed" href="stok.php">
							<i class="fas fa-fw fa-folder"></i>
							<span >Barang Masuk</span>
						</a>
						<li class="nav-item">
							<a class="nav-link collapsed" href="penjualan.php">
								<i class="fas fa-fw fa-folder"></i>
								<span >Stok Barang</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link collapsed" href="pembelian1.php">
								<i class="fas fa-fw fa-folder"></i>
								<span >Laporan Barang Keluar</span>
							</a>
						</li>
						<!-- Divider -->
						<hr class="sidebar-divider d-none d-md-block">

						<!-- Sidebar Toggler (Sidebar) -->
						<div class="text-center d-none d-md-inline">
						</div>

					</ul>
					<!-- End of Sidebar -->

					<!-- Content Wrapper -->
					<div id="content-wrapper" class="d-flex flex-column">

						<!-- Main Content -->
						<div id="content">

							<!-- Topbar -->
							<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

								<!-- Sidebar Toggle (Topbar) -->
								<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
									<i class="fa fa-bars"></i>
								</button>
								<!-- Topbar Navbar -->
								<ul class="navbar-nav ml-auto">
									<a href="logout.php" class="btn btn-primary" style="width: 80px">Logout</a>
								</ul>
							</nav>
							<!-- End of Topbar -->
							<!-- Begin Page Content -->
							<div class="container-fluid">
								<!-- Page Heading -->

								<h1 class="h3 mb-2 text-gray-800">Penginputan Barang</h1>

								<!-- DataTales Example -->
								<div class="card shadow mb-1 ">
									<div class="card-header py-1"><ul class="navbar-nav ml-auto"><div style="text-align: right;"><a href="pembelian1.php" class="btn btn-success" style="width:9%;">Kembali</a></div>
									</ul>
								</div>
									<center>
										<br>
										<form action="" method="post" name="frmpenjualan" onsubmit="return cekform()">
											<table>
												<tr>
													<td style="color: black;" >Masukkan Jenis barang</td>    
													<td>: 
												<select name="kd_brg" >
													    <option hidden>Pilih Kode Barang</option>
													 <?php  
													 include 'koneksi.php';
									                 $query  = "select * from barang_masuk";
									                 $execute= mysqli_query($koneksi, $query);
									                 while ($data = mysqli_fetch_assoc($execute)){
									                  ?> 
									                  <?php 
														$queryy = "select * from stok_brg where kode_brg = '$data[kd_brg]'";
														$executee = mysqli_query($koneksi, $queryy);
														$cek = mysqli_num_rows($executee);
														if($cek == 0){
														echo '<option>
															'.$data['kd_brg'].'
															</option>';
														}
														?>
													<?php }?>
												</select> 
												</td>
												</tr>
												<tr>
													<td style="color: black;">Harga Barang</td>    
													<td>: <input required type="text" name="harga" id="txtstok" placeholder="Menggunakan angka" onkeypress="return hanyaAngka(event)"></td>
												</tr>

											</form>
										</table>
										<br>
										<input class="btn-primary" type="submit" name="submit" value="Input Barang">
										<center>
										</div>
										<!-- /.container-fluid -->

										<!-- Footer -->
										<div class="container my-auto">
											<div class="copyright text-center my-auto">
												<span>Copyright &copy; syhwnsyhdllh</span>
											</div>
										</div>
										<!-- End of Footer -->

									</div>
									<!-- End of Content Wrapper -->

								</div>
								<!-- End of Page Wrapper --> 
								<script language="javascript">
									function cekform(){
										if(document.frmpenjualan.txtkode_brg.value==""){
											alert('ID Barang Harus Diisi');
											document.frmbarang.txtkode_brg.focus();
											return false;
										} else if(document.frmpenjualan.txtstok.value==""){
											alert('Jumlah Barang Harus Diisi');
											document.frmbarang.txtstok.focus();
											return false;
										} else {
											return true;
										}
									}

									function hanyaAngka(evt) {
										var charCode = event.keyCode;
										if (charCode > 31 && (charCode < 48 || charCode > 57))
											return false;
										return true;
									}
								</script>

							</body>

							<!-- <script src="bootstrap/js/jquery.js"></script> -->
							<!-- <script src="bootstrap/js/bootstrap.js"></script> -->
							</html>
