<?php
		session_start();
		ob_start();
		$_SESSION['username'] = $_POST["username"];
		header('Location:../../beranda/view');
?>