<?php
require 'config.php';
if (isset($_POST['register'])) {
	$nama = strip_tags($_POST['nama']);
	$alamat = strip_tags($_POST['alamat']);
	$telepon = strip_tags($_POST['telepon']);
	$email = strip_tags($_POST['email']);
	$nik = strip_tags($_POST['nik']);
	$user = strip_tags($_POST['user']);
	$pass = md5(strip_tags($_POST['pass']));

	// Simpan ke member
	$sql1 = "INSERT INTO member (nm_member, alamat_member, telepon, email, gambar, NIK) VALUES (?, ?, ?, ?, 'unnamed.jpg', ?)";
	$stmt1 = $config->prepare($sql1);
	$stmt1->execute([$nama, $alamat, $telepon, $email, $nik]);

	// Dapatkan ID terakhir
	$id_member = $config->lastInsertId();

	// Simpan ke login
	$sql2 = "INSERT INTO login (user, pass, id_member) VALUES (?, ?, ?)";
	$stmt2 = $config->prepare($sql2);
	$stmt2->execute([$user, $pass, $id_member]);

	echo '<script>alert("Registrasi berhasil! Silakan login.");window.location="login.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Account - KasirKu</title>
	<link rel="icon" type="image/png" href="assets/img/Logo.png">
	<link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		body {
			background: url('assets/img/bg-1.jpg') no-repeat center center fixed;
			background-size: cover;
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.card {
			background: rgba(255, 255, 255, 0.9);
			border-radius: 15px;
			padding: 20px;
		}
		.logo {
			display: block;
			margin: 0 auto 15px;
			max-height: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<!-- LOGO
				<img src="assets/img/Logo.png" alt="KasirKu Logo" class="logo"> -->

				<!-- CARD REGISTER -->
				<div class="card shadow">
					<div class="card-body">
						<h4 class="text-center text-success"><b>Create an Account</b></h4>
						<form method="POST">
							<div class="form-group">
								<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
							</div>
							<div class="form-group">
								<input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
							</div>
							<div class="form-group">
								<input type="text" name="telepon" class="form-control" placeholder="Telepon" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" name="nik" class="form-control" placeholder="NIK" required>
							</div>
							<hr>
							<div class="form-group">
								<input type="text" name="user" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input type="password" name="pass" class="form-control" placeholder="Password" required>
							</div>
							<button class="btn btn-success btn-block" name="register">Register</button>
							<a href="login.php" class="btn btn-link btn-block">Kembali ke Login</a>
						</form>
					</div>
				</div>
				<!-- END CARD -->
			</div>
		</div>
	</div>
</body>
</html>