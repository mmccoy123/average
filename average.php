<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Average</title>
</head>
<body>
	<?php
		$numbers = [1,2,5,10,255,3];
		$average = 0;
		$sum = 0;
		$num_of_elements = count($numbers);

		foreach ($numbers as $value) {
			$sum += $value;
		}

		$average = $sum / $num_of_elements;

		echo "The average of the numbers array is: " . $average;
	?>
</body>
</html>