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
  <title>Data Penjualan</title>
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
              <span>Stok Barang</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="pembelian1.php">
              <i class="fas fa-fw fa-folder"></i>
              <span >Laporan Barang keluar</span>
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

              <h1 class="h3 mb-2 text-gray-800">Stok Barang Yang Ada</h1>

              <!-- DataTales Example -->
              <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                  <ul class="navbar-nav ml-auto">
                    <a href="insert2.php" class="btn btn-primary" style="width: 150px; color: white;">+ Input Stok</a>
                  </ul>
                </div>
                <table class="table table-hover table-bordered table-sm display nowrap table1" id="tabel" cellspacing="0">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">kode Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Merek</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php  
                   $no   = 1;
                   $query  = "select barang_masuk.kd_brg, barang_masuk.nama_brg, barang_masuk.jenis, barang_masuk.merek, barang_masuk.stok, stok_brg.harga FROM barang_masuk INNER JOIN stok_brg on barang_masuk.kd_brg=stok_brg.kode_brg";
                   $execute= mysqli_query($koneksi, $query);
                   while ($data = mysqli_fetch_assoc($execute)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['kd_brg']; ?></td>
                      <td><?php echo $data['nama_brg']; ?></td>
                      <td><?php echo $data['jenis']; ?></td>
                      <td><?php echo $data['merek']; ?></td>
                      <td><?php echo $data['stok']; ?></td>
                      <td><?php echo 'Rp. '.number_format($data['harga']); ?></td>
                       <td>
                      <button class="btn btn-danger btn-sm"><a  style="color: white" href="proses_hapus_stok.php?<?php echo 'hapus='.$data['kd_brg']?>" >Hapus</a></button>
                    </td>   
                    </tr>
                  </tbody>
                  <?php  
                }
                ?> 
              </table>
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
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="datatable/media/js/jquery.dataTables.min.js"></script>
    <script src="datatable/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="datatable/extensions/Responsive/js/responsive.bootstrap4.min.js/"></script>
    <script src="datatable/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script src="datatable/jquery-3.2.1.min.js"></script>


    </html>
