<?php  
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
  header('location:login.php');
}
  include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kedai APP</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <br>
      <br>
      <br>
      <br>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color: white;">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Kedai</div>
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
      </li>
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
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <br>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
           <a href="logout.php" class="btn btn-primary" style="width: 80px" onclick='return confirm("Ingin Logout?")'>Logout</a>
          </div>
       <!-- Begin Page Content -->
       <br>
              <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800" style="text-align: center;color: blue;"  >System Pengelolaan Data Minimarket</h1>
                <br>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <br>
                    <h3 class="m-9 font-weight-bold text-primary" style="text-align: center;">CV. Ini Minimarket</h3>
                    <h4 style="text-align: center;">Pendataan Barang Minimarket</h4>
                    <h6 style="text-align: center;">Makassar</h6>
                    <h6 style="text-align: center;">Pendataan@barang.com||0411232489||http://cvminimarket.com</h6>
                    <br>
                  </div>                 
        </div>
      </footer>
      <!-- End of Footer -->
<div class="copyright text-center my-auto">
          <span>Copyright &copy;syhwnsyhdllh</span>
        </div>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

      </div>
    </div>
  </div>
</body>

</html>
