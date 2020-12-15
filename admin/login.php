<?php  
include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){
	$user  = $_POST['nama'];
	$pass  = $_POST['pass'];
	$query = "select *from admin where nama ='$user' and password ='$pass' or email='$user' and password ='$pass'";
	$execute	= mysqli_query($koneksi, $query);
	$cek        = mysqli_num_rows($execute);
	$userlogin  = mysqli_fetch_assoc($execute);
	$username   = $userlogin['Nama'];
	$email      = $userlogin['Email'];
	$password   = $userlogin['Password']; 
	if($cek==1){
		if($username==$user || $email==$user && $password==$pass){
			$_SESSION['user'] = $username;
			$_SESSION['pass'] = $password;
			header('location: home.php');
		}else{
			echo '<script> alert("Anda Tidak Diperbolehkan Login");</script>';
		}		
	}else {
		echo '<script>alert ("Anda Tidak Bisa Login");
		window.history.back();</script>';
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			background-image: url("nn.jpg");
			background-size: cover;
		}
		.tampilan2{
			background-color:rgba(255,255,255,0.6);
			width: 350px;
			height: 310px;
			margin: 100px auto;
			padding: 30px 20px;
			border-radius: 10px;
		}
		label{
			font-size: 11pt;
		}
		.boxlogin{
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
			border-radius: 5px	;	
		}
		.tombollogin{
			background: blue;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 5px;
			padding: 10px;
		}
		.tulisanlogin{
			text-align: center;
			text-transform: uppercase;
		}
		.tulisan{
			text-align: center;
			text-transform: uppercase;

		}

	</style>
</head>
<body>
	<div class="tampilan2">
		<p class="tulisan"><strong>Selamat Datang Di KeDai APP</strong></p>
		<p class="tulisanlogin"><strong>Silahkan Login</strong></p>
		<form action="login.php" method="post" class="form1">
			<label>Username</label>
			<input type="text" name="nama"class="boxlogin" placeholder="Username"><br>
			<label>Password</label>
			<input type="Password" name="pass" class="boxlogin" placeholder="Password"><br>
			<br>
			<input type="submit" name="submit" class="tombollogin" value="Login">
		</form>
	</div>
</body>	
</html>