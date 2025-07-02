<?php
	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
			
		$user = strip_tags($_POST['user']);
		$pass = strip_tags($_POST['pass']);

		$sql = 'select member.*, login.user, login.pass
				from member inner join login on member.id_member = login.id_member
				where user =? and pass = md5(?)';
		$row = $config->prepare($sql);
		$row -> execute(array($user,$pass));
		$jum = $row -> rowCount();
		if($jum > 0){
			$hasil = $row -> fetch();
			$_SESSION['admin'] = $hasil;
			echo '<script>alert("Login Sukses");window.location="index.php"</script>';
		}else{
			echo '<script>alert("Login Gagal");history.go(-1);</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login - KasirKu</title>
	<link rel="icon" type="image/png" href="assets/img/Logo.png">
	<!-- Fonts & Styles -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
	<link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		body {
			background: url('assets/img/bg-1.jpg') no-repeat center center fixed;
			background-size: cover;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}
		.card {
			background: rgba(255, 255, 255, 0.95);
			border-radius: 15px;
		}
		.logo-login {
			display: block;
			margin: 0 auto 15px auto;
			max-height: 100px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card o-hidden border-0 shadow-lg">
					<div class="card-body p-4">
						<div class="text-center">
							<img src="assets/img/Logo.png" alt="KasirKu Logo" class="logo-login">
							<h4 class="text-gray-900 mb-4"><b>Login KasirKu</b></h4>
						</div>
						<form class="form-login" method="POST">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" name="user" placeholder="User ID" autofocus required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-user" name="pass" placeholder="Password" required>
							</div>
							<button class="btn btn-primary btn-block" name="proses" type="submit">
								<i class="fa fa-lock"></i> SIGN IN
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="forgot-password.php">Forgot Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="register.php">Create an Account!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS Scripts -->
	<script src="sb-admin/vendor/jquery/jquery.min.js"></script>
	<script src="sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="sb-admin/js/sb-admin-2.min.js"></script>
</body>

</html>