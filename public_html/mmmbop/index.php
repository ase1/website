<html>
	<head>
		<title>MMMBops Until Beer Bike</title>
		<link rel="stylesheet" href="mmmstyle.css"/>
	</head>
	
	<body>
		<audio loop autoplay>
			<source src="mmmbop.mp3" type="audio/mpeg">
		</audio>

		<?php
			$a = round(((((date(z, 1427500800)-date(z))*24-date(G))*60-date(i))*60-date(s))/270,0,PHP_ROUND_HALF_DOWN);
			$b = "test";
			echo "<h1>" . $a . " MMMBops until Beer Bike. </h1>";
		?>

	</body>
</html>
