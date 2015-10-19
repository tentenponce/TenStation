<?php
	session_start();
	
	if(!empty(['logout'])){
		session_destroy();
		echo "<script>parent.location = 'login.php';</script>";
	}
	
	if(empty($_SESSION['login'])){
		echo "<script>window.location.href = 'login.php';</script>";
	}else{
		echo "<script>window.location.href = 'main.php';</script>";
	}
?>