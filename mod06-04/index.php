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
	// $a = 1;
	// $b = 1;

	// // $a AND $b => true
	// var_dump($a AND $b);


	?>

	<?php
		// BMI calculator

	// bmi = mass (kg) / height * height (m)

	// result:
	// 	< 16 -> severe thinnesss
	// 	16-17 -> moderate thinnesss
	// 	17-18.5 -> mild thinnesss
	// 	18.5- 25 -> normal
	// 	25- 30 -> overweight
	// 	30-35 -> obese class 1
	// 	35-40 -> obese class 2
	// 	> 40 -> obese class 3


	// $mass = 130; /*kg*/
	// $height = 1.9; /*m*/

	// $bmi = $mass / ($height * $height);

	// echo "Your BMI is " . round($bmi,2) . "<br>";

	// if ($bmi < 16) 
	// 	echo "Result: Severe thinnesss <br>";
	// else if ($bmi >= 16 AND $bmi <=17)
	// 	echo "Result: MOdereate thinnesss <br>";
	// elseif ($bmi > 17 AND $bmi <= 18.5) 
	// 	echo "Result: MIld thinnesss <br>";
	// else if ($bmi >18.5 AND $bmi <= 25)
	// 	echo "Result: NOrmal <br>";
	// else if ($bmi > 25 AND $bmi <= 30)
	// 	echo "Result: overweight <br>";
	// else if ($bmi > 30 AND $bmi <= 35)
	// 	echo "Result: obese class 1 <br>";
	// else if ($bmi > 35 AND $bmi <= 40)
	// 	echo "Result: obese class 2 <br>";
	// else 
	// 	echo "Result: obese class 3 <br>";

	// switch ($bmi) {
	// 	case $bmi < 16:
	// 		echo "Result: Severe thinnesss <br>";
	// 		break;

	// 	case $bmi > 16 AND $bmi <=17:
	// 		echo "Result: MOdereate thinnesss <br>";
	// 		break;

	// 	case $bmi > 17 AND $bmi <= 18.5:
	// 		echo "Result: MIld thinnesss <br>";
	// 		break;

	// 	case $bmi >18.5 AND $bmi <= 25:
	// 		echo "Result: NOrmal <br>";
	// 		break;

	// 	case $bmi > 25 AND $bmi <= 30:
	// 		echo "Result: overweight <br>";
	// 		break;

	// 	case $bmi > 30 AND $bmi <= 35:
	// 		echo "Result: obese class 1 <br>";
	// 		break;

	// 	case $bmi > 35 AND $bmi <= 40:
	// 		echo "Result: obese class 2 <br>";
	// 		break;

	// 	case $bmi > 40:
	// 		echo "Result: obese class 3 <br>";
	// 		break;	
		
	// }

	// echo "Thank you for using our BMI Calculator.";

	// Loops (while loop)

	$number = 1;

	while ($number <= 10) {
		echo $number . ' ';
		$number = $number + 1; /*increment*/
	}


	// Do... while loop

	// $count = 15;
	// do {
	// 	echo $count . ' ';
	// 	// $count += 1;
	// 	$count++;
	// 	$count = $count + 12;
	// } while ($count <= 12);

	// For Loop

	// $name ='Juan Dela Cruz';

	// for ($counter=0; $counter <10 ; $counter+=1) { 
	// 	echo $name . '<br>';
	// }
	


	?>


</body>
</html>