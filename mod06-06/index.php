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

	$items = [
		['product' => 'Lenovo laptop','price' => 600.00 ,'quantity' => 100],
		['product' => 'ASUS tablet','price' => 100.00 ,'quantity' => 10],
		['product' => 'Acer all-in-one','price' => 300.00 ,'quantity' => 50],
		['product' => 'HP laptop','price' => 400.00 ,'quantity' => 1],
		['product' => 'Dell desktop','price' => 350.00 ,'quantity' => 20],
	];
	

	?>

	<ul>
		<?php
			foreach ($items as $item) {
				echo '<li>' . $item['product'] . '<br>' . '</li>';
			}
		?>
	</ul>

	<ul>
		<?php
			foreach ($items as $item) {
				echo '<li>' . $item['price'] . '<br>' . '</li>';
			}
		?>
	</ul>

	<ul>
		<?php
			foreach ($items as $item) {
				echo '<li>' . $item['quantity'] . '<br>' . '</li>';
			}
		?>
	</ul>

	<hr>

	<table>
		<thead>
			<th>Products</th>
			<th>Price</th>
			<th>Quantity</th>
		</thead>
		<tbody>
			<?php
				foreach ($items as $value) {
					echo '<tr>';
					echo '<td>' . $value['product'] . '</td>';
					echo '<td>' . $value['price'] . '</td>';
					echo '<td>' . $value['quantity'] . '</td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>


</body>
</html>