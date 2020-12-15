<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_SESSION['pass']))
{
  header('location:login.php');
}

include 'koneksi.php';
	$edit	= $_GET['edit'];
	$query	= "select *from barang where kd_brg='$edit' ";
	$execute= mysqli_query($koneksi, $query);
	$data 	= mysqli_fetch_assoc($execute);
if(isset($_POST['kirim'])){
		$kd_brg	= $_POST['kd_brg'];
		$nm_brg	= $_POST['nm_brg'];
		$harga	= $_POST['harga'];
		$jenis  = $_POST['jenis'];
		$merek  = $_POST['merek'];
		$stok   = $_POST['stok'];
		$query	= "update barang set kd_brg ='$kd_brg', nm_brg ='$nm_brg', harga ='$harga', jenis ='$jenis',
				   merek ='$merek, stok ='$stok' where kd_brg='$edit' ";
		$execute = mysqli_query($koneksi, $query);
	if($execute){	
		echo '<script>
			 alert("Berhasil Mengubah Data");
			 window.locatin= "stok.php";
			 </script>';
	}else{
			echo '<script>
			alert("Gagal Menambah Data");
			window.history.back();
			</script>';
			}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah barang</title>
</head>
<body>
	<h2>Edit Stok Barang</h2>
	<form action="" method="post">
		<table>
		<tr>
		<td>Masukkan Kode Barang</td>
		<td>: <input type="text" name="kd_brg" value="<?php echo $data['kd_brg'] ?>"><br></td>
	</tr>
	<tr>
		<td>Masukkan Nama Barang</td>    
			<td>: <input type="text" name="nm_brg" value="<?php echo $data['nm_brg'] ?>"><br></td>
	</tr>
	<tr>
		<td>Masukkan Harga</td>
			<td>: <input type="text" name="harga" value="<?php echo $data['harga'] ?>"><br></td>
	</tr>
	<tr>
		<td>Masukkan Jenis</td>
			<td>: <input type="text" name="jenis" value="<?php echo $data['jenis'] ?>"><br></td>
	</tr>
	<tr>
		<td>Masukkan Merek</td>
			<td>: <input type="text" name="merek" value="<?php echo $data['merek'] ?>"><br></td>
	</tr>
	<tr>
		<td>Masukkan Jumlah Stok</td>
			<td>: <input type="text" name="stok" value="<?php echo $data['stok'] ?>"><br></td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="kirim">
		</td>
	</tr>
	</form>
</body>
</html>