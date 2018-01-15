
<?php

	include_once 'assets/lib/hello_world.php';
	require_once 'assets/lib/a_simple_require_file.php';




	function add($a,$b){
		$sum = $a + $b;
		return $sum;
	}

	$number1 = 20;
	$number2 = 12;
	$total = add($number1,$number2);


	function longDate($timestamp)
	{
		return date("l F jS Y", $timestamp);
	}

	function fix_names($n1, $n2, $n3)
	{
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));
		return $n1 . " " . $n2 . " " . $n3;
	}
?>

<?php
	$a1 = "JEAN";
	$a2 = "des";
	$a3 = "AnN";

	function fix_names2()
	{
		global $a1; $a1 = ucfirst(strtolower($a1));
		global $a2; $a2 = ucfirst(strtolower($a2));
		global $a3; $a3 = ucfirst(strtolower($a3));
	}
?>

<?php
	function multiply($l,$w){
		$product = $l * $w;
		return $product;
	}

	$num1 = 8;
	$num2 = 5;
	$prod = multiply($num1,$num2);

?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>PHP Programming-Expresssions</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.box {
			border: 1px solid #000;
		}

		table, th, tr, td {
			border: 1px solid #000;
			padding: 10px;
			border-collapse: collapse;
		}

		th {
			color: white;
			background-color: black;
		}
	</style>

</head>
<body>


	<?php 
		// printTable(1,1);
		// echo "<br>";
		// printTable(3,5);
	?>

<hr>

	<?php
		echo "<h2> Total is  $total </h2>";

		echo "<hr>";

		echo longDate(time());
	?>

	<hr>

	<?php

		echo fix_names("JeAn", "DeS", "ANN");
	?>

	<hr>

	<?php
		echo $a1 . " " . $a2 . " " . $a3 . "<br>";
		fix_names2();
		echo $a1 . " " . $a2 . " " . $a3;
	?>

	<hr>

	<?php
		echo "<h2> Area is $prod </h2>";
	?>

	<?php
		iAmRequired();
	?>

</body>
</html>