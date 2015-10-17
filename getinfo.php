<?php
	$host = "localhost";
	$user = "root";
	$db = "poncedb";
	$conn = mysqli_connect($host, $user, "", $db);
	
	$sql = "SELECT * FROM infotb";
	$result = mysqli_query($conn, $sql);
					
	$name; $age; $birhdate; $address; $school; $comment;
					
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)) {
			$name = $row["name"];
			$age = $row["age"];
			$birthdate = $row["birthdate"];
			$address = $row["address"];
			$school = $row["school"];
			$comment = $row['comment'];
		}
	}
?>