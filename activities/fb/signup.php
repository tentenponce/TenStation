<?php
	session_start();
	if(!empty($_POST['createaccount'])){
		if(!empty($_POST['fname']) and !empty($_POST['lname']) and !empty($_POST['emailornum']) and !empty($_POST['pass']) and !empty($_POST['birthday']) and !empty($_POST['month']) and !empty($_POST['year']) and !empty($_POST['gender'])){
			
			if($_POST['emailornum'] != $_POST['emailornum2']){
				echo "<script>confirm('Email or Mobile Number do not match.');
						window.location.href = 'ten.php';</script>";
			}else{
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
				
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$emailornum = $_POST['emailornum'];
					$pass = $_POST['pass'];
					$birthday = $_POST['birthday'];
					$month = $_POST['month'];
					$year = $_POST['year'];
					$gender = $_POST['gender'];
					
					$sql = "SELECT emailornum FROM usertb WHERE emailornum='$emailornum'";
					$result = mysqli_query($conn, $sql);
							
					if(mysqli_num_rows($result) == 1){
						echo "<script>confirm('Email or Mobile Number is already registered.');
							window.location.href = 'ten.php';</script>";
					}else{
						$sql  = "INSERT INTO usertb (fname, lname, emailornum, pass, day, month, year, gender) VALUES('$fname', '$lname', '$emailornum', '$pass', $birthday, $month, $year, '$gender')";
					
						mysqli_query($conn, $sql);
						echo "<script>confirm('Account Successfully created.');
							window.location.href = 'ten.php';</script>";
					}
				}else{
					$error = mysqli_connect_error();
					echo "<script>confirm('Connection Failed: $error Returning to login page...' );
							window.location.href = 'ten.php';</script>";
				}
			}
			
		}else{
			echo "<script>confirm('Fll it all.');
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