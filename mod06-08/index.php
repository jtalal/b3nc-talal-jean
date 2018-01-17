
<?php

	require_once 'assets/lib/twelve_days.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title><?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css (mod07-09)">

	

</head>
<body>
	<style type="text/css">
		* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: cursive;
		}

		body {
		background-image: url('img/xmas1.jpg');
		background-attachment: fixed;
		}

		div {
			margin: 10%;
		}

		h1 {
			color: red;
			text-align: center;
		}

		p {
			color: green;
			text-align: center;
		}
	</style>


	<div>
	<h1><?php echo getTitle(); ?></h1>
	<br>
	<p>
		<?php 
		echo getLyrics(0);
		echo "<br>";
		echo getLyrics(1);
				echo "<br>";

		echo getLyrics(2);
				echo "<br>";

		echo getLyrics(3);
				echo "<br>";

		echo getLyrics(4);
				echo "<br>";

		echo getLyrics(5);
				echo "<br>";

		echo getLyrics(6);
				echo "<br>";

		echo getLyrics(7);
				echo "<br>";

		echo getLyrics(8);
				echo "<br>";

		echo getLyrics(9);
				echo "<br>";

		echo getLyrics(10);
				echo "<br>";

		echo getLyrics(11);
	
		 ?>
		 

	</p>
	</div>




	

    <script type="text/javascript">
    	// var days = document.querySelectorAll('[id^="day")');
    </script>
</body>
</html>