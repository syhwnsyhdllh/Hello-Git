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
        <div class="sidebar-brand-text mx-3" style="color: white;">Kedai APP</div>
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
          <a class="nav-link collapsed" href="stokbrg.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Stok Barang</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="data_penjualan.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Data penjualan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="pembelian.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Data pembelian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="pembelian.php">
            <i class="fas fa-fw fa-folder"></i>
            <span >Pelanggan</span>
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

            </ul>
            <a href="login.php" class="btn btn-primary" style="width: 80px">Login</a>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">


            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Table Stok Barang</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Stok Barang</h6>
              </div>
              <table class="table table-hover table-bordered table-sm display nowrap table1" id="tabel" cellspacing="0">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Stok</th>
                  </tr>
                </thead>
                <tbody>
                 <?php  
                 $no   = 1;
                 $query  = "select * from barang";
                 $execute= mysqli_query($koneksi, $query);
                 while ($data = mysqli_fetch_assoc($execute)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kd_brg']; ?></td>
                    <td><?php echo $data['nm_brg']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><?php echo $data['jenis']; ?></td>
                    <td><?php echo $data['merek']; ?></td>
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
      <script>
        $(document).ready(function(){
          $('#tabel').DataTable();
        });
      </script>
      <script>
       $('#tabel').dataTable({
        "info"  : true;
        "paging": false;
        "sScrollx": "100%",
        "bScrollCollapse": true
      });
    </script>
  </body>
  <script src="datatable/media/js/jquery.dataTables.min.js"></script>
  <script src="datatable/media/js/dataTables.bootstrap4.min.js"></script>
  <script src="datatable/extensions/Responsive/js/responsive.bootstrap4.min.js/"></script>
  <script src="datatable/extensions/Scroller/js/dataTables.scroller.min.js"></script>
  <script src="datatable/jquery-3.2.1.min.js"></script>
  </html>
