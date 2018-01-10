<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>PHP Programming-Expresssions</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<?php
	// Assignments
	// $companyName = "";

	// $companyName = "Tuitt Coding Bootcamp";

	// echo $companyName;

	// $counter = 0;

	// echo $counter;
	// echo "<br>";

	// // $counter = $counter + 150;
	// $counter += 230; /*shorthand*/

	// echo $counter;

	// Arithmetic operator

	// $counter = 15;
	// echo $counter . "<br>";

	// // $counter = $counter + 5;
	// $counter += 5;

	// echo $counter . "<br>";

	// // $counter = $counter - 3;
	// $counter -= 3;

	// echo $counter . "<br>";

	// // $counter = $counter * 8;
	// $counter *= 8;

	// echo $counter . "<br>";

	// // $counter = $counter / 16;
	// $counter /= 16;

	// echo $counter . "<br>";

	// $row = 12; for concatenation

	// $counter = $counter . $row;

	// echo $counter . "<br>";

	// // $counter = $counter % 4;
	// $counter %= 4;

	// echo $counter . "<br>";

	// BEDMAS or PEMDAS

	// Braces/Parenthesis, Division/Multiplication, Addition/Subtraction

	// echo 1 + 5 * 3;
	// echo "<br>";
	// echo (1 + 5) * 3;

	// if () 
	// 	// single code no need for curly braces

	// $bankBalance = 100;
	// $deposit = 1000;

	// if ($bankBalance < 100) { /*true*/
	// 	$bankBalance = $bankBalance + $deposit;
	// 	echo "Your balance is now updated";
	// } 
	// else {
	// /*false*/
	// 	echo "Current Balance:" . $bankBalance . "<br>";
	// 	echo "Your bank balance is greater than or equal to 100"; 
	// }
	// echo  "<br>" . $bankBalance;

	// $userName = "juandelacruz@yahoo.com";
	// $passWord = "";

	// $userName = "admin";

	// // === -> value + type (preferred)
	// // == -> value

	// if($userName === "admin") {
	// 	echo "Username: ADMIN";
	// } else {
	// 	echo "Username: " . $userName;
	// }

	
	$firstnumber = 1;
	$secondnumber = 2;

	if ($firstnumber > $secondnumber) {
		echo $firstnumber . " is greater than " . $secondnumber . "<br>";
	}

	if ($firstnumber < $secondnumber) {
		echo $firstnumber . " is less than " . $secondnumber . "<br>";
	}

	if ($firstnumber >= $secondnumber) {
		echo $firstnumber . " is greater than or equal to " . $secondnumber . "<br>";
	}

	if ($firstnumber <= $secondnumber) {
		echo $firstnumber . " is less than or equal to " . $secondnumber . "<br>";
	}

	?>


</body>
</html>