<HTML>
	<?php
		session_start();
		if(isset($_SESSION['loggedin'])){
			header("Location: /home.php");
		}
	?>
	<STYLE>
		body {
			margin: 0;
		}
		#titlebar {
			background-color: #3a5795;
			height: 82px;
		}
		
		.toptext {
			color: #fff;
			font-family: helvetica, arial, sans-serif;
			font-size: 12px;
		}
		
		#toptext {
			padding: 8px 300px 0px 0px;
			
		}
		
		#inputbox {
			margin-left: 69px;
		}
		
		.bord {
			border: 2px solid black;
		}
		
		.login {
			width: 142px;
			margin: 0;
			border: 1px solid #1d2a5b;
			padding: 3px;
		}
		
		#login {
			background-color: #5b74a8;
			color: #fff;
			border: 0;
			font-weight: bold;
			font-size: 12px;
			text-align: center;
			padding: 2px 5px 2px 5px;
			margin-left: 10px;
			cursor: pointer;
			box-shadow: -1px 2px 10px -5px black;
		}
		
		#connect {
			font-family: 'Freight Sans Bold', 'lucida grande',tahoma,verdana,arial,sans-serif;
			font-weight: bold;
			color: #333;
			font-size: 20px;
			word-spacing: -1px;
		}
		
		#leftside {
			float: left;
			margin: 55px 0px 0px 190px;
			width: 565px;
		}
		
		#rightside {
			display: inline-block;
			margin: 10px 150px 0 0px;
		}
		
		#create {
			font-size: 36px;
			font-family: helvetica, arial, sans-serif;
			font-weight: bold;
		}
		
		.newaccinput {
			font-family: helvetica, arial, sans-serif;
			border-color: #bdc7d8;
			-webkit-border-radius: 5px;
			margin: 0;
			border: 1px solid #bdc7d8;
			font-size: 18px;
			padding: 8px 10px 8px 10px;
			background-color: white;
		}
		
		.selects {
			border: 1px solid #bdc7d8;
			height: 30px;
			padding: 5px;
		}
		
		.languagelist {
			display: inline-block;
		}
		
		.languages {   
			color: #3b5998;
			cursor: pointer;
			text-decoration: none;
		}
	</STYLE>
	<DIV id="titlebar">
		<FORM action="login.php" method="post" style="display: block;">
			<IMG src="fblogo.png" height="35" width="180" style="margin-left: 175px; margin-top: 30px;">
			<DIV style="display: inline-block; float: right; margin-right: 50px;">
				<DIV id="toptext">
					<FONT class="toptext" style="padding: 70px;">Email or Phone</FONT>
					<FONT class="toptext">Password</FONT>
				</DIV>
				<DIV id="inputbox">
					<INPUT class="login" name="username" style="margin-right:14px">
					<INPUT class="login" name="password" type="password">
					<INPUT type="submit" value="Log In" id="login" name="loginbutton">
				</DIV>
				<DIV id="helpinput" style="padding: 2px 0px 0px 65px;">
					<INPUT type="checkbox">
					<FONT style="font-family: helvetica, arial, sans-serif; color: #9daccb; font-size: 12px;">Keep me logged in</FONT>
					<FONT style="font-family: helvetica, arial, sans-serif; color: #9daccb; font-size: 12px; padding-left:34px">Forgot your password?</FONT>
				</DIV>
			</DIV>
		</FORM>
	</DIV>
	<DIV>
		<DIV style="background: -webkit-linear-gradient(white, #D3D8E8); height: 100%">
			<DIV id="leftside">
				<FONT id="connect">Facebook helps you connect and share with the <BR> people in your life.</FONT>
				<BR><BR><BR>
				<IMG src="connect.png" style="margin-top: -30px;">
			</DIV>
			<FORM id="rightside" action="signup.php" method="post">
				<FONT id="create">Create an account</FONT>
				<BR>
				<FONT style="font-size: 19px;font-family: helvetica, arial, sans-serif; margin-top: 10px; display:block;">It's free and always will be.</FONT>
				<DIV style="margin-top: 20px;">
					<DIV>
						<INPUT class="newaccinput" placeholder="First Name" style="width: 200px; margin-right: 10px" name="fname">
						<INPUT class="newaccinput" placeholder="Surname" style="width: 190px;" name="lname">
					</DIV>
					<INPUT class="newaccinput" style="margin-top: 10px; width: 100%;" placeholder="Email or mobile number" name="emailornum"><BR>
					<INPUT class="newaccinput" style="margin-top: 10px; width: 100%;" placeholder="Re-enter email or mobile number" name="emailornum2"><BR>
					<INPUT class="newaccinput" style="margin-top: 10px; width: 100%;" placeholder="New Password" name="pass" type="password"><BR>
					<FONT style="font-size: 18px; font-family: helvetica, arial, sans-serif; margin-top: 10px; display:block;">Birthday</FONT>
					<DIV style="margin-top: 10px;">
						<select class="selects" name="birthday">
							<option value="0" selected="selected">Day</option>
							<?php
								for($x = 1; $x <= 31; $x++){
									echo "<option value='$x'>$x</option>";
								}
							?>
						</select>
						<select class="selects" name="month">
							<option value="0" selected="selected">Month</option>
							<?php							
								for($x = 1; $x <= 12; $x++){
									$monthName = date('F', mktime(0, 0, 0, $x, 10));
									echo "<option value=$x>$monthName</option>";
								}
							?>
						</select>
						<select class="selects" name="year">
							<option value="0" selected="selected">Year</option>
							<?php
								for($x = 1950; $x <= 2015; $x++){
									echo "<option value='$x'>$x</option>";
								}
							?>
						</select>
						<A href="#" style="font-size: 11px; max-width: 150px; appearance: none; color: #3b5998; cursor: pointer; text-decoration: none;
							font-family: helvetica, arial, sans-serif; display:inline-block; margin-left: 10px; vertical-align: middle;">
						Why do I need to provide my date of birth?
						</A>
					</DIV>
					<DIV style="margin-top: 10px;">
						<INPUT type="radio" name="gender" value="male"><FONT face="helvetica, arial, sans-serif" style="font-size: 12px; padding: 0 10px 0 3px; cursor: pointer;">Female</FONT>
						<INPUT type="radio" name="gender" value="female"><FONT face="helvetica, arial, sans-serif" style="font-size: 12px; padding: 0 10px 0 3px; cursor: pointer;">Male</FONT>
					</DIV>
					<FONT style="font-size: 11px; color: #777; width: 316px; display:block; font-family: helvetica, arial, sans-serif; margin-top: 11px;">
						By clicking Create an account, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.
					</FONT>
					<INPUT type="submit" name="createaccount" style="background: linear-gradient(#79bc64, #578843); font-size: 12px; font-family: 'Freight Sans Bold', 'Helvetica Neue', 'Segoe UI', helvetica, arial, sans-serif;
									font-weight:bold; margin: 10px 0 10px 0; box-shadow: inset 0 .5px 1px; width: 194px; color: #fff; letter-spacing: .5px; cursor: pointer;
									border: 1px solid black; border-radius: 5px; text-shadow: 0 1px 2px rgba(0,0,0,.5); padding: 7px 20px; text-align: center;" value="Create an account">
					<DIV style="border-top: 1px solid #a0a9c0; color: #666; font-size: 13px; font-weight: bold; margin-top: 10px; padding-top: 15px;
							font-family: helvetica, arial, sans-serif;">
						<FONT>Create a Page for a celebrity, band or business.</FONT>
					</DIV>
				</DIV>
			</FORM>
		</DIV>
	</DIV>
</HTML>