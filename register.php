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
	<title>Register</title>
	<link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-success">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="card shadow">
					<div class="card-body">
						<h4 class="text-center text-success"><b>Register Account</b></h4>
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
			</div>
		</div>
	</div>
</body>
</html>