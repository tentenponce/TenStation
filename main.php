<HTML>
	<?php
		session_start();
		if(empty($_SESSION['login'])){
			echo "<script>window.location.href = 'login.php';</script>";
		}
		
		//include('header.html');
	?>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/anim.css">
	<BODY style="margin: 0; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/homebg.png);">
		<DIV id="content" style="padding: 50px 0; width: 100%; height: 100%; position: fixed; transition: all .8s;"></DIV>
		<DIV style="position: fixed; width: 100%;">
			<DIV style="margin-top: -16px; height: 39px; background-color: none; width: 100%;" 
					method="post" action="home.php">
				<UL style="list-style-type: none; padding: 0; font-family: calibri;">
					<LI id="home" class="liheader" style="display: inline-block;"><A class="headerbuts"
						href="#" onclick="load_home()">HOME</A></LI>
					<LI id="act" class="liheader" style="display: inline-block;"><A class="headerbuts"
						href="#" onclick="load_act()">ACTIVITIES</A></LI>
					<LI id="about" class="liheader" style="display: inline-block;"><A class="headerbuts"
						 onclick="load_about()">ABOUT ME</A></LI>
					<LI id="contact" class="liheader" style="display: inline-block;"><A class="headerbuts"
						 onclick="load_contact()">CONTACT</A></LI>
					<DIV style="float: right;">
						<LI id="sett" class="liheader" style="display: inline-block;"><A class="headerbuts"
						href="#" onclick="load_sett()">SETTINGS</A></LI>
						<LI id="out" class="liheader" style="display: inline-block;"><A class="headerbuts"
						href="logout.php?logout=1" name="logout" onclick="load_out()">LOGOUT</A></LI>
					</DIV>
				</UL>
			</DIV>	
		</DIV>
		<DIV style="position: fixed; display:inline-block; margin: 0 0 10px 10px; border-radius: 5px; border: 2px solid black;
				padding: 10px; background: #f5f5f5; top: 86%; box-shadow: 0 -1px 20px -5px;">
			<DIV style="display: inline-block; padding: 5px;">
				<audio id="audio" src="audio/bgmusic.mp3"></audio>
				<INPUT id="progressbar" type="range" onclick="updateadio()" onmousedown="pausemusic()" value="0" style="display: block; width: 300px;">
				<DIV style="margin-top: 10px;">
					<FONT class="musictime" id="currenttime" style="float: left;">0:00</FONT>
					<FONT style="float: right;" class="musictime" id="maxtime">0:00</FONT>
					<DIV style="display: inline-block; margin-left: 80px;">
						<button class="controlbuttons" onclick="playmusic()"><IMG class="musiccontrol" src="images/play.png" width="20px" height="20px"></button>
						<button class="controlbuttons" onclick="pausemusic()"><IMG class="musiccontrol" src="images/pause.png" width="20px" height="20px"></button>
					</DIV>
					
				</DIV>
			</DIV>
		</DIV>
		<DIV style="top: 83%; left: 83%; display: inline-block; position: fixed; padding: 10px; text-align: center;">
			<FONT color="white" id="time" face="calibri" size="10px" style="display: block;">TIME</FONT>
			<FONT color="white" id="date" face="calibri" size="3px;">MONTH</FONT>
		</DIV>
	</BODY>
	<SCRIPT src="jscript/mainjs.js"></SCRIPT>
</HTML>