<HTML>
	<?php
		session_start();
	?>
	<STYLE>
		#header {
			display: block;
			height: 42px;
			width: 100%;
			position: fixed;
			background-color: #3a5795;
			border-bottom: 1px solid #133783;
			box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .52);
			border: 0;
		}
		
		.wall {
			background-color: white;
			margin: 10px;
			padding: 10px;
		}
	</STYLE>
	<BODY style="margin:0;">
		<FORM method="post" action="home.php">
			<DIV id="header">
				<DIV style="margin: 15px 250px;">
					<FONT name="fname" style="font-size: 12px; font-family: helvetica, arial, sans-serif; cursor: pointer;
											font-weight: bold; text-shadow: 0 -1px rgba(0, 0, 0, .5); color:#fff;"><?php echo "Welcome " . $_SESSION['fname'];?></FONT>
					<INPUT value="Logout" name="logoutb" type="submit" id="logout" style="font-size: 12px; font-family: helvetica, arial, sans-serif; 
											cursor: pointer; font-weight: bold; text-shadow: 0 -1px rgba(0, 0, 0, .5); color:#fff;
											float:right; background-color: transparent; border: none;">
				</DIV>
			</DIV>
			<DIV style="height: 100%; padding-top: 45px; background-color: #e9eaed;">
				<DIV style="position: fixed; display: inline-block; min-width: 200px; float: left; height: 100%;
							padding: 10px 0px 0 50px;">
					<FONT style="font-size: 12px; font-family: helvetica, arial, sans-serif; display:block; margin-bottom: 5px;"><?php echo $_SESSION['fname'] . " ". $_SESSION['lname'];?></FONT>
					<FONT style="font-size: 12px; font-family: helvetica, arial, sans-serif; margin-bottom: 5px; cursor:pointer;">Edit Profile</FONT>
				</DIV>
				<DIV style="width: 250px; display: inline-block; float:right;">
					<DIV style="position: fixed; background-color: white; width: 250px; height: 100%; padding: 10px 0px 0 50px;">
						something
					</DIV>	
				</DIV>
				<DIV style="padding: 0 275px 0 275px;">
					<UL style="margin: 0; padding: 0; list-style-type: none;">
						<LI style="padding: 5px; margin: 10px;  background-color: white;">
							<TEXTAREA placeholder="What's on your brain?" style="font-family: helvetica, arial, sans-serif; 
										border: 0; font-size: 15px; width: 100%; height: 50px;"></TEXTAREA>
							<BUTTON onclick="poststatus()" style="margin-left: 91%; font-family: helvetica, arial, sans-serif;
										background-color: #4e69a2; border-color: #435a8b #3c5488 #334c83; color: #fff;
										text-shadow: 0 -1px 0 rgba(0, 0, 0, .2); border: 1px solid; border-radius: 3px;
										box-shadow: 0 1px 1px rgba(0, 0, 0, .05); font-weight: bold; line-height: 22px;
										padding: 0 16px; text-align: center;">Post</BUTTON>
						</LI>
						<LI class="wall" id="wall1">asd</LI>
					</UL>
				</DIV>
				
			</DIV>
		</FORM>
		<SCRIPT>
			function poststatus(){
				
			}
		</SCRIPT>
	</BODY>
	<?php
		if(empty($_SESSION['loggedin'])){
			header("Location:/ten.php");
		}
		
		if(!empty($_POST['logoutb'])){
			session_destroy();
			header("Location:/ten.php");
		}
		
		if(!empty($_POST['editb'])){
			if(!empty($_POST['fname'])){
				$host = "localhost";
				$user = "root";
				$db = "poncedb";
				$conn = mysqli_connect($host, $user, "", $db);
				
				mysqli_connect($host, $user, "", $db) or die("Cannot connect");
				
				$fname = $_POST['fname'];
				$username = $_SESSION['username'];
				
				$sql = "UPDATE usertb SET fname='$fname' WHERE emailornum='$username'";
				
				mysqli_query($conn, $sql);
			}
		}
	?>
</HTML>