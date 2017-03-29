<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css?v=1.0">
	</head>
</html>
<?php

	$u_name = $_GET["username"];
	echo "<p>Your username is: $u_name</p>";
	

	
	$p_word = $_GET["password"];
	echo "<p>Your password is: *******</p>";
	

	
	$name = $_GET["name"];
	echo "<p>Your name is: $name</p>";
	


	$dob = $_GET["dob"];
	$mob = $_GET["mob"];
	$yob = $_GET["yob"];
	
	// get current date
	$date = getdate();
	$year = $date["year"];
	$month = $date["mon"];
	$day = $date["mday"];
	
	

	if($yob > $year - 16){
		echo "You're too young!";
		
	}
	else{
		echo "<p> Your date of birth is $dob/$mob/$yob </p>";
		
	}



?>