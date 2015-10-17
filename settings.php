<HTML>
	<?php include("getinfo.php");?>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/anim.css">
	<BODY>
		<DIV style="text-align: center;">
			<FONT class="tenfont" style="font-size: 50px; animation: welcome 1s; font-weight: bold;">SETTINGS</FONT>
		</DIV>
		<DIV style="margin: 0 150px;">
			<HR>
			<FORM style="margin: 20px 100px;" method="post" action="settings.php">
				<FONT class="tenfont" style="font-weight: bold">Name: </FONT>
				<INPUT name="name" value="<?php echo $name; ?>" class="tinput" style="text-align: left; width: 150px; margin-left: 10px;"><BR><BR>
				<FONT class="tenfont" style="font-weight: bold">Age: </FONT>
				<INPUT name="age" value="<?php echo $age; ?>" class="tinput" style="text-align: left; width: 150px; margin-left: 10px;"><BR><BR>
				<FONT class="tenfont" style="font-weight: bold">Birth Date: </FONT>
				<INPUT name="birthdate" value="<?php echo $birthdate; ?>" class="tinput" style="text-align: left; width: 150px; margin-left: 10px;"><BR><BR>
				<FONT class="tenfont" style="font-weight: bold">Address: </FONT>
				<INPUT name="address" value="<?php echo $address; ?>" class="tinput" style="text-align: left; width: 150px; margin-left: 10px;"><BR><BR>
				<FONT class="tenfont" style="font-weight: bold">Current School: </FONT>
				<INPUT name="school" value="<?php echo $school; ?>" class="tinput" style="text-align: left; width: 150px; margin-left: 10px;"><BR><BR>
				<FONT class="tenfont" style="font-weight: bold">Comment: </FONT>
				<INPUT name="comment" value="<?php echo $comment; ?>" class="tinput" style="text-align: left; width: 600px; margin-left: 10px;"><BR><BR>
				<INPUT class="tbutton" type="submit" value="Update Information" name="edit">
			</FORM>
			<DIV style="text-align: center;">
				<?php
					if(!empty($_POST['edit'])){						
						if(!empty($_POST['name']) && !empty($_POST['age']) & !empty($_POST['birthdate']) && !empty($_POST['address']) && !empty($_POST['school']) && !empty($_POST['comment'])){
							
							$name = $_POST["name"];
							$age = $_POST["age"];
							$birthdate = $_POST["birthdate"];
							$address = $_POST["address"];
							$school = $_POST["school"];
							$comment = $_POST['comment'];
							
							$sql = "UPDATE infotb SET name='$name', age=$age, birthdate='$birthdate', address='$address', school='$school', comment='$comment'";
							
							if(mysqli_query($conn, $sql)){
								echo "<FONT class='tenfont'>Information Successfully Updated, Reloading page...</FONT>";
								header("Refresh: 0;");
								
							}else{
								echo "<FONT class='tenfont'>Error updating record: " . mysqli_error($conn) . "</FONT>";
							}
							
						}else{
							echo "<FONT class='tenfont'>Please fill it all up.</FONT>";
						}
					}
				?>
			</DIV>
		</DIV>
	</BODY>
</HTML>