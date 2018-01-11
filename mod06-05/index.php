<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>PHP Programming-Expresssions</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 	<style type="text/css">
		.box {
			border: 1px solid #000;
			padding: 10px;
			display: inline-block;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
		}
	</style> -->

</head>
<body>



	

	<?php
	// Activity 1


	// $number = 1;

	// while ($number <=9) {
	// 	echo $number . "-";
	// 	$number = $number + 1;
	// }
	// 	echo "10";

	// Activity 2


	// for ($x=0; $x <=10 ; $x+= 1) { 
	// 	for ($y=0; $y <=10 ; $y+=1) {
	// 		echo "* ";
	// 	}
	// 	echo  "<br>";
	// }



	// Activity 3
	?>



	<?php

	// for ($x=1; $x <=10 ; $x+= 1) { /*row*/
	// 	for ($y=1; $y <=10 ; $y+=1) { column
	// 		echo  '<span class = "box">' . $x * $y . '</span>';
	// 	}
	// 	echo " <br>";
	// }

	// Activity 4

	// for ($x=1; $x <=10 ; $x++) { 
	// 	for ($y= 2; $y <= $x ; $y++) { 
	// 		echo "*";
	// 	}
	// 	echo "* <br>";
	// }

	// Activity 5

	// for ($x=1; $x <=10 ; $x++) { 
	// 	for ($y= $x+1; $y <= 10 ; $y++) { 
	// 		echo "*";
	// 	}
	// 	echo "* <br>";
	// }

	// Activity 6

	for ($x=1; $x <=50 ; $x++) { 
		if ($x % 3 == 0) {
			echo $x . " Fizz" . "<br>";
		} 
		if ($x % 5 == 0){
			echo $x . " Buzz" . "<br>";
		}
		if ($x % 15 == 0) {
			echo $x . "FizzBuzz" . "<br>";
		}
	}



	?>


</body>
</html>