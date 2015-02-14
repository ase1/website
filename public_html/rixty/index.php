	<html>
	<head>
	<title>Rick and Morty</title>
    <link type="text/css" rel="stylesheet" href="rmload.css"/>

	</head>
	
	<body>
	
	<div id="query">
		<?php 
			echo "<p>No channel specified. Please input a Youtube ID here: <p>";
			echo "<form method=\"post\" action=\"handler.php\">";
			echo "<input type=\"text\" name=\"id\">";
			echo "<input type=\"submit\">";
			echo "</form>";
		?>
	</div>
	
	
	</body>
	</html>