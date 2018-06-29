<?php
  session_start();
  ob_start();
  if(!isset($_SESSION['username'])) {
    header('location:../../../index.php');
  }else{
  	if($_SESSION['hak_akses']=='user'){
  		$username = $_SESSION['username'];
  		date_default_timezone_set('Asia/Jakarta');
  	}else{
  		header('location:../../.../modules/login/index.php');
  	}
  }
?>