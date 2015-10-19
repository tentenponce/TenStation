<HTML>
	<STYLE>
		.tbutton {
			background-color: rgba(0, 0, 0, 0);
			font: normal normal normal 14px/1.6 'Open Sans', sans-serif;
			border: 2px solid black;
			padding: 4px;
			display: inline-block;
			text-align: center;
			color: black;
			cursor: pointer;
			margin: 10px;
			border-radius: 3px;
			transition: all .8s;
		}
		.tbutton:hover {
			background-color: lightgray;
			color: black;
		}
		.tbutton:active {
			background-color: rgba(168,168,168,1);
	</STYLE>
	<BODY style="text-align: center; font-family: calibri;">
		<DIV style="border: 2px solid black; display: inline-block; padding: 20px;">
			<FONT><B>Get and Post Method.</B></FONT><BR><BR><BR>
			<FORM action="getpost.php" method="post">
				<INPUT name="var1"><BR>
				<INPUT class="tbutton" type="submit" name="post" value="POST METHOD">
			</FORM>
			<BR>
			<FORM action="getpost.php" method="get">
				<INPUT name="var2"><BR>
				<INPUT class="tbutton" type="submit" name="get" value="GET METHOD">
			</FORM>
			<?php
				if(!empty($_POST['post']) && !empty($_POST['var1'])){
					echo "Throwed Data: " . $_POST['var1'];
				}elseif(!empty($_GET['get']) && !empty($_GET['var2'])){
					echo "Throwed Data: " . $_GET['var2'];
				}else{
					echo "Throwed Data: ";
				}
			?>
		</DIV>
	</BODY>
	
	
</HTML>