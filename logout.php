<?php
	session_start();
		$_SESSION['userweb']=$username;
				header("location:login.php");
				exit;
?>
