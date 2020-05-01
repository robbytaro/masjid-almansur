<?php 
@session_start();
include "../config/koneksi.php";
if(@$_SESSION['admin']){
	header("location: index.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" href="../img/logo.png">
	<title>Login Page | Administrator</title>

	<!-- Memanggil fungsi CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="container">
	<div class="section">
		<div class="row">
			<form action="" method="post" name="login" class="col s12">
				<table><thead><th class="center">Login Page</th></thead></table>
				<br>
				<div class="row">
					<div class="input-field col s7">
						<input type="text" name="username" required="required" autofocus>
						<label>Username</label>
					</div>
					<div class="input-field col s7">
						<input type="password" name="password" required="required">
						<label>Password</label>
					</div>
					<div class="row">
			        <div class="input-field col s7 right">
			          	<input class="btn orange accent-3" type="submit" name="login" value="Login">
						<input class="btn grey darken-1" type="reset" name="reset" value="Batal">
			        </div>
			      </div>
				</div>
			</form>
			<?php 
			$username = @$_POST['username'];
			$password = @$_POST['password'];
			$login 	  = @$_POST['login'];

			if($login){
				if($username == "" || $password == ""){
					?> <script type="text/javascript">alert("Username atau Password tidak boleh kosong");</script><?php
				} else {
					$sql = mysqli_query($db, "SELECT * FROM user where username = '$username' and password = '$password'") or die($db->error);
					$data = mysqli_fetch_array($sql);
					$cek = mysqli_num_rows($sql);
					if($cek >= 1){
						if($data['level'] == "Admin"){
							@$_SESSION['admin'] = $data['id_user'];
							header("location: index.php");
						}
					} else {
						echo "Username atau password salah";
					}
				}
			}
		?>
		</div>
	</div>
</div>
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
</body>
</html>
<?php } ?>