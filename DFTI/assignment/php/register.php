<?php

/*	
	Jay Verma
	Q12027103
	
	PHP signup script
	
*/

$uName = $_POST["u_name"];
$pWord = $_POST["p_word"];

$conn = new PDO("mysql:host=localhost; dbname=vermaj", "vermaj", "oonifeho");

if($pWord == "PHP123"){
	
	$_SESSION["gatekeeper"] = $uName;
	header ("Location: index.php");
	
}
else{
	
	echo "Incorrect password!";
	
}






?>