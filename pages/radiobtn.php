<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>GENDER</title>
</head>

<body>
	<?php 
		echo "Hie John Chidhafu your gender is ".$radio_value=$_POST["gender"];
		echo "<br/>";
		if($radio_value == "Female")
		{
			echo "<marquee behavior ='scroll' direction='right'><img src='../img/lady.jpg' width='400px' height='400px'/></marquee>";
		}
		else
			echo "<marquee behavior='scroll'direction='left'><img src='../img/gentleman.jpg' width='400px' height='400px'/></marquee>";
	?> 
</body>
</html>