<?php  
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
  header('location:login.php');
}

include 'koneksi.php';
	$hapus		= $_GET['hapus'];
  $queryy    = "delete from stok_brg where kode_brg='$hapus'";
  $hapusdataa  = mysqli_query($koneksi, $queryy);
  if($hapusdataa){
    $query    = "delete from barang_masuk where kd_brg= '$hapus'";
    $hapusdata  = mysqli_query($koneksi, $query);
    if($hapusdata){
    	echo '<script>
    			alert("Berhasil Menghapus Data");
    			window.location = "stok.php";
    			</script>';
    }
  }else{
    $query    = "delete from barang_masuk where kd_brg= '$hapus'";
    $hapusdata  = mysqli_query($koneksi, $query);
    if($hapusdata){
        echo '<script>
            alert("Berhasil Menghapus Data");
            window.location = "stok.php";
            </script>';
    }else{
        echo '<script>
        			alert("Gagal Mengahpus Data");
        			window.location = "stok.php"
        		</script>';
      }
  }
?>