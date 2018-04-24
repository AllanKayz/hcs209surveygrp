<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AREA CALCULATOR</title>
</head>

<body>
	<?php
		$pie = (22/7);
		$radius = $_POST['radius'];
		function area($radius, $pie){
			$circleArea = pow($radius,2) * $pie;
			return $circleArea;
		}
		echo "The Area of Circle is  ".area($radius,$pie)
	?>
</body>
</html>