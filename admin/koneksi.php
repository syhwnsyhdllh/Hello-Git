<?php 

$koneksi = mysqli_connect("localhost","root","","gudang");

if(!$koneksi){
	die("Tidak Terkoneksi ".mysqli_connect_error($koneksi));
}


 ?>