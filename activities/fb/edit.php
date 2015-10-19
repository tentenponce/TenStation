<?php
	session_start();
	if(!empty($_SESSION['loggedin'])){
		header("Location: /home.php");
	}else{
		header("Location: /ten.php");
	}
	
	if(!empty($_POST['editb'])){
		
	}
?>