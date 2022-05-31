<?php

session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>POLITEKNIK LP3I | LOGIN </title>
	<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
	<style type="text/css">
		body {
			background-color: floralwhite;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card mt-5">
					<div class="card-header bg-gradient-primary text-center">
						<img src="assets/img/lp3i.svg" width="50px">
						<h3 style="color: white;"></h3>
					</div>
					<div class="card">
						<div class="row justify-content-center">
							<div class="col-md-8">
								<form method="post">
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="user" class="form-control" autocomplete="off">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="pass" class="form-control" autocomplete="off">
									</div>
									<button class="btn btn-primary btn-sm mb-3" name="login"><i class="fa fa-paper-plane"></i> Masuk</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>

</html>
<?php
if (isset($_POST['login'])) {
	$query = mysqli_query($db, "SELECT * FROM admin WHERE username='$_POST[user]' and password='$_POST[pass]'");
	$queryk = mysqli_query($db, "SELECT * FROM karyawan WHERE username='$_POST[user]' and password='$_POST[pass]'");
	$cek = mysqli_num_rows($query);
	$cekk = mysqli_num_rows($queryk);

	if (($cek == 1) || ($cekk == 1)) {



		$_SESSION['user'] = mysqli_fetch_assoc($queryk);
		$_SESSION['admin'] = mysqli_fetch_assoc($query);

		echo "<script>alert('Login Berhasil');</script>";
		header('location: index.php?Page=home');
	} else {
		echo  "<script>alert('Login Gagal , Masukkan Data Yang Benar!!!');</script>";
		echo "<meta http.equiv='refresh' content='1;url=login.php'>";
	}
}
?>