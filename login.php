<?php 
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if ($user == 'user' && $pass == 'user') {
		$noerr = true;
		$_SESSION['user'] = $user;

	}else{
		$err = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- sweetalert2 -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bekgron">

	<div class="col-sm-8 mt-5 tengah">
		<div style="width: 98.9%;">
			<div class="row" style="height: 500px;">
				<div class="col-sm kiri"></div>
				<?php include 'notif.php'; ?>
				<div class="col-sm kanan">
					<div class="midle">
						<form action="" method="post">
							<input type="text" name="user" class="form-control" placeholder="username = user">
							<input type="password" name="pass" class="form-control mt-3" placeholder="password = user">
							<button class="btn btn-danger mt-3">Input</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
	</html>