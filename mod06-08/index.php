
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
	<div>
	<h1><?php echo getTitle(); ?></h1>
	<p>
		<?php 
		echo getLyrics(0);
		echo getLyrics(1);
		echo getLyrics(2);
		echo getLyrics(3);
		echo getLyrics(4);
		echo getLyrics(5);
		echo getLyrics(6);
		echo getLyrics(7);
		echo getLyrics(8);
		echo getLyrics(9);
		echo getLyrics(10);
		echo getLyrics(11);
	
		 ?>
		 

	</p>
	</div>




	

    <script type="text/javascript"></script>
</body>
</html>