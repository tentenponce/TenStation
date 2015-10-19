<?php
	session_start();
	if(!empty($_POST['loginbutton'])){
		if(!empty($_POST['username']) and !empty($_POST['password'])){
			$host = "localhost";
			$user = "root";
			$db = "";
			$conn = mysqli_connect($host, $user, "", $db);
			
			if($conn){
				mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS poncedb");
				mysqli_select_db($conn,"poncedb");
				mysqli_query($conn, "CREATE TABLE IF NOT EXISTS usertb(id int(4) PRIMARY KEY AUTO_INCREMENT, fname varchar(30),
									lname varchar(30), emailornum varchar(30), pass varchar(30), day int(2), month int(2),
									year int(4), gender varchar(6))");
				
				$username = $_POST['username'];
				$password = $_POST['password'];
						
				$sql = "SELECT * FROM usertb WHERE emailornum='$username' AND pass='$password'";
				$result = mysqli_query($conn, $sql);
						
				if(mysqli_num_rows($result) == 1){
					$row = mysqli_fetch_assoc($result);
					$_SESSION['loggedin'] = 1;
					$_SESSION['username']= $username;
					$_SESSION['fname'] = $row['fname'];
					$_SESSION['lname'] = $row['lname'];
							
					header("Location: /home.php");
				}else{
					echo "<script>confirm('Incorrect Username or Password.');
						window.location.href = 'ten.php';</script>";
				}
			}else{
				$error = mysqli_connect_error();
				echo "<script>confirm('Connection Failed: $error Returning to login page...' );
						window.location.href = 'ten.php';</script>";
			}
		}else{
			echo "<script>confirm('Fill up username and password' );
						window.location.href = 'ten.php';</script>";
		}
	}else{
		if(!empty($_SESSION['loggedin'])){
			header("Location: /home.php");
		}else{
			header("Location: /ten.php");
		}
	}
?>