<HTML>
	<?php 
		session_start();
		if(!empty($_SESSION['login'])){
			echo "<script>window.location.href = 'main.php';</script>";
		}
	?>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<BODY style="margin: 0;">
		<DIV align="center" style="height: 100%; background-color: #F44336; width: 100%;">
			<DIV align="center" style="padding-top: 2%;">
				<FONT color="white" size="10" face="calibri" style="font-weight: bold; text-shadow: 0px 0px 5px black;">- TENStation -</FONT>
			</DIV>
			<?php if(!empty($_POST['login'])){
					if(empty($_POST['username']) || empty($_POST['password'])){
						echo "<FONT color='white' style='position: absolute; top: 20%; transform: translate3d(-50%, -50%, 0);'>Fill it all up.</FONT>";
					}else{
						$host = "localhost";
						$user = "root";
						$db = "";
						$conn = mysqli_connect($host, $user, "", $db);
						
						if($conn){
							mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS poncedb");
							mysqli_select_db($conn,"poncedb");
							
							mysqli_query($conn, "CREATE TABLE IF NOT EXISTS admintb(username varchar(30) PRIMARY KEY, password varchar(30))");
							mysqli_query($conn, "CREATE TABLE IF NOT EXISTS infotb(user varchar(30) PRIMARY KEY, name varchar(30), age int(2), 
													birthdate varchar(30), address varchar(30), school varchar(30), comment varchar(200))");
							
							$sql = "SELECT * FROM admintb";
							$result = mysqli_query($conn, $sql);
							if((mysqli_num_rows($result) == 0)){
								mysqli_query($conn, "INSERT INTO admintb VALUES('tenten', 'ponce')");
							}
							
							$sql = "SELECT * FROM infotb";
							$result = mysqli_query($conn, $sql);
							if((mysqli_num_rows($result) == 0)){
								mysqli_query($conn, "INSERT INTO infotb VALUES('tenten', 'Exequiel Ponce', 19, '10/10/1996', 'Malabon City', 'STI Caloocan College',
																				'Thank you for sharing your knowledge sir.')");
							}
							
							$username = $_POST['username'];
							$password = $_POST['password'];
							
							$sql = "SELECT * FROM admintb WHERE username='$username' AND password='$password'";
							$result = mysqli_query($conn, $sql);
									
							if(mysqli_num_rows($result) == 1){
								$_SESSION['login'] = 1;
								$_SESSION['user'] = $username;
								echo "<FONT class='tenfont' style='position: absolute; top: 20%; transform: translate3d(-50%, -50%, 0);'>
										Login Success.</FONT>";
								echo "<script>window.location.href = 'main.php';</script>";
							}else{
								echo "<FONT class='tenfont' style='position: absolute; top: 20%; transform: translate3d(-50%, -50%, 0);'>Username
										and Password did not matched. <BR>Enter again and Click sign up to register account.</FONT>";
							}
						}else{
							$error = mysqli_connect_error();
							echo "<script>confirm('Connection Failed: $error Returning to login page...' );
									window.location.href = 'login.php';</script>";
						}
					}
				}elseif(!empty($_POST['signup'])){
					if(empty($_POST['username']) || empty($_POST['password'])){
						echo "<FONT color='white' style='position: absolute; top: 20%; transform: translate3d(-50%, -50%, 0);'>Fill it all up.</FONT>";
					}else{
						$host = "localhost";
						$user = "root";
						$db = "";
						$conn = mysqli_connect($host, $user, "", $db);
						
						$username = $_POST['username'];
						$password = $_POST['password'];
						
						if($conn){
							mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS poncedb");
							mysqli_select_db($conn,"poncedb");
							
							mysqli_query($conn, "CREATE TABLE IF NOT EXISTS admintb(username varchar(30) PRIMARY KEY, password varchar(30))");
							mysqli_query($conn, "CREATE TABLE IF NOT EXISTS infotb(user varchar(30) PRIMARY KEY, name varchar(30), age int(2), 
													birthdate varchar(30), address varchar(30), school varchar(30), comment varchar(200))");
							
							$sql = "SELECT * FROM admintb WHERE username='$username'";
							$result = mysqli_query($conn, $sql);
							if((mysqli_num_rows($result) == 1)){
								echo "<FONT class='tenfont' style='position: absolute; top: 20%; transform: translate3d(-50%, -50%, 0);'>
										Username already in used.</FONT>";
							}else{			
								$sql = "SELECT * FROM admintb";
								$result = mysqli_query($conn, $sql);
								if((mysqli_num_rows($result) == 0)){
									mysqli_query($conn, "INSERT INTO admintb VALUES('tenten', 'ponce')");
								}
								
								mysqli_query($conn, "INSERT INTO admintb VALUES('$username', '$password')");
							
								$sql = "SELECT * FROM infotb";
								$result = mysqli_query($conn, $sql);
								if((mysqli_num_rows($result) == 0)){
									mysqli_query($conn, "INSERT INTO infotb VALUES('tenten', 'Exequiel Ponce', 19, '10/10/1996', 'Malabon City', 'STI Caloocan College',
																					'Thank you for sharing your knowledge sir.')");
								}
								
								mysqli_query($conn, "INSERT INTO infotb VALUES('$username', 'N/A' , 0, 'N/A', 'N/A', 'N/A',
																					'N/A')");

								echo "<FONT class='tenfont' style='position: absolute; top: 20%; transform: translate3d(-50%, -50%, 0);'>
											Signup Success.</FONT>";
							}
						}else{
							$error = mysqli_connect_error();
							echo "<script>confirm('Connection Failed: $error Returning to login page...' );
									window.location.href = 'login.php';</script>";
						}
					}
				}
			?>
			<FORM style="top: 50%; position: absolute; transform: translate3d(-50%, -50%, 0); 
						display: inline-block; padding: 40px; box-shadow: 0px 0px 5px black; border: 2px solid white;
						font-family: calibri; color:white;" method="post" action="login.php">
				Username: <BR>
				<INPUT class="tinput" style="width: 130px;" name="username"> <BR><BR>
				Password: <BR>
				<INPUT type="password" class="tinput" style="width: 130px;" name="password"><BR><BR>
				<INPUT class="tbutton" type="SUBMIT" value="Login" name="login">
				<FONT class="tenfont">Or</FONT>
				<INPUT class="tbutton" type="SUBMIT" value="Sign Up" name="signup">
			</FORM>
		</DIV>
	</BODY>
</HTML>