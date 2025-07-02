<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forgot Password - KasirKu</title>
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
		}
		.logo {
			display: block;
			margin-left: auto;
			margin-right: auto;
			max-height: 100px;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card shadow">
					<div class="card-body">
						<img src="assets/img/Logo.png" alt="Logo Store" class="logo">
						<h4 class="text-center text-warning"><b>Forgot Password</b></h4>
						<form method="POST">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
							</div>
							<button class="btn btn-warning btn-block" name="reset">Cek Akun</button>
							<a href="login.php" class="btn btn-link btn-block">Kembali ke Login</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>