<?php
	// echo "welcome to PHP programming";

	// phpinfo();

	// $name = "Jean Ashley Talal"

	// print "Good evening. $name";

	// echo "Today is" .date("F j, Y"). ".";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>PHP Programming-Syntax,Printing and variables</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<?php

	// activity 1

		$variable = array('stars', 'shine', 'yellow');
		

		// echo "Look at the $variable[0], look how they $variable[1] for you, and everything. <br> Yeah, they were all $variable[2]."

	// activity 2
		

		// echo "<ul><li> $variable[0]";
		// echo "<li>$variable[1]";
		// echo "<li>$variable[2]";



		// echo "
		// 	<ul>
		// 		<li>$variable[0]</li>
		// 		<li>$variable[1]</li>
		// 		<li>$variable[2]</li>
		// 	</ul>
		// ";


		// activity 3

		$fnmes = array('Steph', 'Russell', 'LeBron');
		$lnmes = array('Curry', 'Westbrook', 'James');
		$teams =  array('Warriors', 'Thunders', 'Cavaliers');
		$jerseys = array('30', '0', '23');

		// echo "
		// Player: $fnmes[0] $lnmes[0] <br>
		// Team: $teams[0] <br>
		// Jersey: $jerseys[0]<br><br>
		// ";

		// echo "
		// Player: $fnmes[1] $lnmes[1] <br>
		// Team: $teams[1] <br>
		// Jersey: $jerseys[1]<br><br>
		// ";

		// echo "
		// Player: $fnmes[2] $lnmes[2] <br>
		// Team: $teams[2] <br>
		// Jersey: $jerseys[2]<br><br>
		// ";

		// activity  4 convert to table

		// echo "
		// <table>
		// 	 <tr>
  //   			<th>Player</th>
  //   			<th>Team</th>
  //   			<th>Jersey</th>
 	// 		 </tr>
 	// 		 <tr>
		// 	    <td>$fnmes[0] $lnmes[0]</td>
		// 	    <td>$teams[0]</td>
		// 	    <td>$jerseys[0]</td>
		// 	  </tr>
		// 	   <tr>
		// 	    <td>$fnmes[1] $lnmes[1]</td>
		// 	    <td>$teams[1]</td>
		// 	    <td>$jerseys[1]</td>
		// 	  </tr>
		// 	   <tr>
		// 	    <td>$fnmes[2] $lnmes[2]</td>
		// 	    <td>$teams[2]</td>
		// 	    <td>$jerseys[2]</td>
		// 	  </tr>
			
		// ";
	?>

	<table>
		<tr>
			<th>Player</th>
			<th>Team</th>
			<th>Jersey</th>
		</tr>

		<?php
			for ($x=0; $x<=2 ; $x++) { 
				echo "
					<tr>
					    <td>$fnmes[$x] $lnmes[$x]</td>
					    <td>$teams[$x]</td>
					    <td>$jerseys[$x]</td>
			  		</tr>
				";
			}
		?>
		
	</table>


</body>
</html>