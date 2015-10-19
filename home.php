<HTML>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/anim.css">
	<BODY style="">
		<CENTER><DIV id="homecircle" style="background: #f44336; border-radius: 500px; height: 300px; 
											margin-top: 40px; width: 300px; box-shadow: 5px 5px 20px -5px black;">
			<DIV style="padding-top: 40%; display: inline-block; max-width: 280px; max-height: 110px; word-wrap: break-word; overflow:hidden;">
				<FONT id="tenten" class="tenfont" size="8px;" style="font-weight: bold; text-shadow: 2px 2px 5px black;">
				<?php session_start(); echo $_SESSION['user']; ?>
				</FONT>
			</DIV>
		</DIV></CENTER>
		<DIV style="text-align: center; margin-top: 50px;">
			<FONT id="welcome" face="calibri" style="font-weight: bold;" color="#fafafa">
				Welcome to TENStation!
			</FONT>
			<BR>
			<FONT class="tenfont" style="font-weight: bold;" size="4px;">Where blah blah blah rules.</FONT>
		</DIV>
	</BODY>
</HTML>
