<?php
  session_start();
  ob_start();
  if(!isset($_SESSION['username'])) {
    header('location:../../../index.php');
  }else{
  	if($_SESSION['hak_akses']=='admin'){
  		$username = $_SESSION['username'];
  	}else{
  		header('location:../../.../index.php');
  	}
  }
?>