<?php
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript">
	</script>

	<div class="container">
		<div class="poto"></div>
		<div class="header">
			<h1 class="judul">Log In Ke Website</h1>
		</div>
	<form method="post">
		<label>Username :</label>
		<input type="text" name="fusername"><br>
		<label>Password :</label>
		<input type="password" name="fpassword"><br>
		<button type="submit" name="fmasuk">Login</button>
	</form>
	<?php
		if (isset($_POST['fmasuk'])) {
			$username = $_POST['fusername'];
			$password = $_POST['fpassword'];
			$qry = mysqli_query($koneksi,"SELECT * FROM tab_login WHERE username ='$username' AND password = md5('$password')");
			$cek =mysqli_num_rows($qry);
			if ($cek==1){
				$_SESSION['userweb']=$username;
				header("location:part2.html");
				exit;
			}
			else{
				echo "wrong password or invalid username";
			}
		}
	?>
	<div class="footer">
		<p class="copy">Copyright 2021.Apriansyah.</p>
	</div>
</body>
</html>
