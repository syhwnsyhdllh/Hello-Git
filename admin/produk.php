<?php 
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
  header('location:login.php');
}

include 'koneksi.php';


?>


<html lang="en">
<head>
  <title>Table Data</title>
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
        <div class="sidebar-brand-text mx-3" style="color: white;">KEDAI APP</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="indexx.php">
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
          <a class="nav-link collapsed" href="produk.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="data_penjualan.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Data penjualan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="stokbrg.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Stok Barang</span>
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
             <a href="../admin/login.php" class="btn btn-primary" style="width: 80px">Login</a>
           </ul>
         </nav>
         <!-- End of Topbar -->
         <!-- Begin Page Content -->
         <div class="container-fluid">

          <!-- Page Heading -->

          <h1 class="h3 mb-2 text-gray-800">Table Produk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <form class="form-inline" style="float: right; padding-top: 15px;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nomor</th>  
                  <th scope="col">Kode Produk</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Stok</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                $no   = 1;
                $query  = "select * from produk";
                $execute= mysqli_query($koneksi, $query);
                while ($data = mysqli_fetch_assoc($execute)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kode_brg']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                  </tr>
                </tbody>
                <?php  
              }
              ?>
            </table>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

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

    </html>
