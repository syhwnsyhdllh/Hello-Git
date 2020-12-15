<?php  
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}

include 'koneksi.php';
	$hapus		= $_GET['hapus'];
	$query		= "delete from stok_brg where kode_brg= '$hapus'";
	$hapusdata	= mysqli_query($koneksi, $query);
  if($hapusdata){
  	echo '<script>
  			alert("Berhasil Menghapus Data");
  			window.location = "penjualan.php";
  			</script>';
  }else
  echo '<script>
  			alert("Gagal Mengahpus Data");
  			window.location = "penjualan.php"
  		</script>';
?>