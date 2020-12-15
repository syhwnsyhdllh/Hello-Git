<?php  
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
  header('location:login.php');
}

if(isset($_POST['submit'])){
	include 'koneksi.php';
	$kd_brg	= $_POST['kd_brg'];
	$nama_brg	= $_POST['nama_brg'];
	$jenis  = $_POST['jenis'];
	$merek  = $_POST['merek'];
	$stok   = $_POST['stok'];
	$queryinput = "INSERT INTO barang_masuk (kd_brg,nama_brg,jenis,merek,tgl_masuk,stok)VALUES('$kd_brg','$nama_brg','$jenis','$merek',NOW(),'$stok')";
	$execute= mysqli_query($koneksi, $queryinput) or mysqli_error();

	if ($execute){ 
		echo '<script> alert("Berhasil Menambah Data!");
		window.location = "stok.php";
		</script>';
	}else{
		echo '<script>
		alert("Gagal Menambah Barang");
		window.history.back();
		</script>';
	}
}
?>
<html lang="en">
<head>
	<title>Data Barang</title>
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
						<span >Barang masuk</span>
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
								<a href="logout.php" class="btn btn-primary" style="width: 80px" onclick='return confirm("Ingin Logout?")'>Logout</a>
							</ul>
						</nav>
						<!-- End of Topbar -->
						<!-- Begin Page Content -->
						<div class="container-fluid">
							<!-- Page Heading -->
							<h1 class="h2 mb-1 text-gray-800">Penambahan Barang</h1>

							<!-- DataTales Example -->
							<div class="card shadow mb-1 ">
								<div class="card-header py-1"><ul class="navbar-nav ml-auto"><div style="text-align: right;"><a href="stok.php" class="btn btn-success" style="width:9%;">Kembali</a></div>
								</ul>
							</div>
								<center>
									<br>
									<form method="post" action="">
										<table>
											<tr>
												<td style="color: black;">Masukkan Kode Barang</td>
												<td>: <input type="text" name="kd_brg" required placeholder="Kode barang"></td>
											</tr>
											<tr>
												<td style="color: black;">Masukkan Nama Barang</td>    
												<td>: <input type="text" name="nama_brg" required placeholder="Nama barang"></td>
											</tr>
											<tr>
												<td style="color: black;" >Masukkan Jenis barang</td>    
												<td>: <select name="jenis" >
													<option hidden>Pilih Jenis Barang</option>
													<option>Makanan</option>
													<option>Minuman</option>
													<option>Perabotan Rumah</option>
												</select> 
												</td>
											</tr>
											<tr>
												<td style="color: black;">Masukkan Merek Barang</td>    
												<td>: <input type="text" name="merek" required placeholder="Merek barang"></td>
											</tr>
											<tr>
												<td style="color: black;">Masukkan Jumlah Barang</td>    
												<td>: <input type="text" name="stok" required placeholder="Menggunakan angka" onkeypress="return hanyaAngka(event)"></td>
											</tr>
										</table>
										<br>
										<input class="btn-primary" type="submit" name="submit" value="Tambah barang">
									</form>
									</center>
										<br>
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
						</body>
						<script>
							function hanyaAngka(evt) {
								var charCode = event.keyCode;
								if (charCode > 31 && (charCode < 48 || charCode > 57))
									return false;
								return true;
							}
						</script>
						<!-- <script src="bootstrap/js/jquery.js"></script> -->
						<!-- <script src="bootstrap/js/bootstrap.js"></script> -->
						</html>
