<HTML>
	<STYLE>
		.tbutton {
			background-color: rgba(0, 0, 0, 0);
			font: normal normal normal 14px/1.6 'Open Sans', sans-serif;
			border: 2px solid black;
			height: 30px;
			width: 30px;
			display: inline-block;
			text-align: center;
			color: black;
			cursor: pointer;
			border-radius: 3px;
			transition: all .8s;
			font-weight: bold;
			margin: 5px;
		}
		.tbutton:hover {
			background-color: lightgray;
			color: black;
		}
		.tbutton:active {
			background-color: rgba(168,168,168,1);
		}
	</STYLE>
	<BODY style="text-align: center;">
		<FONT face="calibri">Basic Calculator</FONT><BR><BR><BR>
		<FORM method="post" action="calc.php" style="border: 2px solid black; display: inline-block; padding: 20px;">
			<FONT face="calibri">Number 1</FONT><BR>
			<INPUT name="num1" style="text-align: center;"><BR><BR>
			<FONT face="calibri">Number 2</FONT><BR>
			<INPUT name="num2" style="text-align: center;"><BR><BR>
			<INPUT class="tbutton" type="submit" value="+" name="add">
			<INPUT class="tbutton" type="submit" value="-" name="sub"><BR>
			<INPUT class="tbutton" type="submit" value="x" name="mul">
			<INPUT class="tbutton" type="submit" value="/" name="div"><BR>
			<INPUT class="tbutton" type="submit" value="%" name="mod"><BR><BR>
			<?php
				
				if(!empty($_POST['num1']) && !empty($_POST['num2'])){
					$num1 = $_POST['num1'];
					$num2 = $_POST['num2'];
					$ans;
					
					if(!empty($_POST['add'])){
						$ans = $num1 + $num2;
					}elseif(!empty($_POST['sub'])){
						$ans = $num1 - $num2;
					}elseif(!empty($_POST['mul'])){
						$ans = $num1 * $num2;
					}elseif(!empty($_POST['div'])){
						$ans = $num1 / $num2;
					}elseif(!empty($_POST['mod'])){
						$ans = $num1 % $num2;
					}
					
					echo "<FONT face='calibri'>Answer: $ans</FONT>";
				}else{
					echo "<FONT face='calibri'>Answer: </FONT>";
				}
			?>
		</FORM>
	</BODY>
</HTML>