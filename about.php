<HTML>
	<link rel="stylesheet" type="text/css" href="css/class.css">
	<link rel="stylesheet" type="text/css" href="css/anim.css">
	<BODY>
		<DIV style="text-align: center;">
			<FONT class="tenfont" style="font-size: 50px; animation: welcome 1s; font-weight: bold;">ABOUT MYSELF</FONT>
		</DIV>
		<DIV style="padding: 0 150px;">
			<HR>
			<DIV style="margin:0 100px; display: inline-block;">
				<FONT class="tenfont" size="5px" style="margin-left: -30px; font-weight: bold;">Owner's Information</FONT><BR><BR>
				<FONT class="tenfont">
				<?php
					include("getinfo.php");
					echo "Name: <B>$name</B><BR><BR>
							Age: <B>$age</B><BR><BR>
							Birth Date: <B>$birthdate</B><BR><BR>
							Address: <B>$address</B><BR><BR>
							Current School: <B>$school</B><BR><BR>";
				?>
				</FONT>
			</DIV>
			<DIV style="margin:0 100px; display: inline-block; float: right;">
				<FONT class="tenfont" size="5px" style="margin-left: -30px; font-weight: bold;">Additional Comments</FONT><BR><BR>
				<P class="tenfont" style="max-width: 280px;">
					<?php echo $comment; ?>
				</P>
			</DIV>
			<BR><BR><BR>
		</DIV>
		<DIV style="text-align: center; padding: 0 150px;">
			<FONT class="tenfont" size="6px" style="font-weight: bold; display: block;">Fear kills more Dreams than Failure ever will.</FONT>
			<HR>
		</DIV>
	</BODY>
</HTML>